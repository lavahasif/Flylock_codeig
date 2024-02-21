<!DOCTYPE html>
<html lang="en">

<head>

  <?= $this->include('admin/common/commoncssheader', ['pageTitle' => 'Flying Colour']); ?>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?= $this->include('admin/common/navbar', ['pageTitle' => 'Flying Colour']); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('admin/common/sidebar', ['pageTitle' => 'Flying Colour']); ?>

    <!-- Content Wrapper. Contains page content -->
    <?= $this->renderSection('content') ?>
    <!-- /.content-wrapper -->

    <!-- footer -->
    <?= $this->include('admin/common/footer', ['pageTitle' => 'Flying Colour']); ?>

    <!-- Control Sidebar -->
    <?= $this->include('admin/common/controlsidebar', ['pageTitle' => 'Flying Colour']); ?>

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <?= $this->include('admin/common/commonjs', ['pageTitle' => 'Flying Colour']); ?>

</body>

</html>