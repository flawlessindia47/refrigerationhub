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
                <div class="col-md-12">
                    <!-- MAP & BOX PANE -->
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="d-md-flex mar">
                            <div class="col-12">
                                <!-- Custom Tabs -->
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <h5 class="card-title dis1">Post Buy Leads</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body p-0">
                                        <div class="row card-body">
                                            <div class="callout callout-danger  col-md-12">
                                                <h4 class="card-title text-center">Post One Request, Get Multiple Quotes</h4>
                                                <div class="row">
                                                    <div class="col-lg-4 col-6">
                                                        <!-- small box -->
                                                        <div class="small-box bg-info">
                                                            <div class="inner">
                                                                <h3><i class="fa fa-pencil"></i></h3>
                                                                <p>Tell us buying need</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <!-- small box -->
                                                        <div class="small-box bg-success">
                                                            <div class="inner">
                                                                <h3><i class="fa fa-envelope-o"></i></h3>
                                                                <p>Receive quotations</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-6">
                                                        <!-- small box -->
                                                        <div class="small-box bg-danger">
                                                            <div class="inner">
                                                                <h3><i class="fa fa-handshake-o"></i></h3>
                                                                <p>Deal with supplier</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="" method="">
                                                    <div class="row">


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Product Name</label>
                                                                <input type="text" class="form-control" placeholder="Enter product name you want to buy">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control" rows="3" placeholder="So kindly send your quotations along with all relevant details and contact buyer with your best offer as soon as possible."></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group text-center">
                                                                <input type="submit" value="Post Buy Leads" class="btn btn-info">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>





                                    </div>
                                    <!-- /.card-body -->


                                </div>
                                <!-- ./card -->
                            </div>
                        </div><!-- /.d-md-flex -->
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card -->


                </div>
                <!-- /.col -->

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

</script>

