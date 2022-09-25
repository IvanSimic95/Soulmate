<div class="breadcrumbs">
  <div class="container">
    <a href="/index.php">Melissa</a> > <?php echo $t_product_name; ?> Drawing
  </div>
</div>
<div class="container">
<div class="product_page">
  
    <div class="row">
      <div class="col-lg-6 mb-0 mb-lg-0 p-0 p-md-2 p-lg-2 px-3 px-md-4 px-lg-4 py-0 py-md-2">
	
        <div class="product_box px-2 py-3">
        <h1 class="prodtitle"><?php echo $t_product_title; ?></h1>
        <hr class="mb-2">
            <img src="<?php echo $t_product_image; ?>" />
         
		</div>
		
		<div class="product_box_pc px-2 py-2">
    <h1 class="prodtitle"><?php echo $t_product_title; ?></h1>
    <hr class="mb-2">
            <img src="<?php echo $t_product_image_pc; ?>" />
            
		</div>
   
    <div class="mx-2 rounded p-3 mt-2 mb-2 product-stats readings-left clearfix" style="background-color: #f6f9fc !important;color: #141E30;">
                                    <span style="float:left;font-size: 1.2rem;font-weight: bold;">
                                    <i class="fas fa-shopping-cart align-middle mb-0 mt-n1 mr-2"></i> Readings left today: </span>
                                    <span id="readings-left" style="float: right;font-size: 1.2rem;font-weight: bold;" class="mb-0" data-countup="{&quot;endValue&quot;:9, &quot;separator&quot;:&quot; &quot;}">9</span>
                         </div>
		
          <span class="product_code" style="display:none;"><?php echo $t_product_form_name; ?></span>
          <!-- <div class="hover_box">
            <div class="paragraph">
              <?php echo $t_product_hover_text; ?>
            </div>
            <div class="sales">
              <?php echo $t_product_sales; ?>+ sales
              <div class="rating">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
              </div>
            </div>
          </div> -->
        </div>
      
      <div class="col-lg-6 border-start rounded-3 px-3 px-md-4 px-lg-4 py-0 py-md-2 position-relative">
	   
	  <div class="product-purchase px-2">
       
        <!--<span class="bestseller">Bestseller</span>-->
 
    
          <!--<span class="vat"> <strong>VAT included (where applicable)</strong> </span>-->

          <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/order-form.php'; ?>
          <!-- <div class="disclamer">
            I will use my Psychic Abilities to draw your <?php echo $t_product_name; ?> within 48 hours with 100% accuracy, All i need is your full name and birth date!
          </div> -->
      </div>
	  </div>

    </div>
    <!-- <div class="icons_product">
      <div class="sides">
        <div class="third">
          <i class="fas fa-user-shield"></i>
          <h3>Secure Purchase</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin lacus et augue ullamcorper consequat. Sed egestas quam a aliquet congue.</p>
        </div>
        <div class="third">
          <i class="fas fa-cart-plus"></i>
          <h3>In High Demand</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin lacus et augue ullamcorper consequat. Sed egestas quam a aliquet congue.</p>
        </div>
        <div class="third">
          <i class="fas fa-truck-moving"></i>
          <h3>3 Delivery Options</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin lacus et augue ullamcorper consequat. Sed egestas quam a aliquet congue.</p>
        </div>
      </div>

    </div> -->
 
<hr>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/review-total.php'; ?>

<hr>

 <div class="gradient-border">
  <div class="product_text">
    <h2><?php echo $t_about_title; ?></h2>
    <?php echo $t_about_content; ?>
    <hr>
    <h2 style="text-align:center">VIDEO TESTIMONIALS:</h2>
    <div class="sides" style="text-align:center;">
      <div class="third" style="position: relative;">
      <img id="video3" src="/assets/img/thumb1.png" data-video="/assets/img/videos/v2wht.mp4"> 
      </div>
      <div class="third" style="position: relative;">
      <img id="video2" src="/assets/img/thumb2.png" data-video="/assets/img/videos/gooddd.mp4">
      </div>
      <div class="third" style="position: relative;">
      <img id="video1" src="/assets/img/thumb3.png" data-video="/assets/img/videos/final.mp4">
      </div>
    </div>
  </div>
 </div>

<!-- <div class="product_description">
  <div class="container">
    <h2><?php echo $t_about_title; ?></h2>
    <?php echo $t_about_content; ?>
    
  </div>
</div> -->
</div></div>
<section class="reviews">
 
   
      <?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/reviews.php'; ?>

</section>

<script>
jQuery('input[name="priority"]').change(function(){
    if (this.value == '12') {
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$49.99').animate({'opacity': 1}, 200);});
		jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$499.99').animate({'opacity': 1}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$450 (90%)').animate({'opacity': 1}, 400);});	
    }
    if (this.value == '24') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$39.99').animate({'opacity': 1}, 200);});
		jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$399.99').animate({'opacity': 1}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$360 (90%)').animate({'opacity': 1}, 400);});
    }
    if (this.value == '48') {
		jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$29.99').animate({'opacity': 1}, 200);});
		jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$299.99').animate({'opacity': 1}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$270 (90%)').animate({'opacity': 1}, 400);});
    }
})
</script>

<script>
$( document ).ready(function() {
setTimeout(function(){ 
$("#readings-left").html("8");
}, 14000);

setTimeout(function(){ 
$("#readings-left").html("7");
}, 39000);

setTimeout(function(){ 
$("#readings-left").html("6");
}, 54000);

setTimeout(function(){ 
$("#readings-left").html("5");
}, 74000);

setTimeout(function(){ 
    $("#readings-left").html("4");
    }, 104000);
    
setTimeout(function(){ 
$("#readings-left").html("3");
}, 124000);

setTimeout(function(){ 
$("#readings-left").html("2");
}, 154000);

setTimeout(function(){ 
    $("#readings-left").html("1");
    }, 194000);
});

</script>

<?php

$FBViewContent = <<<EOT
<script>
fbq('track', 'ViewContent', {
  value: 29.99, 
  currency: 'USD',
  content_type: 'product', 
  content_ids: '$t_product_form_name'
});
</script>
EOT;

?>