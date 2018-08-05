<footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
      © 2018 Refrigeration.com All Rights Reserved Design & Development by  <a href="https://flawlessindia.in" target="_blank">Flawless India.</a>
  </footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({

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