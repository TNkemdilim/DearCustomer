<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('images/favicon.png')}}">
        <!-- Bootstrap Core CSS -->

        <link href="{{URL::asset('plugins/bootstrap/css/bootstrap.min.css')}}"  rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="{{URL::asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::asset('css/kc.fab.css') }}">

        <link rel="stylesheet" href="{{ URL::asset('css/grapes.min.css') }}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('css')
</head>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <i class="wi wi-sunset"></i>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <a class="navbar-brand" href="{{ url('/') }}">
                                &nbsp; {{ config('app.name', 'Laravel') }}
                            </a>
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{URL::asset('images/users/1.jpg')}}" alt="user" class="profile-pic m-r-5" />{{ Auth::user()->firstname . ' ' . Auth::user()->lastname}}</a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">

                                  <i class="fa fa-sign-out"></i> Logout

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="{{ route('dashboard')}}" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('sent_mails') }}" class="waves-effect"><i class="fa fa-envelope-o m-r-10" aria-hidden="true"></i>Sent Mails</a>
                        </li>
                        <li>
                            <a href="{{ route('custom_messages') }}" class="waves-effect"><i class="fa fa-table m-r-10" aria-hidden="true"></i>Custom Messages</a>
                        </li>
                        <li>
                            <a href="{{ route('subscribers') }}" class="waves-effect"><i class="fa fa-users m-r-10" aria-hidden="true"></i>Subscribers</a>
                        </li>
                        <li>
                            <a href="{{ route('mail_scheduler') }}" class="waves-effect"><i class="fa fa-calendar-times-o m-r-10" aria-hidden="true"></i>Mail Scheculer</a>
                        </li>
                        <li>
                            <a href="{{ route('analytics') }}" class="waves-effect"><i class="fa fa-bar-chart m-r-10" aria-hidden="true"></i>Analytics</a>
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Profile</a>
                        </li>
                    </ul>
                    <div class="text-center m-t-30">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn btn-danger"> Upgrade Account</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>

            <div class="kc_fab_wrapper fab">
            
            </div>

            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/monsteradmin/" class="btn pull-right hidden-sm-down btn-success"> Upgrade to Pro</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                @yield('content')



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2017 DearCustomer Inc.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{URL::asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{URL::asset('plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{URL::asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{URL::asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{URL::asset('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{URL::asset('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{URL::asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{URL::asset('js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="{{URL::asset('plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('plugins/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{URL::asset('js/flot-data.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{URL::asset('plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

    <script src="{{URL::asset('js/kc.fab.min.js') }}"></script>
    <script src="{{ URL::asset('js/grapes.min.js') }}"></script>

    @yield('scripts')
    

    <style type="text/css">
      .modal-dialog { width: 100%; height: 100%; padding: 0; margin:0; max-width: 100%; }
      .modal-content { height: 100%; border-radius: 0; color:white; overflow:auto; }

      #gjs {
        padding: 0px;
        margin: 0px;
      }

      #compose-message-modal {
        margin: 0px !important;
        padding: 0px !important;
      }
    </style>

    @php
        $user = App\User::where('id', Auth::user()->id)->get()->first();

        $custom_messages = $user->custom_messages()->first();
    @endphp


    <div class="modal fade" id="compose-message-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body" id="gjs">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              


            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script type="text/javascript">
    var element = document.querySelector('button[data-link-title="compose"]');


    $(document).on('click', '.kc_fab_main_btn', function () {
      $('#compose-message-modal').modal({
        show: true,
        backdrop: 'static',
        focus: true,
        keyboard: false
      });
      
      //initialize grapesjs
      var editor = grapesjs.init({
          container : '#gjs',
          components: "<div>hello world</div>",
          style: '.txt-red{color: red}',

          panels: {
                sidebar: [{
                    id: 'commands',
                    buttons : [{
                                id          : 'smile',
                                className   : 'fa fa-smile-o',
                                attributes  : { title: 'Smile' },
                                command     : 'helloWorld',
                            }],
                }],

          },

          storageManager: {
                id: 'gjs-',             // Prefix identifier that will be used inside storing and loading
                type: 'local',          // Type of the storage
                autosave: true,         // Store data automatically
                autoload: true,         // Autoload stored data on init
                stepsBeforeSave: 1,     // If autosave enabled, indicates how many changes are necessary before store method is triggered
                storeComponents: false, // Enable/Disable storing of components in JSON format
                storeStyles: false,     // Enable/Disable storing of rules/style in JSON format
                storeHtml: true,        // Enable/Disable storing of components as HTML string
                storeCss: true,         // Enable/Disable storing of rules/style as CSS string
              }
      });
    });


    var links = [
        {
          "icon":"+",
          "title":"Compose new mail",
          "bgcolor":"#F62D51"
        }
    ];

    $('.kc_fab_wrapper').kc_fab(links);

    </script>
</body>

</html>