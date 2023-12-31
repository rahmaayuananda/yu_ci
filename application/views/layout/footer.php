<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="<?=base_url('assets/')?>https://bootstrapmade.com/">BootstrapMade</a>
    </div>
     <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/') ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url('assets/') ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
  <script src="<?= base_url('assets/') ?>assets/js/main.js"></script>

  <!-- Custom scripct for all pages -->
  <script>
    $('.custom-file-input').on('change', function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
  </script>

  </footer><!-- End Footer -->

  <!-- Custom scripct for all pages -->
