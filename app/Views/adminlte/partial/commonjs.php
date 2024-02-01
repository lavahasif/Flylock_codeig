<!-- this js applicable to entire application -->
<!-- jQuery -->
<script src="<?= base_url('/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<!-- <script src="<?= base_url('/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url('/js/demo.js') ?>"></script> -->
<?= $this->renderSection('_js') ?>