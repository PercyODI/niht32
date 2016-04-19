<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NIH T-32 | </title>

    <!-- Bootstrap core CSS -->

    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

    <link href="<?= base_url('fonts/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/animate.min.css') ?>" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="<?= base_url('css/custom.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/maps/jquery-jvectormap-2.0.3.css') ?>" />
    <link href="<?= base_url('css/icheck/flat/green.css') ?>" rel="stylesheet" />
    <link href="<?= base_url('css/floatexamples.css') ?>" rel="stylesheet" type="text/css" />
    <!-- switchery -->
    <link rel="stylesheet" href="<?= base_url('css/switchery/switchery.min.css') ?>" />

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/nprogress.js') ?>"></script>

    <!--[if lt IE 9]>
    <script src="<?= base_url('assets/js/ie8-responsive-file-warning.js') ?>"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= base_url() ?>" class="site_title"><i class="fa fa-paw"></i> <span>NIH T-32</span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="<?= base_url('images/img.jpg') ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Empty user</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>&nbsp</h3>
                            <ul class="nav side-menu">
                              <li class="nv">
                                <a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a>
                                </li>
                                <li>
                                  <a><i class="fa fa-graduation-cap"></i> Trainees <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                          <a href="<?= base_url('trainees/add_trainee') ?>">Add a Trainee</a>
                                        </li>
                                        <li>
                                          <a href="<?= base_url('trainees/view_trainees') ?>">Find a Trainee</a>
                                        </li>
                                    </ul>
                                </li>
                                <li> 
                                  <a><i class="fa fa-edit"></i> Test <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                          <a href="empty.html">Meny1.1s</a>
                                        </li>
                                        <li class="current-page">
                                          <a href="<?= base_url('test/menu_test') ?>">Menu Test</a>
                                        </li>
                                        <li>
                                          <a href="empty.html">Meny2.2s</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
      <div class="right_col" role="main">
          <div class="">
              <div class="page-title">
                  <div class="title_left">
                      <h3><?= $theme['title'] ?> <small><?= $theme['subtitle'] ?></small></h3>
                  </div>
      
                  <div class="title_right">
                  <!--    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">-->
                  <!--        <div class="input-group">-->
                  <!--            <input type="text" class="form-control" placeholder="Search for...">-->
                  <!--            <span class="input-group-btn">-->
                  <!--    <button class="btn btn-default" type="button">Go!</button>-->
                  <!--</span>-->
                  <!--        </div>-->
                  <!--    </div>-->
                  </div>
              </div>
              <div class="clearfix"></div>
                  <?= $view_content ?>
          </div>
      
          <!-- footer content -->
          <footer>
              <div class="">
                  <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                      <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                  </p>
              </div>
              <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
      
      </div>
      <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

    <!-- gauge js -->
    <!-- chart js -->
    <script src="<?= base_url('js/chartjs/chart.min.js') ?>"></script>
    <!-- bootstrap progress js -->
    <script src="<?= base_url('js/progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- icheck -->
    <script src="<?= base_url('js/icheck/icheck.min.js') ?>"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="<?= base_url('js/moment/moment.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/datepicker/daterangepicker.js') ?>"></script>

    

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="<?= base_url('js/excanvas.min.js') ?>"></script><![endif]-->
    <script type="text/javascript" src="<?= base_url('js/flot/jquery.flot.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/jquery.flot.pie.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/jquery.flot.orderBars.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/jquery.flot.time.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/date.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/jquery.flot.spline.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/jquery.flot.stack.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/curvedLines.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/flot/jquery.flot.resize.js') ?>"></script>

    <!-- worldmap -->
    <script type="text/javascript" src="<?= base_url('js/maps/jquery-jvectormap-2.0.3.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/maps/gdp-data.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/maps/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/maps/jquery-jvectormap-us-aea-en.js') ?>"></script>
    <!-- pace -->
    <script src="<?= base_url('js/pace/pace.min.js') ?>"></script>
   
    <!-- skycons -->
    <script src="<?= base_url('js/skycons/skycons.min.js') ?>"></script>

    <!-- datepicker -->
    
    <script>
        NProgress.done();
    </script>
    <!-- /datepicker -->
    
    <!-- tags -->
    <script src="<?= base_url('js/tags/jquery.tagsinput.min.js') ?>"></script>
    <!-- input mask -->
    <script src="<?= base_url('js/input_mask/jquery.inputmask.js') ?>"></script>
    <!-- form wizard -->
    <script type="text/javascript" src="<?= base_url('js/wizard/jquery.smartWizard.js') ?>"></script>
    <!-- switchery -->
    <script src="<?= base_url('js/switchery/switchery.min.js') ?>"></script>
    
    <!--Gentellela Custom JS-->
    <script src="<?= base_url('js/custom.js') ?>"></script>
    
    <?php
    foreach($external_scripts as $script) {
      echo "<script src='{$script}'></script>";
    }
  ?>
    <!-- /footer content -->
</body>

</html>
