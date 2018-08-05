<?php
defined('BASEPATH') OR exit('NAdministrationpt access allowed');
$data['value'] = $this->session->userdata('logindetails');
$user_type = $data['value']['user_type'];
?>

<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>backend/plugins/datatables/dataTables.bootstrap4.min.css">
<!-- Content Wrapper. Contains page content -->
<div class="content">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Power Source Unit List</h3>
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
                        <h3 class="card-title">All Power Source Unit List <a style="float:right;"
                                                                   href="<?php echo base_url(); ?>admin/Material/powerunit">Add Power Unit</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sn.</th>
                                <th>Power Unit</th>
                                <th>Added By</th>
                                <?php if ($user_type == 1) { ?>
                                    <th>Delete Status</th>
                                <?php } ?>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sn = 1;
                            foreach ($list as $row): ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>

                                    <td><?php echo $row->punit_name ?></td>
                                    <td><?php if ($row->created_by == '1') {
                                            echo "<label class='badge badge-success' >Adminstration<label>";
                                        } else {
                                            echo "<label class='badge badge-warning' >Admin<label>";
                                        } ?> </td>
                                    <?php if ($user_type == 1) { ?>


                                    <?php } ?>
                                    <?php if ($user_type == 1) { ?>
                                        <td><?php if ($row->delStatus == 'yes') { ?>
                                                <a href="<?php echo base_url(); ?>admin/Material/Restorepowerunit?id=<?php echo base64_encode($row->punit_id); ?>"
                                                   onclick="return confirm('Would you want to restore record ?');"
                                                   class="badge badge-warning">
                                                    Restore
                                                </a>
                                            <?php } else {
                                                echo "<label class='badge badge-success' >Active<label>";
                                            } ?> </td>
                                    <?php } ?>
                                    <td><?php echo $row->created_at; ?> </td>
                                    <td><?php if ($row->status == 'Active') {
                                            echo "<label class='badge badge-success' >Active<label>";
                                        } else {
                                            echo "<label class='badge badge-warning' >Inactive<label>";
                                        } ?> </td>
                                    <td class="">
                                        <a href="<?php echo base_url(); ?>admin/Material/powerunit?id=<?php echo base64_encode($row->punit_id); ?>"
                                           class="btn btn-primary">
                                            Edit
                                        </a>

                                        <a class="btn btn-danger"
                                           href="<?php echo base_url(); ?>admin/Material/deletepowerunit?id=<?php echo base64_encode($row->punit_id); ?>"
                                           onclick="return confirm('Would you want to delete record ?');">Delete</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                            </tbody>

                        </table>


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
