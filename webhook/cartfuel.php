<?php

$obj=json_decode($_POST['payload']); // put the second parameter as true if you want it to be a associative array

$product=$obj->product->product_name;

echo $product;

?>