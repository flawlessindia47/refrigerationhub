<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data['value'] = $this->session->userdata('Registerlogindetails');
$reg_company = $data['value']['reguser_company'];

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12 col-lg-12 col-sm-12">
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
                    <h1 class="m-0 text-dark">Business Profile</h1>


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
                                <h5 class="card-title">Complete your Profile to attract genuine buyers</h5>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="d-md-flex mar">
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                    <div class="card-header d-flex p-0 sh">
                                        <ul class="nav nav-pills ml-auto p-2">
                                            <li class="nav-item"><a class="nav-link active show" href="#tab_1"
                                                                    data-toggle="tab">Business Details</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Additional
                                                    Details</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Certification
                                                    &amp; Award</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Products
                                                    We Buy</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="tab_1">
                                                <h4 class="card-title">Keep your profile updated &amp; get contacted by
                                                    potential customers for your products.</h4>

                                                <form action="<?php echo base_url('user/Businessprofile/addBussiness'); ?>"
                                                      method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Company Name</label>
                                                            </div>
                                                        </div>
                                                        <div c class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text"
                                                                       value="<?php if (!empty($reg_company)) {
                                                                           echo $reg_company;
                                                                       } ?>" class="form-control" disabled="disabled">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="3"
                                                                          placeholder="Address"
                                                                          name="txtAddress"><?php if (!empty($editResult)) {
                                                                        echo $editResult[0]->address;
                                                                    } ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Country</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="txtCountryId" id="txtCountryId"
                                                                        class="form-control"
                                                                        onchange="getState(this.value)">
                                                                    <option value="">---Select Country---</option>
                                                                    <?php foreach ($ddlCountry as $valCountry): ?>
                                                                        <option value="<?php echo $valCountry->country_id; ?>" <?php if (!empty($editResult) && $valCountry->country_id == $editResult[0]->country_id) {
                                                                            echo 'selected';
                                                                        } ?>><?php echo $valCountry->country_name; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>State</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="stateList">
                                                                    <select onchange="getCity(this.value)"
                                                                            name="txtStateId" id="txtStateId"
                                                                            class="form-control">
                                                                        <option value="">---Select State---</option>
                                                                        <?php

                                                                        foreach ($ddlState as $valState):?>
                                                                            <option value="<?php echo $valState->state_id; ?>" <?php if (!empty($editResult) && $valState->state_id == $editResult[0]->state_id) {
                                                                                echo 'selected';
                                                                            } ?>><?php echo $valState->state_name; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="cityList">
                                                                    <select name="txtCityId" id="txtCityId"
                                                                            class="form-control">
                                                                        <option value="">---Select City---</option>
                                                                        <?php
                                                                        foreach ($ddlCity as $valCity):?>
                                                                            <option value="<?php echo $valCity->city_id; ?>" <?php if (!empty($editResult) && $valCity->city_id == $editResult[0]->city_id) {
                                                                                echo 'selected';
                                                                            } ?>><?php echo $valState->city_name; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Locality</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       placeholder="Enter your locality"
                                                                       name="txtLocality"
                                                                       value="<?php if (!empty($editResult)) {
                                                                           echo $editResult[0]->locality;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Postal / Zip Code <strong
                                                                            style="color: red;">*</strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Enter Zip Code"
                                                                       value="<?php if (!empty($editResult)) {
                                                                           echo $editResult[0]->zip_code;
                                                                       } ?>" class="form-control" name="txtPostal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="number" placeholder="Enetr Phone Number"
                                                                       class="form-control" name="txtPhone"
                                                                       value="<?php if (!empty($editResult)) {
                                                                           echo $editResult[0]->phone_number;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Alternate Website</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="https://"
                                                                       class="form-control" name="txtAltWebsite"
                                                                       value="<?php if (!empty($editResult)) {
                                                                           echo $editResult[0]->alt_website;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Year of Establishment <strong style="color:red;">*</strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text"
                                                                       placeholder="Enter Year of Establishment"
                                                                       class="form-control" name="txtYearsEst"
                                                                       value="<?php if (!empty($editResult)) {
                                                                           echo $editResult[0]->yearofestablishment;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>No. of Employees <strong
                                                                            style="color:red;">*</strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Enter No. of Employees"
                                                                       class="form-control" name="txtEmployee"
                                                                       value="<?php if (!empty($editResult)) {
                                                                           echo $editResult[0]->nofemployees;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Annual Turnover <strong
                                                                            style="color:red;">*</strong></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Enter Annual Turnover"
                                                                       class="form-control" name="txtAnnual"
                                                                       value="<?php if (!empty($editResult)) {
                                                                           echo $editResult[0]->annualturnover;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Ownership Type </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-control" name="txtOwnershipTYpe">
                                                                <option value="--Choose one--">--Choose one ?--</option>
                                                                <?php
                                                                if (!empty($ddlOwnership)) {
                                                                    foreach ($ddlOwnership as $ownspVal):?>
                                                                        <option value="<?php echo $ownspVal->mast_ownershiptype_id; ?>" <?php if (!empty($editResult) && $ownspVal->mast_ownershiptype_id == $editResult[0]->ownershipype) {
                                                                            echo 'selected';
                                                                        } ?> ><?php echo $ownspVal->ownershiptype_name; ?></option>
                                                                        <?php
                                                                    endforeach;
                                                                } ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <input type="submit" value="Save Business Profile"
                                                                       name="btnBusinessDetail" class="btn btn-primary">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_2">
                                                <div class="row">
                                                    <h4 class="card-title">Keep your profile updated & get contacted by
                                                        potential customers for your products.</h4>
                                                </div>
                                                <form action="<?php echo base_url('user/Businessprofile/addBussiness'); ?>"
                                                      method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Company Logo</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div style="display: inline;float: left;padding-right: 10px;">
                                                                    <input name="filenameLogo" type='file'
                                                                           onchange="readURL(this);" / >
                                                                </div>
                                                                <?php if (!empty($editAdDetail)) { ?>
                                                                    <img id="blah"
                                                                         src="<?php echo base_url() ?>uploads/seller/logo/<?php echo $editAdDetail[0]->companylogo; ?>"
                                                                         alt="your image" style="max-width: 100px;"/>
                                                                <?php } else { ?>
                                                                    <img id="blah"
                                                                         src="<?php echo base_url() ?>uploads/companylogo/180.png"
                                                                         alt="your image" style="max-width: 100px;"/>

                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Company Description</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="3"
                                                                          name="txtCmyDescription"
                                                                          placeholder="Enter Company Description"><?php

                                                                    if (!empty($editAdDetail)) {
                                                                        echo $editAdDetail[0]->companydescription;
                                                                    } ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Mode of Payment</label>
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select multiple="" class="form-control"
                                                                        name="txtModePaymentId[]">
                                                                    <?php
                                                                    foreach ($ddlModePayment as $mdpayVal):
                                                                        ?>
                                                                        <option value="<?php echo $mdpayVal->mast_modepayment_id; ?>"><?php echo $mdpayVal->modepayment_name ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Working Days</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" rows="3"
                                                                       name="txtWorkingDays"
                                                                       placeholder="Enter Working Days"
                                                                       value="<?php if (!empty($editAdDetail)) {
                                                                           echo $editAdDetail[0]->workingdays;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Business States</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" rows="3"
                                                                       name="txtBusinessStates"
                                                                       placeholder="Enter Business States"
                                                                       value="<?php if (!empty($editAdDetail)) {
                                                                           echo $editAdDetail[0]->businessstate;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Business Cities</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" rows="3"
                                                                       name="txtBusinessCity"
                                                                       placeholder="Enter Business Cities"
                                                                       value="<?php if (!empty($editAdDetail)) {
                                                                           echo $editAdDetail[0]->businesscitie;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Company Photo</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div style="display: inline;float: left;padding-right: 10px;">
                                                                    <input name="filenameCompanyPic" type='file'
                                                                           onchange="readURLCompany(this);" / >
                                                                </div>
                                                                <?php if (!empty($editAdDetail)) { ?>
                                                                    <img id="blah"
                                                                         src="<?php echo base_url() ?>uploads/seller/logo/<?php echo $editAdDetail[0]->companyphoto; ?>"
                                                                         alt="your image" style="max-width: 100px;"/>
                                                                <?php } else { ?>
                                                                    <img id="blah"
                                                                         src="<?php echo base_url() ?>uploads/companylogo/180.png"
                                                                         alt="your image" style="max-width: 100px;"/>

                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <input type="submit" value="Save Additional Detail"
                                                                       name="btnAdditional" class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!----------Bussiness Profile End Here -----$ajaykan47----->

                                                <h4 class="card-title">Additional Contact Details</h4>
                                                <hr>
                                                <div class="card card-default collapsed-card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Add Additional Contact Details to your
                                                            Online Catalog</h3>

                                                        <div class="card-tools">
                                                            <button type="button" class="btn btn-block btn-success"
                                                                    data-widget="collapse">Add Contact Details
                                                            </button>
                                                        </div>
                                                        <!-- /.card-tools -->
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body" style="display: none;">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Division</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <select class="form-control">
                                                                            <option value="Select Division">Select
                                                                                Division
                                                                            </option>
                                                                            <option value="Branch Office">Branch
                                                                                Office
                                                                            </option>
                                                                            <option value="Corporate Office">Corporate
                                                                                Office
                                                                            </option>
                                                                            <option value="Customer Care">Customer
                                                                                Care
                                                                            </option>
                                                                            <option value="Factory Address">Factory
                                                                                Address
                                                                            </option>
                                                                            <option value="Head Office">Head Office
                                                                            </option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Contact Person</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Enter Contact Person">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Designation</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Enter Designation">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Location</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Enter Location">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Locality</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Enter Locality">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Postal / Zip Code <strong
                                                                                    style="color: red;">*</strong>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Enter Postal / Zip Code">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Address</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <textarea rows="3" class="form-control"
                                                                                  placeholder="Enter Address"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Telephone No.</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="number" class="form-control"
                                                                               placeholder="Enter Telephone No.">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>E-Mail</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="email" class="form-control"
                                                                               placeholder="Enter E-Mail">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group text-center">
                                                                        <input type="submit"
                                                                               value="Save Additional Detail"
                                                                               class="btn btn-primary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_3">
                                                <div class="row">
                                                    <h3 class="card-title">Keep your profile updated &amp; get contacted
                                                        by potential customers for your products.</h3>
                                                </div>
                                                <form action="<?php echo base_url('user/Businessprofile/addBussiness'); ?>"
                                                      method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Standard Certifications</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       name="txtCertification"
                                                                       placeholder="Ex. ISO 9001:2008"
                                                                       value="<?php if (!empty($listAwrd)) {
                                                                           echo $listAwrd[0]->standardcertification;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Membership &amp; Affilliations</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       name="txtMembership"
                                                                       placeholder="Association, Council etc."
                                                                       value="<?php if (!empty($listAwrd)) {
                                                                           echo $listAwrd[0]->membershipaffilliation;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Upload Certifications</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                           name="filenameCertificate"
                                                                           id="exampleInputFile">
                                                                    <label class="custom-file-label"
                                                                           for="exampleInputFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Award & Recognition</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       name="txtAward"
                                                                       placeholder="Award & Recognition"
                                                                       value="<?php if (!empty($listAwrd)) {
                                                                           echo $listAwrd[0]->awardrecognition;
                                                                       } ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Upload Award image</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input"
                                                                           name="filenameAward" id="exampleInputFile">
                                                                    <label class="custom-file-label"
                                                                           for="exampleInputFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <input type="submit" value="Save Certification Detail"
                                                                       name="btnCertificate" class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_4">
                                                <div class="row">
                                                    <h3 class="card-title">Get Quotes For Your Buying Requirement. Tell
                                                        Suppliers What You Need.</h3>
                                                </div>
                                                <table class="table" style="background-color: #e3b9b9;">
                                                    <thead>
                                                    <tr>
                                                        <th>Sn</th>
                                                        <th>Requirement</th>
                                                        <th>Frequency</th>
                                                        <th>Quantity / Quantity Unit</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php

                                                    $Sn = 1;
                                                    foreach ($listRequirement as $reqVal):?>
                                                        <tr>
                                                            <td><?php echo $Sn++; ?></td>
                                                            <td><?php echo $reqVal->requirement; ?></td>
                                                            <td><?php echo $reqVal->frequency_name; ?></td>
                                                            <td><?php echo $reqVal->quantity; ?> /<?php echo $reqVal->quantityunit; ?></td>

                                                            <td><span class="description">
                                                            <a href="javascript:void(0)" data-toggle="modal"
                                                               data-target="#myModal<?php echo $reqVal->productwebuy_id;?>"
                                                               id="delete_1783"> <i class="fa fa-trash"></i>Delete</a>
                                                            </span>
                                                            </td>
                                                            <td>
                                                                <div class="modal fade" id="myModal<?php echo $reqVal->productwebuy_id;?>" role="dialog">
                                                                    <form action="<?php echo base_url(); ?>user/Businessprofile/deleteRequiremnet"
                                                                          method="post"
                                                                          enctype="multipart/form-data">
                                                                    <div class="modal-dialog">
                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 style="padding-right: 25%;"
                                                                                    class="modal-title">Delete
                                                                                    Requirement</h4>
                                                                            </div>
                                                                            <div class="modal-body"
                                                                                 style="padding-right: 25%;">
                                                                                <div class="deleteMsg">
                                                                                    <i style="color: #e3d808;"
                                                                                       class="fa fa-exclamation-triangle"></i>
                                                                                    &nbsp; Are you sure you want to
                                                                                    delete ?
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    </br>
                                                                                    <input type="button" name="no" value="No" class="btn btn-success" data-dismiss="modal">
                                                                                    <input type="hidden" value="<?php echo $reqVal->productwebuy_id;?>" name="productwebuyIdHidden">
                                                                                    <input type="submit" name="yes" value="Yes" id="delete" class="btn btn-warning" style="display: inline-block;">

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                                <div class="clearfix"></div>
                                                <form action="<?php echo base_url('user/Businessprofile/addBussiness'); ?>"
                                                      method="post" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Requirement</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       name="txtRequirement"
                                                                       placeholder="Enter Requirement">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Frequency</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select class="form-control" name="txtfrequenyId">
                                                                    <option value="">--Select--</option>
                                                                    <?php
                                                                    foreach ($ddlFrequency as $freqVal):
                                                                        ?>
                                                                        <option value="<?php echo $freqVal->mast_frequency_id; ?>"><?php echo $freqVal->frequency_name; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Quantity</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                       name="txtQuantity" placeholder="Enter Quantity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Quantity Unit</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="txtQtyUnit" id="" class="form-control">
                                                                    <option value="">---Select Quantity Unit---</option>
                                                                    <?php
                                                                    foreach ($ddlQuantityUnit as $QtyVal):
                                                                        ?>
                                                                        <option value="<?php echo $QtyVal->mst_qty_id; ?>"><?php echo $QtyVal->qty_name; ?></option>
                                                                    <?php endforeach; ?>

                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <input type="submit" value="Save Product"
                                                                       name="btnProductBuy" class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
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
<!-- /Delete Model -->
<!-- Modal -->

<!-- /Delete Model -->

<!-- Main Footer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    function getState(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>user/Businessprofile/getStatebyCountry/" + val,
            data: 'country_id=' + val,
            success: function (data) {
                $(".stateList").html(data);
            }
        });
    }
    function getCity(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>user/Businessprofile/getCitybyState/" + val,
            data: 'state_id=' + val,
            success: function (data) {
                $(".cityList").html(data);
            }
        });
    }
</script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>
<!--------Image Upload-------->
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
<script>
    function readURLCompany(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah2')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<!--------Image Upload-------->



