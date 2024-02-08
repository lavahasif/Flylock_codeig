<!-- this js applicable to entire application -->

<?php

/** @var Page $Page */
use App\Entities\Page;

var_dump($Page->isSkipCssJs->script->jquery);

?>


<?php if (!isset($Page) || ($Page->isSkipCssJs->script->jquery ?? false) === false) : ?>
    <!-- jQuery -->
    <script src="<?= base_url('/plugins/jquery/jquery.min.js') ?>"></script>
<?php endif; ?>

<?php
if (!isset($ISSKIPCSSJS) || ($ISSKIPCSSJS[BOOTSTRAP_SCRIPT] ?? false) === false) : ?>

    <!-- Bootstrap 4 -->
    <!-- <script src="<?= base_url('/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
endif; ?>
<?php if (!isset($ISSKIPCSSJS) || ($ISSKIPCSSJS[ADMINLTE_SCRIPT] ?? false) === false) : ?>
    <!-- AdminLTE App -->
    <script src="<?= base_url('/js/adminlte.min.js') ?>"></script>
    <!-- AdminLTE for demo purposes -->
<?php endif; ?>
<?php if (!isset($ISSKIPCSSJS) || ($ISSKIPCSSJS[CUSTOM_SCRIPT] ?? null) === false) : ?>
    <!-- <script src="<?= base_url('/js/demo.js') ?>"></script> -->
<?php endif; ?>


<?= $this->renderSection('_js') ?>