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
                <li id="prev" class="active"><a href="../html/047.html">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./002.php">Next »</a></li>
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
                <h2>Basic PHP Syntax</h2>
                <!--new example-->
                <p>A PHP script can be placed anywhere in the document.</p>
                <p>
                    A PHP script starts with <b>&lt;?php</b> 
                    and ends with <b>?&gt;</b>:
                </p>
                <p>The default file extension for PHP files is ".php".</p>
                <p>A PHP file normally contains HTML tags, and some PHP scripting code.</p>
                <!--new example-->
                <h1>My first PHP page</h1>
                <?php
                echo "Hello World!";
                ?>
                <!--new example-->
                <h2>Comments in PHP</h2>
                <p>A comment in PHP code is a line that is not read/executed as part of the 
                program. Its only purpose is to be read by someone who is looking at the code.</p>
                <?php
                // This is a single-line comment

                # This is also a single-line comment

                /*
                This is a multiple-lines comment block
                that spans over multiple
                lines
                */

                // You can also use comments to leave out parts of a code line
                $x = 5 /* + 15 */ + 5;
                echo $x;
                ?>
                <!--new example-->
                <h2>PHP NO Case Sensitivity</h2>
                <p>In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, 
                and user-defined functions are NOT case-sensitive.</p>
                <p>However; all variable names are case-sensitive.</p>
                <?php
                $color = "red";
                echo "My car is " . $color . "<br>";
                echo "My house is " . $COLOR . "<br>";
                echo "My boat is " . $coLOR . "<br>";
                ?>
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>Basic PHP Syntax&lt/h2>
        &lt!--new example-->
        &ltp>A PHP script can be placed anywhere in the document.&lt/p>
        &ltp>
            A PHP script starts with &ltb>&lt;?php&lt/b> 
            and ends with &ltb>?&gt;&lt/b>:
        &lt/p>
        &ltp>The default file extension for PHP files is ".php".&lt/p>
        &ltp>A PHP file normally contains HTML tags, and some PHP scripting code.&lt/p>
        &lt!--new example-->
        &lth1>My first PHP page&lt/h1>
        &lt?php
        echo "Hello World!";
        ?>
        &lt!--new example-->
        &lth2>Comments in PHP&lt/h2>
        &ltp>A comment in PHP code is a line that is not read/executed as part of the 
        program. Its only purpose is to be read by someone who is looking at the code.&lt/p>
        &lt?php
        // This is a single-line comment

        # This is also a single-line comment

        /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
        */

        // You can also use comments to leave out parts of a code line
        $x = 5 /* + 15 */ + 5;
        echo $x;
        ?>
        &lt!--new example-->
        &lth2>PHP NO Case Sensitivity&lt/h2>
        &ltp>In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, 
        and user-defined functions are NOT case-sensitive.&lt/p>
        &ltp>However; all variable names are case-sensitive.&lt/p>
        &lt?php
        $color = "red";
        echo "My car is " . $color . "&ltbr>";
        echo "My house is " . $COLOR . "&ltbr>";
        echo "My boat is " . $coLOR . "&ltbr>";
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
                <li id="prev" class="active"><a href="../html/047.html">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./002.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>

