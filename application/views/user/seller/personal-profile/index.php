<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data['value'] = $this->session->userdata('Registerlogindetails');
$reg_name = $data['value']['reguser_name'];
$reg_mail = $data['value']['reguser_mail'];
$reg_user_type = $data['value']['reguser_type'];
$reg_mobile = $data['value']['reguser_mobile'];
$reg_company = $data['value']['reguser_company'];

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div style="float: right">
        <?php if ($this->session->flashdata('done')) { ?>
            <div align="center" class="disMes alert alert-success">
                <?php echo $this->session->flashdata('done') ?>
            </div>
        <?php } ?>
        <?php if ($this->session->flashdata('error')) { ?>
            <div align="center" class="disMes alert alert-danger">
                <?php echo $this->session->flashdata('error') ?>
            </div>
        <?php } ?>

    </div>
    <!-- Content Header (Page header) -->
    <div class="content-header">

        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Personal Profile</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-9">
                    <!-- MAP & BOX PANE -->


                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="card-title">Keep your profile updated & get contacted by potential customers
                                    for your products.</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="d-md-flex mar">
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?php echo base_url('user/Personalprofile/updateProfile'); ?>"
                                              method="POST">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Contact Person </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <select class="form-control" name="txtnameTitle">
                                                                <option value="Mr"<?php if ((!empty($editResult) && $editResult[0]->reguser_title == "Mr")) {
                                                                    echo 'selected';
                                                                } ?>>Mr.
                                                                </option>
                                                                <option value="Mrs" <?php if ((!empty($editResult) && $editResult[0]->reguser_title == "Mrs")) {
                                                                    echo 'selected';
                                                                } ?>>Mrs.
                                                                </option>
                                                                <option value="Ms" <?php if ((!empty($editResult) && $editResult[0]->reguser_title == "Ms")) {
                                                                    echo 'selected';
                                                                } ?>>Ms.
                                                                </option>
                                                            </select>
                                                        </div>


                                                    </div>
                                                    <!--<div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Profile Picture </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div style="display: inline;padding-right: 10px;">
                                                                    <input name="filenameLogo" type='file'
                                                                           onchange="readURL(this);" / >
                                                                </div>
                                                                <?php /*if (!empty($editAdDetail)) { */?>
                                                                    <img id="blah"
                                                                         src="<?php /*echo base_url() */?>uploads/seller/profile/<?php /*echo $editAdDetail[0]->companylogo; */?>"
                                                                         alt="your image" style="max-width: 100px;"/>
                                                                <?php /*} else { */?>
                                                                    <img id="blah"
                                                                         src="<?php /*echo base_url() */?>uploads/companylogo/180.png"
                                                                         alt="your image" style="max-width: 100px;"/>

                                                                <?php /*} */?>

                                                            </div>

                                                        </div>
                                                    </div>-->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       placeholder="Name" name="txtName"
                                                                       value="<?php if (!empty($reg_name)) {
                                                                           echo $reg_name;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Designation / Job Title</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="txtDesignation"
                                                               placeholder="Enter Designation / Job Title"
                                                               value="<?php if (!empty($editResult)) {
                                                                   echo $editResult[0]->reguser_designation;
                                                               } ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Default Mobile </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" maxlength="10" readonly
                                                               placeholder="Default Mobile" name="txtMobile"
                                                               value="<?php if (!empty($reg_mobile)) {
                                                                   echo $reg_mobile;
                                                               } ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Alternate Mobile No. </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                               placeholder="Alternate Mobile No." maxlength="10"
                                                               name="txtMobileAlt"
                                                               value="<?php if (!empty($editResult)) {
                                                                   echo $editResult[0]->reguser_altmobile;
                                                               } ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>E-mail</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" readonly
                                                               placeholder="E-mail Address"
                                                               value="<?php if (!empty($reg_mail)) {
                                                                   echo $reg_mail;
                                                               } ?>" name="txtEmailAddress">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Alternate E-mail</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control"
                                                               placeholder="Alternate E-mail Address" name="txtAltEmail"
                                                               value="<?php if (!empty($editResult)) {
                                                                   echo $editResult[0]->reguser_altemail;
                                                               } ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group text-center">
                                                        <input type="submit" name="btnSubmit" value="Update"
                                                               class="btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- ./card -->
                            </div>
                        </div><!-- /.d-md-flex -->
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card -->


                </div>
                <!-- /.col -->

                <!----What'sNew------->
                <?php
                $this->load->view('user/seller/include/whatsnew');
                ?>
                <!----What'sNew------->

                <!-- /.col -->
            </div>
            <!-- /.row -->

        </div><!--/. container-fluid -->
    </section>

    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
<!-- Main Footer -->
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>