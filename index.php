<?php $title = "Soulmate Psychic | Homepage"; ?>
<?php $description = "I can read anything for you with my psychic abilities"; ?>
<?php $menu_order = "men_1_0"; ?>

<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/header.php'; ?>

<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

?>
<body class="body">
  <div class="header-bar wf-section">
    <div class="logo-wrapper"><img src="images/logo2.png" loading="lazy" alt=""></div>
  </div>
  <div class="body-container w-container">
    <div class="header-section">
      <h1 class="headline"><span class="bolded-headline">This Powerful Wealth Spell</span> Will Manifest Money &amp; Riches Into Your Life</h1>
      <div class="video w-embed w-script">

<form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post" data-rewardful>

<div class="form-floating form-floating-icon mb-2">
        <input class="form-control" id="fullname" type="text" name="form_name" placeholder="First & Last Name" required="">
        <span class="icon-inside"><i class="fas fa-user"></i></span>
        <label for="fullname">First &amp; Last Name</label>
</div>

<div class="form-floating form-floating-icon mb-2">
        <input class="form-control" id="email" type="email" name="form_email" placeholder="Your Email" required="">
        <span class="icon-inside"><i class="fas fa-envelope"></i></span>
        <label for="email">Your Email</label>
</div>
<hr>
  <div class="form_box">
    <h2 class="headline dark-subheader inverted">Your Birth Date*</h2>
  
    <div class="row align-items-center">
    <div class="col">
    <select class="form-select" name="form_day" required>
		<option value="" disabled selected hidden>Day</option>
          <option value="01">1</option>
          <option value="02">2</option>
          <option value="03">3</option>
          <option value="04">4</option>
          <option value="05">5</option>
          <option value="06">6</option>
          <option value="07">7</option>
          <option value="08">8</option>
          <option value="09">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
    </div>
    <div class="col">
    <select class="form-select" name="form_month" required>
		<option value="" disabled selected hidden>Month</option>
          <option value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">Septemer</option>
          <option value="10">October</option>
          <option value="11">Novemer</option>
          <option value="12">December</option>
        </select>
    </div>
    <div class="col">
    <select class="form_year form-select" name="form_year" required>
		<option value="" disabled selected hidden>Year</option>
          <?php
           $ending_year  =date('Y', strtotime('-85 year'));
           $starting_year = date('Y', strtotime('-16 year'));
           $current_year = date('Y');
           for($starting_year; $starting_year >= $ending_year; $starting_year--) {
               echo '<option value="'.$starting_year.'"';
               echo ' >'.$starting_year.'</option>';
           }
           ?>
        </select>
    </div>
  </div>
          </div>    
    
      
      <hr>
   
      <h2 class="headline dark-subheader inverted">Delivery Priority</h2>
<div class="form_box input-group">

  <div class="option">
    <input type="radio" name="priority" id="prio12" value="12">
    <label for="prio12" aria-label="12 Hour Delivery" class="d-flex justify-content-start align-items-center">
    <span></span>
    <div class="p-0 delivery-icon"><i class="fas fa-bolt"></i></div>
    <div class="flex-grow-1">
    <div class="fw-bold text-dark">Express <span class="delivery">Delivery</span></div>
    <div class="fs-sm text-muted">8 - 12 <span class="hours">Hours</span><span class="h">H</span></div>
    
    </div>
    <div class="fw-bold badge bg-dark">+ $19.99</div>
    </label>
    </div>

    <div class="option">
    <input type="radio" name="priority" id="prio24" value="24">
    <label for="prio24" aria-label="24 Hour Delivery" class="d-flex justify-content-start align-items-center">
    <span></span>
    <div class="p-0 delivery-icon"><i class="fas fa-stopwatch"></i></div>
    <div class="flex-grow-1">
    <div class="fw-bold text-dark">Fast <span class="delivery">Delivery</span></div>
    <div class="fs-sm text-muted">18 - 24 <span class="hours">Hours</span><span class="h">H</span></div>
   
    </div>
    <div class="fw-bold badge bg-dark">+ $9.99</div>
    </label>
    </div>



    <div class="option">
    <input type="radio" name="priority" id="prio48" value="48">
    <label for="prio48" aria-label="48 Hour Delivery" class="d-flex justify-content-start align-items-center">
    <span></span>
    <div class="p-0 delivery-icon"><i class="fas fa-clock"></i></div>
    <div class="flex-grow-1">
    <div class="fw-bold text-dark">Standard <span class="delivery">Delivery</span></div>
    <div class="fs-sm text-muted">36 - 48 <span class="hours">Hours</span><span class="h">H</span></div>
    </div>
    <div class="fw-bold badge bg-dark">+ $0.00</div>
    
    </label>
    </div>

 </div>
       
 <script>
  $( document ).ready(function() {
    $("#prio48").prop("checked", true);
});

$("#helper-delivery-express").click(function(){
          $("#prio12").prop("checked", true);
          jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$49.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$499.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$400').animate({'opacity': 1}, 400);});	
  });
  
  $("#helper-delivery-fast").click(function(){
          $("#prio24").prop("checked", true);
          jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$39.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$399.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$360').animate({'opacity': 1}, 400);});
  });
  
  $("#helper-delivery-standard").click(function(){
          $("#prio48").prop("checked", true);
          jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$29.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$299.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$270').animate({'opacity': 1}, 400);});
  });


  jQuery('input[name="priority"]').change(function(){
    if (this.value == '12') {
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$49.99').animate({'opacity': 1}, 200);});
        jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$499.99').animate({'opacity': 1}, 300);});
        jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$400').animate({'opacity': 1}, 400);});	
    }
    if (this.value == '24') {
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$39.99').animate({'opacity': 1}, 200);});
        jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$399.99').animate({'opacity': 1}, 300);});
        jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$360').animate({'opacity': 1}, 400);});
    }
    if (this.value == '48') {
        jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$29.99').animate({'opacity': 1}, 200);});
        jQuery('.old_price').animate({'opacity' : 0}, 300, function(){jQuery('.old_price').html('$299.99').animate({'opacity': 1}, 300);});
        jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$270').animate({'opacity': 1}, 400);});
    }
})



var product_code = $('.product_code').text()
    $('.product').val(product_code);

            $(document).ready(function($){
		 
            // hide messages 
            $("#error").hide();
            $("#show_message").hide();
		 
            // on submit...
            $('#ajax-form').submit(function(e){
		 
                e.preventDefault();
		 
                $("#error").hide();
                $("#submitbtn").html('<i class="fas fa-spinner fa-pulse"></i> Loading...');
		 
               //First name required
               var name = $("input#fullname").val();
               if(name == ""){
                    $("#error").fadeIn().text("First & Last Name Field required.");
                    $("input#fname").focus();
                    return false;
                }		 
                // ajax
                $.ajax({
                    type:"POST",
                    url: "/ajax/order.php",
                    dataType: 'json',
                    data: $(this).serialize(),
                    success: function(data){
                      var SubmitStatus = data[0];
                      var DataMSG = data[1];
         
                      if (SubmitStatus == "Success"){
                      var Redirect = data[2];
                      $("#show_message").html(DataMSG);
                      $("#show_message").fadeIn();
                      $("#submitbtn").html('<i class="fas fa-spinner fa-pulse"></i> Redirecting...');
                      
                      setTimeout(function(){
                        window.location.href = Redirect;
                      }, 2000);

                      }else{
                      $("#error").html(DataMSG);
                      $("#error").fadeIn();
                      $("#submitbtn").html("Error Occured!");
                      }
  
                    }
                });
            });  
		 
            return false;
        });
</script>
		<hr>
   

<div class="d-flex flex-row flex-wrap align-items-center position-relative fs-4 price-total">
                                    <span class="badge me-0 new_prce">$29.99</span>
                                    <span class="me-1 text-600 old_price">$299.9</span>
                                    <div class="price-side">
                                     You save: <span class="saveda text-success">$270 (90%)</span><span class="saved-percent"></span><span class="product-loop-down-arrow-wrap d-inline-block"></span> </div>
                                     </div>

	  <hr>
  <input class="product" type="hidden" name="product" value="">
  <input class="cookie" type="hidden" name="cookie_id" value="<?php echo $_SESSION['user_cookie_id']; ?>">
  <input class="cookie" type="hidden" name="cookie_id2" value="<?php echo $_SESSION['user_cookie_id2']; ?>">
  <input class="cookie" type="hidden" name="cookie_id3" value="<?php echo $_SESSION['user_cookie_id3']; ?>">
  
  <input class="fbp" type="hidden" name="fbp" value="<?php echo $UserFBP; ?>">
  <input class="fbc" type="hidden" name="fbc" value="<?php echo $UserFBC; ?>">

  <input class="affid" type="hidden" name="aff_id" value="<?php echo $affID; ?>">
  <input class="subid" type="hidden" name="subid" value="<?php echo $subid; ?>">
  <input class="subid2" type="hidden" name="subid2" value="<?php echo $subid2; ?>">

  <input class="affid" type="hidden" name="affid" value="<?php echo $newaffID; ?>">
  <input class="subid" type="hidden" name="s1" value="<?php echo $s1; ?>">
  <input class="affid" type="hidden" name="s2" value="<?php echo $s2; ?>">


  <div id="show_message" class="alert alert-success" style="display: none">Loading..</div>
   <div id="error" class="alert alert-danger" style="display: none"></div>

  <div class="form_box">
    <button type="submit" name="form_submit" id="submitbtn" value="Place an order">Order a Soulmate Drawing Now<br><span class="btn-sub-text">And Watch Your Life Magically Change</span></button>
  </div>

  <div class="secure-badge"><img src="images/lock.png" loading="lazy" alt="" class="lock-icon">
        <div class="secure-checkout-text">Safe &amp; Secure • 365 Money Back Guarantee</div>
      </div>
  

</form>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      </div>
  
     
    </div>
  </div>
  <div class="trust-badges-section wf-section">
    <div class="featured-by-text">Spell Vixen is recommended by:</div>
    <div class="trust-logo-wrapper"><img src="images/Logo-3.png" loading="lazy" alt="" class="trust-logo"><img src="images/Logo-2.png" loading="lazy" alt="" class="trust-logo"><img src="images/Logo-4.png" loading="lazy" alt="" class="trust-logo"><img src="images/Logo-1.png" loading="lazy" alt="" class="trust-logo"></div>
  </div>
  <div class="main-body-section wf-section">
    <div class="container w-container">
      <h1 class="headline dark-subheader">This Ancient Spell Casting Ritual Instantly Attracts Luck &amp; Good Fortune Into Your Life</h1>
      <p class="sub-paragraph">Alice&#x27;s Spell Castings &amp; Abundance Rituals are based on ancient Wicca Magic, used by Kings and Queens for centuries to bring wealth and riches to their countries and people</p>
      <div class="w-row">
        <div class="w-col w-col-7 w-col-small-small-stack w-col-tiny-tiny-stack"><img src="images/polaroid.png" loading="lazy" srcset="images/polaroid-p-500.png 500w, images/polaroid.png 571w" sizes="100vw" alt="" class="image-mobile">
          <div class="about mobile">&quot;My heritage extends from a centuries-old family line of spiritual healers. I learned most of my castings from my great aunt, who like myself was a spiritual healer, psychic medium and empath!&quot;<br><strong>- Priestess Alice</strong></div>
          <ul role="list" class="list">
            <li class="list-item">
              <div class="bullet-headline">Enjoy the Riches of Life</div>
              <div class="bullet-description">With just one spell casting, you&#x27;ll instantly start noticing changes in the abundance which comes towards you, as you finally manifest the riches and wealth you&#x27;ve always desired</div>
            </li>
            <li class="list-item">
              <div class="bullet-headline">Attract More than just money</div>
              <div class="bullet-description">My potent Wealth Spell Rituals not only bring you an abundance of material wealth, but also help attract abundant love, confidence, happiness</div>
            </li>
            <li class="list-item">
              <div class="bullet-headline">Increase Your Vibration</div>
              <div class="bullet-description">Raising your vibration naturally channels positive energy towards you, bringing you more abundance without expending energy</div>
            </li>
            <li class="list-item">
              <div class="bullet-headline">Invite Luck &amp; Fortune</div>
              <div class="bullet-description">Begin magnetically attracting natural luck to improve your chances with job opportunities, lottery wins, gambling and </div>
            </li>
            <li class="list-item">
              <div class="bullet-headline">Manifest Business success</div>
              <div class="bullet-description">For those of you in business, or wishing to start your own business, a wealth spell will confidently increase your ability to attract customers &amp; sales </div>
            </li>
          </ul>
        </div>
        <div class="w-col w-col-5 w-col-small-small-stack w-col-tiny-tiny-stack"><img src="images/polaroid.png" loading="lazy" srcset="images/polaroid-p-500.png 500w, images/polaroid.png 571w" sizes="100vw" alt="" class="image-desktop">
          <div class="about desktop">&quot;My heritage extends from a centuries-old family line of spiritual healers. I learned most of my castings from my great aunt, who like myself was a spiritual healer, psychic medium and empath!&quot;<br><strong>- Priestess Alice</strong></div>
        </div>
      </div>
      <div class="button-wrapper">
        <a data-w-id="f17eb61c-a808-da56-775c-af1dea03cc4c" href="#" class="order-now-button w-button">Order A Wealth Spell Now<br><span class="btn-sub-text">And Watch Your Life Magically Change</span>‍</a>
        <div class="secure-badge"><img src="images/lock.png" loading="lazy" alt="" class="lock-icon">
          <div class="secure-checkout-text inverted">Safe &amp; Secure • 365 Money Back Guarantee</div>
        </div>
      </div>
    </div>
    <div class="container money-back-guarantee w-container">
      <div class="w-row">
        <div class="w-col w-col-6"><img src="images/money-back-guarantee.png" loading="lazy" alt="" class="image-2"></div>
        <div class="w-col w-col-6">
          <h1 class="headline dark-subheader inverted">Alice&#x27;s Spell Casting Are Backed By A 365 Day Money Back Guarantee</h1>
          <p class="sub-paragraph light">Alice is so confident you&#x27;ll see results, she offers a 100% money back guarantee lasting a whole 12 months.</p>
        </div>
      </div>
    </div>
    <div class="container w-container">
      <h1 class="headline dark-subheader">Testimonials from Verified Clients:</h1>
      <p class="sub-paragraph">2,244+ Verified 5* Reviews</p>
      <div class="columns w-row">
        <div class="w-col w-col-6">
          <div class="testimonial-wrapper">
            <div class="testimonial-bubble">
              <div class="testimonial-headline">&quot;I&#x27;m seeing the results!! It really works and I&#x27;m happy ! THANK YOU!!!&quot;</div>
              <div class="testimonial-paragraph">The ritual was done well and quickly, I enjoyed seeing the video of the ritual. Overall a really positive experience and now I&#x27;m comfortable waiting for the results. Thank you very much!</div>
              <div class="avatar-wrapper"><img src="images/testimonial.jpg" loading="lazy" alt="" class="image">
                <div class="div-block">
                  <div class="name-wrapper">
                    <div class="testimonial-name">Jennifer D.</div>
                    <div class="testimonial-location">California, USA</div>
                  </div>
                  <div class="stars-wrapper"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"></div>
                </div>
              </div>
            </div>
            <div class="testimonial-bubble">
              <div class="testimonial-headline">&quot;OMG!! Seeing results in less than 4 weeks! Amazing!!&quot;</div>
              <div class="testimonial-paragraph">Update: Amazing!! Since purchasing I literally had no money in my bank account. Now I was able to pay my bills next month and do a little shopping spree for myself and my family! And it&#x27;s not even the full 4 weeks for it too take fully affect. Thank you!!!</div>
              <div class="avatar-wrapper"><img src="images/testimonial2.jpg" loading="lazy" alt="" class="image">
                <div class="div-block">
                  <div class="name-wrapper">
                    <div class="testimonial-name">Claire C.</div>
                    <div class="testimonial-location">Victoria, Australia</div>
                  </div>
                  <div class="stars-wrapper"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"></div>
                </div>
              </div>
            </div>
            <div class="testimonial-bubble">
              <div class="testimonial-headline">&quot;Feeling blessed since purchasing! Thank you!&quot;</div>
              <div class="testimonial-paragraph">LOVED my whole experience with Alice. I feel so much relief and have been so blessed since purchasing. Thank you so much for bringing me towards this abundance!</div>
              <div class="avatar-wrapper"><img src="images/testimonial5.jpg" loading="lazy" alt="" class="image">
                <div class="div-block">
                  <div class="name-wrapper">
                    <div class="testimonial-name">Trisha L.</div>
                    <div class="testimonial-location">Texas, USA</div>
                  </div>
                  <div class="stars-wrapper"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-col w-col-6">
          <div class="testimonial-bubble">
            <div class="testimonial-headline">&quot;I got an extra $25 the very next day, seriously!!?&quot;</div>
            <div class="testimonial-paragraph">I ordered and the next morning my dad called me and said he’d put $20 in my bank (totally random!) and then I got given a $5 coupon for the coffee shop next to our office. I truly believe this spell helped me with all this!</div>
            <div class="avatar-wrapper"><img src="images/testimonial6.jpg" loading="lazy" alt="" class="image">
              <div class="div-block">
                <div class="name-wrapper">
                  <div class="testimonial-name">Lindsay P.</div>
                  <div class="testimonial-location">Ontario, Canada</div>
                </div>
                <div class="stars-wrapper"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"></div>
              </div>
            </div>
          </div>
          <div class="testimonial-bubble">
            <div class="testimonial-headline">&quot;Amazing service, felt totally different after the spell was cast!&quot;</div>
            <div class="testimonial-paragraph">Amazing service! Alice is so sweet and able to respond answers fast. The day after the spell was cast I felt totally different. Now I&#x27;m just waiting for full result💕</div>
            <div class="avatar-wrapper"><img src="images/testimonial4.jpg" loading="lazy" alt="" class="image">
              <div class="div-block">
                <div class="name-wrapper">
                  <div class="testimonial-name">Felicia S.</div>
                  <div class="testimonial-location">California, USA</div>
                </div>
                <div class="stars-wrapper"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"></div>
              </div>
            </div>
          </div>
          <div class="testimonial-bubble">
            <div class="testimonial-headline">&quot;Second time and seeing massive returns from Alice&quot;</div>
            <div class="testimonial-paragraph">It’s only been almost a week since I purchased this spell. I won £419 from just betting £20 on a sport I didn’t really study on. It’s my second spell that I have purchased from Alice, she is truly god gifted talented. I can’t wait for the full 3-4 weeks manifestation :)</div>
            <div class="avatar-wrapper"><img src="images/testimonial3.jpg" loading="lazy" alt="" class="image">
              <div class="div-block">
                <div class="name-wrapper">
                  <div class="testimonial-name">Andrew S.</div>
                  <div class="testimonial-location">London, UK</div>
                </div>
                <div class="stars-wrapper"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"><img src="images/star.png" loading="lazy" alt="" class="star"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button-wrapper">
        <a data-w-id="9ca0b638-11a4-0aa1-331f-7ef8023444e2" href="#" class="order-now-button w-button">Order A Wealth Spell Now<br><span class="btn-sub-text">And Watch Your Life Magically Change</span>‍</a>
        <div class="secure-badge"><img src="images/lock.png" loading="lazy" alt="" class="lock-icon">
          <div class="secure-checkout-text inverted">Safe &amp; Secure • 365 Money Back Guarantee</div>
        </div>
      </div>
    </div>
    <div class="container w-container">
      <h1 class="headline dark-subheader">How It Works...</h1>
      <p class="sub-paragraph">Priestess Alice does all the hard work for you, all you have to do is prepare yourself to receive the wealth you want to manifest</p>
      <div class="step-wrapper">
        <div class="step-title">
          <div class="step-number">
            <div class="step-number-text">Step.1</div>
          </div>
          <div class="step-headline">
            <h1 class="headline steps-header">Order Your Spell Casting Ritual</h1>
          </div>
        </div>
        <div class="step-paragraph">Place an order using one of the buttons on this page. This will reserve your ritual and guarantee you a spot on Alice&#x27;s daily reservations.</div>
      </div>
      <div class="step-wrapper">
        <div class="step-title">
          <div class="step-number">
            <div class="step-number-text">Step.2</div>
          </div>
          <div class="step-headline">
            <h1 class="headline steps-header">Fill Out Your Details for Alice</h1>
          </div>
        </div>
        <div class="step-paragraph">After ordering and reserving your spell, you&#x27;ll need to fill out some basic details so Alice can produce a birth chart to connect with you whilst performing your ritual. This is regular information such as your date of birth, name, location</div>
      </div>
      <div class="step-wrapper">
        <div class="step-title">
          <div class="step-number">
            <div class="step-number-text">Step.3</div>
          </div>
          <div class="step-headline">
            <h1 class="headline steps-header">Wait For Alice To Cast Your Spell</h1>
          </div>
        </div>
        <div class="step-paragraph">Alice only performs a limited number of spells each day. Ensure you order quickly to reserve your slot. Once your order is confirmed and you&#x27;ve filled out your details, simply sit back and wait for Alice to complete your ritual. You&#x27;ll be notified by email when this is complete.</div>
      </div>
      <div class="step-wrapper">
        <div class="step-title">
          <div class="step-number">
            <div class="step-number-text">Step.4</div>
          </div>
          <div class="step-headline">
            <h1 class="headline steps-header">Begin Experiencing A New Richer Life</h1>
          </div>
        </div>
        <div class="step-paragraph">Once the wealth spell has been cast, you will begin noticing immediate changes in your life. Money and wealth will flow towards you like never before. You will feel richer. You will enjoy the finer things in life. You will finally manifest the wealth you have always dreamed of...</div>
      </div>
    </div>
    <div class="container no-padding w-container">
      <div class="div-block-2">
        <div class="div-block-3"><img src="images/small.jpg" loading="lazy" srcset="images/small-p-500.jpeg 500w, images/small-p-1080.jpeg 1080w, images/small.jpg 1092w" sizes="100vw" alt="" class="mobile-profile-image">
          <h1 class="headline dark-subheader footer">Manifest Money &amp; Wealth Into Your Life Today</h1>
          <p class="sub-paragraph footer">Priestess Alice does all the hard work for you, all you have to do is prepare yourself to receive the wealth you want to manifest</p>
          <a data-w-id="f054452a-1b07-4bf4-023e-646829a5c456" href="#" class="order-now-button w-button">Order A Wealth Spell Now<br><span class="btn-sub-text">And Watch Your Life Magically Change</span>‍</a>
          <div class="secure-badge"><img src="images/lock.png" loading="lazy" alt="" class="lock-icon">
            <div class="secure-checkout-text inverted">Safe &amp; Secure • 365 Money Back Guarantee</div>
          </div>
        </div>
      </div>
    </div>
    <div class="container disclaimer w-container">
      <div class="disclaimer-text">
      ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales, Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.
      </div>
    </div>
  </div>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/footer.php'; ?>
