<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';
$fireIframe = 0;
//Check if partner sex was manually picked by user
$sex_picked = "";
if(isset($_POST['pick_sex'])){
  $pick_sex = $_POST['pick_sex'];
  $sex_picked = "1";
}

if(isset($_GET['updateInfo'])){
    $showPopup = "No";
  }else{
    $showPopup = "Yes";
  }

if(isset($_GET['order_ID'])){
  $order_ID = $_GET['order_ID'];


}else{
  $order_ID = "";
  $showPopup = "No";
}

if(isset($_GET['email'])){
  $FirePixel = 0;
  header("Location: https://".$domain."/color.php?order_ID=".$order_ID);
  die();
}

if(isset($_POST['form_submit'])){

$newGender = $_POST['gender'];
$newPGender = $_POST['pgender'];
$genderAcc = "101";
$orderPID = $_POST['order_ID'];


$_SESSION['orderGender'] = $newGender;
$_SESSION['orderPartnerGender'] = $newPGender;


$sql2 = "UPDATE `orders` SET `user_sex`='$newGender',`pick_sex`='$newPGender',`genderAcc`='$genderAcc' WHERE `order_id`='$orderPID'";
$result = $conn->query($sql2);
}
//If sex was picked manually by user update it in order info
if ($sex_picked==1) {
    $order_id = $_POST['cookie_id'];
    $sql = "UPDATE `orders` SET `pick_sex`='$pick_sex' WHERE cookie_id='$order_id'";
    $result = $conn->query($sql);

    $_SESSION['orderPartnerGender'] = $pick_sex;
}
$_SESSION['fbfirepixel'] = 1;

if(isset($_SESSION['lastorder'])){
$lastOrderID = $_SESSION['lastorder'];
$order_ID = $lastOrderID;
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

  if($affid == 1){
    $fireIframe = 1;
  }

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
  if($affid == 1){
    $fireIframe = 1;
  }

}




  }
}


$title = "Color Upgrade | Isabella Psychic";
$description = "Readings";
$menu_order="men_0_0";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; 
?>

<link href="/assets/css/upsell.css" rel="stylesheet" type="text/css">

<div class="body-container w-container">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Before Proceeding Please Select Your & Partners Gender!</h3>
    
      </div>
      <div class="modal-body">


      <form id="completeOrder" class="form-order needs-validation display-block text-start" name="completeOrder" action="?order_ID=<?php echo $order_ID; ?>&updateInfo=Yes" method="post">

<div class="form_box" style="text-align:start">
<label for="SelectGender" style="left: 0;">Your Gender</label>
  <select class="form-select" id="SelectGender" aria-label="SelectGender" required="" name="gender">
    <option <?php if($_SESSION['orderGender']=="male")echo 'selected=""'; ?> value="male"><span class="fa fa-user"></span> Male</option>
    <option <?php if($_SESSION['orderGender']=="female")echo 'selected=""'; ?>value="female">Female</option>
  </select>
  
  </div>

  <div class="form_box" style="text-align:start">
  <label for="SelectPGender" style="left: 0;">Preferred Partner Gender</label>
  <select class="form-select" id="SelectPGender" aria-label="SelectPGender" required="" name="pgender">
    <option <?php if($_SESSION['orderPartnerGender']=="male")echo 'selected=""'; ?> value="male"><span class="fa fa-user"></span> Male</option>
    <option <?php if($_SESSION['orderPartnerGender']=="female")echo 'selected=""'; ?>value="female"><span class="fa fa-user"></span> Female</option>
  </select>
  
  </div>

<hr class="mb-3">
<div class="error-container">
</div>

<input class="orderID" type="hidden" name="order_ID" value="<?php echo $_GET['order_ID']; ?>">

<button style="margin-top:15px; padding:15px; width:100%; font-size:130%; font-weight:bold;" id="submitbtn" type="submit" name="form_submit" class="btn" value="Save Changes!"><i class="fa fa-square-check"></i> Save Changes!</button>
<hr class="mb-3">

</form>


      </div>
    </div>
  </div>
</div>


    <h1 class="gradient" style="text-align:center;font-size:36px!important;" >Upgrade Your Soulmate Drawing To Color!</h1>
	 <br>

    <center> <img src="/images/done2.jpg" alt="upsell" style="border-radius:4px;"> </center>
<?php if($showPopup == "Yes"){ ?>
<script>
    $( document ).ready(function() {
      $('#exampleModal').modal('show')
});
</script>
<?php } ?>

   
  
  <form id="ajax-form" class="form-order" name="order_form" action="javascript:void(0)" method="post">
   <style>
    h3.line-behind {
    width: auto;
    position: relative;
    text-align: center;
    padding: 1em 0;
    text-transform: uppercase;
    font-size: 2em;
    font-weight:bold;
    color:white;
}
h3.line-behind:after {
    position: absolute;
    content: '';
    height: 2px;
    width: 150%;
    top: 50%;
    transform: translateY(-50%);
    left: 50%;
    transform: translateX(-50%);
    z-index: -1;
    background: linear-gradient(to right, #19191900 0%, #fff 45%, #fff0 46%, #fff0 55%, #fff 56%, #19191900 100%);

}
.gradient{
  font-size: 18px!important;
    font-weight: bold;
    background: -webkit-linear-gradient(#d130eb,#4a30eb 80%,#2b216c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
    margin-bottom:15px;
}
    </style>
    
 <br>
           <center> <b> <div class="gradient"> <h3> <b>Isabella,</b> <br> Please upgrade my black and white drawing to dazzling full HD drawing so that I can easily recognize my Soulmate when I meet him </h3></span> </b> </center>
           <br> 
          
                   <br>
                   <div id="purchasedupsell" class="alert alert-succes">Awesome! We will use same payment method as for your previous order.<br> Redirecting to payment page now...</div>
                   <div class="onsubmithide">
              

        <input class="customer_name" type="hidden" id="fullname" name="form_name" value="<?php echo $_SESSION['orderFName'].' '.$_SESSION['orderLName']; ?>">
        <input class="customer_name" type="hidden" id="firstname" name="first_name" value="<?php echo $_SESSION['orderFName']; ?>">
        <input class="customer_name" type="hidden" id="lastname" name="last_name" value="<?php echo $_SESSION['orderLName']; ?>">
        <input class="birthday" type="hidden" id="birthday" name="form_birthday" value="<?php echo $_SESSION['orderBirthday']; ?>">
        <input class="userage" type="hidden" id="userage" name="form_age" value="<?php echo $_SESSION['orderAge']; ?>">
        <input class="usergender" type="hidden" id="usergender" name="usergender" value="<?php echo $_SESSION['orderGender']; ?>">
        <input class="partnergender" type="hidden" id="partnergender" name="partnergender" value="<?php echo $_SESSION['orderPartnerGender']; ?>">
        <input class="email" type="hidden" name="bgemail" value="<?php echo $_SESSION['BGEmail']; ?>">
        <input class="cookie" type="hidden" name="cookie_id" value="<?php echo $_SESSION['user_cookie_id2']; ?>">
        <input class="cookie" type="hidden" name="order_id" value="<?php echo $order_ID; ?>">
        <input class="price" type="hidden" id="product_price" name="price" value="13.99">
        <input class="fbp" type="hidden" name="fbp" value="<?php echo $UserFBP; ?>">
        <input class="fbc" type="hidden" name="fbc" value="<?php echo $UserFBC; ?>">
        <input class="submitbtnselect" type="hidden" name="submitbtnselect" id="submitbtnselect" value="submit">
        <div id="error" class="alert alert-danger" style="display: none"></div>
      <div class="meta_part">

        <div class="sides" style="position:relative;overflow:hidden;">
          <div class="price_box">
          <font color = "#FF00FF"> <center> <h2> ONLY </font><font color = "#49ff00 ">  $13.99</font> </h2> </center> </font>
          </div>
          <div class="smallerText">Choose at least one option to Proceed!</div>
          <button id="addtopurchase" type="submit" name="submit" value="Add to my Purchase" style="width:100%; margin-top:20px; padding:15px; line-height:1.2;">Yes, Please Upgrade My Order</button>
<h3 class="line-behind" lkey="or">or</h3>
        </div>
      </div>
      <button id="nothanks" class="nothanks" type="submit" name="submit" value="No Thanks">No Thanks! I don't want to see the color of my soulmate's eyes</button>
</div>
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
             url: "/ajax/color.php",
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