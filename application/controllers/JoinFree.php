<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class JoinFree extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Setting_model');
        $this->load->model('Category_model');
        $this->load->model('Home_model');
        $this->load->model('Country_model');
        $this->load->model('Joinfree_model');
        $this->load->library('user_agent');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/include/header', $data);
        $this->load->view('site/join-free/register');
        $this->load->view('site/include/footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('txtMail', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('txtNumber', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtName', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtCompanyName', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('txtPinCode', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtCityName', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtRegUserType', 'Type', 'trim|required');
        if ($this->form_validation->run() == false) {
            redirect('JoinFree');
        } else {

            if (!empty($this->input->post('txtRegUserType'))) {
                $ReguserType = $this->input->post('txtRegUserType');
            } else {
                $ReguserType = 1; // Guest User
            }
            $email = $this->input->post('txtMail');
            $select = "reguser_mail";
            $tableName = "tbl_userregistration";
            $whereCondition = array('reguser_mail' => $email);
            $returnVal = "reguser_mail";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $email) {
                $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $email . ' </b> is Already Exist Please Enter Another E-mail-Address Or Reset Password...!');
                redirect("JoinFree");
            } else {
                $email = $this->input->post('txtMail');
            }
            $number = $this->input->post('txtNumber');
            $name = $this->input->post('txtName');
            $companyname = $this->input->post('txtCompanyName');
            $pincode = $this->input->post('txtPinCode');
            $cityname = $this->input->post('txtCityName');
            $ipAddress = $this->input->ip_address();
            $browser = $this->agent->agent_string();
            $AutoPass = date('Ymdhis');
            $opt = (mt_rand(100000, 999999));
            $resPass = autouser - $AutoPass;
            $data = array(
                'reguser_mail' => $email,
                'resuser_password' => password_hash($resPass, PASSWORD_DEFAULT),
                'reguser_type' => $ReguserType,
                'delStatus' => 'no',
                'status' => 'Active',
                'reguser_opt' => $opt,
                'created_at' => date('Y-m-d H:i:s')
            );
            $RegSsess_data = array(
                'reguser_mail' => $email,
                'reguser_type' => $ReguserType


            );

            $this->session->set_userdata('Regdetails', $RegSsess_data);
            $tableName = "tbl_userregistration";
            $returnId = $this->Setting_model->insertData($tableName, $data);
            if ($returnId > 0) {
                $dataArray = array(
                    'auto_genratename' => "autouser-$returnId",
                    'auto_genratepass' => "autouser-$AutoPass",
                    'reguser_mobile' => $number,
                    'reguser_name' => $name,
                    'reguser_company' => $companyname,
                    'reguser_pin_code' => $pincode,
                    'reguser_city_name' => $cityname,
                    'reguser_id' => $returnId,
                    'reguser_agent' => $browser,
                    'reguser_ip' => $ipAddress,
                    'created_at' => date('Y-m-d H:i:s')

                );
                $tableName = "tbl_userregistrationdetail";
                $this->Setting_model->insertData($tableName, $dataArray);
                $this->session->set_flashdata('done', 'A confirmation link  code has been sent to ' . $email . ' Please Login and Click Activation Link!');
                redirect("JoinFree/confirmationOtp");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                redirect("JoinFree");
            }
        }
    }

    public function confirmationOtp()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/join-free/header', $data);
        $this->load->view('site/join-free/otp-confirmation-register');
        $this->load->view('site/include/footer');
    }

    public function confirmationOtpSuccess()
    {
        $data['value'] = $this->session->userdata('Regdetails');
        $reguser_mail = $data['value']['reguser_mail'];
        $reguser_type = $data['value']['reguser_type'];
        $otpValidate = $this->input->post('txtVarification');
        $select = "reguser_opt";
        $tableName = "tbl_userregistration";
        $whereCondition = array('reguser_mail' => $reguser_mail, 'reguser_type' => $reguser_type, 'status' => 'Active');
        $returnVal = "reguser_opt";
        $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
        if ($existVal !== $otpValidate) {
            $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $otpValidate . ' </b>  You OTP is Not Valid Please Enter Correct OTP...!');
            redirect("JoinFree/confirmationOtp");
        } else {
            redirect('JoinFree/consultation');
        }


    }

    public function consultation()
    {

        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/join-free/header', $data);
        $this->load->view('site/join-free/consultation');
        $this->load->view('site/include/footer');
    }

    public function setConsultation()
    {
        if ($_POST['btnSubmit'] == 'Submit') {
            $this->form_validation->set_rules('txtConsultation', 'Free Consultation', 'trim|required');
            $this->form_validation->set_rules('txtpreferreddate', 'Consultation Time', 'trim|required');
            $this->form_validation->set_rules('txtconsultationtime', 'Consultation Date', 'trim|required');
            if ($this->form_validation->run() == false) {
                redirect('JoinFree/consultation');
            } else {
                if (!empty($this->input->post('txtConsultation'))) {
                    $consulationStatus = $this->input->post('txtConsultation');
                } else {
                    $consulationStatus = 'yes';
                }

                if (!empty($this->input->post('txtpreferreddate'))) {
                    $preferreddate = $this->input->post('txtpreferreddate');
                } else {
                    $preferreddate = 'anydate';
                }

                if (!empty($this->input->post('txtconsultationtime'))) {
                    $preferredTime = $this->input->post('txtconsultationtime');
                } else {
                    $preferredTime = 'anytime';
                }

                $data['value'] = $this->session->userdata('Regdetails');
                $reguser_type = $data['value']['reguser_type'];
                $reguser_mail = $data['value']['reguser_mail'];
                $select = 'reguser_id';
                $tableName = 'tbl_userregistration';
                $whereCondition = array('reguser_type' => $reguser_type, 'reguser_mail' => $reguser_mail);
                $returnVal = "reguser_id";
                $registeredId = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
                if (!empty($registeredId)) {
                    $registeredId = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
                } else {
                    $registeredId = 'invalid';
                }
                $data = array(
                    'reguser_id' => $registeredId,
                    'consultation' => $consulationStatus,
                    'consultation_date' => $preferreddate,
                    'consultation_time' => $preferredTime,

                );
                $tableName = "tbl_freeconsultation";
                $returnId = $this->Setting_model->insertData($tableName, $data);
                if ($returnId > 0) {
                    $this->session->set_flashdata('done', 'Your Consultation Time is Set Successfully...Our Team is Reply On Your Selected  Time...');
                    redirect("JoinFree/uploadProduct");
                } else {
                    $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                    redirect("JoinFree/consultation");
                }
            }

        } elseif ($_POST['btnSubmit'] == "Skip") {
            redirect('JoinFree/uploadProduct');
        }

    }

    /*******Upload Product***Start Here********/
    public function uploadProduct()
    {

        if (!($this->session->userdata('Regdetails'))) {
            redirect(base_url());
        }
        $data['title'] = "Refrigeration Hub";
        $data['author'] = "Refrigeration Hub";
        $data['description'] = "Refrigeration Hub";
        $data['keywords'] = "Refrigeration Hub";
        $data['logoResult'] = $this->Home_model->getMainLogo();
        $data['ddlState'] = $this->Country_model->getStateDDlList();
        $this->load->view('site/join-free/header', $data);
        $data['ddlCategory'] = $this->Category_model->getddlCategory();
        $where = array('status' => 'Active', 'delStatus' => 'no');
        $data['ddlUnitMeasure'] = $this->Joinfree_model->getddlMeasureUnit($where);
        $data['ddlMaterial'] = $this->Joinfree_model->getddlMaterial($where);
        $data['ddlCapacity'] = $this->Joinfree_model->getddlCapacity($where);
        $data['ddlPowerSource'] = $this->Joinfree_model->getddlpowerSource($where);
        $data['ddlPowerUnit'] = $this->Joinfree_model->getddlpowerUnit($where);
       //    print_r($data['ddlPowerSource']); die;
        $this->load->view('site/join-free/upload-product', $data);
        $this->load->view('site/include/footer');
    }

    public function addProduct()
    {

        $this->form_validation->set_rules('txtMail', 'E-mail', 'trim|required');
        $this->form_validation->set_rules('txtCategoryId', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtSubcategoryId', 'Number', 'trim|required');
        $this->form_validation->set_rules('txtProductName', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('txtProductCode', 'Pin Code', 'trim');
        $this->form_validation->set_rules('txtProductBrand', 'Pin Code', 'trim');
        $this->form_validation->set_rules('txtProductDescription', 'Pin Code', 'trim|required');
        $this->form_validation->set_rules('txtMinimumOrderQuantity', 'Type', 'trim');
        $this->form_validation->set_rules('txtUnitofMeasure', 'Unit Measure', 'trim');
        $this->form_validation->set_rules('txtPriceRange', 'Price Range', 'trim|required');
        $this->form_validation->set_rules('txtPriceRangeMax', 'Price Range Max', 'trim');
        $this->form_validation->set_rules('txtPriceUnit', 'Unit', 'trim');
        $this->form_validation->set_rules('txtFobPortType', 'Fob Port', 'trim');
        $this->form_validation->set_rules('txtMaterial', 'Supply Ability', 'trim');
        $this->form_validation->set_rules('txtCoolingHeating', 'Delivery Time', 'trim');
        $this->form_validation->set_rules('txtCapacity', 'Sample Available', 'trim');
        $this->form_validation->set_rules('txtCapacityUnit', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtPowersource', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtVoltage', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtVoltageUnit', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtColor', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtWeight', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtWarrant', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtWorkingTemperature', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtFanSpeed', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtNoiseLevel', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtNoiseLevelUnit', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtEfficiencyRatingDDL', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtRemoteOperated', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtSensibleControl', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtRunningCurrent', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtRunningCurrentUnit', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtOutdoorInput', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtMounting', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtCompressor', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtFobPort', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtPaymentTerms', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtSupplyAbility', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtDeliveryTime', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtSampleAvailable', 'Sample policy', 'trim');
        $this->form_validation->set_rules('txtSamplepolicy', 'Sample policy', 'trim');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', 'Please Filed Required (*) Filed...!');

            $data['title'] = "Refrigeration Hub";
            $data['author'] = "Refrigeration Hub";
            $data['description'] = "Refrigeration Hub";
            $data['keywords'] = "Refrigeration Hub";
            $data['logoResult'] = $this->Home_model->getMainLogo();
            $data['ddlState'] = $this->Country_model->getStateDDlList();
            $this->load->view('site/join-free/header', $data);
            $data['ddlCategory'] = $this->Category_model->getddlCategory();
            $this->load->view('site/join-free/upload-product', $data);
            $this->load->view('site/include/footer');

        } else {

            $email = $this->input->post('txtMail');
            $select = "reguser_mail";
            $tableName = "tbl_userregistration";
            $whereCondition = array('reguser_mail' => $email);
            $returnVal = "reguser_mail";
            $existVal = $this->Setting_model->getExitingData($select, $tableName, $whereCondition, $returnVal);
            if ($existVal == $email) {
                $this->session->set_flashdata('error', ' <b style="color: #ff2f2f; ">' . $email . ' </b> is Already Exist Please Login Or Reset Password...!');
                redirect('JoinFree/uploadProduct');
            } else {
                $email = $this->input->post('txtMail');
            }
            /*****************Product Price and Quantity***********************/

            if (!empty($this->input->post('txtCategoryId'))) {
                $txtCategoryId = $this->input->post('txtCategoryId');
            } else {
                $txtCategoryId = "null";
            }

            if (!empty($this->input->post('txtSubcategoryId'))) {
                $txtSubcategoryId = $this->input->post('txtSubcategoryId');
            } else {
                $txtSubcategoryId = "null";
            }
            if (!empty($this->input->post('txtProductName'))) {
                $txtProductName = $this->input->post('txtProductName');
            } else {
                $txtProductName = "null";
            }
            if (!empty($this->input->post('txtProductCode'))) {
                $txtProductCode = $this->input->post('txtProductCode');
            } else {
                $txtProductCode = "null";
            }
            if (!empty($this->input->post('txtProductBrand'))) {
                $txtProductBrand = $this->input->post('txtProductBrand');
            } else {
                $txtProductBrand = "null";
            }
            if (!empty($this->input->post('txtProductDescription'))) {
                $txtProductDescription = $this->input->post('txtProductDescription');
            } else {
                $txtProductDescription = "null";
            }
            if (!empty($this->input->post('txtMinimumOrderQuantity'))) {
                $txtMinimumOrderQuantity = $this->input->post('txtMinimumOrderQuantity');
            } else {
                $txtMinimumOrderQuantity = "null";
            }
            if (!empty($this->input->post('txtUnitofMeasure'))) {
                $txtUnitofMeasure = $this->input->post('txtUnitofMeasure');
            } else {
                $txtUnitofMeasure = "null";
            }

            if (!empty($this->input->post('txtPriceRange'))) {
                $txtPriceRange = $this->input->post('txtPriceRange');
            } else {
                $txtPriceRange = "null";
            }

            if (!empty($this->input->post('txtPriceRangeMin'))) {
                $txtPriceRangeMin = $this->input->post('txtPriceRangeMin');
            } else {
                $txtPriceRangeMin = "null";
            }
            if (!empty($this->input->post('txtPriceRangeMax'))) {
                $txtPriceRangeMax = $this->input->post('txtPriceRangeMax');
            } else {
                $txtPriceRangeMax = "null";
            }

            if (!empty($this->input->post('txtPriceUnit'))) {
                $txtPriceUnit = $this->input->post('txtPriceUnit');
            } else {
                $txtPriceUnit = "null";
            }
            /**************product Images*********************/
            $config['upload_path'] = './uploads/seller/productimage/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 0;
            //   $config['width'] = 258;
            //   $config['height'] = 172;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload()) {

                $error = array('error' => $this->upload->display_errors());
                // $this->load->view('Admin/Category/addCategory', $error);

            } else {

            }
            $upload_data = $this->upload->data();

            /**************product Images*********************/
            /*****************Product Specification****Start**Here********************/
            if (!empty($this->input->post('txtProductType'))) {
                $txtProductType = $this->input->post('txtProductType');
            } else {
                $txtProductType = "null";
            }
            if (!empty($this->input->post('txtMaterial'))) {
                $txtMaterial = $this->input->post('txtMaterial');
            } else {
                $txtMaterial = "null";
            }
            if (!empty($this->input->post('txtCoolingHeating'))) {
                $txtCoolingHeating = $this->input->post('txtCoolingHeating');
            } else {
                $txtCoolingHeating = "null";
            }

            if (!empty($this->input->post('txtCapacity'))) {
                $txtCapacity = $this->input->post('txtCapacity');
            } else {
                $txtCapacity = "null";
            }

            if (!empty($this->input->post('txtCapacityUnit'))) {
                $txtCapacityUnit = $this->input->post('txtCapacityUnit');
            } else {
                $txtCapacityUnit = "null";
            }
            if (!empty($this->input->post('txtPowersource'))) {
                $txtPowersource = $this->input->post('txtPowersource');
            } else {
                $txtPowersource = "null";
            }
            if (!empty($this->input->post('txtVoltage'))) {
                $txtVoltage = $this->input->post('txtVoltage');
            } else {
                $txtVoltage = "null";
            }
            if (!empty($this->input->post('txtVoltageUnit'))) {
                $txtVoltageUnit = $this->input->post('txtVoltageUnit');
            } else {
                $txtVoltageUnit = "null";
            }
            if (!empty($this->input->post('txtColor'))) {
                $txtColor = $this->input->post('txtColor');
            } else {
                $txtColor = "null";
            }
            if (!empty($this->input->post('txtWeight'))) {
                $txtWeight = $this->input->post('txtWeight');
            } else {
                $txtWeight = "null";
            }

            if (!empty($this->input->post('txtWeightUnit'))) {
                $txtWeightUnit = $this->input->post('txtWeightUnit');
            } else {
                $txtWeightUnit = "null";
            }

            if (!empty($this->input->post('txtWarranty'))) {
                $txtWarranty = $this->input->post('txtWarranty');
            } else {
                $txtWarranty = "null";
            }
            if (!empty($this->input->post('txtWorkingTemperature'))) {
                $txtWorkingTemperature = $this->input->post('txtWorkingTemperature');
            } else {
                $txtWorkingTemperature = "null";
            }
            if (!empty($this->input->post('txtFanSpeed'))) {
                $txtFanSpeed = $this->input->post('txtFanSpeed');
            } else {
                $txtFanSpeed = "null";
            }
            if (!empty($this->input->post('txtNoiseLevel'))) {
                $txtNoiseLevel = $this->input->post('txtNoiseLevel');
            } else {
                $txtNoiseLevel = "null";
            }
            if (!empty($this->input->post('txtNoiseLevelUnit'))) {
                $txtNoiseLevelUnit = $this->input->post('txtNoiseLevelUnit');
            } else {
                $txtNoiseLevelUnit = "null";
            }
            if (!empty($this->input->post('txtEfficiencyRatingDDL'))) {
                $txtEfficiencyRatingDDL = $this->input->post('txtEfficiencyRatingDDL');
            } else {
                $txtEfficiencyRatingDDL = "null";
            }
            if (!empty($this->input->post('txtRemoteOperated'))) {
                $txtRemoteOperated = $this->input->post('txtRemoteOperated');
            } else {
                $txtRemoteOperated = "null";
            }
            if (!empty($this->input->post('txtPowerConsum'))) {
                $txtPowerConsum = $this->input->post('txtPowerConsum');
            } else {
                $txtPowerConsum = "null";
            }
            if (!empty($this->input->post('txtPowerComUnit'))) {
                $txtPowerComUnit = $this->input->post('txtPowerComUnit');
            } else {
                $txtPowerComUnit = "null";
            }
            if (!empty($this->input->post('txtRunningCurrent'))) {
                $txtRunningCurrent = $this->input->post('txtRunningCurrent');
            } else {
                $txtRunningCurrent = "null";
            }
            if (!empty($this->input->post('txtRunningCurrentUnit'))) {
                $txtRunningCurrentUnit = $this->input->post('txtRunningCurrentUnit');
            } else {
                $txtRunningCurrentUnit = "null";
            }

            if (!empty($this->input->post('txtOutdoorInput'))) {
                $txtOutdoorInput = $this->input->post('txtOutdoorInput');
            } else {
                $txtOutdoorInput = "null";
            }
            if (!empty($this->input->post('txtOutdoorInputUnit'))) {
                $txtOutdoorInputUnit = $this->input->post('txtOutdoorInputUnit');
            } else {
                $txtOutdoorInputUnit = "null";
            }

            if (!empty($this->input->post('txtOutdoorOutput'))) {
                $txtOutdoorOutput = $this->input->post('txtOutdoorOutput');
            } else {
                $txtOutdoorOutput = "null";
            }
            if (!empty($this->input->post('txtOutdoorOutputUnit'))) {
                $txtOutdoorOutputUnit = $this->input->post('txtOutdoorOutputUnit');
            } else {
                $txtOutdoorOutputUnit = "null";
            }

            if (!empty($this->input->post('txtMounting'))) {
                $txtMounting = $this->input->post('txtMounting');
            } else {
                $txtMounting = "null";
            }
            if (!empty($this->input->post('txtMountingUnit'))) {
                $txtMountingUnit = $this->input->post('txtMountingUnit');
            } else {
                $txtMountingUnit = "null";
            }
            if (!empty($this->input->post('txtRefrigerant'))) {
                $txtRefrigerant = $this->input->post('txtRefrigerant');
            } else {
                $txtRefrigerant = "null";
            }
            if (!empty($this->input->post('txtRefrigerantUnit'))) {
                $txtRefrigerantUnit = $this->input->post('txtRefrigerantUnit');
            } else {
                $txtRefrigerantUnit = "null";
            }
            if (!empty($this->input->post('txtCompressor'))) {
                $txtCompressor = $this->input->post('txtCompressor');
                $txtCompressorImp = implode(',', $txtCompressor);

            } else {
                $txtCompressorImp = "null";
            }

            if (!empty($this->input->post('txtCustomField1'))) {
                $txtCustomField1 = $this->input->post('txtCustomField1');
            } else {
                $txtCustomField1 = "null";
            }

            if (!empty($this->input->post('txtCustomField2'))) {
                $txtCustomField2 = $this->input->post('txtCustomField2');
            } else {
                $txtCustomField2 = "null";
            }
            if (!empty($this->input->post('txtCustomField3'))) {
                $txtCustomField3 = $this->input->post('txtCustomField3');
            } else {
                $txtCustomField3 = "null";
            }
            if (!empty($this->input->post('txtCustomField4'))) {
                $txtCustomField4 = $this->input->post('txtCustomField4');
            } else {
                $txtCustomField4 = "null";
            }

            /*********************Trade Information*******Start here******************************/
            if (!empty($this->input->post('txtFobPort'))) {
                $txtFobPort = $this->input->post('txtFobPort');
            } else {
                $txtFobPort = "null";
            }
            if (!empty($this->input->post('txtPaymentTerms'))) {
                $txtPaymentTerms = $this->input->post('txtPaymentTerms');
                $txtPaymentTermsImp = implode(',', $txtPaymentTerms);
            } else {
                $txtPaymentTermsImp = "null";
            }
            if (!empty($this->input->post('txtSupplyAbility'))) {
                $txtSupplyAbility = $this->input->post('txtSupplyAbility');
            } else {
                $txtSupplyAbility = "null";
            }
            if (!empty($this->input->post('txtSupplyAbilityUnit'))) {
                $txtSupplyAbilityUnit = $this->input->post('txtSupplyAbilityUnit');
            } else {
                $txtSupplyAbilityUnit = "null";
            }
            if (!empty($this->input->post('txtDeliveryTime'))) {
                $txtDeliveryTime = $this->input->post('txtDeliveryTime');

            } else {
                $txtDeliveryTime = "null";
            }
            if (!empty($this->input->post('txtSampleAvailable'))) {
                $txtSampleAvailable = $this->input->post('txtSampleAvailable');

            } else {
                $txtSampleAvailable = "null";
            }

            if (!empty($this->input->post('txtSamplepolicy'))) {
                $txtSamplepolicy = $this->input->post('txtSamplepolicy');
            } else {
                $txtSamplepolicy = "null";
            }
            if (!empty($this->input->post('txtPackDetail'))) {
                $txtPackDetail = $this->input->post('txtPackDetail');
            } else {
                $txtPackDetail = "null";
            }

            if (!empty($this->input->post('txtDomesticMarket'))) {
                $txtDomesticMarket = $this->input->post('txtDomesticMarket');
            } else {
                $txtDomesticMarket = "null";
            }
            if (!empty($this->input->post('txtCertifications'))) {
                $txtCertifications = $this->input->post('txtCertifications');
            } else {
                $txtCertifications = "null";
            }
            $data['value'] = $this->session->userdata('Regdetails');
            $reguser_mail = $data['value']['reguser_mail'];
            $reguser_id = $this->Setting_model->getSellerIdByMail($reguser_mail);
            if (empty($reguser_id)) {
                redirect('JoinFree');
            } else {
                $reguser_ID = $reguser_id;
            }
            $dataProduct = array(
                'productImage' => $upload_data['file_name'],
                'productImagePath' => $upload_data['full_path'],
                'cat_id' => $txtCategoryId,
                'subcat_id' => $txtSubcategoryId,
                'product_name' => $txtProductName,
                'product_code' => $txtProductCode,
                'product_brand' => $txtProductBrand,
                'product_description' => $txtProductDescription,
                'order_quanity' => $txtMinimumOrderQuantity,
                'unit_measure' => $txtUnitofMeasure,
                'price' => $txtPriceRange,
                'min_price' => $txtPriceRangeMin,
                'max_price' => $txtPriceRangeMax,
                'price_unit' => $txtPriceUnit,
                'status' => 'Active',
                'created_at' => date('Y-m-d H:i:s'),
                'reguser_id' => $reguser_ID

            );

            $tableName = "tbl_product";
            $resProductID = $this->Setting_model->insertData($tableName, $dataProduct);

            if (!empty($resProductID)) {
                $productSpecificationData = array(
                    'ps_type' => $txtProductType,
                    'material' => $txtMaterial,
                    'coolingheating' => $txtCoolingHeating,
                    'capacity' => $txtCapacity,
                    'capacityUnit' => $txtCapacityUnit,
                    'powersource' => $txtPowersource,
                    'voltage' => $txtVoltage,
                    'voltageUnit' => $txtVoltageUnit,
                    'color' => $txtColor,
                    'weight' => $txtWeight,
                    'weightUnit' => $txtWeightUnit,
                    'warranty' => $txtWarranty,
                    'working_temperature' => $txtWorkingTemperature,
                    'working_temperatureUnit' => $txtWorkingTemperature,
                    'fan_speed' => $txtFanSpeed,
                    'noiseLevel' => $txtNoiseLevel,
                    'noiseLevelUnit' => $txtNoiseLevelUnit,
                    'engRating' => $txtEfficiencyRatingDDL,
                    'remoteOperated' => $txtRemoteOperated,
                    'powerConsumption' => $txtPowerConsum,
                    'powerConsumptionUnit' => $txtPowerComUnit,
                    'running_current' => $txtRunningCurrent,
                    'running_currentUnit' => $txtRunningCurrentUnit,
                    'outdoorFanInput' => $txtOutdoorInput,
                    'outdoorFanInputUnit' => $txtOutdoorInputUnit,
                    'outdoorFanOutput' => $txtOutdoorOutput,
                    'outdoorFanOutputUnit' => $txtOutdoorOutputUnit,
                    'mounting' => $txtMounting,
                    'MountingUnit' => $txtMountingUnit,
                    'refrigerant' => $txtRefrigerant,
                    'refrigerantUnit' => $txtRefrigerantUnit,
                    'cf1' => $txtCustomField1,
                    'cf2' => $txtCustomField2,
                    'cf3' => $txtCustomField3,
                    'cf4' => $txtCustomField4,
                    'Compressor' => $txtCompressorImp,
                    'product_id' => $resProductID

                );

                $tableName = "tbl_productspecification";
                $ResproducrspecId = $this->Setting_model->insertData($tableName, $productSpecificationData);
                $tradeInformationData = array(
                    'fop_port' => $txtFobPort,
                    'payment_term' => $txtPaymentTermsImp,
                    'supply_ability' => $txtSupplyAbility,
                    'supply_abilityUnit' => $txtSupplyAbilityUnit,
                    'deliveryTime' => $txtDeliveryTime,
                    'sampleAvailable' => $txtSampleAvailable,
                    'samplePolicy' => $txtSamplepolicy,
                    'packagingDetails' => $txtPackDetail,
                    'mainDomesticMarket' => $txtDomesticMarket,
                    'certifications' => $txtCertifications,
                    'ps_id' => $ResproducrspecId
                );

                $tableName = "tbl_tradeinformation";
                $this->Setting_model->insertData($tableName, $tradeInformationData);
                $this->session->set_flashdata('done', ' Your Product is uploaded Successfully...!');
                redirect("JoinFree/uploadProduct");
            } else {
                $this->session->set_flashdata('error', 'Your data not saved Please Try Again...!');
                redirect("JoinFree/uploadProduct");
            }
        }

    }

    public function getSubcategory()
    {
        $id = $this->input->post('cat_id');
        $where = array('status' => 'Active', 'delStatus' => 'no', 'cat_id' => $id);
        $data['subcatResult'] = $this->Joinfree_model->getddlSubCategory($where);
        // print_r($data['subcatResult']); die;
        echo '<div class="subCatList">';
        echo '<select name="txtSubcategoryId" id="txtSubcategoryId" class="form-control">';
        echo '<option value="">---Select Sub Category---</option>';
        foreach ($data['subcatResult'] as $valSubCat) {
            echo '<option value="' . $valSubCat->subcat_id . '">' . $valSubCat->subcat_name . '</option>';
        }
        echo '</select>';
        echo '</div>';

    }
    /*******Upload Product**********end here*****/


}
