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
                <li id="prev" class="active"><a href="./004.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./006.php">Next »</a></li>
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
                <h2>PHP User Defined Functions</h2>
                <p>Function names are NOT case-sensitive.</p>
                <!--new example-->
                <?php
                function setHeight($minheight = 50) {
                    echo "The height is : $minheight <br>";
                }

                setHeight(350);
                setHeight();
                setHeight(135);
                setHeight(80);
                ?>
                <!--new example-->
                <?php
                function sum($x, $y) {
                    $z = $x + $y;
                    return $z;
                }

                echo "5 + 10 = " . sum(5,10) . "<br>";
                echo "7 + 13 = " . sum(7,13) . "<br>";
                echo "2 + 4 = " . sum(2,4);
                ?>
                <!--new example-->
                <h2>PHP 5 Arrays</h2>
                <?php
                $cars = array("Volvo", "BMW", "Toyota");
                echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
                ?>
                <!--new example-->
                <?php
                $cars = array("Volvo", "BMW", "Toyota");
                echo count($cars);
                ?>
                <!--new example-->
                <h3>Loop Through an Indexed Array</h3>
                <?php
                $cars = array("Volvo", "BMW", "Toyota");
                $arrlength = count($cars);

                for($x = 0; $x < $arrlength; $x++) {
                    echo $cars[$x];
                    echo "<br>";
                }
                ?>
                <!--new example-->
                <h3>PHP Associative Arrays</h3>
                <?php
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                echo "Peter is " . $age['Peter'] . " years old.";
                ?>
                <!--new example-->
                <h3>Loop Through an Associative Array</h3>
                <?php
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

                foreach($age as $x => $x_value) {
                    echo "Key=" . $x . ", Value=" . $x_value;
                    echo "<br>";
                }
                ?>
                <!--new example-->
                <?php
                $cars = array("Volvo", "BMW", "Toyota");
                sort($cars);
                var_dump($cars);
                echo "<br>";
                $clength = count($cars);
                for($x = 0; $x < $clength; $x++) {
                    echo $cars[$x];
                    echo "<br>";
                }
                ?> 
                 <?php
                $numbers = array(4, 6, 2, 22, 11);
                rsort($numbers);
                var_dump($numbers);
                echo "<br>";
                ?> 
                <?php
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                asort($age);
                var_dump($age);
                echo "<br>";
                ?> 
                <?php
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                ksort($age);
                var_dump($age);
                echo "<br>";
                ?> 
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP User Defined Functions&lt/h2>
        &ltp>Function names are NOT case-sensitive.&lt/p>
        &lt!--new example-->
        &lt?php
        function setHeight($minheight = 50) {
            echo "The height is : $minheight &ltbr>";
        }

        setHeight(350);
        setHeight();
        setHeight(135);
        setHeight(80);
        ?>
        &lt!--new example-->
        &lt?php
        function sum($x, $y) {
            $z = $x + $y;
            return $z;
        }

        echo "5 + 10 = " . sum(5,10) . "&ltbr>";
        echo "7 + 13 = " . sum(7,13) . "&ltbr>";
        echo "2 + 4 = " . sum(2,4);
        ?>
        &lt!--new example-->
        &lth2>PHP 5 Arrays&lt/h2>
        &lt?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        ?>
        &lt!--new example-->
        &lt?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
        ?>
        &lt!--new example-->
        &lth3>Loop Through an Indexed Array&lt/h3>
        &lt?php
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);

        for($x = 0; $x &lt $arrlength; $x++) {
            echo $cars[$x];
            echo "&ltbr>";
        }
        ?>
        &lt!--new example-->
        &lth3>PHP Associative Arrays&lt/h3>
        &lt?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
        ?>
        &lt!--new example-->
        &lth3>Loop Through an Associative Array&lt/h3>
        &lt?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "&ltbr>";
        }
        ?>
        &lt!--new example-->
        &lt?php
        $cars = array("Volvo", "BMW", "Toyota");
        sort($cars);
        var_dump($cars);
        echo "&ltbr>";
        $clength = count($cars);
        for($x = 0; $x &lt $clength; $x++) {
            echo $cars[$x];
            echo "&ltbr>";
        }
        ?> 
         &lt?php
        $numbers = array(4, 6, 2, 22, 11);
        rsort($numbers);
        var_dump($numbers);
        echo "&ltbr>";
        ?> 
        &lt?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        asort($age);
        var_dump($age);
        echo "&ltbr>";
        ?> 
        &lt?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        ksort($age);
        var_dump($age);
        echo "&ltbr>";
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
                <li id="prev" class="active"><a href="./004.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./006.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



