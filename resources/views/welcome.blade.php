<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/alpino/horizontal/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 18:58:36 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>:: Alpino Horizontal :: Tabs</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<!-- Custom Css -->
<link  rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="ml-2" for="Email">Email<span class="text-danger " >*</span></label>
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label class="ml-2" for="Email">Password<span class="text-danger" >*</span></label>
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label class="ml-2" for="Email">Confirmed Password<span class="text-danger" >*</span></label>
                                <input type="password" class="form-control" placeholder="Password" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="overlay"></div><!-- Overlay For Sidebars -->

<nav class="navbar">
    <div class="container">
    <ul class="nav navbar-nav">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="h-bars"></a>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo-black.svg" width="35" alt="Alpino"><span class="m-l-10">Alpino</span></a>
            </div>
        </li>
        <li class="search_bar">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
            </div>
        </li>

        <li class="dropdown notifications badgebit"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>

            </a>
            <ul class="dropdown-menu pullDown">

            </ul>
        </li>

        <li class="float-right">





            <a href="{{route('getLogin')}}">Login</a>
            <a href="{{route('getRegister')}}">Create Account</a>

        </li>
    </ul>
    </div>
</nav>

{{-- <div class="menu-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="h-menu">
                    <li><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                    <li><a href="javascript:void(0)">Apps</a>
                        <ul class="sub-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>
                            <li><a href="events.html">Calendar</a></li>
                            <li><a href="file-dashboard.html">File Manager</a></li>
                            <li><a href="contact.html">Contact list</a></li>

                            <li><a href="app-ticket.html">Support Ticket</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-dashboard.html">Dashboard</a></li>
                            <li><a href="blog-post.html">New Post</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="open active"><a href="javascript:void(0)">UI Kit</a>
                        <ul class="sub-menu mega-menu">
                            <li>
                                <ul class="sub-menu-two">
                                    <li><a href="ui_kit.html">UI KIT</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="collapse.html">Collapse</a></li>
                                    <li><a href="colors.html">Colors</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="sub-menu-two">
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="dialogs.html">Dialogs</a></li>
                                    <li><a href="list-group.html">List Group</a></li>
                                    <li><a href="media-object.html">Media Object</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="sub-menu-two">
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="notifications.html">Notifications</a></li>
                                    <li><a href="progressbars.html">Progress Bars</a></li>
                                    <li><a href="range-sliders.html">Range Sliders</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="sub-menu-two">
                                    <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                                    <li class="active"><a href="tabs.html">Tabs</a></li>
                                    <li><a href="waves.html">Waves</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Forms</a>
                        <ul class="sub-menu">
                            <li><a href="basic-form-elements.html">Basic Elements</a></li>
                            <li><a href="advanced-form-elements.html">Advanced Elements</a></li>
                            <li><a href="form-examples.html">Form Examples</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-editors.html">Editors</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-img-cropper.html">Image Cropper</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Tables</a>
                        <ul class="sub-menu">
                            <li><a href="normal-tables.html">Normal Tables</a></li>
                            <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                            <li><a href="editable-table.html">Editable Tables</a></li>

                            <li><a href="table-color.html">Tables Color</a></li>
                            <li><a href="table-filter.html">Tables Filter</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Charts</a>
                        <ul class="sub-menu">
                            <li><a href="morris.html">Morris</a></li>
                            <li><a href="flot.html">Flot</a></li>
                            <li><a href="chartjs.html">ChartJS</a></li>
                            <li><a href="sparkline.html">Sparkline</a></li>
                            <li><a href="jquery-knob.html">Jquery Knob</a></li>
                            <li><a href="chart-e.html">E Chart</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Widgets</a>
                        <ul class="sub-menu">
                            <li><a href="widgets-app.html">Apps Widgetse</a></li>
                            <li><a href="widgets-data.html">Data Widgetse</a></li>
                            <li><a href="widgets-chart.html">Chart Widgetse</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Authentication</a>
                        <ul class="sub-menu">
                            <li><a href="sign-in.html">Sign In</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                            <li><a href="404.html">Page 404</a></li>
                            <li><a href="403.html">Page 403</a></li>
                            <li><a href="500.html">Page 500</a></li>
                            <li><a href="503.html">Page 503</a></li>
                            <li><a href="page-offline.html">Page Offline</a></li>
                            <li><a href="locked.html">Locked Screen</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Maps</a>
                        <ul class="sub-menu">
                            <li><a href="google.html">Google Map</a></li>
                            <li><a href="yandex.html">YandexMap</a></li>
                            <li><a href="jvectormap.html">jVectorMap</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Pages</a>
                        <ul class="sub-menu sm-mega-menu">
                            <li>
                                <ul>
                                    <li><a href="blank.html">Blank Page</a></li>
                                    <li><a href="teams-board.html">Teams Board</a></li>
                                    <li><a href="projects.html">Projects List</a></li>
                                    <li><a href="image-gallery.html">Image Gallery</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="invoices.html">Invoices</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="search-results.html">Search Results</a></li>
                                    <li><a href="helper-class.html">Helper Classes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}

<aside class="right_menu">
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colors</strong> Skins</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <ul class="setting-list list-unstyled m-b-0">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox m-b-0">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane slideLeft" id="activity">
                <div class="card activities">
                    <div class="header">
                        <h2><strong>Recent</strong> Activity Feed</h2>
                    </div>
                    <div class="body">
                        <div class="streamline b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p><a href="#">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">12:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">2 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">4 Week ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">5 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">5 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 Month ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>

<section class="content">
    <div class="container">



    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">

                    @if (session('secret_link'))
                    <div class="alert alert-success">
                        Secret link created: <a href="{{ session('secret_link') }}">{{ session('secret_link') }}</a>
                    </div>
                    @endif
                </div>
                <div class="body">
                           <p>Paste a password, secret message or private link below.
                           </p>
                           <h6> Keep sensitive info out of your email and chat logs.</h6>
                    <div role="tabpanel" class="tab-pane in active" id="home_with_icon_title">
                             <form action="{{ route('store.secret') }}" method="POST">
                               @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card">

                                            <div class="body">

                                                <div class="row clearfix">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea rows="4" name="content" class="form-control no-resize" placeholder="Secret contnet goes here...."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="phasepass" class="form-control" placeholder="Phasepass" />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="lifetime" class="form-control" placeholder="lifetime" />
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group" >
                                    <button  class=" form-control btn btn-primary text-white" >Create secret Link</button>
                                </div>
                             </form>
                        <div class="form-group" >
                            <button  class=" form-control btn btn-success text-white" style="background-color: red !important;">Or aGenrate  Random Password</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/alpino/horizontal/tabs.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 May 2024 18:59:51 GMT -->
</html>
