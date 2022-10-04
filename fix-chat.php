<?php
$errorDisplay = "";


isset($_GET['order']) ? $order_ID = $_GET['order']    : $errorDisplay .= " Missing Order ID <br>";

$sql = "SELECT * FROM `orders` WHERE `order_id` = '$order_ID' ORDER BY `order_id` DESC LIMIT 1";
$result = $conn->query($sql);
$count = $result->num_rows;
$row = $result->fetch_assoc();

//If order is found input data from BG and update status to paid
if($result->num_rows != 0) {


$first_name = $row['first_name'];
$last_name = $row['last_name'];
$codedname = $row['order_product'];
$product = $row['order_product_nice'];
$order_email = $row['order_email'];


$signature = hash_hmac('sha256', strval($order_ID), 'sk_live_Ncow50B9RdRQFeXBsW45c5LFRVYLCm98');

empty($errorDisplay) ?  $testError = FALSE : $testError = TRUE;
if($testError == TRUE){
$errorDisplay .= "<hr> URL should be like this: https://soulmate-psychic.com/fix-chat.php?order=123";
$errorDisplay .= "Any missing variable = script can't fix up chat!";
}else{

    $sqlupdate = "UPDATE `orders` SET `order_status`='processing' WHERE order_id='$order_ID'";
    if ($conn->query($sqlupdate) === TRUE) {
      echo "Updated";
    }else{
        echo "not updated";
    }
?>


<script>
    (function(t,a,l,k,j,s){
    s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
    ;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
    .push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>


<script>  
    Talk.ready.then(function() {
      var other = new Talk.User({
          id: "<?php echo $order_ID; ?>",
          name: "<?php echo $first_name; ?>",
          email: "<?php echo $order_email; ?>",
          photoUrl: "https://avatars.dicebear.com/api/adventurer/<?php echo $order_email; ?>.svg?skinColor=variant02",
          role: "Scustomer",
          custom: {
          email: "<?php echo $order_email; ?>",
          lastOrder: "<?php echo $order_ID; ?>"
          }
      });
      var me = new Talk.User("soulmateAdminNew");
      window.talkSession = new Talk.Session({
          appId: "ArJWsup2",
          me: other,
          signature: "<?php echo $signature; ?>"
      });
      var conversation = talkSession.getOrCreateConversation("<?php echo $order_ID; ?>");
          conversation.setAttributes({
          subject: "<?php echo "Order #" . $order_ID . " | " .$product; ?>",
          custom: { 
          category: "<?php echo $codename; ?>", 
          status: "Paid"
          }
      });

      conversation.setParticipant(other);
      conversation.setParticipant(me);

        var chatbox = window.talkSession.createChatbox(conversation);
        chatbox.mount(document.getElementById("talkjs-container-<?php echo $order_ID; ?>"));
    })

</script>

<div id="talkjs-container-<?php echo $order_ID; ?>">

</div>
<?php

}

?>