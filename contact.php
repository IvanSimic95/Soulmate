<?php
$title = "Color Upgrade | Isabella Psychic";
$description = "Readings";
$menu_order="men_0_0";

include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; 
?>


<div class="general_section">
  <div class="container">
    <div class="title_area"><h1 style="margin-top:0;">Contact Us</h1></div>
    <div class="row">
    <div class="col-sm-6">
        <div class="wrap-white">

            <h2>Frequently Asked Questions</h2>
    </div>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/faq.php'; ?>

  </div>
<div class="col-sm-6">
<div class="wrap-white">
<style>
.faq{
    padding-left:0;
}
.form_box{
    overflow:hidden;
}
.my-divider{
    margin-top:10px;
}
    </style>

            <h2>Send us a Message!</h2>

			<div id="sb-tickets"></div>
 </div>
 <div class="wrap-white">
	<div class="contact_form">
    <form class="contact" name="sentMessage" id="contactForm">
        <div class="form_box">
            <label for="contact_name">Your Name*</label>
            <input type="text" name="contact_name" id="name" class="form-control" required>
            <p class="help-block text-danger"></p>
        </div>
        <div class="form_box">
            <label for="contact_email">Your Email*</label>
            <input type="email" name="contact_email" id="email" class="form-control" required>
            <p class="help-block text-danger"></p>
        </div>
        <div class="form_box">
            <label for="contact_subject">ORDER ID (if applicable) </label>
            <input type="tel" name="contact_subject" id="subject" class="form-control">
            <p class="help-block text-danger"></p>
        </div>
        <div class="form_box">
            <label for="contact_message">Message</label>
            <textarea name="contact_message" id="message" rows="8" cols="80"></textarea>
            <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <div class="form_box">
            <input id="submitbtn" type="submit" name="contact_submit" value="Submit Message">
        </div>
    </form>
	</div>
 </div>
</div>
</div>
    </div>
  </div>
</div>

<div class="disclaimer-text" style="color:white;">
ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales, Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.
</div>


<style>
.title_area, .paragraph_area, .sub_area{
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    margin-top: 15px;
}
.container{
  background-color:transparent;
}

h2 {
    font-weight: bold;
    background: -webkit-linear-gradient(#d130eb,#4a30eb 80%,#2b216c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.title_area > h1 {
margin-bottom:0;
    font-weight: bold;
    background: -webkit-linear-gradient(#d130eb,#4a30eb 80%,#2b216c);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.title_area{
text-align:center;
}

</style>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php';

?>