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
                <li id="prev" class="active"><a href="./002.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./004.php">Next »</a></li>
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
                <h2>PHP 5 Data Types</h2>
                <!--new example-->
                <p>The PHP var_dump() function returns 
                    the data type and value:
                </p>
                 <?php
                $x = 5985;
                var_dump($x);
                ?>
                <?php
                $x = 10;  
                echo ++$x;
                ?> 
                <?php
                $x = 10;  
                echo $x++;
                ?>  
                <!--new example-->
                <h2>PHP Array</h2>
                <?php  
                $cars = array("Volvo","BMW","Toyota");
                var_dump($cars);
                echo $cars[0];
                $cars[0]="Mazda";
                echo $cars[0];
                ?> 
                <?php
                $x = array("a" => "red", "b" => "green");  
                $y = array("c" => "blue", "d" => "yellow");  

                print_r($x + $y); // union of $x and $y
                ?>  
                <?php
                $x = array("a" => "red", "b" => "green");  
                $y = array("c" => "blue", "d" => "yellow");  

                var_dump($x == $y);
                ?>  
                <?php
                $x = array("a" => "red", "b" => "green");  
                $y = array("c" => "blue", "d" => "yellow");  

                var_dump($x === $y);
                ?>  
                <?php
                $x = array("a" => "red", "b" => "green");  
                $y = array("c" => "blue", "d" => "yellow");  

                var_dump($x != $y);
                ?>  
                <?php
                $x = array("a" => "red", "b" => "green");  
                $y = array("c" => "blue", "d" => "yellow");  

                var_dump($x <> $y);
                ?>  
                <?php
                $x = array("a" => "red", "b" => "green");  
                $y = array("c" => "blue", "d" => "yellow");  

                var_dump($x !== $y);
                ?>  
                <!--new example-->
                <h2>PHP Objects</h2>
                <?php
                class Car {
                    function Car($model) {
                        $this->model = $model;
                    }
                }
                // create an object
                $herbie = new Car("VW");
                // show object properties
                echo $herbie->model;
                ?>
                <!--new example-->
                <h2>PHP NULL</h2>
                <p>Null is a special data type which can have only one value: NULL.</p>
                <p>A variable of data type NULL is a variable that has no value assigned to it.</p>
                <p><strong>Tip:</strong> If a variable is created without a value, it is 
                automatically assigned a value of NULL.</p>
                <p>Variables can also be emptied by setting the value to NULL:</p>
                <?php
                $x = "Hello world!";
                $x = null;
                var_dump($x);
                ?>
                <!--new example-->
                <h2>PHP String Functions</h2>
                 <?php
                echo strlen("Hello world!"); // outputs 12
                ?> 
                 <?php
                echo str_word_count("Hello world!"); // outputs 2
                ?> 
                <?php
                echo strrev("Hello world!"); // outputs !dlrow olleH
                ?>
                <?php
                echo strpos("Hello world!", "world"); // outputs 6
                ?> 
                <?php
                echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
                ?> 
                <?php
                $txt1 = "Hello";
                $txt2 = " world!";
                $txt1 .= $txt2;
                echo $txt1;
                ?>  
                <?php
                $txt1 = "Hello";
                $txt2 = " world!";
                echo $txt1 . $txt2;
                ?>  
                <!--new example-->
                <h2>Create a PHP Constant</h2>
                <p>To create a constant, use the define() function.</p>
                <h3>Syntax</h3>
                <div>
                    define(<i>name</i>, <i>value</i>, <i>case-insensitive</i>)
                </div>
                <?php
                define("GREETING", "Welcome to W3Schools.com!");

                function myTest1() {
                    echo GREETING;
                }

                myTest1();
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
                <li id="prev" class="active"><a href="./002.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./004.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



