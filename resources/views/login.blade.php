<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login</title>

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
    <link href="{{URL::asset('admin/css/my.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{URL::asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{URL::asset('admin/js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{URL::asset('admin/js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body class="cyan">
  <div class="row">
              <div class="col s12 m12 l6 ">
                <div class="card-panel sizecard col s12 offset-m9 m6">
                   <div id="breadcrumbs-wrapper" class="blue-grey darken-1">
                      <div class="row">
                        <div class="col s12 m12 l12">
                         <h5 class="breadcrumbs-title white-text">Login</h5>
                          <ol class="breadcrumb"></ol>
                        </div>
                      </div>
                    </div>
  
                  <div class="row">
                    <form class="col s12">

                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name3" type="text">
                          <label for="first_name">Name</label>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-action-lock-outline prefix"></i>
                          <input id="password3" type="password">
                          <label for="password">Password</label>
                        </div>
                      </div>
                      
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light button" type="submit" name="action">Masuk
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

 <!-- ================================================
    Scripts
    ================================================ -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{URL::asset('admin/js/jquery-1.11.2.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{URL::asset('admin/js/materialize.min.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>


    <!-- chartist -->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/chartist-js/chartist.min.js')}}"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/chartjs/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/chartjs/chart-script.js')}}"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/sparkline/sparkline-script.js')}}"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins/jvectormap/vectormap-script.js')}}"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{URL::asset('admin/js/plugins.js')}}"></script>
    <!-- Toast Notification -->
  </body>

</html>
