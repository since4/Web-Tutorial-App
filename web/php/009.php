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
                <li id="prev" class="active"><a href="./008.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./010.php">Next »</a></li>
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
                <h2>PHP 5 Multidimensional Arrays</h2>
                <!--new example-->
                <?php
                $cars = array
                  (
                  array("Volvo",22,18),
                  array("BMW",15,13),
                  array("Saab",5,2),
                  array("Land Rover",17,15)
                  );

                echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
                echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
                echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
                echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
                
                for ($row = 0; $row < 4; $row++) {
                echo "<p><b>Row number $row</b></p>";
                echo "<ul>";
                for ($col = 0; $col < 3; $col++) {
                  echo "<li>".$cars[$row][$col]."</li>";
                }
                echo "</ul>";
                }
                ?>
                <!--new example-->
                <h2>PHP 5 Date and Time</h2>
                <?php
                echo "Today is " . date("Y/m/d") . "<br>";
                echo "Today is " . date("Y.m.d") . "<br>";
                echo "Today is " . date("Y-m-d") . "<br>";
                echo "Today is " . date("l");
                ?>
                <!--new example-->
                &copy; 2010-<?php echo date("Y");?>               
                <!--new example-->
                <?php
                echo "The time is " . date("h:i:sa");
                ?>
                <!--new example-->
                <?php
                date_default_timezone_set("America/New_York");
                echo "The time is " . date("h:i:sa");
                ?>               
                <!--new example-->
                <?php
                $d=mktime(11, 14, 54, 8, 12, 2014);
                echo "Created date is " . date("Y-m-d h:i:sa", $d);
                ?>
                <!--new example-->
                <?php
                $d=strtotime("10:30pm April 15 2014");
                echo "Created date is " . date("Y-m-d h:i:sa", $d);
                ?>
                <!--new example-->
                <h2>PHP 5 Include Files</h2>
                <div class="menu">
                <?php include 'menu.php';?>
                </div>
                <p>Some text.</p>
                <?php include 'vars.php';
                echo "I have a $color $car.";
                ?>
                <p>Some more text.</p>
                <?php include 'footer.php';?>
                <!--new example-->
                <p>
                Use require when the file is required by the application.
                Use include when the file is not required and application 
                should continue when file is not found.
                </p>
                &lt?php include 'noFileExists.php';?>
                &lt?php require 'noFileExists.php';?>
                
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP 5 Multidimensional Arrays&lt/h2>
        &lt!--new example-->
        &lt?php
        $cars = array
          (
          array("Volvo",22,18),
          array("BMW",15,13),
          array("Saab",5,2),
          array("Land Rover",17,15)
          );

        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".&ltbr>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".&ltbr>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".&ltbr>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".&ltbr>";

        for ($row = 0; $row &lt 4; $row++) {
        echo "&ltp>&ltb>Row number $row&lt/b>&lt/p>";
        echo "&ltul>";
        for ($col = 0; $col &lt 3; $col++) {
          echo "&ltli>".$cars[$row][$col]."&lt/li>";
        }
        echo "&lt/ul>";
        }
        ?>
        &lt!--new example-->
        &lth2>PHP 5 Date and Time&lt/h2>
        &lt?php
        echo "Today is " . date("Y/m/d") . "&ltbr>";
        echo "Today is " . date("Y.m.d") . "&ltbr>";
        echo "Today is " . date("Y-m-d") . "&ltbr>";
        echo "Today is " . date("l");
        ?>
        &lt!--new example-->
        &copy; 2010-&lt?php echo date("Y");?>               
        &lt!--new example-->
        &lt?php
        echo "The time is " . date("h:i:sa");
        ?>
        &lt!--new example-->
        &lt?php
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
        ?>               
        &lt!--new example-->
        &lt?php
        $d=mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        ?>
        &lt!--new example-->
        &lt?php
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
        ?>
        &lt!--new example-->
        &lth2>PHP 5 Include Files&lt/h2>
        &ltdiv class="menu">
        &lt?php include 'menu.php';?>
        &lt/div>
        &ltp>Some text.&lt/p>
        &lt?php include 'vars.php';
        echo "I have a $color $car.";
        ?>
        &ltp>Some more text.&lt/p>
        &lt?php include 'footer.php';?>
        &lt!--new example-->
        &ltp>
        Use require when the file is required by the application.
        Use include when the file is not required and application 
        should continue when file is not found.
        &lt/p>
        &lt?php include 'noFileExists.php';?>
        &lt?php require 'noFileExists.php';?>

        &lt!--menu.php-->
        &lt!--used for 009.php-->
        &lt?php
        echo '&lta href="/default.asp">Home&lt/a> -
        &lta href="/html/default.asp">HTML Tutorial&lt/a> -
        &lta href="/css/default.asp">CSS Tutorial&lt/a> -
        &lta href="/js/default.asp">JavaScript Tutorial&lt/a> -
        &lta href="default.asp">PHP Tutorial&lt/a>';
        ?>
        
        &lt!--vars.php-->
        &lt!--used for 009.php-->
        &lt?php
        $color='red';
        $car='BMW';
        ?>
        
        &lt!--footer.php-->
        &lt!--used for 009.php-->
        &lt?php
        echo "&ltp>Copyright &copy; 1999-" . date("Y") . " W3Schools.com&lt/p>";
        ?>
        
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
                <li id="prev" class="active"><a href="./008.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./010.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



