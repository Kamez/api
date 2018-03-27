<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{asset('css/app.css')}}" />

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper" id="app">

    <header class="main-header">
      <!-- Logo -->
      <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
          <b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
          <b>Admin</b>LTE</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{asset('images/myAvatar.png')}}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#">
              <i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="{{ url('category') }}"><i class="fa fa-dashboard"></i><span>Category</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Layout Options</span>
              <span class="pull-right-container">
                <span class="label label-primary pull-right">4</span>
              </span>
            </a>
            <ul class="treeview-menu">
              <li>
                <a href="../layout/top-nav.html">
                  <i class="fa fa-circle-o"></i> Top Navigation</a>
              </li>
              <li>
                <a href="../layout/boxed.html">
                  <i class="fa fa-circle-o"></i> Boxed</a>
              </li>
              <li>
                <a href="../layout/fixed.html">
                  <i class="fa fa-circle-o"></i> Fixed</a>
              </li>
              <li>
                <a href="../layout/collapsed-sidebar.html">
                  <i class="fa fa-circle-o"></i> Collapsed Sidebar</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-pie-chart"></i>
              <span>Charts</span>
            </a>
          </li>
          <li>
            <a href="https://adminlte.io/docs">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Blank page
          <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <a href="#">
              <i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li>
            <a href="#">Examples</a>
          </li>
          <li class="active">Blank page</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        @yield('content')
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016
        <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>
  </div>

  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>