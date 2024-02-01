<!DOCTYPE html>
<html lang="en">

<head>

  <?= $this->include('adminlte/partial/commoncssheader', ['pageTitle' => 'Flying Colour']); ?>

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?= $this->include('adminlte/partial/navbar', ['pageTitle' => 'Flying Colour']); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('adminlte/partial/sidebar', ['pageTitle' => 'Flying Colour']); ?>

    <!-- Content Wrapper. Contains page content -->
    <?= $this->renderSection('content') ?>
    <!-- /.content-wrapper -->

    <!-- footer -->
    <?= $this->include('adminlte/partial/footer', ['pageTitle' => 'Flying Colour']); ?>

    <!-- Control Sidebar -->
    <?= $this->include('adminlte/partial/controlsidebar', ['pageTitle' => 'Flying Colour']); ?>

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <?= $this->include('adminlte/partial/commonjs', ['pageTitle' => 'Flying Colour']); ?>

</body>

</html>