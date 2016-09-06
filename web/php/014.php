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
                echo "1: <a href=http://" 
                . $host_port
                . "php/mysql_create_tb.php>"
                . "mysql_create_tb.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Insert Data Into MySQL
                echo "1: <a href=http://" 
                . $host_port
                . "php/mysql_insert_record.php>"
                . "mysql_insert_record.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Insert Multiple Records Into MySQL
                echo "1: <a href=http://" 
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
                echo "1: <a href=http://" 
                . $host_port
                . "php/mysql_prepared_statements.php>"
                . "mysql_prepared_statements.php</a>"
                . "<br>";  
                ?>
                <!--new example-->
                <?php
                #Select Data From MySQL
                echo "1: <a href=http://" 
                . $host_port
                . "php/mysql_select.php>"
                . "mysql_select.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Delete Data From MySQL
                echo "1: <a href=http://" 
                . $host_port
                . "php/mysql_delete_record.php>"
                . "mysql_delete_record.php</a>"
                . "<br>";
                ?>
                <!--new example-->
                <?php
                #Update Data in MySQL
                echo "1: <a href=http://" 
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