<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
$fireIframe = 0;
//Check if partner sex was manually picked by user
$sex_picked = "";

if(isset($_SESSION['lastorder'])){
$lastOrderID = $_SESSION['lastorder'];
$sql = "SELECT * FROM `orders` WHERE `order_id` = '$lastOrderID' ORDER BY `order_id` DESC LIMIT 1";
$result = $conn->query($sql);
$count = $result->num_rows;
$row = $result->fetch_assoc();

//If order is found input data from BG and update status to paid
    if($result->num_rows != 0) {

    $affid = $row['affid'];
    $s1 = $row['s1'];
    $s2 = $row['s2'];

    $_SESSION['lastorder'] = $_GET['order_ID'];
    $_SESSION['orderFName'] = $row['first_name'];
    $_SESSION['orderLName'] = $row['last_name'];
    $_SESSION['orderBirthday'] = $row['birthday'];
    $_SESSION['orderAge'] = $row['user_age'];
    $_SESSION['orderGender'] = $row['user_sex'];
    $_SESSION['orderPartnerGender'] = $row['pick_sex'];
    $_SESSION['BGEmail'] = $row['order_email'];
    $_SESSION['fbfirepixel'] = 1;
    $_SESSION['fborderID'] = $_GET['order_ID'];
    $_SESSION['fborderPrice'] = $row['order_price'];
    $_SESSION['fbproduct'] = $row['order_product'];


    }
}else{
  if(isset($_GET['order_ID'])){
$ord = $_GET['order_ID'];
$sql = "SELECT * FROM `orders` WHERE `order_id` = '$ord' ORDER BY `order_id` DESC LIMIT 1";
$result = $conn->query($sql);
$count = $result->num_rows;
$row = $result->fetch_assoc();

//If order is found input data from BG and update status to paid
    if($result->num_rows != 0) {

    $affid = $row['affid'];
    $s1 = $row['s1'];
    $s2 = $row['s2'];
    $_SESSION['lastorder'] = $_GET['order_ID'];
    $_SESSION['orderFName'] = $row['first_name'];
    $_SESSION['orderLName'] = $row['last_name'];
    $_SESSION['orderBirthday'] = $row['birthday'];
    $_SESSION['orderAge'] = $row['user_age'];
    $_SESSION['orderGender'] = $row['user_sex'];
    $_SESSION['orderPartnerGender'] = $row['pick_sex'];
    $_SESSION['BGEmail'] = $row['order_email'];
    $_SESSION['fbfirepixel'] = 1;
    $_SESSION['fborderID'] = $_GET['order_ID'];
    $_SESSION['fborderPrice'] = $row['order_price'];
    $_SESSION['fbproduct'] = $row['order_product'];

    }
  }
}


$title = "Readings | Isabella Psychic";
$description = "Readings";
$menu_order="men_0_0";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; 
?>

<link href="/assets/css/upsell.css" rel="stylesheet" type="text/css">

<div class="body-container w-container">
    <div class="header-section">
      <h1 class="headline"><span class="bolded-headline">You Unlocked a Special Service!</span><br> PLEASE BE AWARE YOU CAN'T GET BACK TO THIS PAGE LATER!</h1>
    <div class="orders-list" style="padding:25px;border-radius: 4px;box-shadow: 0 8px 15px rgb(0 0 0 / 30%);background-color:white;">

    



   
  
  <form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post">

    
    
 <br>
     <center> <img src="/images/award.jpg" alt="upsell" style="border-radius:4px;"> </center>
	   <h1>Personal Psychic Reading</h1>
          <center> <b> <div class="gradient"> <h4> Performed by Isabella</h4></span> </b> </center>
           <br> </r>
		   
          <div class="gradient"><b>With an experience of 15 years in Psychic Readings and being a Certified Psychic Expert since 2008, I will perform an in-depth personal reading regards your love/health/career or general.	</b></div>
                   
                   <br>
                   <div id="purchasedupsell" class="alert alert-succes">Awesome! We will use same payment method as for your previous order.<br> Redirecting to payment page now...</div>
                   <div class="onsubmithide">
                   <center> 
      <ul class="list-group list-group-flush">
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input"  id="general" name="general" value="general" checked>
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">General Reading</span>
		      </label>
					</li>
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input"  id="love" name="love" value="love">
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">Love Reading</span>
		      </label>
					</li>
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input"  id="career" name="career" value="career">
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">Career Reading</span>
		      </label>
					</li>
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input"  id="health" name="health" value="health">
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">Health Reading</span>
		      </label>
					</li>
           
				</ul>
      </center>

        <input class="customer_name" type="hidden" id="fullname" name="form_name" value="<?php echo $_SESSION['orderFName'].' '.$_SESSION['orderLName']; ?>">
        <input class="customer_name" type="hidden" id="firstname" name="first_name" value="<?php echo $_SESSION['orderFName']; ?>">
        <input class="customer_name" type="hidden" id="lastname" name="last_name" value="<?php echo $_SESSION['orderLName']; ?>">
        <input class="birthday" type="hidden" id="birthday" name="form_birthday" value="<?php echo $_SESSION['orderBirthday']; ?>">
        <input class="userage" type="hidden" id="userage" name="form_age" value="<?php echo $_SESSION['orderAge']; ?>">
        <input class="usergender" type="hidden" id="usergender" name="usergender" value="<?php echo $_SESSION['orderGender']; ?>">
        <input class="partnergender" type="hidden" id="partnergender" name="partnergender" value="<?php echo $_SESSION['orderPartnerGender']; ?>">
        <input class="email" type="hidden" name="bgemail" value="<?php echo $_SESSION['BGEmail']; ?>">
        <input class="cookie" type="hidden" name="cookie_id" value="<?php echo $_SESSION['user_cookie_id2']; ?>">
        <input class="price" type="hidden" id="product_price" name="price" value="19.99">
        <input class="fbp" type="hidden" name="fbp" value="<?php echo $UserFBP; ?>">
        <input class="fbc" type="hidden" name="fbc" value="<?php echo $UserFBC; ?>">
        <input class="submitbtnselect" type="hidden" name="submitbtnselect" id="submitbtnselect" value="submit">
        <div id="error" class="alert alert-danger" style="display: none"></div>
      <div class="meta_part">

        <div class="sides">
          <div class="price_box">
            <span class="badge new_prce">$19.99</span>
          </div>
          <div class="smallerText">Choose at least one option to Proceed!</div>
          <button id="addtopurchase" type="submit" name="submit" value="Add to my Purchase" style="width:100%; margin-top:20px;">Add to my Purchase</button>

        </div>
      </div>
	  <br>
	                     <div class="gradient"> You will receive your reading within 24 hours with everything you need to find out about yourself. </div>
      <button id="nothanks" class="nothanks" type="submit" name="submit" value="No Thanks">No Thanks! I don't care about my future</button>
</div>
<p>  <b>PLEASE BE AWARE YOU CAN'T GET BACK TO THIS PAGE LATER!</b> </p>
      </div></div>
    </form>
   

    </div>
  </div>
</div>
<hr>
<div class="disclaimer-text" style="color:white;">
 
      

 ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales, Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.
 </div>


<style>
    #addtopurchase{
    display: inline-block;
    padding: 15px 25px;
    border-top: 2px solid #ff7cb3;
    border-radius: 6px;
    background-color: #c52886;
    font-family: Lato, sans-serif;
    font-size: 2rem;
    text-align: center;
    color: white;
    width: 100%;
    line-height:1.2;
    }
#nothanks{
    margin-top:20px;
    display: inline-block;
    padding: 13px 17px;
    border-radius: 6px;
    background-color: gray;
    font-family: Lato, sans-serif;
    font-size: 20px;
    text-align: center;
    color: white;
    width: 100%;
}

.smallerText {
    display: none;
}
#purchasedupsell{
    display:none;
}

.modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
    box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
}
.modal-title{
    font-size: 20px!important;
    font-weight: bold;
    background: -webkit-linear-gradient(#d130eb,#4a30eb 80%,#2b216c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
}
</style>

<script>
      var $checkboxes = $('.list-group-control input[type="checkbox"]');

      $checkboxes.change(function() {
        var $boxes = $('input:checked');
        var countCheckedCheckboxes = $boxes.length;
        if (countCheckedCheckboxes == 1) {
          $('.new_prce').text('$19.99');
          $('#product_price').val('19.99');
          $('.new_prce').show();
          $('.smallerText').hide();
          $('#addtopurchase').prop("disabled",false);
        }
        if (countCheckedCheckboxes == 2) {
          $('.new_prce').text('$29.99');
          $('#product_price').val('29.99');
          $('.new_prce').show();
          $('.smallerText').hide();
          $('#addtopurchase').prop("disabled",false);
        }
        if (countCheckedCheckboxes == 3) {
          $('.new_prce').text('$39.99');
          $('#product_price').val('39.99');
          $('.new_prce').show();
          $('.smallerText').hide();
          $('#addtopurchase').prop("disabled",false);
        }
        if (countCheckedCheckboxes == 4) {
          $('.new_prce').text('$49.99');
          $('#product_price').val('49.99');
          $('.new_prce').show();
          $('.smallerText').hide();
          $('#addtopurchase').prop("disabled",false);
        }
        if (countCheckedCheckboxes == 0) {
          $('.new_prce').hide();
          $('#product_price').val('00.00');
          $('.smallerText').show();
          $('#addtopurchase').prop("disabled",true);
        }
      });


      $(document).ready(function($){
		 
        $("#addtopurchase").click(function(){
        $("#submitbtnselect").val("submit")
        });

        $("#nothanks").click(function(){
        $("#submitbtnselect").val("NoThanks")
        });

     // hide messages 
     $("#error").hide();

     // on submit...
     $('#ajax-form').submit(function(e){
         e.preventDefault();
         $(".onsubmithide").fadeOut();
         //$("#submitbtn").html('<i class="fas fa-spinner fa-pulse"></i> Loading...');

         $.ajax({
             type:"POST",
             url: "/ajax/readings.php",
             dataType: 'json',
             data: $(this).serialize(),
             success: function(data){
               var SubmitStatus = data[0];
               if (SubmitStatus == "Success"){
              var DataMSG = data[1];
               var Redirect = data[2];
               $("#purchasedupsell").fadeIn();
              
               setTimeout(function(){
               window.location.href = Redirect;
               }, 2000);
               }else if(SubmitStatus == "NoThanks"){
                var Redirect = data[1];
                $("#purchasedupsell").html("You have choosen to skip this offer, redirecting you...");
                $("#purchasedupsell").fadeIn();

              setTimeout(function(){
               window.location.href = Redirect;
               }, 2000);
               }else{
              var DataMSG = data[1];
              alert(DataMSG);
               $("#error").html(DataMSG);
               $("#error").fadeIn();
               }

             },
             error:function(data){
               var SubmitStatus = data[0];
               if (SubmitStatus == "Success"){
              var DataMSG = data[1];
               var Redirect = data[2];
               $("#purchasedupsell").fadeIn();
               alert(SubmitStatus);
               alert(DataMSG);

             }
            }
         });
     });  
     return false;
 });
    </script>
<?php 
$FirePixel = $_SESSION['fbfirepixel'];

if($FirePixel == 1){
  $orderID = $_SESSION['fborderID'];
  $orderPrice = $_SESSION['fborderPrice'];
  $product = $_SESSION['fbproduct'];

$FBPurchasePixel = <<<EOT

<script>
fbq('track', 'Purchase', {
  value: $orderPrice , 
  currency: 'USD',
  content_type: 'product', 
  content_ids: '$product'
}, 
{eventID: '$orderID'});
</script>
EOT;

$_SESSION['fbfirepixel'] = 0;
}
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php';

?>