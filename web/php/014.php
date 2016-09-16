<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Header navigation-->
    <div class="header_image">
        <div class="header_navigation_V-2">
            <ul> 
                <li id="prev" class="active"><a href="./013.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./015.php">Next »</a></li>
            </ul>
        </div>
    </div>

    <!--External Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <link rel="stylesheet" type="text/css" href="../css/site-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/background-images.css">
    
    <!--Internal Stylesheet-->
    <style>
        
    </style>
    
</head>    
<body>       
    <div>
        <!--Body content-->
        <div class = "mainbody"> 
            <h1>What Can PHP Do?</h1>
            <div class = "interactive">
                <h2>PHP MySQL Database</h2>
                <h2>Should I Use MySQLi or PDO?</h2>
                <p>If you need a short answer, it would be "Whatever you like".</p>
                <p>Both MySQLi and PDO have their advantages:</p>
                <p>PDO will work on 12 different database systems, 
                    where as MySQLi will only work with MySQL databases.</p>
                <p>So, if you have to switch your project to use another 
                    database, PDO makes the process easy. 
                    You only have to change the connection string and a few 
                    queries. With MySQLi, you will need to rewrite the 
                    entire code - queries included.
                </p>
                <!--new example-->
                <?php
                $host_port= "localhost:8000/";
                ?>
                <!--new example-->
                <?php
                #create db
                echo "1: <a href=http://" 
                . $host_port
                . "php/mysql_create_db.php>"
                . "mysql_create_db.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #create table
                echo "2: <a href=http://" 
                . $host_port
                . "php/mysql_create_tb.php>"
                . "mysql_create_tb.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Insert Data Into MySQL
                echo "3: <a href=http://" 
                . $host_port
                . "php/mysql_insert_record.php>"
                . "mysql_insert_record.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Insert Multiple Records Into MySQL
                echo "4: <a href=http://" 
                . $host_port
                . "php/mysql_insert_multi_records.php>"
                . "mysql_insert_multi_records.php</a>"
                . "<br>";                   
                ?>
                <!--new example-->
                <h2>Prepared Statements and Bound Parameters</h2>
                <p>A prepared statement is a feature used to execute 
                    the same (or similar) SQL 
                    statements repeatedly with high efficiency.</p>
                <p>Prepared statements basically work like this:</p>
                <ol>
                    <li>Prepare: An SQL statement template is created and 
                        sent to the database. Certain values are left 
                        unspecified, called 
                        parameters (labeled "?"). Example: INSERT 
                        INTO MyGuests VALUES(?, ?, ?)
                    </li>
                    <li>The database parses, compiles, and performs query 
                        optimization on 
                        the SQL statement template, and stores the result 
                        without executing it
                    </li>
                    <li>Execute: At a later time, the application binds 
                        the values to the 
                        parameters, and the database executes the statement. 
                        The application may 
                        execute the statement as many times as it wants with 
                        different values
                    </li>
                </ol>
                <p>Compared to executing SQL statements directly, prepared statements 
                    have two main advantages:</p>
                <ul>
                    <li>Prepared statements reduces parsing time as the 
                        preparation on the query is done only 
                        once (although the statement is executed multiple times)
                    </li>
                    <li>Bound parameters minimize bandwidth to the server as 
                        you need send only 
                        the parameters each time, and not the whole query
                    </li>
                    <li>Prepared statements are very useful against 
                        SQL injections, because 
                        parameter values, which are transmitted later using 
                        a different protocol, 
                        need not be correctly escaped. If the original 
                        statement template is not 
                        derived from external input, SQL injection cannot occur.
                    </li>
                </ul>
                <!--new example-->
                <?php
                #Prepared Statements              
                echo "5: <a href=http://" 
                . $host_port
                . "php/mysql_prepared_statements.php>"
                . "mysql_prepared_statements.php</a>"
                . "<br>";  
                ?>
                <!--new example-->
                <?php
                #Select Data From MySQL
                echo "6: <a href=http://" 
                . $host_port
                . "php/mysql_select.php>"
                . "mysql_select.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Delete Data From MySQL
                echo "7: <a href=http://" 
                . $host_port
                . "php/mysql_delete_record.php>"
                . "mysql_delete_record.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Update Data in MySQL
                echo "8: <a href=http://" 
                . $host_port
                . "php/mysql_update_record.php>"
                . "mysql_update_record.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #disconnect
                $conn = null;
                ?> 
                <!--new example-->
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP MySQL Database&lt/h2>
        &lth2>Should I Use MySQLi or PDO?&lt/h2>
        &ltp>If you need a short answer, it would be "Whatever you like".&lt/p>
        &ltp>Both MySQLi and PDO have their advantages:&lt/p>
        &ltp>PDO will work on 12 different database systems, 
            where as MySQLi will only work with MySQL databases.&lt/p>
        &ltp>So, if you have to switch your project to use another 
            database, PDO makes the process easy. 
            You only have to change the connection string and a few 
            queries. With MySQLi, you will need to rewrite the 
            entire code - queries included.
        &lt/p>
        &lt!--new example-->
        &lt?php
        $host_port= "localhost:8000/";
        ?>
        &lt!--new example-->
        &lt?php
        #create db
        echo "1: &lta href=http://" 
        . $host_port
        . "php/mysql_create_db.php>"
        . "mysql_create_db.php&lt/a>"
        . "&ltbr>";
        ?>
        &lt!--new example-->
        &lt?php
        #create table
        echo "2: &lta href=http://" 
        . $host_port
        . "php/mysql_create_tb.php>"
        . "mysql_create_tb.php&lt/a>"
        . "&ltbr>";
        ?>
        &lt!--new example-->
        &lt?php
        #Insert Data Into MySQL
        echo "3: &lta href=http://" 
        . $host_port
        . "php/mysql_insert_record.php>"
        . "mysql_insert_record.php&lt/a>"
        . "&ltbr>";
        ?>
        &lt!--new example-->
        &lt?php
        #Insert Multiple Records Into MySQL
        echo "4: &lta href=http://" 
        . $host_port
        . "php/mysql_insert_multi_records.php>"
        . "mysql_insert_multi_records.php&lt/a>"
        . "&ltbr>";                   
        ?>
        &lt!--new example-->
        &lth2>Prepared Statements and Bound Parameters&lt/h2>
        &ltp>A prepared statement is a feature used to execute 
            the same (or similar) SQL 
            statements repeatedly with high efficiency.&lt/p>
        &ltp>Prepared statements basically work like this:&lt/p>
        &ltol>
            &ltli>Prepare: An SQL statement template is created and 
                sent to the database. Certain values are left 
                unspecified, called 
                parameters (labeled "?"). Example: INSERT 
                INTO MyGuests VALUES(?, ?, ?)
            &lt/li>
            &ltli>The database parses, compiles, and performs query 
                optimization on 
                the SQL statement template, and stores the result 
                without executing it
            &lt/li>
            &ltli>Execute: At a later time, the application binds 
                the values to the 
                parameters, and the database executes the statement. 
                The application may 
                execute the statement as many times as it wants with 
                different values
            &lt/li>
        &lt/ol>
        &ltp>Compared to executing SQL statements directly, prepared statements 
            have two main advantages:&lt/p>
        &ltul>
            &ltli>Prepared statements reduces parsing time as the 
                preparation on the query is done only 
                once (although the statement is executed multiple times)
            &lt/li>
            &ltli>Bound parameters minimize bandwidth to the server as 
                you need send only 
                the parameters each time, and not the whole query
            &lt/li>
            &ltli>Prepared statements are very useful against 
                SQL injections, because 
                parameter values, which are transmitted later using 
                a different protocol, 
                need not be correctly escaped. If the original 
                statement template is not 
                derived from external input, SQL injection cannot occur.
            &lt/li>
        &lt/ul>
        &lt!--new example-->
        &lt?php
        #Prepared Statements              
        echo "5: &lta href=http://" 
        . $host_port
        . "php/mysql_prepared_statements.php>"
        . "mysql_prepared_statements.php&lt/a>"
        . "&ltbr>";  
        ?>
        &lt!--new example-->
        &lt?php
        #Select Data From MySQL
        echo "6: &lta href=http://" 
        . $host_port
        . "php/mysql_select.php>"
        . "mysql_select.php&lt/a>"
        . "&ltbr>";
        ?>
        &lt!--new example-->
        &lt?php
        #Delete Data From MySQL
        echo "7: &lta href=http://" 
        . $host_port
        . "php/mysql_delete_record.php>"
        . "mysql_delete_record.php&lt/a>"
        . "&ltbr>";
        ?>
        &lt!--new example-->
        &lt?php
        #Update Data in MySQL
        echo "8: &lta href=http://" 
        . $host_port
        . "php/mysql_update_record.php>"
        . "mysql_update_record.php&lt/a>"
        . "&ltbr>";
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 
        &lt!--new example-->       
        
        
        &lt!--mysql_create_db.php-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname = "php_tutorial"; #existing db needed to connect with pdo
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
        #create db
        try {                   
            $sql = "CREATE DATABASE " . $dbname_new;
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Database " . $dbname_new . " created successfully&ltbr>";
        } catch(PDOException $e) {
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        }
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 

        &lt!--mysql_create_tb.php-->
        &lt!--new example-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname_new", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
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
            echo "Table " . $tbname_new . " created successfully" . "&ltbr>";
        } catch (PDOException $e) {
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        }
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 

        &lt!--mysql_delete_record.php-->
        &lt!--new example-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname_new", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
        #Delete Data From MySQL
        #DELETE FROM table ORDER BY 'the field' DESC|ASC LIMIT 'nr of records to delete'
        try {
            // sql to delete a record
            $sql = "DELETE FROM " . $tbname_new 
                    . " ORDER BY id" 
                    . " DESC LIMIT 1";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully" . "&ltbr>";                   
        } catch (PDOException $e) {
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        }
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 

        &lt!--mysql_insert_multi_records.php-->
        &lt!--new example-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname_new", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
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
            echo "New records created successfully" . "&ltbr>"; 
            //Get ID of Last Inserted Record
            $last_id = $conn->lastInsertId(); #doesn't seem to work without exec()
            echo "Last inserted ID is: " . $last_id . "&ltbr>";
        } catch (PDOException $e) {
            // roll back the transaction if something failed
            $conn->rollback();
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        }                      
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 


        &lt!--mysql_insert_record.php-->
        &lt!--new example-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname_new", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
        #Insert Data Into MySQL
        try {
            $sql = "INSERT INTO " . $tbname_new . " (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully" . "&ltbr>";
            //Get ID of Last Inserted Record
            $last_id = $conn->lastInsertId();
            echo "Last inserted ID is: " . $last_id . "&ltbr>";
        } catch (PDOException $e) {
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        }
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 

        &lt!--mysql_prepared_statements.php-->
        &lt!--new example-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname_new", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
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
            echo "New records created successfully" . "&ltbr>";
            //Get ID of Last Inserted Record
            $last_id = $conn->lastInsertId();
            echo "Last inserted ID is: " . $last_id . "&ltbr>";
        } catch (PDOException $e) {
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 

        &lt!--mysql_select.php-->
        &lt!--new example-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname_new", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
        #Select Data From MySQL
        echo "&lttable style='border: solid 1px black;'>";
        echo "&lttr>&ltth>Id&lt/th>&ltth>Firstname&lt/th>&ltth>Lastname&lt/th>&lt/tr>";
        class TableRows extends RecursiveIteratorIterator {
            function __construct($it) {
                parent::__construct($it, self::LEAVES_ONLY);
            }
            function current() {
                return "&lttd style='width:150px;border:1px solid black;'>" 
                . parent::current(). "&lt/td>";
            }
            function beginChildren() {
                echo "&lttr>";
            }
            function endChildren() {
                echo "&lt/tr>" . "\n";
            }
        } 
        try {
            $stmt = $conn->prepare("SELECT id, firstname, "
                    . "lastname FROM " . $tbname_new );
            $stmt->execute();
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach(new TableRows(
                    new RecursiveArrayIterator(
                            $stmt->fetchAll())) 
                    as $k=>$v) { echo $v; }                    
        } catch (PDOException $e) {
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        } 
        echo "&lt/table>";
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 

        &lt!--mysql_update_record.php-->
        &lt!--new example-->
        &lt?php
        $servername = "localhost";
        $username = "phpuser";
        $password = "K1m?sRt7*";
        $dbname_new = "php_tutorial_pdo";
        $tbname_new = "MyGuests";
        ?>
        &lt?php
        #connect
        try {
            $conn = new PDO("mysql:host=$servername;"
                    . "dbname=$dbname_new", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully" . "&ltbr>";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "&ltbr>";
        } 
        ?>
        &lt!--new example-->
        &lt?php
        #Update Data in MySQL
        try {
            $sql = "UPDATE " . $tbname_new . " SET "
                    . "lastname='Doe3' WHERE id=2";
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
            // echo a message to say the UPDATE succeeded
            echo $stmt->rowCount() . " records UPDATED successfully" . "&ltbr>";                   
        } catch (PDOException $e) {
            echo $sql . "&ltbr>" . $e->getMessage() . "&ltbr>";
        }
        ?>
        &lt!--new example-->
        &lt?php
        #disconnect
        $conn = null;
        ?> 



        &lt!--new example-->
        
        </code>
        </pre>
        </div>
    </div>      

    <!--Body picture-->
    <div class="background_image"></div>

    <!--Footer navigation--> 
    <div style="margin:15px 40px 15px 40px">
        <div class="footer_navigation_V-2">
            <ul> 
                <li id="prev" class="active"><a href="./013.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./015.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>