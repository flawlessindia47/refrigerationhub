<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$data['value'] = $this->session->userdata('Registerlogindetails');
$reg_name = $data['value']['reguser_name'];
$reg_mail = $data['value']['reguser_mail'];
$reg_mobile = $data['value']['reguser_mobile'];
$reg_company = $data['value']['reguser_company'];

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
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
              
            <div class="card">
              <div class="card-header">
                  <div class="row">
                  <div class="col-md-4">
                   <h3 class="card-title">Contact Details</h3>
                  </div>
               <div class="col-md-8">
                  <div class="card-tools">
                      <div class="profile">
                    <h3 class="card-title">Profile Strength</h3>
                          </div>
                  <div class="progress-group">
                      <span class=""><b>42%</b></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: 40%"></div>
                      </div>
                      <a href="<?php echo base_url(); ?>user/Personalprofile" class="btn btn-info pull-right">Edit</a>
                    </div>
                </div>
                  </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex mar">
                  <div class="col-lg-6 col-6 col-md-6">
                    <!-- Map will be created here -->
                   <div class="">
            <!-- small box -->
            <div class="small-box bg-info height">
              <div class="inner">
                <h5 >Personal Details</h5>
                  <hr>
                <h5> <?php echo $reg_name; ?></h5>
                  <p class="dis">Mobile: +91 <?php echo $reg_mobile; ?></p><span class="badge badge-success pull-right">Verified</span>
                  <div>
                  <p class="dis">Email: <?php echo $reg_mail; ?></p><span class="badge badge-success pull-right">Verified</span>
                      </div>
              </div>
              
            </div>
          </div>
                  </div>
                  <div class="col-lg-6 col-6 col-md-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Business Details</h5>
                  <hr>
                  <h5><?php echo $reg_company; ?></h5>
                  <p>Pan No : <?php if(!empty($gstDetail)){ echo $gstDetail[0]->panno;}?></p>
                  <p>GSTIN No : <?php if(!empty($gstDetail)){ echo $gstDetail[0]->gstin;}?></p>
              </div>
             
            </div>
          </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
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
          <div class="row">
               <!-- TABLE: LATEST ORDERS -->
              <div class="col-md-9">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Request for Quotation</h3>

                <div class="card-tools">
                  <p>One Request, Multiple Quotes</p>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                  <div class="d-flex">
                  <p>3045 Suppliers can give you quotations, you’ll get them in avg. 6 Minutes.</p>
                  </div>
                  <form>
               <div class="form-group">
                    <label for="Product Name">Product Name</label>
                    <input type="text" class="form-control" id="Product Name" placeholder="Enter Product Name">
                  </div>
                      <div class="form-group">
                    <label>Describe Your Requirement</label>
                    <textarea class="form-control" rows="3" placeholder="Describe Your Requirement"></textarea>
                  </div>
                      <div class="form-group">
                      <input type="submit" value="Submit" class="btn btn-sm btn-info">
                      </div>
                      </form>
              </div>
              <!-- /.card-body -->
              
            </div>
                  </div>
            <!-- /.card -->
           <div class="col-md-3">
            
            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">What's New</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <!--<li class="item"><i class="fa fa-angle-right pd"></i>
                    <a href="">Please add designation</a>
                  </li>-->
                  <!-- /.item -->
                  <li class="item"><i class="fa fa-angle-right pd"></i>
                   <a href="<?php echo base_url();?>user/Gstdetail">Please add your GST & PAN number</a>
                  </li>
                  <!-- /.item -->
                 <!-- <li class="item"><i class="fa fa-angle-right pd"></i>
                    <a href="#">Please add your PAN number</a>
                  </li>-->
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
             
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          </div>
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
