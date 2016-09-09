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
#Insert Data Into MySQL
try {
    $sql = "INSERT INTO " . $tbname_new . " (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully" . "<br>";
    //Get ID of Last Inserted Record
    $last_id = $conn->lastInsertId();
    echo "Last inserted ID is: " . $last_id . "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage() . "<br>";
}
?>
<!--new example-->
<?php
#disconnect
$conn = null;
?> 
