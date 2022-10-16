<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';

$showError = 0;
$succesStatus = 0;
$showSuccess = 1;

$startpixel = 0;

$successMSG = "Your order is now paid for & you will receive an email with your order details and dashboard login link.<br>";
if(isset($_POST['form_submit'])){

  isset($_POST['cookie']) ? $cookieID = $_POST['cookie'] : $errorDisplay .= "<li>Missing Order ID </li>";
  isset($_POST['gender'])  ? $newGender  = $_POST['gender']  : $errorDisplay .= "<li>Missing User Gender </li>";
  isset($_POST['pgender']) ? $newPGender = $_POST['pgender'] : $errorDisplay .= "<li>Missing Partner Gender </li>";

  $cookieID2 = $_POST['cookie2'];
  $cookieID3 = $_POST['cookie3'];

  $genderAcc = "101";

  //Check if any errors are present
  empty($errorDisplay) ?  $testError = FALSE : $testError = TRUE;
  if($testError == TRUE){ //Errors found, activate error message and display it
  $showError = 1;
  $showErrorText = $errorDisplay;
  $showSuccess = 0;
  }else{ //No errors found, proceed with updating order data

    $succesStatus = 1;
    $_SESSION['orderGender'] = $_POST['gender'];
    $_SESSION['orderPartnerGender'] = $_POST['pgender'];

    //Update order in DB
    $sql2 = "UPDATE `orders` SET `user_sex`='$newGender',`pick_sex`='$newPGender',`genderAcc`='$genderAcc' WHERE `cookie_id`='$cookieID'";
    $sql3 = "UPDATE `orders` SET `user_sex`='$newGender',`pick_sex`='$newPGender',`genderAcc`='$genderAcc' WHERE `cookie_id`='$cookieID2'";
    $sql4 = "UPDATE `orders` SET `user_sex`='$newGender',`pick_sex`='$newPGender',`genderAcc`='$genderAcc' WHERE `cookie_id`='$cookieID3'";

    if ($conn->query($sql2) === TRUE) {
      $showError = 0;
      $successMSG = "Changes saved to your order!";
      $showSuccess = 1;
      $succesStatus = 1;
    } else {
      $showError = 1;
      $showErrorText = "Error: " . $sql2->error . "<br>" . $conn->error;
      $showSuccess = 0;
    }

    if ($conn->query($sql3) === TRUE) {
    } 

    if ($conn->query($sql4) === TRUE) {
    }

  }

}
?>

<?php $title = "Order Complete | Soulmate Psychic"; ?>
<?php $description = "Order Complete"; ?>
<?php $menu_order="0_0"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>

<div class="body-container w-container">


    <div class="header-section">
      <h1 class="headline"><span class="bolded-headline">Order Complete!</span><br> Thank you for your order</h1>
    <div class="orders-list" style="padding:25px;border-radius: 4px;box-shadow: 0 8px 15px rgb(0 0 0 / 30%);background-color:white;">

    <h3 id="finalnotice">Your order is now paid for &amp; you will receive an email with your order details and dashboard login link.<br></h3>
  
  <span>Please note that your Purchase Will Be Reflected as "ClickBank or "CLKBANK*COM"</span>
   

    </div>
  </div>
</div>


<style>
  #finalnotice {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    padding: 35px;
    margin-bottom: 20px;
    border: 1px solid #0000;
    border-radius: 6px;
    text-align: center;
    font-weight: 700;
    font-size: 155%;
}
    #addtopurchase{
    display: inline-block;
    padding: 23px 57px;
    border-top: 2px solid #ff7cb3;
    border-radius: 6px;
    background-color: #c52886;
    font-family: Lato, sans-serif;
    font-size: 30px;
    text-align: center;
    color: white;
    width: 100%;
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