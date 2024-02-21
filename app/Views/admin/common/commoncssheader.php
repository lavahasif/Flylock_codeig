<!-- this js applicable to entire application -->
<?php

/** @var Page $Page */
use App\Entities\Page;

?>

<title><?= $Page->pageTitle  ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Google Font: Source Sans Pro -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
<!-- Font Awesome -->

<?php if (!isset($ISSKIPCSSJS) || ($ISSKIPCSSJS[FONTAWESOME_STYLESHEET] ?? false) === false) : ?>
    <link rel="stylesheet" href="<?= base_url('/plugins/fontawesome-free/css/all.min.css') ?>">
<?php endif; ?>
<?php
if (!isset($ISSKIPCSSJS) || ($ISSKIPCSSJS[BOOTSTRAP_STYLESHEET] ?? false) === false) : ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php endif; ?>
<?php if (!isset($ISSKIPCSSJS) || ($ISSKIPCSSJS[ADMINLTE_SCRIPT] ?? false) === false) : ?>
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('/css/adminlte.min.css') ?>">
<?php endif; ?>
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


<?= $this->renderSection('_css') ?>