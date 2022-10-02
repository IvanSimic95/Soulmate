<?php $title = "Dashboard | Soulmate Psychic"; 
$newURL = "https://soulmate-psychic.com/dashboard.php";
if(isset($_GET['order'])){
    header('Location: '.$newURL);
}
?>
<?php $description = "Dashboard"; ?>
<?php $menu_order="0_0"; ?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/header.php'; ?>
<?php 

$order = $_GET['id'];
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
    $allowTitle = "Not Allowed!";
    $allowMessge = "You are not allowed to view this order";
}

if($result->num_rows == 0) {
    $allowed = "no";
    $allowTitle = "Order Not Found!";
    $allowMessage = "We couldn't find order with this ID!";
}



?>
<script>
    (function(t,a,l,k,j,s){
    s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
    ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
    .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>
<div class="body-container w-container">
    <div class="header-section">
        <?php if($allowed == "no"){ ?>
        <h1 class="headline"><span class="bolded-headline"><?php echo $allowTitle; ?></span><br> <?php echo $allowMessage; ?></h1>
        <?php }else{ ?>
        <h1 class="headline"><span class="bolded-headline">Order #<?php echo $order; ?></span><br> <?php echo $product; ?></h1>
      

        <div class="chat_box" style="width: 100%; margin: 0px; height: 700px;">
            
            <div class="chat_loader" id="talkjs-container-<?php echo $order; ?>" style="width: 100%; margin: 0px; height: 700px;">
                <i>Loading chat...</i>
            </div>
        </div>

        <a href="/dashboard.php" style="margin-top:20px;text-decoration:none;" type="submit" name="form_submit" id="submitbtn" value="Place an order">Back To Orders!<br><span class="btn-sub-text">View a List of Your Orders</span></a>
<script>
Talk.ready.then(function() {
var me = new Talk.User("soulmateAdmin");
var other = new Talk.User(<?php echo $order; ?>);
window.talkSession = new Talk.Session({
    appId: "ArJWsup2",
    me: other
});
var conversation = talkSession.getOrCreateConversation("<?php echo $order; ?>");

conversation.setParticipant(other);
conversation.setParticipant(me);
  var chatbox = window.talkSession.createChatbox(conversation);
chatbox.mount(document.getElementById("talkjs-container-<?php echo $order; ?>"));
                  })
</script>

        <?php } ?>
  </div>
</div>





<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/templates/footer.php'; ?>
