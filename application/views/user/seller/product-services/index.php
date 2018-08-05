<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Products &amp; Services</h1>
                </div><!-- /.col -->
                <div class="col-md-4" style="float: right">
                    <?php if ($this->session->flashdata('done')) { ?>
                        <div align="center" class="disMes alert alert-success" style="
                                margin-right: -57%;">
                            <?php echo $this->session->flashdata('done') ?>
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('error')) { ?>
                        <div align="center" class="disMes alert alert-danger" style="
                                margin-right: -57%;">
                            <?php echo $this->session->flashdata('error') ?>
                        </div>
                    <?php } ?>

                </div>
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
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="d-md-flex mar">
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="card-title">My Products & Services</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/*******Form Start Here*********/-->
                                        <form action="<?php echo base_url(); ?>user/Productservices/add" method="POST"
                                              enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Primary Business Type</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select class="form-control" name="txtPrimaryBusinessType"
                                                                required>
                                                            <option value="">--Select Primary Business Type---</option>
                                                            <?php foreach ($ddlPrimaryBusiness as $busVal): ?>
                                                                <option value="<?php echo $busVal->pbt_name; ?>" <?php if (!empty($editResult) && $editResult[0]->primarybusinesstype == $busVal->pbt_name) {
                                                                    echo 'selected';
                                                                } ?> > <?php echo $busVal->pbt_name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Main Products</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select class="form-control select2 select2-hidden-accessible"
                                                                multiple="" name="txtmainProduct[]" required>
                                                            <option value="">---Select---</option>
                                                            <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h5 class="card-title">Select other business types</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Manufacturer</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="txtManufacturer" name="txtManufacturer">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtManufacturerKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtManufacturerKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Exporter</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   id="txtExporter">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtExporterKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtExporterKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Importer</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   name="txtImporter" id="txtImporter">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtImporterKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtImporterKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Distributor</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   name="txtDistributor" id="txtDistributor">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtDistributorKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtDistributorKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Supplier</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   name="txtSupplier" id="txtSupplier">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtSupplierKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtSupplierKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Trader</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   name="txtTrader" id="txtTrader">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtTraderKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtTraderKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Wholesaler</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   name="txtWholesaler" id="txtWholesaler">

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtWholesalerKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtWholesalerKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Retailer</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   name="txtRetailer" id="txtRetailer">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtRetailerKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtRetailerKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Dealer</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="checkbox" class="form-check-input"
                                                                   name="txtDealer" id="txtDealer">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Keywords</label>
                                                        </div>
                                                    </div>
                                                    <div class="txtDealerKeyword col-md-6" style="display: none;">
                                                        <div class="form-group">
                                                            <select class="form-control select2 select2-hidden-accessible"
                                                                    multiple="" name="txtDealerKeyword[]">
                                                                <option value="">---Select---</option>
                                                                <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                    <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Service Provider</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 hide-btn">
                                                    <div class="form-group">
                                                        <input type="checkbox" class="form-check-input"
                                                               name="txtServiceProvider" id="txtServiceProvider">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Keywords</label>
                                                    </div>
                                                </div>

                                                <div class="txtServiceKeyword col-md-6" style="display: none;">
                                                    <div class="form-group">
                                                        <select class="form-control select2 select2-hidden-accessible"
                                                                multiple="" name="txtServiceKeyword[]">
                                                            <option value="">---Select---</option>
                                                            <?php foreach ($ddlKeyword as $keyVal): ?>
                                                                <option value="<?php echo $keyVal->key_name; ?>"><?php echo $keyVal->key_name; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <div class="form-group">
                                                        <input type="submit" value="SAVE" class="btn btn-info">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#show').click(function () {
            $('.serviceKeyword').toggle("slide");
        });

        $('#txtManufacturer').click(function () {
            $('.txtManufacturerKeyword').toggle("slide");
        });

        $('#txtExporter').click(function () {
            $('.txtExporterKeyword').toggle("slide");
        });

        $('#txtImporter').click(function () {
            $('.txtImporterKeyword').toggle("slide");
        });

        $('#txtDistributor').click(function () {
            $('.txtDistributorKeyword').toggle("slide");
        });

        $('#txtSupplier').click(function () {
            $('.txtSupplierKeyword').toggle("slide");
        });

        $('#txtTrader').click(function () {
            $('.txtTraderKeyword').toggle("slide");
        });
        $('#txtWholesaler').click(function () {
            $('.txtWholesalerKeyword').toggle("slide");
        });
        $('#txtRetailer').click(function () {
            $('.txtRetailerKeyword').toggle("slide");
        });
        $('#txtDealer').click(function () {
            $('.txtDealerKeyword').toggle("slide");
        });

        $('#txtServiceProvider').click(function () {
            $('.txtServiceKeyword').toggle("slide");
        });

    });

    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });

</script>
 
