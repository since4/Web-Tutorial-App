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
#Insert Multiple Records Into MySQL
try {
    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $conn->exec("INSERT INTO " . $tbname_new . " (firstname, lastname, email)
    VALUES ('John', 'Doe1', 'john@example.com')");
    $conn->exec("INSERT INTO " . $tbname_new . " (firstname, lastname, email)
    VALUES ('Mary', 'Moe1', 'mary@example.com')");
    $conn->exec("INSERT INTO " . $tbname_new . " (firstname, lastname, email)
    VALUES ('Julie', 'Dooley1', 'julie@example.com')");
    // commit the transaction
    $conn->commit();
    echo "New records created successfully" . "<br>"; 
    //Get ID of Last Inserted Record
    $last_id = $conn->lastInsertId(); #doesn't seem to work without exec()
    echo "Last inserted ID is: " . $last_id . "<br>";
} catch (PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo $sql . "<br>" . $e->getMessage() . "<br>";
}                      
?>
<!--new example-->
<?php
#disconnect
$conn = null;
?> 
