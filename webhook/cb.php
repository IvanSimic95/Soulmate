<?php


$secretKey = "ASFASFASF124"; // secret key from your ClickBank account
 
// get JSON from raw body...
$message = json_decode(file_get_contents('php://input'));
 
// Pull out the encrypted notification and the initialization vector for
// AES/CBC/PKCS5Padding decryption
$encrypted = $message->{'notification'};
$iv = $message->{'iv'};
error_log("IV: $iv");
 
// decrypt the body...
$decrypted = trim(
 openssl_decrypt(base64_decode($encrypted),
 'AES-256-CBC',
 substr(sha1($secretKey), 0, 32),
 OPENSSL_RAW_DATA,
 base64_decode($iv)), "\0..\32");
  
error_log("Decrypted: $decrypted");
 
////UTF8 Encoding, remove escape back slashes, and convert the decrypted string to a JSON object...
$sanitizedData = utf8_encode(stripslashes($decrypted));
$obj = json_decode($decrypted);

$type = $obj->transactionType;

if($type == "SALE" OR $type == "TEST_SALE"){

$normalReading = 0;
$premiumReading = 0;

$order_email = $obj->customer->billing->email;
$order_price = $obj->totalOrderAmount;
$order_buygoods = $obj->receipt;
$mOrderID = $obj->vendorVariables->order_ID;
$cName = $obj->customer->billing->fullName;
$productImage = "https://soulmate-artist.com/assets/img/14dk.jpg";
$productFullTitle = $obj->lineItems[0]->productTitle;

$countPurchase = count($obj->lineItems);
if($countPurchase == 1){

  $normalReading = 0;
  $premiumReading = 0;

}elseif($countPurchase == 2){

    if($obj->lineItems[1]->itemNo == "16"){
      $normalReading = 1;
      $premiumReading = 0;
    }elseif($obj->lineItems[1]->itemNo == "4"){
      $normalReading = 0;
      $premiumReading = 1;
    }

}elseif($countPurchase == 3){

  $normalReading = 1;
  $premiumReading = 1;

}

error_log("Order ID: $mOrderID");
error_log("Order Email: $order_email");
error_log("CB order ID: $order_buygoods");
$logaArray[] = "Order #".$mOrderID;
$logaArray[] = $order_email;
$logaArray[] = $productFullTitle;
if($order_email) {
include_once $_SERVER['DOCUMENT_ROOT'].'/config/vars.php';


if($obj->lineItems[0]->itemNo == "17"){

  $sql = "UPDATE `orders` SET `color`='1' WHERE order_id='$mOrderID'" ;

  if ($conn->query($sql) === TRUE) {
    //echo "Order Status updated to Paid succesfully!";
    $logaArray[] = "Order Updated";
    error_log("Color Order Updated");
  } else {
      $logaArray[] = "Error Updating: " . $sql . "<br>" . $conn->error;
      error_log("Error Updating Color Order: $sql <br> $conn->error");
    //echo "Error: " . $sql . "<br>" . $conn->error;
  }


}else{

    $sql = "UPDATE `orders` SET `order_status`='paid',`cb_email`='$order_email',`reading`='$normalReading',`premium`='$premiumReading',`buygoods_order_id`='$order_buygoods' WHERE order_id='$mOrderID'" ;

    if ($conn->query($sql) === TRUE) {
      //echo "Order Status updated to Paid succesfully!";
      $logaArray[] = "Order Updated";
      error_log("Order Updated to Paid");
    } else {
        $logaArray[] = "Error Updating: " . $sql . "<br>" . $conn->error;
        error_log("Error Updating: $sql <br> $conn->error");
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }

//First create TalkJS User with same ID as conversation
$ch = curl_init();
$data = [
"id" => $mOrderID,
"name" => $cName,
"email" => [$order_email],
"role" => "Scustomer",
"photoUrl" => "https://avatars.dicebear.com/api/adventurer/".$order_email.".svg?skinColor=variant02",
"custom" => ["email" => $order_email, "lastOrder" => $mOrderID]
];
$data1 = json_encode($data);
print_r($data1);
curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/ArJWsup2/users/'.$mOrderID);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
    
$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer sk_live_Ncow50B9RdRQFeXBsW45c5LFRVYLCm98';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
$result = curl_exec($ch);
if (curl_errno($ch)) {
echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result;

$logaArray[] = $result;
//Now create new conversation
$ch2 = curl_init();
$data2 = [
"subject" => "Order #".$mOrderID." | ".$productFullTitle,
"participants" => ["soulmateAdminNew", $mOrderID],
"photoUrl" => $productImage,
"custom" => ["status" => "Paid"]
];
$data22 = json_encode($data2);
print_r($data1);
curl_setopt($ch2, CURLOPT_URL, 'https://api.talkjs.com/v1/ArJWsup2/conversations/'.$mOrderID);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, 'PUT');

curl_setopt($ch2, CURLOPT_POSTFIELDS, $data22);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer sk_live_Ncow50B9RdRQFeXBsW45c5LFRVYLCm98';
curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);

$result2 = curl_exec($ch2);
if (curl_errno($ch2)) {
    echo 'Error:' . curl_error($ch2);
}
curl_close($ch2);
echo $result2;

$logaArray[] = $result2;

formLogNewAgain($logaArray);

error_log("------------------------------");
}
}
}elseif($type == "BILL" OR $type == "TEST_BILL"){
$order_email = $obj->customer->billing->email;
$order_price = $obj->totalOrderAmount;
$order_buygoods = $obj->receipt;
$orderID = $obj->vendorVariables->order_ID;
$cName = $obj->customer->billing->fullName;
$productImage = "https://soulmate-artist.com/assets/img/14dk.jpg";
$productFullTitle = $obj->lineItems[0]->productTitle;


$sql = "SELECT * FROM `orders` WHERE `order_id` = '$orderID' ORDER BY `order_id` DESC LIMIT 1";
$result = $conn->query($sql);
$count = $result->num_rows;
$row = $result->fetch_assoc();


$product = $row['order_product'];
$messageCount = $row['message_count'];
$newMessage = $messageCount + 1;
$fName = $row['first_name'];
$msg_date = date('Y-m-d H:i:s');


    //Check if product is spirit
  if($product == "spirit"){


      //Find new message text to send
      $sql_pick = "SELECT * FROM spirit_text WHERE message_count = '$newMessage' order by RAND() limit 1";
      $sql_pick_res = $conn->query($sql_pick);
      if($sql_pick_res->num_rows > 0) {
        while($rowImages = $sql_pick_res->fetch_assoc()) {
          $message = $rowImages["text"];
        }
      }else{ //If not found stop the process and record to error log
        $message = "";
        error_log("No new messages to send | Order ID: #$orderID");
        die();
      }

        //Add starting text to message and replace name variable with real customer name
        $finalMessage = $spiritWeeklyHeader.$message;
        $finalMessage = str_replace("%FIRSTNAME%", $fName, $finalMessage);

          //Send new message to TalkJS
          $ch = curl_init();
					$data = [[
					"text" => $finalMessage,
					"sender"  => "soulmateAdminNew",
					"type" => "UserMessage"
					]];
					$data1 = json_encode($data);

					  curl_setopt($ch, CURLOPT_URL, 'https://api.talkjs.com/v1/ArJWsup2/conversations/' . $orderID . '/messages');
					  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
					  curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
					  $headers = array();
					  $headers[] = 'Content-Type: application/json';
					  $headers[] = 'Authorization: Bearer sk_live_Ncow50B9RdRQFeXBsW45c5LFRVYLCm98';
					  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
					  $result = curl_exec($ch);
          
					if (curl_errno($ch)) { //If there was error with TalkJS
						echo 'Error:' . curl_error($ch);
						$updateOrder = 0;
					}else{ //If TalkJS was updated
						$updateOrder = 1;
					}
					  curl_close($ch);	

            //If talkJS was updated also update order data
            if($updateOrder==1){
            $sqlupdate = "UPDATE `orders` SET `message_count`='$newMessage',`message_time`='$msg_date' WHERE order_id='$orderID'";
              if ($conn->query($sqlupdate) === TRUE) {
                echo "<br> Updated";
              }else{
                echo "<br> Order NOT Updated!";
              }


    }else{ //Send to error log if product isn't spirit
      error_log("Bill type found but product not spirit | Order ID: #$orderID");
    }

  }
}

?>