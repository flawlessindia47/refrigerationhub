<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">GSTIN Details</h1>
                </div><!-- /.col -->
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
                                    <form action="<?php echo base_url(); ?>user/Gstdetail/updateGst" method="POST" class="">
                                        <div class="card-body">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <h5 class="card-title">Provide your GST Number</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">

                                                    <div class="form-group">
                                                        <label>GSTIN</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="GSTIN" name="txtGstin" value="<?php if(!empty($editResult)){ echo $editResult[0]->gstin;}?>" class="form-control" required="" maxlength="15" <?php if(!empty($editResult)){ echo 'readonly';} ?>>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>PAN No.</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="txtPanno" placeholder="PAN No." value="<?php if(!empty($editResult)){ echo $editResult[0]->panno;}?>" class="form-control" required="" maxlength="10" <?php if(!empty($editResult)){ echo 'readonly';} ?>>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <div class="form-group">
                                                        <input type="submit" value="Update" name="btnSubmit" class="btn btn-info">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
    $('input').keyup(function() {
        var $th = $(this);
        $th.val( $th.val().replace(/[^a-zA-Z0-9]/g, function(str)
        {
            alert('You typed " ' + str + ' ".\n\nPlease use only letters and numbers.'); return '';
        } ) );
    });



</script>

