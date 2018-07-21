@extends('layouts.base')

@section('content')
<div id="navbar" class="navbar navbar-default ace-save-state">
  <div class="navbar-container ace-save-state" id="navbar-container">
    <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
      <span class="sr-only">Toggle sidebar</span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>

      <span class="icon-bar"></span>
    </button>

    <div class="navbar-header pull-left">
      <a href="index.html" class="navbar-brand">
        <small>
          <i class="fa fa-leaf"></i>
          Run4Love
        </small>
      </a>
    </div>

    <!-- Navigation Bar placing -->
    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav">

        <li class="light-blue dropdown-modal">
          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
            <img class="nav-user-photo" src="assets/images/avatars/user.png" alt="Jason's Photo" />
            <span class="user-info">
              <small>Welcome,</small>
              Jason
            </span>

            <i class="ace-icon fa fa-caret-down"></i>
          </a>

          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
            <li>
              <a href="#">
                <i class="ace-icon fa fa-power-off"></i>
                Logout
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
  <script type="text/javascript">
    try{ace.settings.loadState('main-container')}catch(e){}
  </script>

  <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
    <script type="text/javascript">
      try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
      <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
      </div>

      <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
      </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
      <li class="">
        <a href="index.html">
          <i class="menu-icon fa fa-tachometer"></i>
          <span class="menu-text"> Dashboard </span>
        </a>

        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="datapage.html">
          <i class="menu-icon fa fa-desktop"></i>
          <span class="menu-text">Data Page</span>
        </a>

        <b class="arrow"></b>

      </li>

      <li class="">
        <a href="eventpg.html">
          <i class="menu-icon fa fa-list"></i>
          <span class="menu-text"> Event Page </span>
        </a>

        <b class="arrow"></b>

      </li>

      <li class="active">
        <a href="runnerrefer.html">
          <i class="menu-icon fa fa-list-alt"></i>
          <span class="menu-text"> Runner References </span>
        </a>

        <b class="arrow"></b>
      </li>

      <li class="">
        <a href="calendar.html">
          <i class="menu-icon fa fa-calendar"></i>

          <span class="menu-text">
            Calendar


          </span>
        </a>

        <b class="arrow"></b>
      </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
      <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
  </div>

  <div class="main-content">
    <div class="main-content-inner">
      <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
          <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Home</a>
          </li>
          <li class="active">Dashboard</li>
        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
          <form class="form-search">
            <span class="input-icon">
              <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
              <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
          </form>
        </div><!-- /.nav-search -->
      </div>

      <div class="page-content">
        <div class="ace-settings-container" id="ace-settings-container">
          <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
          </div>

          <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
              <div class="ace-settings-item">
                <div class="pull-left">
                  <select id="skin-colorpicker" class="hide">
                    <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                  </select>
                </div>
                <span>&nbsp; Choose Skin</span>
              </div>

              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
              </div>

              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
              </div>

              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
              </div>

              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
              </div>

              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                <label class="lbl" for="ace-settings-add-container">
                  Inside
                  <b>.container</b>
                </label>
              </div>
            </div><!-- /.pull-left -->

            <div class="pull-left width-50">
              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
              </div>

              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
              </div>

              <div class="ace-settings-item">
                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
              </div>
            </div><!-- /.pull-left -->
          </div><!-- /.ace-settings-box -->
        </div><!-- /.ace-settings-container -->

        <div class="page-header">
          <h1>
            Running Shoe Brand
            <small>
              <i class="ace-icon fa fa-angle-double-right"></i>
              List of running shoe brands that current runners wearing
            </small>
          </h1>
        </div><!-- /.page-header -->

        <div class="row">
          <div class="col-xs-12">
            @if ($item != null)
              @foreach ($item as $ite)
                <div class="col-sm-8">
                  <div class="tabbable tabs-left">
                  <h3> {{ $ite['item_name'] }} </h3>
                  <img class="shoe" src="{{ $ite['item_pic'] }}"/>

                  <div class="w3-container" style="padding-left: 0px">

                  <div class="w3-border">
                  <!-- <div class="w3-blue" style="height:24px;width:60%"></div> -->
                  <meter value="{{ $ite['item_count'] }}" min="0" max="100"></meter>
                  <div>30 runners</div>
                  </div>
                  </div>


                  </div>
                </div>
              @endforeach
            @endif


            {{-- <div class="col-sm-8">
              <div class="tabbable tabs-left">
              <h3> New Balance </h3>
              <img class="shoe" src="newbalance.jpg"/>

              <div class="w3-container">

              <div class="w3-border">
              <!-- <div class="w3-blue" style="height:24px;width:40%"></div> -->
              <meter value="20" min="0" max="100"></meter>
              <div>20 runners</div>
              </div>
              </div>
              </div>

            </div>

            <div class="col-sm-8">
              <div class="tabbable tabs-left">
              <h3> Nike </h3>
              <img class="shoe" src="nike.jpg"/>

              <div class="w3-container">

              <div class="w3-border">
              <!-- <div class="w3-blue" style="height:24px;width:36%"></div> -->
              <meter value="18" min="0" max="100"></meter>
              <div>18 runners</div>
              </div>
              </div>

              </div>
            </div> --}}

            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.main-content -->

  <div class="footer">
    <div class="footer-inner">
      <div class="footer-content">
        <span class="bigger-120">
          <span class="blue bolder">Run4Love</span>
          &copy; 2018
        </span>

        &nbsp; &nbsp;
        <span class="action-buttons">
          <a href="#">
            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
          </a>

          <a href="#">
            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
          </a>

          <a href="#">
            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
          </a>
        </span>
      </div>
    </div>
  </div>

  <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
  </a>
@endsection

@section('view-styles')
  <!-- bootstrap & fontawesome -->
  <link rel="stylesheet" href="{{ asset("css/runnerrefer.css") }}" />
  <link rel="stylesheet" href="{!! asset('font-awesome/4.5.0/css/font-awesome.min.css') !!}" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- page specific plugin styles -->

  <!-- text fonts -->
  <link rel="stylesheet" href="{!! asset('css/fonts.googleapis.com.css') !!}" />

  <!-- ace styles -->
  <link rel="stylesheet" href="{!! asset('css/ace.min.css') !!}" class="ace-main-stylesheet" id="main-ace-style" />

  <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
  <![endif]-->
  <link rel="stylesheet" href="{!! asset('css/ace-skins.min.css') !!}" />
  <link rel="stylesheet" href="{!! asset('css/ace-rtl.min.css') !!}" />
@endsection
