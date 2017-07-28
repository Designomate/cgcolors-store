 <section class="bannerPart">
  <div class="containerFIx-80">     
  <div class="relationIT"><div class="circle360">       
   <p>Custom eCommerce Solution</p>     
  </div>     
  <div class="btn-position"> <a href="#" class="page-btn">View Our Packages </a> </div></div>
  </div>
 </section>
<section class="contentPart">
 <div class="containerFIx-80">
   <div class="aMazingStore">
    <em>We'll deliver your site pretty quickly</em>
	<h1>Our Process of Designing Amazing 
Stores for Free on BigCommerce</h1>

 <div class="pickTheme">
 
 <div class="innerdataTheme">
  <div class="row">
   <div class="col-md-7">
   <div class="innerwidthLess">
    <div class="curveOne"><h2>Quick and Simplified Store Design Process</h2></div>
	<p>Let's face it, building a well designed and well planned e-commerce store is still difficult so we have targeted that pain point and simplified the whole process from picking up the theme to getting your store up and running with all the necessary functionality.</p>
	</div>
   </div>
   <div class="col-md-5">
    <div class="innerTheme textRight">
	 <img src="<?php echo base_url();?>assets/images/quick-and-simplified-store-design-process.png" alt="" />
	</div>
   </div>
  </div>
  </div>
  
   <div class="innerdataTheme">
  <div class="row">
   <div class="col-md-5">
    <div class="innerTheme textLeft">
	 <img src="<?php echo base_url();?>assets/images/e-commerce-store-plans-you-can't-resist.png" alt="" />
	</div>
   </div>
   <div class="col-md-7">
   <div class="innerwidthLess">
    <div class="curveTwo"><h2>E-Commerce Store Plans You Can't Resist</h2></div>
	<p>We have designed our plans to ensure that getting an amazing e-commerce store should be in budget for everyone despite the size of their business. Our monthly plans have got everything you need to make your business successful.</p>
	</div>
   </div>
  
  </div>
  </div>
  

 <div class="innerdataTheme">
  <div class="row">
   <div class="col-md-7">
   <div class="innerwidthLess">
    <div class="curveThree"><h2>Great Quality Control</h2></div>
	<p>Quality control is one of the most important thing for us. Building an e-commerce is one thing but a store that has great quality control always performs better than the others. We make sure that your e-commerce store work fine always and have correct information on all the pages and products.</p>
	</div>
   </div>
   <div class="col-md-5">
    <div class="innerTheme textRight">
	 <img src="<?php echo base_url();?>assets/images/grea-quality-control.png" alt="" />
	</div>
   </div>
  </div>
  </div>
  
  
     <div class="innerdataTheme">
  <div class="row">
   <div class="col-md-5">
    <div class="innerTheme textLeft">
	 <img src="<?php echo base_url();?>assets/images/24x&-support.png" alt="" />
	</div>
   </div>
   <div class="col-md-7">
   <div class="innerwidthLess">
    <div class="curveTwo"><h2>24x& Support</h2></div>
	<p>We have got you covered. Our Shopify experts are available 24x7 to help you with your store. Have a question regarding store or need some help with the store chat with us or call us and we'll help you right away.</p>
	</div>
   </div>
  
  </div>
  </div>
 
 
   </div>
 </div>
</div>
</section>
<section class="contentPart">
 <div class="containerFIx-80">
   <div class="aMazingStore">
    <em>Welcome</em>
	<h1>Plans you cannot resist yourself 
from starting eCommerce business</h1>
</div>

<div class="TabsTheme">
 <ul class="nav nav-tabs borderNone">
 <span class="or">OR</span>
    <li class="active" style="border-right:1px solid #e8242c;"><a data-toggle="tab" href="#home">mONTHLY</a></li>
    <li><a data-toggle="tab" href="#menu1">YEARLY</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="row">
	  <?php foreach($plans_m as $plan) { ?>
	   <div class="col-md-3 col-sm-6 col-xs-12">
	    <div class="planTable">
		 <em><?php echo $plan->plan_name;?> </em>
		 <?php if($plan->plan_price=='Free') { ?>
		 <h3><?php echo $plan->plan_price;?></h3>
		 <?php  } elseif(!empty($plan->plan_price)) { ?>
		 <h3><i>$</i><?php echo $plan->plan_price;?><i class="timeM-Y">/mo</i></h3>
		 <?php } ?>
		 <p><?php echo $plan->plan_desc;?></p>
		 <ul>
  <li>Lorem</li>
  <li>Lorem</li>
  <li class='hiddenClass'>Lorem</li>
  <li class='hiddenClass'>Lorem</li>
  <li class='hiddenClass'>Lorem</li>
  <li class="hiddenClass">Ipsum</li>
</ul>
		 <?php if($plan->id==4)  { ?>
		 <a href="<?php echo base_url();?>custom_design">BUY NOW!</a>
<div class="show-more">
  <em>Show more</em>
</div>
		<?php } else { ?>
<a href="plans/buynow?p=<?php echo $plan->id;?>&pr=<?php echo $plan->plan_price;?>">BUY NOW!</a>
		<?php } ?>
		</div>
	   </div>
	  <?php } ?>
	
	  </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="row">
	  <?php foreach($plans_y as $plan) { ?>
	   <div class="col-md-3 col-sm-6 col-xs-12">
	    <div class="planTable">
		 <em><?php echo $plan->plan_name;?> </em>
		 <h3><i>$</i><?php echo $plan->plan_price;?><i class="timeM-Y">/yearly</i></h3>
		 <p><?php echo $plan->plan_desc;?></p>
		 <?php if($plan->id==4)  { ?>
		 <a href="<?php echo base_url();?>custom_design">BUY NOW!</a>

		<?php } else { ?>
<a href="plans/buynow?p=<?php echo $plan->id;?>&pr=<?php echo $plan->plan_price;?>">BUY NOW!</a>
		<?php } ?>
		</div>
	   </div>
	  <?php } ?>
	   
	   
	   
	  </div>
    </div>
  </div>
</div>

</div>

</section>
<section class="clientArea">
 <div class="container">
 <h2>Clients Who Love US</h2>
      <div id="testimonialCarausel" class="owl-carousel owl-theme">
      <div class="item"><p>Josh is incredible. Very professional. He takes a project and will think of things that make them so user friendly and very pleasing to look at that you might not even have 
	  thought of. He can do anything that another developer can do but he will do it better.</p>
	  <div class="userImageandInfo">
	  <em>Mary Ann</em>
	  <i>www.myhouseinthecloud.com</i>
	 <img src="<?php echo base_url();?>assets/images/user1.jpg" alt="" />
	  </div>
	  </div>
	  
	  <div class="item"><p>
Josh, as usual, did a wonderful job on this contract. He was easy to communicate with, prompt and accurate. I have worked with Josh on several jobs and have always found him to be reliable, easy to reach and communicate with, patient, thorough and accurate. I wholeheartedly recommend him, and will hire him for any future work that I need done.
</p>
	  <div class="userImageandInfo">
	  <em>Leslie Hait </em>
	  <i>www.frescosites.com</i>
	 <img src="<?php echo base_url();?>assets/images/user2.jpg" alt="" />
	  </div>
	  </div>
	  
	  <div class="item"><p>
Josh and CG Colors are fast and efficient. They did 3 jobs for me in record time. They always respond to calls and emails immediately and get the job done with no hassles and at fair prices. I have recommend CG Colors to other businesses and they all have had a great experience.
</p>
	  <div class="userImageandInfo">
	  <em>MaJoy Romanory Ann </em>
	  <i>www.brazilbronze.com</i>
	 <img src="<?php echo base_url();?>assets/images/user3.jpg" alt="" />
	  </div>
	  </div>
      

    </div>

 </div>
</section>

