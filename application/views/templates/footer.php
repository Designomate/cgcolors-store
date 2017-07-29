<section class="transparentColor">
<div class="contactBottom">
 <div class="containerFIx-80">
   <h3>Contact Us</h3>
   <small>Get in touch to get started faster</small>
 <div class="row">
  <div class="col-md-4">
   <div class="callicon">
    <h4>Call us</h4>
	<span>1800-123-456</span>
   </div>
  </div>
  <div class="col-md-4">
   <div class="callicon mailicon">
    <h4>Mail us</h4>
	<span class="mail">hi@cgcolors.com</span>
   </div>
  </div>
  <div class="col-md-4">
   <div class="callicon chaticon">
    <h4>Chat with us</h4>
	<p>Have a question for our staff? </br>
We're here available to help via Live Chat</p>
   </div>
  </div>
 </div>
 </div>
</div>
</section>
<footer>
<div class="footerMap">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    <div class="innerdataFooter">
	 <h4>aBOUT COMPANY</h4>
	 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
	<ul class="socialMediaIcons">
	    <li class="facebook"><a href="#"></a></li>
		<li class="twitter"><a href="#"></a></li>
		<li class="google"><a href="#"></a></li>
		<li class="linkedin"><a href="#"></a></li>
	   </ul>
	</div>
   </div>
   
   <div class="col-md-4">
    <div class="innerdataFooter">
	 <h4>SERVICE PROVIDED</h4>
	<ul class="menuLinks">
	    <li><a href="<?php echo base_url();?>">Home </a></li>                   
	    <li><a href="<?php echo base_url();?>about">About</a></li>                     
	    <li><a href="<?php echo base_url();?>features">Features</a></li>                    
	    <li><a href="<?php echo base_url();?>plans">Pricing</a></li>                   
	    <li><a href="<?php echo base_url();?>faq">FAQ</a></li>                    
	    <li><a href="<?php echo base_url();?>support">Support</a></li>
		<li><a href="">Blogs</a></li>
	    <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
		<li><a href="">Go To Store</a></li>

	   </ul>
	</div>
   </div>
   
   <div class="col-md-4">
    <div class="innerdataFooter">
	 <h4>GET FREE QUOTE</h4>
	 <form>
	  <label><input type="text" class="name" name="" value="" placeholder="Name" /></label>
	  <label><input type="text" class="email" name="" value="" placeholder="Email" /></label>
	  <label><input type="text" class="web" name="" value="" placeholder="Website url" /></label>
	  <label><input type="submit" name="" value="GET QUOTE" /></label>
	 </form>
	</div>
   </div>
  </div>
 </div>
</div> 
<div class="copyright">
<div class="container">
  <div class="addressFooter">
   <div class="absoluteAdd">
    <div class="row">
	 <div class="col-md-3 col-sm-4">
	  <div class="innrAddInfo">
	   <b>PHONE NO</b>
	   <span>1800 123 456</span>
	  </div>
	 </div>
	 <div class="col-md-6 col-sm-4">
	  <div class="innrAddInfo">
	   <b>OFFICE</b>
	   <span>335 Central Ave Lawrence NY 11559</span>
	  </div>
	 </div>
	 <div class="col-md-3 col-sm-4">
	  <div class="innrAddInfo">
	   <b>E-MAIL ID</b>
	   <span>hi@cgcolors.com</span>
	  </div>
	 </div>
	</div>
   </div>
  </div>
<p>Copyright 2017 eCommerce store Coordinates</p>
</div>
</div>
</footer>


<script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery.smooth-scroll.js');?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script>
<script>
$(document).on("ready", function() {
  $('ul.inFoBasedContent li:not(.always)').hide();
});
$(document).on("click", ".show-more em", function(e) {
		e.preventDefault();		
    if($(this).text() == "Show more"){
        $(this).text("Show less");
        $(this).parent().prev().prev().find('li.textNone').show(400);
    } else {
        $(this).text("Show more");
        $(this).parent().prev().prev().find('li:not(.always)').hide(400);
    };
    $this.text(linkText);
});
</script>
	<script>
    $(document).ready(function() {
      //Sort random function
      function random(owlSelector){
        owlSelector.children().sort(function(){
            return Math.round(Math.random()) - 0.5;
        }).each(function(){
          $(this).appendTo(owlSelector);
        });
      }
     
      $("#testimonialCarausel").owlCarousel({
        navigation: true,
		  items : 2,
          itemsDesktop : [1199,2],
          itemsDesktopSmall : [979,1],
        navigationText: [
          "<i class='icon-chevron-left icon-white'></i>",
          "<i class='icon-chevron-right icon-white'></i>"
          ],
        beforeInit : function(elem){
          //Parameter elem pointing to $("#owl-demo")
          random(elem);
        }
     
      });
     
    });

	</script>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
	var element = document.getElementById("closeBTN");
    element.classList.add("offAsAdd");

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	var element = document.getElementById("closeBTN");
    element.classList.remove("offAsAdd");
}
</script>


</body>

</html>