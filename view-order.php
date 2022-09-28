<?php $title = "Dashboard | Soulmate Psychic"; 
$newURL = "https://".$domain."/dashboard.php";
if(isset($_GET['order'])){
    header('Location: '.$newURL);
}
?>
<?php $description = "Dashboard"; ?>
<?php $menu_order="0_0"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php 

$order = $_GET['order'];
$checkEmail = $_SESSION['email'];


$sql = "SELECT * FROM `orders` WHERE `order_id` = '$order' ORDER BY `order_id` DESC LIMIT 1";
$result = $conn->query($sql);
$count = $result->num_rows;
$row = $result->fetch_assoc();

$dbEmail = $row['order_email'];
$product = $row['order_product_nice'];

if($checkEmail == $dbEmail){
    $allowed = "yes";
}else{
    $allowed = "no";
}




?>
<div class="body-container w-container">
    <div class="header-section">
      <h1 class="headline"><span class="bolded-headline">Order #<?php echo $order; ?></span><br> <?php echo $product; ?></h1>
      
  </div>
</div>





<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>
