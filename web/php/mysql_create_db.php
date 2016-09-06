<!--new example-->
<?php
$servername = "localhost";
$username = "phpuser";
$password = "K1m?sRt7*";
$dbname = "php_tutorial"; #existing db needed to connect with pdo
$dbname_new = "php_tutorial_pdo";
$tbname_new = "MyGuests";
?>
<?php
#connect
try {
    $conn = new PDO("mysql:host=$servername;"
            . "dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" . "<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
} 
?>
<!--new example-->
<?php
#create db
try {                   
    $sql = "CREATE DATABASE " . $dbname_new;
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database " . $dbname_new . " created successfully<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage() . "<br>";
}
?>
<!--new example-->
<?php
#disconnect
$conn = null;
?> 

