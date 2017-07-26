<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="faq">
<form method="post" action="<?php echo base_url();?>themes/add_continue">
<section class="contentPart">
 <div class="containerFIx-80">
 <a href="<?php echo base_url();?>themes/addons">Back</a>
 <input type="submit" name="submit" value="Continue">
   <div class="aMazingStore">
    <em>Welcome</em>
	<h1>Additional Extension</h1>
</div>
</div>
</section>
<section class="designComponent">
  <div class="container">
 
   <div class="CenterTXT">
   <p><img src="<?php echo $addon_details->addon_image_link;?>" /></p>
   <h2><?php echo $addon_details->addon_name;?></h2>
   <p><?php echo $addon_details->addon_desc;?></p>
    <p><em>Price: $<?php echo $addon_details->addon_price;?> </em></p>
	 <p><em>Integration Charges: $<?php echo $addon_details->addon_inte_charges;?> </em></p>
	 <label><input type="checkbox" <?php if(check_cart_addons($addon_details->id)) {echo "checked";};?> name="addons_items[]" value="<?php echo $addon_details->id;?>">Add This Feature</label>
	 </div>
  </div>
  
  <div class="containerFIx-80">
   <div class="CenterTXT CenterTXTBottom m-b-0"><h3>Try 15 days and see which plan is right for you</h3>
   <p>*Pro plan: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> 

<p>*Pricing terms: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p></div>
  </div>
  </section>
  </form>
</div>