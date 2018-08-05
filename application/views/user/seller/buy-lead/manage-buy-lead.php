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
                                            <div class="col-md-6">
                                                <h5 class="card-title dis1">Latest Buy Leads (3801)</h5>
                                            </div>
                                            <div class="col-md-6 ">
                                                <a href="<?php echo base_url();?>user/Postbuylead" class="btn btn-info btn-outline-success float-right">Post Buy Leads</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header mailhead">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <h6 class="card-title dis1">Refine Your Results</h6>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Location
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu drop" style="padding: 5px 10px; color: #757575">
                                                        <li><i class="fa fa-map"></i> <a href="">Near By</a></li>
                                                        <div class="dropdown-divider"></div>
                                                        <li><i class="fa fa-map-signs"></i> <a href="">Domestic</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Search By Categories
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu drop1" style="width: 470px">
                                                        <div class="container">
                                                            <form action="" method="">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <li>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                                <label class="form-check-label" for="exampleCheck2">Refrigeration Parts</label>
                                                                            </div>
                                                                        </li>
                                                                        <div class="dropdown-divider"></div>
                                                                        <li>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                                <label class="form-check-label" for="exampleCheck2">Industrial Parts</label>
                                                                            </div>
                                                                        </li>
                                                                        <div class="dropdown-divider"></div>
                                                                        <li>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                                <label class="form-check-label" for="exampleCheck2">Refreigerator Parts</label>
                                                                            </div>
                                                                        </li>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <li>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                                <label class="form-check-label" for="exampleCheck2">Air Conditioners</label>
                                                                            </div>
                                                                        </li>
                                                                        <div class="dropdown-divider"></div>
                                                                        <li>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                                <label class="form-check-label" for="exampleCheck2">Commercial Air Conditioners</label>
                                                                            </div>
                                                                        </li>
                                                                        <div class="dropdown-divider"></div>
                                                                        <li>
                                                                            <div class="form-check">
                                                                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                                <label class="form-check-label" for="exampleCheck2">Commercial Products</label>
                                                                            </div>
                                                                        </li>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group text-center">
                                                                            <input type="submit" value="Apply" class="btn btn-info">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="dropdown">
                                                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Search By Order Value
                                                        <span class="caret"></span></button>
                                                    <ul class="dropdown-menu drop" style="padding: 5px 10px; color: #757575">
                                                        <li>&#8377; <a href="">Indian Rupees</a></li>
                                                        <div class="dropdown-divider"></div>
                                                        <form action="" method="">
                                                            <li>
                                                                <label class="radio"><input type="radio" name="optradio"> 5000 to 10000</label>
                                                            </li>
                                                            <li>
                                                                <label class="radio"><input type="radio" name="optradio"> 10000 to 20000</label>
                                                            </li>
                                                            <li>
                                                                <label class="radio"><input type="radio" name="optradio"> 10000 to 20000</label>
                                                            </li>
                                                            <li>
                                                                <label class="radio"><input type="radio" name="optradio"> 10000 to 20000</label>
                                                            </li>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="float-right">
                                                    <a href="" class="btn btn-default">Search By Shortlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body p-0">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="card-title"> UPVC Pipe Fittings </h4>
                                                    <span class="drop">
                    <i class="fa fa-map-marker"></i>Jharkhand, India
                    </span>|
                                                    <span>
                    <i class="fa fa-clock-o fa1"></i>Posted on:
                        <span class="fa1">30 May 2018</span>
                    </span>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="" class="float-right fa1">Add to Shortlist
                                                        <i class="fa fa-star-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row card-body">
                                            <div class="col-md-12">
                                                <p>Buyer is looking for UPVC Pipe Fittings.</p>
                                                <p>Product Required For Commercial Purpose</p>
                                                <p>Product Delivery Place : Ranchi, Jharkhand, India</p>
                                                <p>For more information contact buyer and let Buyer know the payment details, delivery time and other essential information to enable them to place purchase Order.</p>
                                                <h4 class="card-title">Buy Leads Requirments</h4>
                                                <hr>
                                                <p>
                                                    <span class="info-box1">Buyer is looking For :</span>
                                                    <span> UPVC Pipe Fittings</span>
                                                </p>
                                                <p>
                                                    <span class="info-box1">Product Required For :</span>
                                                    <span> Ranchi, Jharkhand, India</span></p>
                                                <p>
                                                    <span class="info-box1">Product Delivery Place :</span>
                                                    <span> Jharkhand, India</span>
                                                </p>
                                                <a href="" class="btn btn-info btn-outline-success float-right">Contact buyer now</a>
                                                <div class="callout callout-danger">
                                                    <h4 class="card-title">Buyer Details-</h4>
                                                    <p>Manish Vaid </p>
                                                    <p><i class="fa fa-map-marker "></i> Assam, India </p>
                                                    <p><i class="fa fa-mobile"></i> +9170********</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">

                                            </div>
                                            <div class="col-md-6">

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

