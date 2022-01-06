<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; <?php
                            $date = date_create();
                            echo date_format($date, "Y"); ?>-
    <?php $date = date_create();
    echo date_format($date, "Y") + 1;
    ?>
    <a href="https://www.vcanaglobal.com/">Vcana Global LLP</a>.</strong>
  All rights reserved.
</footer>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<!-- <script src="assets/plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.js"></script>



<script>
  $(function() {
    // Summernote
    $('#summernote,#vision,#moto,#biography,#description').summernote()
  })
</script>
<script>
  $(function() {
    const rowsPerPage = 5;
    const rows = $('#my-table tbody tr');
    const rowsCount = rows.length;
    const pageCount = Math.ceil(rowsCount / rowsPerPage); // avoid decimals
    const numbers = $('#numbers');

    // Generate the pagination.
    for (var i = 0; i < pageCount; i++) {
      numbers.append('<li><a href="#">' + (i + 1) + '</a></li>');
    }

    // Mark the first page link as active.
    $('#numbers li:first-child a').addClass('active');

    // Display the first set of rows.
    displayRows(1);

    // On pagination click.
    $('#numbers li a').click(function(e) {
      var $this = $(this);

      e.preventDefault();

      // Remove the active class from the links.
      $('#numbers li a').removeClass('active');

      // Add the active class to the current link.
      $this.addClass('active');

      // Show the rows corresponding to the clicked page ID.
      displayRows($this.text());
    });

    // Function that displays rows for a specific page.
    function displayRows(index) {
      var start = (index - 1) * rowsPerPage;
      var end = start + rowsPerPage;

      // Hide all rows.
      rows.hide();

      // Show the proper rows for this page.
      rows.slice(start, end).show();
    }
  });
</script>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>

  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});

  </script>
</body>

</html>