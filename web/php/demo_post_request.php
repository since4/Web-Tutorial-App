<!DOCTYPE html>
<!--used for 047.html-->

<?php
//fetch the posted data
$fname = htmlspecialchars($_POST["name"]);
$city = htmlspecialchars($_POST["city"]);
//send response
echo "Dear " . $fname . ". " ;
echo "Hope you live well in " . $city . "." ;
?>
