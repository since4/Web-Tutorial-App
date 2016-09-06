<!--new example-->
<?php
$servername = "localhost";
$username = "phpuser";
$password = "K1m?sRt7*";
$dbname_new = "php_tutorial_pdo";
$tbname_new = "MyGuests";
?>
<?php
#connect
try {
    $conn = new PDO("mysql:host=$servername;"
            . "dbname=$dbname_new", $username, $password);
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
#create table
try {
    // sql to create table
    $sql = "CREATE TABLE " . $tbname_new . " (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table " . $tbname_new . " created successfully" . "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage() . "<br>";
}
?>
<!--new example-->
<?php
#disconnect
$conn = null;
?> 
