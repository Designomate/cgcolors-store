<?php //include('header.php'); ?>
<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="login" style="margin-bottom:0;">
 <section class="title  m-top-0 bglogin">
 <div class="innerBG">
  <div class="formsStore loginForm"><div class="innerFormLogin"><h1>Log in to your eCommerce store</h1>
   <p>Log in  your Account!</p>
   <div class="v_errors">
   <?php echo validation_errors(); ?>
  <?php echo $this->session->flashdata('success');?>
  <?php echo $this->session->flashdata('error');?>
  </div>
   <form method="post" action="<?php echo base_url();?>login/resetPassword " class="registerPage">
    <label><input type="email" name="email" placeholder="Email" /></label>
	<a href="<?php echo base_url();?>login">Login</a>
	<a href="<?php echo base_url();?>register">New User?</a>
	 <input type="submit" name="submit" value="Submit" />
   </form>
   <div class="row rememberCl">
    <div class="col-md-6 col-sm-6 col-xs-12"><label><input type="checkbox" />Remember me</label></div>
	<div class="col-md-6 col-sm-6 col-xs-12"><a href="#" class="have">Have multiple stores?</a></div>
   </div>
  </div></div>
  </div>
 </section>
 
</div>
<?php //include('footer.php'); ?>
