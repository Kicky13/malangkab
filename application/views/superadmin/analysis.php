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
                <li>
                    <a href="<?php echo base_url('index.php/admin'); ?>">
                        <i class="material-icons">wc</i>
                        <p>Personnel</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/sites'); ?>">
                        <i class="material-icons">web</i>
                        <p>Sites</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('index.php/periode'); ?>">
                        <i class="material-icons">date_range</i>
                        <p>Periode</p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#pertanyaan">
                        <i class="material-icons">help</i>
                        <p>Question
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pertanyaan">
                        <ul class="nav">
                            <li>
                                <a href="<?php echo base_url('index.php/dimension/viewDimension'); ?>">Dimension</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/question/viewQuestion'); ?>">Question</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="active">
                    <a data-toggle="collapse" href="#laporan">
                        <i class="material-icons">assignment</i>
                        <p>Report
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="laporan">
                        <ul class="nav">
                            <li>
                                <a href="<?php echo base_url('index.php/report/response'); ?>">Response Result</a>
                            </li>
                            <li class="active">
                                <a href="#">Analysis</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('index.php/suggestion'); ?>">Suggestion</a>
                            </li>
                        </ul>
                    </div>
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
                    <a class="navbar-brand" href="#"> Result Analysis </a>
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
                <div class="row">
                    <div class="col-md-6">
                        <select id="web" class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select"
                                data-size="7">
                            <option selected disabled>Choose a City</option>
                            <?php foreach ($web as $value) { ?>
                                <option <?php echo ($value['site_id'] == $id) ? "selected" : ""; ?> value="<?php echo $value['site_id']; ?>"><?php echo $value['site_city']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <section id="data" <?php echo ($id == 0) ? "hidden" : ""; ?>>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header"
                                     data-background-color="<?php echo ($total['fact'] >= 10) ? "green" : "red"; ?>">
                                    <i class="material-icons">assignment_late</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Fact Result</p>
                                    <h3 class="card-title"><?php echo $total['fact']; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked from Questionaire
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header"
                                     data-background-color="<?php echo ($total['goal'] >= 5) ? "green" : "red"; ?>">
                                    <i class="material-icons">assignment_ind</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Goal Result</p>
                                    <h3 class="card-title"><?php echo $total['goal']; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> For This Periode
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title">Question Anaylisis</h4>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Question ID</th>
                                                <th>Fact Result</th>
                                                <th>Goal Result</th>
                                                <th class="text-center">GAP</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $no = 1;
                                            foreach ($data as $row) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?></td>
                                                    <td><?php echo $row['label']; ?></td>
                                                    <td><?php echo $row['fact']; ?></td>
                                                    <td><?php echo $row['goal']; ?></td>
                                                    <td class="td-actions text-center"><?php echo $row['gap']; ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="<?php echo ($total['fact'] >= 10 && $total['goal'] >= 5) ? base_url('index.php/report/analyzeQuestion/'.$id) : "#"; ?>" <?php echo ($total['fact'] >= 10 && $total['goal'] >= 5) ? "" : ""; ?>
                                       class="btn btn-info btn-round">Calculate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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
<script>
    $(document).ready(function () {
        console.log("Coba");
        $('#web').change(function () {
            window.location.replace('<?php echo base_url('index.php/report/resultAnalysis/'); ?>' + $('#web').val())
        })
    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2017 15:38:09 GMT -->
</html></title>
</head>
<body>

</body>
</html>