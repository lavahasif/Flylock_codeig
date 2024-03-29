<?php

/** @var Page $Page */

use App\Entities\Page;
use App\Entities\Sidebar;



?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../index3.html" class="brand-link">
    <img src="/img/<?= $Page->sidebar->logo ?>" alt="<?= $Page->sidebar->sidebarname ?> Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><?= $Page->sidebar->sidebarname ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/img/<?= $Page->sidebar->logo ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= strtoupper($Page->sidebar->sidebarusername) ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
        <?php foreach ($Page->sidebar->menu as $nav_item) : ?>

          <li class="nav-item">
            <a href="<?= $nav_item->url ?>" class="nav-link">

              <p class="sidebar-heading">
                <i class="nav-icon <?= $nav_item->icon ?>" style="position: absolute; right: 10px;"></i>
                <?php if (!$Page->sidebar_minimize) : ?>
                  <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                    <?= $nav_item->sidebarName ?>
                  </p>

                <?php endif; ?>
                <!-- <i class="right fas fa-angle-left" ></i> -->
              </p>


            </a>
            <ul class="nav nav-treeview">

              <?php if (isset($nav_item->submenu)) : ?>
                <?php foreach ($nav_item->submenu as $sub_nav_item) : ?>
                  <li class="nav-item">
                    <a href="<?= $sub_nav_item->url ?>" class="nav-link">
                      <i class="<?= $sub_nav_item->icon ?> nav-icon"></i>
                      <p><?= $sub_nav_item->sidebarName ?></p>
                    </a>
                  </li>
                <?php endforeach; ?>
              <?php endif; ?>
            </ul>
          </li>
        <?php endforeach; ?>



      </ul>
    </nav>


    <!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
</aside>