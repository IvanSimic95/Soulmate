<?php $title = "Dashboard | Soulmate Psychic"; ?>
<?php $description = "Dashboard"; ?>
<?php $menu_order="0_0"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<div class="body-container w-container">
    <div class="header-section">
      <h1 class="headline"><span class="bolded-headline">View Your Order!</span><br> Enter your order details to see it!</h1>
      <div class="video w-embed w-script">

<form class="form-order" name="order_form" method="get">



<div class="form-floating form-floating-icon mb-2">
        <input class="form-control" id="email" type="email" name="check_email" placeholder="Your Email" required="">
        <span class="icon-inside"><i class="fas fa-envelope"></i></span>
        <label for="email">Your Email</label>
</div>

<hr>

  <div id="show_message" class="alert alert-success" style="display: none">Loading..</div>
   <div id="error" class="alert alert-danger" style="display: none"></div>

  <div class="form_box">
    <button type="submit" name="form_submit" id="submitbtn" value="Place an order">Login to your Member Area<br></button>
  </div>

</form>

<div class="step-paragraph" style="color:white;">Need help? Email contact@soulmate-psychic.com if you are having trouble accessing your soulmate drawing.</div>
    </div>
  </div>
</div>





<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>
