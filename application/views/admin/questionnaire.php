<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SI EVALUASI</title>
    <head>
        <meta charset="utf-8"/>
        <link rel="apple-touch-icon" sizes="76x76"
              href="<?php echo base_url() . 'assets/'; ?>admin/img/apple-icon.png"/>
        <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/'; ?>admin/img/favicon.png"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
        <meta name="viewport" content="width=device-width"/>
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro"/>
        <!--  Social tags      -->
        <meta name="keywords"
              content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
        <meta name="description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
        <meta itemprop="description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@creativetim">
        <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
        <meta name="twitter:description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
        <meta name="twitter:creator" content="@creativetim">
        <meta name="twitter:image"
              content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
        <!-- Open Graph data -->
        <meta property="fb:app_id" content="655968634437471">
        <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro"/>
        <meta property="og:image"
              content="../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg"/>
        <meta property="og:description"
              content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design."/>
        <meta property="og:site_name" content="Creative Tim"/>
        <!-- Bootstrap core CSS     -->
        <link href="<?php echo base_url() . 'assets/'; ?>admin/css/bootstrap.min.css" rel="stylesheet"/>
        <!--  Material Dashboard CSS    -->
        <link href="<?php echo base_url() . 'assets/'; ?>admin/css/material-dashboard.css" rel="stylesheet"/>
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?php echo base_url() . 'assets/'; ?>admin/css/demo.css" rel="stylesheet"/>
        <!--     Fonts and icons     -->
        <link href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons"/>
    </head>

<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black"
         data-image="<?php echo base_url() . 'assets/'; ?>admin/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="http://www.creative-tim.com/" class="simple-text">
                SI EVALUASI
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="http://www.creative-tim.com/" class="simple-text">
                Ct
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="<?php echo base_url() . 'assets/'; ?>admin/img/faces/avatar.jpg"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <?php echo $_SESSION['name']; ?>
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('index.php/dashboard'); ?>">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="material-icons">assignment</i>
                        <p>Questionnaire</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Questionnaire </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url('index.php/login/logout'); ?>" class="dropdown-toggle">
                                <i class="material-icons">keyboard_tab</i>
                                <p class="hidden-lg hidden-md">Logout</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <section id="alert" <?php echo ($profile['status'] == 'Nonactive') ? "" : "hidden"; ?>>
                    <div class="header text-center">
                        <h3 class="title">Anda Telah Mengisi Kuesioner</h3>
                        <p class="category">Kembali lagi pada periode selanjutnya</p>
                    </div>
                </section>
                <section id="question" <?php echo ($profile['status'] == 'Active') ? "" : "hidden"; ?>>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title">Questionnaire</h4>
                                <div class="card-content">
                                    <form role="form"
                                          action="<?php echo base_url('index.php/questionaire/submitResponse'); ?>"
                                          method="post">
                                        <input name="name" type="hidden" value="<?php echo $profile['name']; ?>">
                                        <input name="age" type="hidden" value="<?php echo ''; ?>">
                                        <input name="address" type="hidden" value="<?php echo $profile['address']; ?>">
                                        <input name="web" type="hidden" value="<?php echo $profile['web']; ?>">
                                        <input name="label" type="hidden" value="ADM">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Question</th>
                                                    <th>SS</th>
                                                    <th>S</th>
                                                    <th>N</th>
                                                    <th>TS</th>
                                                    <th>STS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $no = 1;
                                                foreach ($data as $row) { ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no++; ?></td>
                                                        <td><?php echo $row['question_content']; ?></td>
                                                        <td>
                                                            <div class="radio">
                                                                <label>
                                                                    <input required type="radio"
                                                                           name="<?php echo $row['question_label']; ?>"
                                                                           value="5">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="radio">
                                                                <label>
                                                                    <input required type="radio"
                                                                           name="<?php echo $row['question_label']; ?>"
                                                                           value="4">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="radio">
                                                                <label>
                                                                    <input required type="radio"
                                                                           name="<?php echo $row['question_label']; ?>"
                                                                           value="3">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="radio">
                                                                <label>
                                                                    <input required type="radio"
                                                                           name="<?php echo $row['question_label']; ?>"
                                                                           value="2">
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio"
                                                                           name="<?php echo $row['question_label']; ?>"
                                                                           value="1">
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-round">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/perfect-scrollbar.jquery.min.js"
        type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url() . 'assets/'; ?>admin/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        // Javascript method's body can be found in <?php echo base_url() . 'assets/'; ?>js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2017 15:38:09 GMT -->
</html></title>
</head>
<body>

</body>
</html>