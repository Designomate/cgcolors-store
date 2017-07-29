<!DOCTYPE html>
<html>
<head>
<title>eCommerce Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url('assets/css/owl.carousel.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/owl.theme.css');?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" type="text/css" />
 <link rel="icon" href="<?php echo base_url('assets/images/cgcolors.png');?>" type="image/gif" sizes="16x16"> 
 <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700,700i,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Heebo:900" rel="stylesheet">  

</head>
<?php $directoryURI = $_SERVER['REQUEST_URI'];
 $path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
 $currentPage = $components[2]; ?> 
<body>

<header>
<div class="innerIT">
 <div class="containerFIx-80">
   <div class="row">
    <div class="col-md-4 col-sm-4"><div class="mainLogo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/coming-soon-logo.png"></a></div></div>
	<div class="col-md-8 col-sm-8">
	<div class="socialNo">
	 <ul>
	  <li>Toll Free Number
	<span>+1 800. 125. 8542</span></li>
	  <!--<li> Support<span class="userIcon"></span></li>-->
	  <li>Social Media Icons
	  <span>
	   <ul class="socialMediaIcons">
	    <li class="facebook"><a href="#"></a></li>
		<li class="twitter"><a href="#"></a></li>
		<li class="google"><a href="#"></a></li>
		<li class="linkedin"><a href="#"></a></li>
	   </ul>
	  </span></li>
	 </ul>
	</div>
	</div>
	</div>
 </div>
</div>
<div class="innerITMenu">
 <div class="container">
   <div class="row">
    <div class="col-md-9 col-sm-6 col-xs-2">
	 <nav>  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="navigation">
  <ul>
   <li class="<?php if($currentPage =='index'){echo 'activeClass';}?>"><a href="<?php echo base_url();?>">Home </a></li>                   
   <li class="<?php if($currentPage =='about'){echo 'activeClass';}?>"><a href="<?php echo base_url();?>about">About</a></li>                     
   <li class="<?php if($currentPage =='features'){echo 'activeClass';}?>"><a href="<?php echo base_url();?>features">Features</a></li>                    
   <li class="<?php if($currentPage =='plans'){echo 'activeClass';}?>"><a href="<?php echo base_url();?>plans">Pricing</a></li>                   
   <li class="<?php if($currentPage =='faq'){echo 'activeClass';}?>"><a href="<?php echo base_url();?>faq">FAQ</a></li>                    
   <li class="<?php if($currentPage =='support'){echo 'activeClass';}?>"><a href="<?php echo base_url();?>support">Support</a></li>
  </ul>
 </div>
</div></nav>
<span style="font-size:30px;cursor:pointer; color:#fff; font-weight:bold;" id="closeBTN" class="openBTN" onclick="openNav()">&#9776;</span></nav>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-10">
	 <div class="searchBox">
	  <input type="search" name="" value="" placeholder="Search" />
	 </div>
	</div>
   </div>
 </div>
</div>
</header>