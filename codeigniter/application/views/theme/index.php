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
	                  <!-- settings start -->
	                  <li class="dropdown">
	                      <a data-toggle="dropdown" class="dropdown-toggle" href="<?= base_url() ?>">
	                          <i class="fa fa-tasks"></i>
	                          <span class="badge bg-theme">4</span>
	                      </a>
	                      <ul class="dropdown-menu extended tasks-bar">
	                          <div class="notify-arrow notify-arrow-green"></div>
	                          <li>
	                              <p class="green">You have 4 pending tasks</p>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <div class="task-info">
	                                      <div class="desc">DashGum Admin Panel</div>
	                                      <div class="percent">40%</div>
	                                  </div>
	                                  <div class="progress progress-striped">
	                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
	                                          <span class="sr-only">40% Complete (success)</span>
	                                      </div>
	                                  </div>
	                              </a>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <div class="task-info">
	                                      <div class="desc">Database Update</div>
	                                      <div class="percent">60%</div>
	                                  </div>
	                                  <div class="progress progress-striped">
	                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
	                                          <span class="sr-only">60% Complete (warning)</span>
	                                      </div>
	                                  </div>
	                              </a>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <div class="task-info">
	                                      <div class="desc">Product Development</div>
	                                      <div class="percent">80%</div>
	                                  </div>
	                                  <div class="progress progress-striped">
	                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
	                                          <span class="sr-only">80% Complete</span>
	                                      </div>
	                                  </div>
	                              </a>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <div class="task-info">
	                                      <div class="desc">Payments Sent</div>
	                                      <div class="percent">70%</div>
	                                  </div>
	                                  <div class="progress progress-striped">
	                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
	                                          <span class="sr-only">70% Complete (Important)</span>
	                                      </div>
	                                  </div>
	                              </a>
	                          </li>
	                          <li class="external">
	                              <a href="#">See All Tasks</a>
	                          </li>
	                      </ul>
	                  </li>
	                  <!-- settings end -->
	                  <!-- inbox dropdown start-->
	                  <li id="header_inbox_bar" class="dropdown">
	                      <a data-toggle="dropdown" class="dropdown-toggle" href="<?= base_url() ?>">
	                          <i class="fa fa-envelope-o"></i>
	                          <span class="badge bg-theme">5</span>
	                      </a>
	                      <ul class="dropdown-menu extended inbox">
	                          <div class="notify-arrow notify-arrow-green"></div>
	                          <li>
	                              <p class="green">You have 5 new messages</p>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <span class="photo img-circle"><img alt="avatar" src="http://csfinance.org/wp-content/uploads/2015/03/Profile-Pic-Circle.jpg"></span>
	                                  <span class="subject">
	                                  <span class="from">Zac Snider</span>
	                                  <span class="time">Just now</span>
	                                  </span>
	                                  <span class="message">
	                                      Hi mate, how is everything?
	                                  </span>
	                              </a>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <span class="photo img-circle"><img alt="avatar" src="http://static1.squarespace.com/static/51215365e4b06840010aca1a/t/544c5849e4b060cd11fec582/1414289524202/profile-pic-circle.png"></span>
	                                  <span class="subject">
	                                  <span class="from">Divya Manian</span>
	                                  <span class="time">40 mins.</span>
	                                  </span>
	                                  <span class="message">
	                                   Hi, I need your help with this.
	                                  </span>
	                              </a>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <span class="photo img-circle"><img alt="avatar" src="http://flamingonest.com/images/donatbalipapp_profile_circle.png"></span>
	                                  <span class="subject">
	                                  <span class="from">Dan Rogers</span>
	                                  <span class="time">2 hrs.</span>
	                                  </span>
	                                  <span class="message">
	                                      Love your new Dashboard.
	                                  </span>
	                              </a>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">
	                                  <span class="img-circle photo"><img alt="avatar" src="http://weavinginfluence.com/wp-content/uploads/2015/10/image003.jpg"></span>
	                                  <span class="subject">
	                                  <span class="from">Dj Sherman</span>
	                                  <span class="time">4 hrs.</span>
	                                  </span>
	                                  <span class="message">
	                                      Please, answer asap.
	                                  </span>
	                              </a>
	                          </li>
	                          <li>
	                              <a href="<?= base_url() ?>">See all messages</a>
	                          </li>
	                      </ul>
	                  </li>
	                  <!-- inbox dropdown end -->
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
	                        <li><a  href="#">View Software Carpentry</a></li>
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
	                <li class="sub-graduation-cap">
	                    <a href="javascript:;" >
	                        <i class=" fa fa-bar-chart-o"></i>
	                        <span>Charts</span>
	                    </a>
	                    <ul class="sub">
	                        <li><a  href="morris.html">Morris</a></li>
	                        <li><a  href="chartjs.html">Chartjs</a></li>
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