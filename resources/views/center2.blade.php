<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 1.0
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title')</title>

  <!-- Favicons-->
  <link rel="icon" href="{{URL::asset('admin/images/favicon/favicon-32x32.png')}}" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="{{URL::asset('admin/images/favicon/apple-touch-icon-152x152.png')}}">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="{{URL::asset('admin/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{URL::asset('admin/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">



  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{URL::asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{URL::asset('admin/js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{URL::asset('admin/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{URL::asset('admin/js/plugins/data-tables/css/jquery.dataTables.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{URL::asset('admin/css/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


  </head>

@section('body')
<body>
  <!-- Start Page Loading -->

  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
          <nav class="cyan">
              <div class="nav-wrapper">
                  <h1 class="logo-wrapper"><a href="{{URL::asset('dashboard')}}" class="brand-logo darken-1">LOGO</a> <span class="logo-text">Materialize</span></h1> <!--untuk membuat logo-->
                  <ul class="right hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li><a href="{{URL::asset('dashboard')}}" data-activates="chat-out" class="waves-effect waves-block waves-light"><i class="mdi-action-input tooltipped" data-tooltip="Logout"></i></a>

                    </li>
                  </ul>
              </div>
          </nav>
      </div>
      <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">

          <!-- START LEFT SIDEBAR NAV--> <!--untuk sidebar-->
          <aside id="left-sidebar-nav">
              <ul id="slide-out" class="side-nav fixed leftside-navigation">
                  <li class="user-details cyan darken-2">
                    <div class="row">
                        <div class="col col s4 m4 l4">
                            <img src="{{URL::asset('admin/images/avatar.jpg')}}" alt="" class="circle responsive-img valign profile-image">
                        </div>
                        <div class="col col s8 m8 l8">
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                </li>
                                <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                </li>
                                <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                </li>
                                <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                </li>
                            </ul>
                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Mufni Alida<i class="mdi-navigation-arrow-drop-down right"></i></a>
                            <p class="user-roal">Administrator</p>
                        </div>
                    </div>
                  </li>
                  <li class="bold"><a href="{{URL('table-data')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Tabel Angkot</a>
                  </li>
                  <li class="bold"><a href="{{URL('table-data2')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Tabel Kumpulan Halte</a>
                  </li>
                  <li class="bold"><a href="{{URL('table-data3')}}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Tabel Stop</a>
                  </li>
          </aside>

    <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        @yield('content')
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">

           @yield('content2')
                </div>
            </div>
            <br>
        <div class="divider"></div>

        <!--end container-->

      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
        </ul>
      </aside>


    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">

        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{URL::asset('admin/js/jquery-1.11.2.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{URL::asset('admin/js/materialize.js')}}"></script>
    <!--prism-->
    <script type="text/javascript" src="{{URL::asset('admin/js/prism.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/data-tables/data-tables-script.js')}}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/chartist-js/chartist.min.js')}}"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins.js')}}"></script>
</body>

</html>
