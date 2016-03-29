<!DOCTYPE html>
<html>
    <head>
        <title>NIH T-32 Home</title>
        <!--External CSS Stylesheets-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        
        <!--DashGum CSS-->
        <link href="<?= base_url() ?>css/style.css" rel="stylesheet">
        <link href="<?= base_url() ?>css/style-responsive.css" rel="stylesheet">
        
        <!--Local NIH-T32 CSS-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/niht32.css">
        
        
    </head>
    
  	<body>

	<section id="container" >
	    <!-- **********************************************************************************************************************************************************
	    TOP BAR CONTENT & NOTIFICATIONS
	    *********************************************************************************************************************************************************** -->
	    <!--header start-->
	    <header class="header black-bg">
	            <div class="sidebar-toggle-box">
	                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
	            </div>
	          <!--logo start-->
	          <a href="<?= base_url() ?>" class="logo"><b>NIH T-32</b></a>
	          <!--logo end-->
	          <div class="nav notify-row" id="top_menu">
	              <!--  notification start -->
	              <ul class="nav top-menu">
	              	
	              </ul>
	              <!--  notification end -->
	          </div>
	          <div class="top-menu">
	          	<ul class="nav pull-right top-menu">
	                  <li><a class="logout" href="login.html">Logout</a></li>
	          	</ul>
	          </div>
	      </header>
	    <!--header end-->
	    
	    <!-- **********************************************************************************************************************************************************
	    MAIN SIDEBAR MENU
	    *********************************************************************************************************************************************************** -->
	    <!--sidebar start-->
	    <aside>
	        <div id="sidebar"  class="nav-collapse ">
	            <!-- sidebar menu start-->
	            <ul class="sidebar-menu" id="nav-accordion">
	            
	            	  <p class="centered"><a href="profile.html"><img src="<?= base_url() ?>img/male-circle-512.png" class="img-circle" width="60"></a></p>
	            	  <h5 class="centered">Pearse Hutson</h5>
	            	  	
	                <li class="mt">
	                    <a href="<?= base_url() ?>">
	                        <i class="fa fa-dashboard"></i>
	                        <span>Dashboard</span>
	                    </a>
	                </li>
	                
	                <li class="sub-menu">
	                	<a href="javascript:;">
		                	<i class="fa fa-user"></i>
		                	<span>Students</span>
		                </a>
		                <ul class="sub">
		                	<li><a href="<?= base_url('users/show') ?>">View All Students</a></li>
		                </ul>
	                </li>

	                <li class="sub-menu">
	                    <a href="javascript:;" >
	                        <i class="fa fa-ticket"></i>
	                        <span>Activities</span>
	                    </a>
	                    <ul class="sub">
	                        <li><a  href="<?= base_url('activities/show') ?>">View Upcomming Activities</a></li>
	                        <li><a  href="#">View Attended Activities</a></li>
	                        <li><a  href="#">Manage Activities</a></li>
	                    </ul>
	                </li>

	                <li class="sub-menu">
	                    <a href="javascript:;" >
	                        <i class="fa fa-book"></i>
	                        <span>Outcomes</span>
	                    </a>
	                    <ul class="sub">
	                        <li><a  href="#">View My Outcomes</a></li>
	                        <li><a  href="#">View Recent Outcomes</a></li>
	                    </ul>
	                </li>
	                <li class="sub-menu">
	                	<a href="javascript:;" >
	                        <i class="fa fa-database"></i>
	                        <span>Carpentry</span>
	                    </a>
	                    <ul class="sub">
	                        <li><a  href="#">View My Data Carpentry</a></li>
	                        <li><a  href="#">View My Software Carpentry</a></li>
	                        <li><a  href="#">View Data Carpentry</a></li>
	                        <li><a  href="<?= base_url('software_carpentries/show') ?>">View Software Carpentry</a></li>
	                    </ul>
	                </li>
	                <li class="sub-menu">
	                    <a href="javascript:;" >
	                        <i class="fa fa-university"></i>
	                        <span>Training Progress</span>
	                    </a>
	                    <ul class="sub">
	                        <li><a  href="#">My Training Progress</a></li>
	                        <li><a  href="#">Manage Training Progress</a></li>
	                    </ul>
	                </li>
	                <li class="sub-menu">
	                    <a href="javascript:;" >
	                        <i class="fa fa-graduation-cap"></i>
	                        <span>Degree Progress</span>
	                    </a>
	                    <ul class="sub">
	                        <li><a  href="#">My Degree Progress</a></li>
	                        <li><a  href="#">Manage Degree Progress</a></li>
	                    </ul>
	                </li>

	            </ul>
	            <!-- sidebar menu end-->
	        </div>
	    </aside>
	    <!--sidebar end-->
	    
	    <!-- **********************************************************************************************************************************************************
	    MAIN CONTENT
	    *********************************************************************************************************************************************************** -->
	    <!--main content start-->
	    <section id="main-content">
	        <section class="wrapper site-min-height">
	        	<?= $view_content ?>
			</section><! --/wrapper -->
	    </section><!-- /MAIN CONTENT -->
	    <!--main content end-->
	    
	    
	    <!--footer start-->
	    <footer class="site-footer">
	        <div class="text-center">
	            2016 - NIH T-32 University of Missouri
	            <a href="blank.html#" class="go-top">
	                <i class="fa fa-angle-up"></i>
	            </a>
	        </div>
	    </footer>
	    <!--footer end-->
	</section>
  
  
        <?= $notice ?>
        
        
        <!--External Javascript-->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!--DashGum Javascript-->
        <script src="<?= base_url() ?>js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="<?= base_url() ?>js/jquery.ui.touch-punch.min.js"></script>
        <script class="include" type="text/javascript" src="<?= base_url() ?>js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?= base_url() ?>js/jquery.scrollTo.min.js"></script>
        <script src="<?= base_url() ?>js/jquery.nicescroll.js" type="text/javascript"></script>
        
        <!--common script for all pages-->
        <script src="<?= base_url() ?>js/common-scripts.js"></script>
        
        <!--Local NIH-T32 JS-->
        <script src="<?= base_url() ?>js/niht32.js"></script>
        
        <script>
            //custom select box
            $(function(){
            	$('select.styled').customSelect();
            });
        </script>
    </body>
</html>