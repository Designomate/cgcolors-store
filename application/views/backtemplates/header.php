<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Designomate Admin </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/backassets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>backassets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>backassets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>backassets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>backassets/build/css/custom.min.css" rel="stylesheet">
	<style>
	.mail_list.open {background: rgba(204, 204, 204, 0.29);}
	</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Designomate</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!--<div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>-->
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php print_r($this->session->userdata('name')); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home</span></a>
                    
                  </li>
                  <li><a><i class="fa fa-edit"></i>Plans <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>plans">Upgrade</a></li>
                      <li><a href="<?php echo base_url();?>plans/plans_list">Plans List</a></li>
                    </ul>
                  </li>
                
                  <li><a><i class="fa fa-table"></i> Themes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <!-- <li><a href="<?php echo base_url();?>themes">Add New</a></li>-->
                      <li><a href="<?php echo base_url();?>themes/themes_list">Themes List</a></li>
                    </ul>
                  </li>
                
                  <li><a><i class="fa fa-clone"></i>Addons <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>themes/addons">Add New</a></li>
                      <li><a href="<?php echo base_url();?>daddons/addons_list">Addons List</a></li>
                    </ul>
                  </li>
				   <li><a><i class="fa fa-clone"></i>Alerts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>notifications">Alerts</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php print_r($this->session->userdata('name')); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>-->
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url();?>login/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
						 <?php  $msgs =get_notifications($this->session->userdata('email')); ?>
                    <span class="badge bg-green"><?php echo count($msgs);?></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
			
					<?php	foreach($msgs as $msg) { ?>
						
                    <li>
                      <a href="<?php echo site_url();?>/notifications/?msg=<?php echo $msg->id; ?>">
                        <span>
                          <span>Designomate</span>
                          <span class="time"> <?php echo time_elapsed_string($msg->date); ?></span>
                        </span>
                        <span class="message">
                         <?php echo word_limiter($msg->message, 10);?>
                        </span>
                      </a>
                    </li>
						<?php } ?>
                    
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->