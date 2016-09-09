<!--used for 014.php-->
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
#Update Data in MySQL
try {
    $sql = "UPDATE " . $tbname_new . " SET "
            . "lastname='Doe3' WHERE id=2";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully" . "<br>";                   
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage() . "<br>";
}
?>
<!--new example-->
<?php
#disconnect
$conn = null;
?> 

