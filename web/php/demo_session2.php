<?php
session_start();
?>
<!DOCTYPE html>
<!--used for 011.php-->
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "4: Hi, print session variables from previous page. <br>";
echo "4: Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "4: Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
?>
<?php
echo "4: <a href=http://localhost:8000/php/011.php>Back to 011.php</a>";
?>  

</body>
</html>
