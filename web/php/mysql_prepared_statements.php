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
#Prepared Statements              
try {
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO " . $tbname_new . " 
        (firstname, lastname, email)
        VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);
    // insert a row
    $firstname = "John";
    $lastname = "Doe2";
    $email = "john@example.com";
    $stmt->execute();
    // insert another row
    $firstname = "Mary";
    $lastname = "Moe2";
    $email = "mary@example.com";
    $stmt->execute();
    // insert another row
    $firstname = "Julie";
    $lastname = "Dooley2";
    $email = "julie@example.com";
    $stmt->execute();
    echo "New records created successfully" . "<br>";
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