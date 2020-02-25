<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/dist') }}/fullcalendar.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/dist') }}/sweetalert2.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/argon.css?v=1.2.0') }}" type="text/css">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
      <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
          <!-- Brand -->
          <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="../pages/dashboards/dashboard.html">
              <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class=" ml-auto ">
              <!-- Sidenav toggler -->
              <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                    <i class="ni ni-shop text-primary"></i>
                    <span class="nav-link-text">Dashboards</span>
                  </a>
                  <div class="collapse" id="navbar-dashboards">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="../pages/dashboards/dashboard.html" class="nav-link">
                          <span class="sidenav-mini-icon"> D </span>
                          <span class="sidenav-normal"> Dashboard </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/dashboards/alternative.html" class="nav-link">
                          <span class="sidenav-mini-icon"> A </span>
                          <span class="sidenav-normal"> Alternative </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                    <i class="ni ni-ungroup text-orange"></i>
                    <span class="nav-link-text">Examples</span>
                  </a>
                  <div class="collapse" id="navbar-examples">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="../pages/examples/pricing.html" class="nav-link">
                          <span class="sidenav-mini-icon"> P </span>
                          <span class="sidenav-normal"> Pricing </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/examples/login.html" class="nav-link">
                          <span class="sidenav-mini-icon"> L </span>
                          <span class="sidenav-normal"> Login </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/examples/register.html" class="nav-link">
                          <span class="sidenav-mini-icon"> R </span>
                          <span class="sidenav-normal"> Register </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/examples/lock.html" class="nav-link">
                          <span class="sidenav-mini-icon"> L </span>
                          <span class="sidenav-normal"> Lock </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/examples/timeline.html" class="nav-link">
                          <span class="sidenav-mini-icon"> T </span>
                          <span class="sidenav-normal"> Timeline </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/examples/profile.html" class="nav-link">
                          <span class="sidenav-mini-icon"> P </span>
                          <span class="sidenav-normal"> Profile </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/examples/rtl-support.html" class="nav-link">
                          <span class="sidenav-mini-icon"> RP </span>
                          <span class="sidenav-normal"> RTL Support </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                    <i class="ni ni-ui-04 text-info"></i>
                    <span class="nav-link-text">Components</span>
                  </a>
                  <div class="collapse" id="navbar-components">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="../pages/components/buttons.html" class="nav-link">
                          <span class="sidenav-mini-icon"> B </span>
                          <span class="sidenav-normal"> Buttons </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/components/cards.html" class="nav-link">
                          <span class="sidenav-mini-icon"> C </span>
                          <span class="sidenav-normal"> Cards </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/components/grid.html" class="nav-link">
                          <span class="sidenav-mini-icon"> G </span>
                          <span class="sidenav-normal"> Grid </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/components/notifications.html" class="nav-link">
                          <span class="sidenav-mini-icon"> N </span>
                          <span class="sidenav-normal"> Notifications </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/components/icons.html" class="nav-link">
                          <span class="sidenav-mini-icon"> I </span>
                          <span class="sidenav-normal"> Icons </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/components/typography.html" class="nav-link">
                          <span class="sidenav-mini-icon"> T </span>
                          <span class="sidenav-normal"> Typography </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">
                          <span class="sidenav-mini-icon"> M </span>
                          <span class="sidenav-normal"> Multi level </span>
                        </a>
                        <div class="collapse show" id="navbar-multilevel" style="">
                          <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                              <a href="#!" class="nav-link ">Third level menu</a>
                            </li>
                            <li class="nav-item">
                              <a href="#!" class="nav-link ">Just another link</a>
                            </li>
                            <li class="nav-item">
                              <a href="#!" class="nav-link ">One last link</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                    <i class="ni ni-single-copy-04 text-pink"></i>
                    <span class="nav-link-text">Forms</span>
                  </a>
                  <div class="collapse" id="navbar-forms">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="../pages/forms/elements.html" class="nav-link">
                          <span class="sidenav-mini-icon"> E </span>
                          <span class="sidenav-normal"> Elements </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/forms/components.html" class="nav-link">
                          <span class="sidenav-mini-icon"> C </span>
                          <span class="sidenav-normal"> Components </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/forms/validation.html" class="nav-link">
                          <span class="sidenav-mini-icon"> V </span>
                          <span class="sidenav-normal"> Validation </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                    <i class="ni ni-align-left-2 text-default"></i>
                    <span class="nav-link-text">Tables</span>
                  </a>
                  <div class="collapse" id="navbar-tables">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="../pages/tables/tables.html" class="nav-link">
                          <span class="sidenav-mini-icon"> T </span>
                          <span class="sidenav-normal"> Tables </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/tables/sortable.html" class="nav-link">
                          <span class="sidenav-mini-icon"> S </span>
                          <span class="sidenav-normal"> Sortable </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/tables/datatables.html" class="nav-link">
                          <span class="sidenav-mini-icon"> D </span>
                          <span class="sidenav-normal"> Datatables </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                    <i class="ni ni-map-big text-primary"></i>
                    <span class="nav-link-text">Maps</span>
                  </a>
                  <div class="collapse" id="navbar-maps">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="../pages/maps/google.html" class="nav-link">
                          <span class="sidenav-mini-icon"> G </span>
                          <span class="sidenav-normal"> Google </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../pages/maps/vector.html" class="nav-link">
                          <span class="sidenav-mini-icon"> V </span>
                          <span class="sidenav-normal"> Vector </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/widgets.html">
                    <i class="ni ni-archive-2 text-green"></i>
                    <span class="nav-link-text">Widgets</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/charts.html">
                    <i class="ni ni-chart-pie-35 text-info"></i>
                    <span class="nav-link-text">Charts</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../pages/calendar.html">
                    <i class="ni ni-calendar-grid-58 text-red"></i>
                    <span class="nav-link-text">Calendar</span>
                  </a>
                </li>
              </ul>
              <!-- Divider -->
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
                <span class="docs-normal">Documentation</span>
                <span class="docs-mini">D</span>
              </h6>
              <!-- Navigation -->
              <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/getting-started/overview.html" target="_blank">
                    <i class="ni ni-spaceship"></i>
                    <span class="nav-link-text">Getting started</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/foundation/colors.html" target="_blank">
                    <i class="ni ni-palette"></i>
                    <span class="nav-link-text">Foundation</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/components/alerts.html" target="_blank">
                    <i class="ni ni-ui-04"></i>
                    <span class="nav-link-text">Components</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/plugins/charts.html" target="_blank">
                    <i class="ni ni-chart-pie-35"></i>
                    <span class="nav-link-text">Plugins</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- Main content -->
      <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Search form -->
              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                  <div class="input-group input-group-alternative input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </form>
              <!-- Navbar links -->
              <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item d-xl-none">
                  <!-- Sidenav toggler -->
                  <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                      <i class="sidenav-toggler-line"></i>
                    </div>
                  </div>
                </li>
                <li class="nav-item d-sm-none">
                  <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                    <i class="ni ni-zoom-split-in"></i>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                    <!-- Dropdown header -->
                    <div class="px-3 py-3">
                      <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                    </div>
                    <!-- List group -->
                    <div class="list-group list-group-flush">
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>5 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>2 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                          </div>
                        </div>
                      </a>
                      <a href="#!" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <!-- Avatar -->
                            <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                          </div>
                          <div class="col ml--2">
                            <div class="d-flex justify-content-between align-items-center">
                              <div>
                                <h4 class="mb-0 text-sm">John Snow</h4>
                              </div>
                              <div class="text-right text-muted">
                                <small>3 hrs ago</small>
                              </div>
                            </div>
                            <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                          </div>
                        </div>
                      </a>
                    </div>
                    <!-- View all -->
                    <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-ungroup"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                    <div class="row shortcuts px-4">
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                          <i class="ni ni-calendar-grid-58"></i>
                        </span>
                        <small>Calendar</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                          <i class="ni ni-email-83"></i>
                        </span>
                        <small>Email</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                          <i class="ni ni-credit-card"></i>
                        </span>
                        <small>Payments</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                          <i class="ni ni-books"></i>
                        </span>
                        <small>Reports</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                          <i class="ni ni-pin-3"></i>
                        </span>
                        <small>Maps</small>
                      </a>
                      <a href="#!" class="col-4 shortcut-item">
                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                          <i class="ni ni-basket"></i>
                        </span>
                        <small>Shop</small>
                      </a>
                    </div>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                      <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                      </span>
                      <div class="media-body  ml-2  d-none d-lg-block">
                        <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                      </div>
                    </div>
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <div class="dropdown-header noti-title">
                      <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-single-02"></i>
                      <span>My profile</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-settings-gear-65"></i>
                      <span>Settings</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-calendar-grid-58"></i>
                      <span>Activity</span>
                    </a>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-support-16"></i>
                      <span>Support</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#!" class="dropdown-item">
                      <i class="ni ni-user-run"></i>
                      <span>Logout</span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header header-dark bg-primary pb-6 content__title content__title--calendar">
          <div class="container-fluid">
            <div class="header-body">
              <div class="row align-items-center py-4">
                <div class="col-lg-6">
                  <h6 class="fullcalendar-title h2 text-white d-inline-block mb-0">Full calendar</h6>
                  <nav aria-label="breadcrumb" class="d-none d-lg-inline-block ml-lg-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                      <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0 text-lg-right">
                  <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                    <i class="fas fa-angle-left"></i>
                  </a>
                  <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                    <i class="fas fa-angle-right"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="month">Month</a>
                  <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicWeek">Week</a>
                  <a href="#" class="btn btn-sm btn-neutral" data-calendar-view="basicDay">Day</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
          <div class="row">
            <div class="col">
              <!-- Fullcalendar -->
              <div class="card card-calendar">
                <!-- Card header -->
                <div class="card-header">
                  <!-- Title -->
                  <h5 class="h3 mb-0">Calendar</h5>
                </div>
                <!-- Card body -->
                <div class="card-body p-0">
                  <div class="calendar" data-toggle="calendar" id="calendar"></div>
                </div>
              </div>
              <!-- Modal - Add new event -->
              <!--* Modal header *-->
              <!--* Modal body *-->
              <!--* Modal footer *-->
              <!--* Modal init *-->
              <div class="modal fade" id="new-event" tabindex="-1" role="dialog" aria-labelledby="new-event-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
                  <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="new-event--form">
                        <div class="form-group">
                          <label class="form-control-label">Event title</label>
                          <input type="text" class="form-control form-control-alternative new-event--title" placeholder="Event Title">
                        </div>
                        <div class="form-group mb-0">
                          <label class="form-control-label d-block mb-3">Status color</label>
                          <div class="btn-group btn-group-toggle btn-group-colors event-tag" data-toggle="buttons">
                            <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                            <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                            <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                            <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                            <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                            <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                          </div>
                        </div>
                        <input type="hidden" class="new-event--start" />
                        <input type="hidden" class="new-event--end" />
                      </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary new-event--add">Add event</button>
                      <button type="button" class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal - Edit event -->
              <!--* Modal body *-->
              <!--* Modal footer *-->
              <!--* Modal init *-->
              <div class="modal fade" id="edit-event" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
                  <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form class="edit-event--form">
                        <div class="form-group">
                          <label class="form-control-label">Event title</label>
                          <input type="text" class="form-control form-control-alternative edit-event--title" placeholder="Event Title">
                        </div>
                        <div class="form-group">
                          <label class="form-control-label d-block mb-3">Status color</label>
                          <div class="btn-group btn-group-toggle btn-group-colors event-tag mb-0" data-toggle="buttons">
                            <label class="btn bg-info active"><input type="radio" name="event-tag" value="bg-info" autocomplete="off" checked></label>
                            <label class="btn bg-warning"><input type="radio" name="event-tag" value="bg-warning" autocomplete="off"></label>
                            <label class="btn bg-danger"><input type="radio" name="event-tag" value="bg-danger" autocomplete="off"></label>
                            <label class="btn bg-success"><input type="radio" name="event-tag" value="bg-success" autocomplete="off"></label>
                            <label class="btn bg-default"><input type="radio" name="event-tag" value="bg-default" autocomplete="off"></label>
                            <label class="btn bg-primary"><input type="radio" name="event-tag" value="bg-primary" autocomplete="off"></label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="form-control-label">Description</label>
                          <textarea class="form-control form-control-alternative edit-event--description textarea-autosize" placeholder="Event Desctiption"></textarea>
                          <i class="form-group--bar"></i>
                        </div>
                        <input type="hidden" class="edit-event--id">
                      </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button class="btn btn-primary" data-calendar="update">Update</button>
                      <button class="btn btn-danger" data-calendar="delete">Delete</button>
                      <button class="btn btn-link ml-auto" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer -->
          <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                  &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </footer>
        </div>
      </div>       
    </div>

    <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.min.js') }}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{ asset('assets/js/demo.min.js') }}"></script>
</body>
</html>
