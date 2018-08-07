<?php
defined('BASEPATH') OR exit('NAdministrationpt access allowed');
$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];
?>

<!-- DataTables -->
<style>

    .scroll{
        height: 400px;
        overflow: scroll;
    }
</style>
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/datatables/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/popup/w3.css">
<!-- Content Wrapper. Contains page content -->
<div class="content">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product manage</h3>
                    </div>
                </div>
                <!-- /.card -->
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
                <div class="card">
                    <div class="card-header">
                       <h3 class="card-title">All Product

                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sn.</th>
                                <th>Img</th>
                                <th>Category</th>
                                <th>Sub-Category</th>
                                <th>Product</th>
                                <th>Code</th>
                                <th>Brand</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $sn = 1;
                            foreach ($list as $row): ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td>
                                        <?php if(!empty($row->productImage)) {?>
                                        <img src="<?php echo base_url(); ?>uploads/seller/productimage/<?php echo $row->productImage; ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo base_url(); ?>uploads/empty/avator.png" style="width: 100px; height: 100px;">
                                        <?php } ?>
                                    </td>
                                    <td><?php echo $row->cat_name ; ?></td>
                                    <td><?php echo $row->subcat_name ; ?></td>
                                    <td><?php echo $row->subcat_name ; ?></td>
                                    <td><?php echo $row->product_name ; ?></td>
                                    <td><?php echo $row->product_code ; ?></td>
                                    <td><?php echo $row->product_brand ; ?></td>

                                    <td><?php echo $row->created_at; ?> </td>
                                    <td><?php if ($row->status == 'New') {
                                            echo "<label class='badge badge-success' >New<label>";
                                        } else {
                                            echo "<label class='badge badge-warning' >Old<label>";
                                        } ?> </td>
                                    <td class="">
                                        <a href="<?php echo base_url(); ?>admin/Manage/powersource?id=<?php echo base64_encode($row->product_id); ?>"
                                           class="badge badge-primary">
                                            Edit
                                        </a>
                                        <a href="<?php echo base_url(); ?>admin/Manage/powersource?id=<?php echo base64_encode($row->product_id); ?>"
                                           class="badge badge-success">
                                            Published
                                        </a>
                                        <a href="<?php echo base_url(); ?>admin/Manage/productShow?id=<?php echo base64_encode($row->product_id); ?>"
                                           class="badge badge-warning">
                                            Show
                                        </a>
                                      <!--  <button onclick="document.getElementById('id01').style.display='block'" class="badge badge-success">Show</button>-->
                                       <!-- <a onclick="document.getElementById('<?php /*echo $row->product_id; */?>').style.display='block'"
                                           class="badge badge-success">
                                            Show
                                        </a>-->
                                        <a class="badge badge-danger"
                                           href="<?php echo base_url(); ?>admin/Manage/deletepsource?id=<?php echo base64_encode($row->product_id); ?>"
                                           onclick="return confirm('Would you want to delete record ?');">Delete</a>

                                        <!--<div class="col-md-12 col-lg-12 col-sm-12">
                                            <div id="<?php /*echo $row->product_id; */?>" class="w3-modal">
                                                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%">

                                                    <div class="w3-center"><br>
                                                        <span onclick="document.getElementById('<?php /*echo $row->product_id; */?>').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>

                                                        <?php /*if(!empty($row->productImage)) {*/?>
                                                            <label>Category Image</label>
                                                            <img src="<?php /*echo base_url(); */?>uploads/seller/productimage/<?php /*echo $row->productImage; */?>" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php /*} else { */?>
                                                            <label>Category Image</label>
                                                            <img src="<?php /*echo base_url(); */?>uploads/empty/avator.png" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php /*} */?>
                                                        <?php /*if(!empty($row->productImage)) {*/?>
                                                            <label>Sub-Category Image</label>
                                                            <img src="<?php /*echo base_url(); */?>uploads/seller/productimage/<?php /*echo $row->productImage; */?>" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php /*} else { */?>
                                                            <label>Sub-Category Image</label>
                                                            <img src="<?php /*echo base_url(); */?>uploads/empty/avator.png" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php /*} */?>

                                                        <?php /*if(!empty($row->productImage)) {*/?>
                                                            <label>Product Image</label>
                                                            <img src="<?php /*echo base_url(); */?>uploads/seller/productimage/<?php /*echo $row->productImage; */?>" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php /*} else { */?>
                                                            <label>Product Image</label>
                                                            <img src="<?php /*echo base_url(); */?>uploads/empty/avator.png" style="width: 100px; height: 100px;" class="w3-circle w3-margin-top">
                                                        <?php /*} */?>


                                                    </div>
                                                    <form class="w3-container" action="">
                                                        <div class="w3-section scroll">
                                                            <label><b style="color: #00a65a;">Category</b><input class="w3-input w3-border w3-margin-bottom" style="width: 80%;" type="text" value="<?php /*echo $row->cat_name; */?>" readonly></label>

                                                            <label><b style="color: #00a65a;">Sub-Category</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->subcat_name; */?>" readonly></label>
                                                            <label><b style="color: #00a65a;">Product</b>
                                                            <input class="w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->product_name; */?>" readonly></label>
                                                            <label><b>Code</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->product_code; */?>" readonly></label>
                                                            <label><b>Brand</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->product_brand; */?>" readonly></label>
                                                            <label><b>Description</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly></label>
                                                            <label><b>Quantity</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly></label>
                                                            <label><b>Measure</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly></label>
                                                            <label><b>Price</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly></label>
                                                            <label><b>Min Price</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly></label>
                                                            <label><b>Max Price</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly></label>
                                                            <label><b>Currency</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly></label>
                                                            <label><b>Type</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly> </label>
                                                            <label><b>Material</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly> </label>
                                                            <label><b>Cooling/Heating</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly> </label>
                                                            <label><b>Unit</b>
                                                            <input class="w3-input w3-border w3-margin-bottom" type="text" style="width: 80%;" value="<?php /*echo $row->cat_name; */?>" readonly> </label>
                                                             <!-- <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
                                                            <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
                                                      <!--  </div>
                                                    </form>

                                                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                                        <button onclick="document.getElementById('<?php /*/*echo $row->product_id; */?>').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
                                                      <!--  <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>-->
                                                  <!--  </div>

                                                </div>
                                            </div>
                                            <div>-->
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <!--Show product Modal -->

</div>

    <!--Show product Modal -->

    <!-- Modal -->
</div>
<!-- Button trigger modal -->
<!-- /.content-wrapper -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-sm-none d-md-block">
        Anything you want
    </div>
    <!-- Default to the left -->
    © 2018 Refrigeration.com All Rights Reserved Design & Development by <a href="https://flawlessindia.in"
                                                                            target="_blank">Flawless India.</a>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>backend/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>backend/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>backend/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>backend/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>backend/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>backend/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.disMes').fadeOut('fast');
        }, 2000);
    });
</script>

</body>
</html>
