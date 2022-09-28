<?php $title = "Dashboard | Soulmate Psychic"; ?>
<?php $description = "Dashboard"; ?>
<?php $menu_order="0_0"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<div class="body-container w-container">
    <div class="header-section">
      <h1 class="headline"><span class="bolded-headline">Your Orders</span><br> Here you can see a list of your orders</h1>

    <div class="orders-list" style="padding:25px;">

     



      <?php
          while($row = $result->fetch_assoc()) {
            $product = ucwords($row["order_product"]);
            $partnerGender = $row["pick_sex"];
            switch ($product) {
              case "Husband":
                if($partnerGender=="male"){
                  $product  = "Future Husband Drawing";
                }else{
                  $product  = "Future Wife Drawing";
                }
                break;
                case "Futurespouse":
                  if($partnerGender=="male"){
                    $product  = "Future Husband Drawing";
                  }else{
                    $product  = "Future Wife Drawing";
                  }
                  break;
            case "Pastlife":
                $product = "Past Life Drawing";
                break;
            case "Baby":
                $product = "Future Baby Drawing";
                break;
            case "Soulmate":
                $product = "Soulmate Drawing";
                break;
            case "Twinflame":
                    $product = "Twin Flame Drawing";
                    break;
                    case "Spiritguide":
                      $product = "Spirit Guide Drawing";
                      break;
                    case "Higherself":
                      $product = "Higher Self Drawing";
                      break;
            }
            if($row["order_status"]=="shipped"){$status="Completed";}else{$status = $row["order_status"];}
           ?>
              <div class="row order-single d-flex flex-row flex-wrap align-items-center position-relative">
              <div class="col-md-8 order-text"> <h4>Order #<?php echo $row["order_id"]; ?> | <?php echo $product; ?> <br> Order Status: <?php echo $status; ?></h4></div>
              <div class="col-md-4"><a href="/view-order.php?id=<?php echo $row["order_id"]; ?>" name="form_submit" id="submitbtn" value="Place an order">View Order</a></div>
              </div>
              <?php
            }



            $conn->close();
           ?>




    </div>


    <div class="step-paragraph" style="color:white;">Need help? Email <a href="mailto:contact@soulmate-psychic.com" style="color:white;">contact@soulmate-psychic.com</a> if you are having trouble accessing your soulmate drawing.</div>

</div>
  </div>
</div>

<style>
.order-text{
  text-align:left;
}
#submitbtn{
  padding:15px;
  font-size:18px;
  text-decoration:none;
  font-weight:bold;
}
.order-single{
  background-color:white;
  border-radius:4px;
  padding:15px;
  margin-top:15px;
}
  </style>




<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>
