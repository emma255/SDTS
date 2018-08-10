<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo e(asset('home')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SDMT</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SDMT System</b></span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- Notifications Menu -->
            
            <!-- Tasks Menu -->
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <?php $__currentLoopData = DB::table('profiles')->where('user_id',Auth::user()->id)->pluck('photo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- The user image in the navbar-->
                <img src="<?php echo e(asset('../storage/app/'.$img)); ?>" class="user-image" alt="<?php echo e(Auth::user()->name); ?>"><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header"><?php $__currentLoopData = DB::table('profiles')->where('user_id',Auth::user()->id)->pluck('photo'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <img src="<?php echo e(asset('../storage/app/'.$img)); ?>" class="img-circle" alt="<?php echo e(Auth::user()->name); ?>"> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <p>
                    <?php echo e(Auth::user()->name); ?> - <?php $__currentLoopData = DB::table('profiles')->where('user_id',Auth::user()->id)->pluck('profession'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($pro); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <small>Member since <?php echo e(date_format(Auth::user()->created_at,'M Y')); ?></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php echo e(asset('profile/show')); ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <?php echo e(__('Logout')); ?></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                      <?php echo csrf_field(); ?>
                    </form>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <li class="header"><?php echo e(Auth::user()->name); ?></li>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
          </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header"><?php echo e(Auth::user()->name); ?></li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="<?php echo e(asset('home')); ?>"><i class="fa fa-home"></i> <span>Home</span></a></li>
          <li class="active"><a href="<?php echo e(asset('profile')); ?>"><i class="fa fa-user"></i> <span>Update profile</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-shopping-bag"></i> <span>Shopping</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(asset('shopping')); ?>"><i class="fa fa-cart-plus"></i> <span>Add shopping expenses</span></a></li>
              <li><a href="<?php echo e(asset('shopping_made')); ?>"><i class="fa fa-shopping-cart"></i> <span>shopping made</span></a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-car"></i> <span>Routes</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(asset('routes')); ?>"><i class="fa fa-dollar"></i> <span>Add trips expenses</span></a></li>
              <li><a href="<?php echo e(asset('routes_made')); ?>"><i class="fa fa-eye"></i> <span>Routes made</span></a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">📜<span>Payslips</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo e(asset('payslip')); ?>"><i class="fa fa-plus"></i> <span>Upload Payslips</span></a></li>
              <li><a href="<?php echo e(asset('payslip/show')); ?>"><i class="fa fa-eye"></i> <span>View Payslips</span></a></li>
            </ul>
          </li>
          <li>
            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out"></i> <span><?php echo e(__('Logout')); ?></span></a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
            </form>
          </li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Students Daily Money Tracking System
          <small>SDMT</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content container-fluid">

        <?php if(Session::has('flash_message')): ?>

        <div class="alert alert-success text-capitalize text-center">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>
        <?php echo e(Session::get('flash_message')); ?> <?php echo e(Session::forget('flash_message')); ?></div>

        <?php endif; ?>
        <?php echo $__env->yieldContent('contents'); ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2018 <a href="https://twitter.com/Emman_Angelus?lang=en">Emma de Anitha</a>.</strong> All rights reserved.
    </footer>

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->


  <!-- jQuery 3 -->
  <script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>

</body>

</html>