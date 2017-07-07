<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shiksha Shakti</title>

  <!--STYLESHEET-->
  <!--=================================================-->
  <!--Open Sans Font [ REQUIRED ]-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
  <!--Bootstrap Stylesheet [ REQUIRED ]-->
  <link href="<?php echo base_url();?>admin/css/bootstrap.min.css" rel="stylesheet">
  <!--Nifty Stylesheet [ REQUIRED ]-->
  <link href="<?php echo base_url();?>admin/css/nifty.min.css" rel="stylesheet">
  <!--Theme Stylesheet [ REQUIRED ]-->
  <link href="<?php echo base_url();?>admin/css/theme.css" rel="stylesheet">
  <!--Custom Stylesheet [ REQUIRED ]-->
  <link href="<?php echo base_url();?>admin/css/stylesheet.css" rel="stylesheet">
  <!-- ADDED BY DEVELOPER [REQUIRED] -->
  <link href="<?php echo base_url();?>admin/plugins/premium/line-icons/premium-line-icons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>admin/plugins/premium/solid-icons/premium-solid-icons.css" rel="stylesheet">

  <!--STYLESHEET PLUGINS-->
  <!--=================================================-->
  <!--Morris.js [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/morris-js/morris.min.css" rel="stylesheet">
  <!--Magic Checkbox [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
  <!--Chosen [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/chosen/chosen.min.css" rel="stylesheet">
  <!--Bootstrap Tags Input [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <!--Switchery [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/switchery/switchery.min.css" rel="stylesheet">
  <!--Bootstrap Select [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
  <!--Bootstrap Table [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url();?>admin/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">
  <!--noUiSlider [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>admin/plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">
  <!--Summernote [ OPTIONAL ]-->
  <link href="<?php echo base_url();?>admin/plugins/summernote/summernote.min.css" rel="stylesheet">


  <!--JAVASCRIPT-->
  <!--=================================================-->
  <!--Pace - Page Load Progress Par [REQUIRED]-->
  <link href="<?php echo base_url();?>admin/plugins/pace/pace.min.css" rel="stylesheet">
  <script src="<?php echo base_url();?>admin/plugins/pace/pace.min.js"></script>
  <!--jQuery [ REQUIRED ]-->
  <script src="<?php echo base_url();?>admin/js/jquery.min.js"></script>
  <!--BootstrapJS [ REQUIRED ]-->
  <script src="<?php echo base_url();?>admin/js/bootstrap.min.js"></script>
  <!--NiftyJS [ REQUIRED ]-->
  <script src="<?php echo base_url();?>admin/js/nifty.min.js"></script>

  <!--JAVASCRIPT PLUGINS-->
  <!--=================================================-->
  <!--Morris.js [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/morris-js/morris.min.js"></script>
  <script src="<?php echo base_url();?>admin/plugins/morris-js/raphael-js/raphael.min.js"></script>
  <!--Sparkline [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/sparkline/jquery.sparkline.min.js"></script>
  <!--Fast Click [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/fast-click/fastclick.min.js"></script>
  <!--Chosen [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/chosen/chosen.jquery.min.js"></script>
  <!--Switchery [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/switchery/switchery.min.js"></script>
  <!--Bootstrap Select [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/bootstrap-select/bootstrap-select.min.js"></script>
  <!--Bootstrap Tags Input [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
  <!--DataTables [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/datatables/media/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>admin/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url();?>admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
  <!--noUiSlider [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
  <!--Summernote [ OPTIONAL ]-->
  <script src="<?php echo base_url();?>admin/plugins/summernote/summernote.min.js"></script>

  <!--Specify page [ SAMPLE ]-->
  <!--=================================================-->
  <script src="<?php echo base_url();?>admin/js/demo/dashboard.js"></script>
  <script src="<?php echo base_url();?>admin/js/demo/form-component.js"></script>
  <script src="<?php echo base_url();?>admin/js/demo/tables-datatables.js"></script>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
  <div id="container" class="effect aside-float aside-bright mainnav-lg mainnav-fixed">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
      <div id="navbar-container" class="boxed">
        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand">
            <img src="<?php echo base_url();?>admin/img/logo.png" alt="Shiksha Shakti Logo" class="brand-icon">
            <div class="brand-title">
              <span class="brand-text">Shiksha Shakti</span>
            </div>
          </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->

        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content clearfix">
          <ul class="nav navbar-top-links pull-left">
            <!--Navigation toogle button-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="tgl-menu-btn">
              <a class="mainnav-toggle" href="#">
                <i class="pli-view-list"></i>
              </a>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End Navigation toogle button-->

            <!--Notification dropdown-->
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <li class="dropdown">
              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="pli-bell"></i>
                <span class="badge badge-header badge-danger"></span>
              </a>
              <!--Notification dropdown menu-->
              <div class="dropdown-menu dropdown-menu-md">
                <div class="pad-all bord-btm">
                  <p class="text-semibold text-main mar-no">You have 9 notifications.</p>
                </div>
                <div class="nano scrollable">
                  <div class="nano-content">
                    <ul class="head-list">
                      <!-- Dropdown list-->
                      <li class="bg-gray">
                        <a class="media" href="#">
                          <div class="media-left">
                            <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url();?>admin/img/profile-photos/9.png">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Lucy sent you a message</div>
                            <small class="text-muted">30 minutes ago</small>
                          </div>
                        </a>
                      </li>
                      <!-- Dropdown list-->
                      <li class="bg-gray">
                        <a class="media" href="#">
                          <div class="media-left">
                            <img class="img-circle img-sm" alt="Profile Picture" src="<?php echo base_url();?>admin/img/profile-photos/3.png">
                          </div>
                          <div class="media-body">
                            <div class="text-nowrap">Jackson sent you a message</div>
                            <small class="text-muted">40 minutes ago</small>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

                <!--Dropdown footer-->
                <div class="pad-all bord-top">
                  <a href="#" class="btn-link text-dark box-block">
                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                  </a>
                </div>
              </div>
            </li>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End notifications dropdown-->
          </ul>
        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->
      </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">
      <!--CONTENT CONTAINER-->
      <!--===================================================-->
      <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          <?php $this->load->view($view_file); ?>
        <!--===================================================-->
        <!--End page content-->
      </div>
      <!--===================================================-->
      <!--END CONTENT CONTAINER-->

      <!--MAIN NAVIGATION-->
      <!--===================================================-->
      <nav id="mainnav-container">
        <div id="mainnav">
          <!--Menu-->
          <!--================================-->
          <div id="mainnav-menu-wrap">
            <div class="nano">
              <div class="nano-content">
                <!--Profile Widget-->
                <!--================================-->
                <div id="mainnav-profile" class="mainnav-profile">
                  <div class="profile-wrap">
                    <div class="pad-btm">
                      <img class="img-circle img-sm img-border" src="<?php echo base_url();?>admin/img/profile-photos/1.png" alt="Profile Picture">
                    </div>
                    <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                      <span class="pull-right dropdown-toggle">
                        <i class="dropdown-caret"></i>
                      </span>
                      <p class="mnp-name">Administrator</p>
                      <span class="mnp-desc">admin@shikshashakti.com</span>
                    </a>
                  </div>
                  <div id="profile-nav" class="collapse list-group bg-trans">
                    <a href="settings.html" class="list-group-item">
                      <i class="pli-male icon-lg icon-fw"></i> View Profile
                    </a>
                    <a href="help.html" class="list-group-item">
                      <i class="pli-information icon-lg icon-fw"></i> Help
                    </a>
                    <a href="login.html" class="list-group-item">
                      <i class="pli-unlock icon-lg icon-fw"></i> Logout
                    </a>
                  </div>
                </div>

                <!--Shortcut buttons-->
                <!--================================-->
                <div id="mainnav-shortcut">
                  <ul class="list-unstyled">
                    <li class="col-xs-3" data-content="My Profile">
                      <a class="shortcut-grid" href="settings.html">
                        <i class="psi-male"></i>
                      </a>
                    </li>
                    <li class="col-xs-3" data-content="Messages">
                      <a class="shortcut-grid" href="messages.html">
                        <i class="psi-speech-bubble-3"></i>
                      </a>
                    </li>
                    <li class="col-xs-3" data-content="Activity">
                      <a class="shortcut-grid" href="activities.html">
                        <i class="psi-thunder"></i>
                      </a>
                    </li>
                    <li class="col-xs-3" data-content="Logout">
                      <a class="shortcut-grid" href="login.html">
                        <i class="psi-lock-2"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <!--================================-->
                <!--End shortcut buttons-->

                <ul id="mainnav-menu" class="list-group">
                  <!--Category name-->
                  <li class="list-header">Navigation</li>
                  <!--Menu list item-->
                  <li class="active-link">
                    <a href="index.html">
	                    <i class="psi-home"></i>
	                    <span class="menu-title">
								  			<strong>Dashboard</strong>
											</span>
		                </a>
                  </li>
                  <!--Menu list item-->
                  <li>
                  <?php $create_course_url = base_url()."Course/create_course";?>
                  <?php $mangae_course_url = base_url()."Course/manage_course";?>
                  <?php $create_institute_url = base_url()."institute/create_institute";?>
                  <?php $mangae_institute_url = base_url()."institute/manage_institute";?>
                  <?php $create_student_url = base_url()."student/add_student";?>
                  <?php $manage_student_url = base_url()."student/manage_student";?>
                  <?php $create_category_url = base_url()."category/manage_category";?>
                  <?php $create_jobprofile_url = base_url()."category/manage_jobprofile";?>
                  <?php $create_recruiter_url = base_url()."category/manage_recruiter";?>
                    <a href="#"
	                    <i class="psi-diploma-2"></i>
	                    <span class="menu-title">
												<strong>Course</strong>
											</span>
                      <i class="arrow"></i>
		                </a>
                    <!--Submenu-->
                    <ul class="collapse">
                      <li><a href="<?= $create_course_url ;?>">Create Course</a></li>
                   
                      <li><a href="<?= $mangae_course_url ;?>">Manage Courses</a></li>
                    </ul>
                  </li>
                  <!--Menu list item-->
                  <li>
                    <a href="#">
                      <i class="psi-university"></i>
                      <span class="menu-title">
												<strong>Institute</strong>
											</span>
                      <i class="arrow"></i>
		                </a>
                    <!--Submenu-->
                    <ul class="collapse">
                      <li><a href="<?=$create_institute_url; ?>">Register Institute</a></li>
                      <li><a href="<?=$mangae_institute_url; ?>">Manage Institutes</a></li>
                    </ul>
                  </li>
                  <!--Menu list item-->
                  <li>
                    <a href="#">
                      <i class="psi-student-hat"></i>
                      <span class="menu-title">
                        <strong>Student</strong>
                      </span>
                      <i class="arrow"></i>
                    </a>
                    <!--Submenu-->
                    <ul class="collapse">
                      <li><a href="<?=$create_student_url ; ?>">Register Student</a></li>
                      <li><a href="<?=$manage_student_url;?>">Manage Students</a></li>
                    </ul>
                  </li>


                  <li class="list-divider"></li>

                  <!--Category name-->
                  <li class="list-header">Manage Attributes</li>
                  <!--Menu list item-->
                  <li>
                    <a href="<?=$create_category_url ;?>">
	                    <i class="psi-bookmark"></i>
	                    <span class="menu-title">
												<strong>Manage Category</strong>
											</span>
		                </a>
                  </li>
                  <!--Menu list item-->
                  <li>
                    <a href="<?=$create_jobprofile_url;?>">
	                    <i class="psi-mail-3"></i>
	                    <span class="menu-title">
												<strong>Manage Job Profile</strong>
											</span>
		                </a>
                  </li>
                  <!--Menu list item-->
                  <li>
                    <a href="<?=$create_recruiter_url;?>">
	                    <i class="psi-letter-open"></i>
	                    <span class="menu-title">
												<strong>Manage Recruiter</strong>
											</span>
		                </a>
                  </li>

                  <li class="list-divider"></li>

                  <!--Category name-->
                  <li class="list-header">More</li>
                  <!--Menu list item-->
                  <li>
                    <a href="#">
	                    <i class="psi-mail"></i>
	                    <span class="menu-title">Send Notification</span>
											<i class="arrow"></i>
		                </a>
                    <!--Submenu-->
                    <ul class="collapse">
                      <li><a href="mailbox.html">Inbox</a></li>
                      <li><a href="mailbox-message.html">View Message</a></li>
                      <li><a href="mailbox-compose.html">Compose Message</a></li>
                    </ul>
                  </li>
                  <!--Menu list item-->
                  <li>
                    <a href="discussion.html">
	                    <i class="psi-newspaper"></i>
	                    <span class="menu-title">Discussion Forum</span>
		                </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!--================================-->
          <!--End menu-->
        </div>
      </nav>
      <!--===================================================-->
      <!--END MAIN NAVIGATION-->
    </div>

    <!-- FOOTER -->
    <!--===================================================-->
    <footer id="footer">
      <p class="pad-lft">&#0169; 2017 Shiksha Shakti</p>
    </footer>
    <!--===================================================-->
    <!-- END FOOTER -->

    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
      <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
  </div>
  <!--===================================================-->
  <!-- END OF CONTAINER -->
</body>
</html>
