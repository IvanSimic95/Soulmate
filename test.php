<?php
$ForderID = "testorder";
$ip = "1.1.1.1";
$agent = "chrome";
$Ffirst_name = "ivan";
$Flast_name = "test";
$customer_emailaddress = "email@isimic.com";
$cleanPhone = "385977117522";
$fixedBirthday = "19950329";
$Fsex = "male";
$fbc = "";
$fbp = "";
$Fproduct = "['soulmate']";
$price = "49.99";
$domain = "soulmate-artist.com";

$accessToken1 = "EAAQdSy3JN5QBAPgrqO52jtPQWl04D2nti6V5gHaiYkl50iBLu3O5jIohmZA0GsWBNqQOs";
$accessToken2 = "MYZB9qGeZBZAZBVHkuTdj26ZAXWRMhMM9TuvTLkRKJtxxksdCLXStTWKjipEMDYY00DSfiZCS6KaaTUZCHjpYZCQBZCv8AeAgWgqQHKYARWZAqa7bu0rmT";
$fbAccessToken = $accessToken1.$accessToken2;

$FBPixel = "3687138444845960";

$data = array( // main object
        "data" => array( // data array
            array(
                "event_name" => "Purchase",
                "event_time" => time(),
                "event_id" => $ForderID,
                "user_data" => array(
                    "client_ip_address" => $ip,
                    "client_user_agent" => $agent,
                    "fn" => hash('sha256', $Ffirst_name),
                    "ln" => hash('sha256', $Flast_name),
                    "em" => hash('sha256', $customer_emailaddress),
                    "ph" => hash('sha256', $cleanPhone),
                    "db" => hash('sha256', $fixedBirthday),
                    "ge" => hash('sha256', $Fsex),
                    "fbc" => $fbc,
                    "fbp" => $fbp,
                    "external_id" => hash('sha256', $ForderID),
                ),
                "contents" => array(
                    "id" => $Fproduct,
                    "quantity" => 1
                ),
                "custom_data" => array(
                    "currency" => "USD",
                    "value"    => $price,
                ),
                "action_source" => "website",
                "event_source_url"  => $domain,
           ),
        ),
          "test_event_code" => "TEST89589",
          "access_token" => $fbAccessToken
        );  
        
        print_r($data);
        
        $dataString = $data;                                                                                                              
        $ch = curl_init('https://graph.facebook.com/v11.0/'.$FBPixel.'/events');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));                                                                                                                                                                       
        $response = curl_exec($ch);
        echo $response;
  ?>