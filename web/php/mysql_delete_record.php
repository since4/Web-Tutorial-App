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
#Delete Data From MySQL
#DELETE FROM table ORDER BY 'the field' DESC|ASC LIMIT 'nr of records to delete'
try {
    // sql to delete a record
    $sql = "DELETE FROM " . $tbname_new 
            . " ORDER BY id" 
            . " DESC LIMIT 1";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully" . "<br>";                   
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage() . "<br>";
}
?>
<!--new example-->
<?php
#disconnect
$conn = null;
?> 
