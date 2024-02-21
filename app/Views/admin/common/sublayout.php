<?php

/** @var Page $Page */

use App\Entities\Page;

//var_dump($Page->Header->heading);

?>
<?php $this->extend('admin/common/mainlayout'); ?>
<?php $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?= $Page->header->heading; ?></h1>

        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $Page->header->home_url ?>"><?= $Page->header->homename ?></a></li>
            <li class="breadcrumb-item active"> <?= $Page->header->heading ?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="container-fluid">
        <?= $this->renderSection('subcontent') ?>
      </div><!-- /.container-fluid -->
    </div>
  </section>
  <!-- /.content -->

  <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
  </a>
</div>
<!-- /.content-wrapper -->
<?php $this->endSection(); ?>