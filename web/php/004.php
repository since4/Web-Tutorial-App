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
                <li id="prev" class="active"><a href="./003.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./005.php">Next »</a></li>
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
                <h2>PHP Conditional Statements</h2>
                <!--new example-->
                <?php
                $t = date("H");
                echo "<p>The hour (of the server) is " . $t;
                echo ", and will give the following message:</p>";

                if ($t < "10") {
                    echo "Have a good morning!";
                } elseif ($t < "20") {
                    echo "Have a good day!";
                } else {
                    echo "Have a good night!";
                }
                ?>
                <!--new example-->
                <?php
                $favcolor = "red";

                switch ($favcolor) {
                    case "red":
                        echo "Your favorite color is red!";
                        break;
                    case "blue":
                        echo "Your favorite color is blue!";
                        break;
                    case "green":
                        echo "Your favorite color is green!";
                        break;
                    default:
                        echo "Your favorite color is neither red, blue, nor green!";
                }
                ?>
                <!--new example-->
                <h2>PHP Loops</h2>
                <?php  
                $x = 1;

                while($x <= 5) {
                  echo "The number is: $x <br>";
                  $x++;
                }
                ?>  
                <!--new example-->
                <?php
                $x = 6;

                do {
                    echo "The number is: $x <br>";
                    $x++;
                } while ($x <= 5);
                ?>
                <!--new example-->
                <?php  
                $colors = array("red", "green", "blue", "yellow");

                foreach ($colors as $value) {
                  echo "$value <br>";
                }
                ?>  
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP Conditional Statements&lt/h2>
        &lt!--new example-->
        &lt?php
        $t = date("H");
        echo "&ltp>The hour (of the server) is " . $t;
        echo ", and will give the following message:&lt/p>";

        if ($t &lt "10") {
            echo "Have a good morning!";
        } elseif ($t &lt "20") {
            echo "Have a good day!";
        } else {
            echo "Have a good night!";
        }
        ?>
        &lt!--new example-->
        &lt?php
        $favcolor = "red";

        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>
        &lt!--new example-->
        &lth2>PHP Loops&lt/h2>
        &lt?php  
        $x = 1;

        while($x &lt= 5) {
          echo "The number is: $x &ltbr>";
          $x++;
        }
        ?>  
        &lt!--new example-->
        &lt?php
        $x = 6;

        do {
            echo "The number is: $x &ltbr>";
            $x++;
        } while ($x &lt= 5);
        ?>
        &lt!--new example-->
        &lt?php  
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
          echo "$value &ltbr>";
        }
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
                <li id="prev" class="active"><a href="./003.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./005.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



