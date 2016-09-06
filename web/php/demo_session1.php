<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
?>
<?php
echo "3: hi, session variables set<br>";
header('Refresh: 2; url=/php/demo_session2.php', true, 302);
echo "3: redirect in 2 seconds<br>";
?>  

</body>
</html> 
