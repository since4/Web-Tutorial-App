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
                <li id="prev" class="active"><a href="./001.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./003.php">Next »</a></li>
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
                <h2>PHP 5 Variables</h2>
                <!--new example-->
                <h2>Creating (Declaring) PHP Variables</h2>
                <p>In PHP, a variable starts with the $ sign, 
                    followed by the name of the variable:</p>
                <?php
                $txt = "Hello world!";
                $x = 5;
                $y = 10.5;

                echo $txt;
                echo "<br>";
                echo $x;
                echo "<br>";
                echo $y;
                ?>
                <!--new example-->
                <p>Note: Unlike other programming languages, 
                    PHP has no command for declaring a variable. 
                    It is created the moment you first assign a value to it.
                </p>
                <p>The PHP echo statement is often used 
                    to output data to the screen.</p>
                <?php
                $txt = "W3Schools.com";
                echo "I love $txt!";
                ?>
                <?php
                $txt = "W3Schools.com";
                echo "I love " . $txt . "!";
                ?> 
                <!--new example-->
                <h2>PHP Variables Scope</h2>
                <p>In PHP, variables can be declared anywhere in the script.</p>
                <p>The scope of a variable is the part of the script where the variable can be referenced/used.</p>
                <p>PHP has three different variable scopes:</p>
                <ul>
                        <li>local</li>
                        <li>global</li>
                        <li>static</li>
                </ul>
                <p>A variable declared <b>outside</b> a function has a 
                    GLOBAL SCOPE and can only be accessed outside a function:
                </p>
                <?php
                $x = 5; // global scope

                function myTest1() {
                    // using x inside this function will generate an error
                    echo "<p>Variable x inside function is: $x</p>";
                }
                myTest1();

                echo "<p>Variable x outside function is: $x</p>";
                ?>               
                <p>A variable declared within a function has a LOCAL SCOPE and 
                    can only be accessed within that function:</p>
                <?php
                function myTest2() {
                    $x = 5; // local scope
                    echo "<p>Variable x inside function is: $x</p>";
                }
                myTest2();

                // using x outside the function will generate an error
                echo "<p>Variable x outside function is: $x</p>";
                ?>
                <!--new example-->
                <p>The global keyword is used to access a global variable 
                    from within a function. To do this, use the global keyword 
                    before the variables (inside the function).
                    PHP also stores all global variables in an array called 
                    $GLOBALS[index]. The index holds the name of the variable. 
                    This array is also accessible from within functions and can 
                    be used to update global variables directly.
                </p>
                <?php
                $x = 5;
                $y = 10;

                function myTest3() {
                    global $x, $y;
                    $y = $x + $y;
                }

                myTest3();  // run function
                echo $y; // output the new value for variable $y
                ?>
                <?php
                $x = 5;
                $y = 10;

                function myTest4() {
                    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
                }

                myTest4();
                echo $y;
                ?>
                <!--new example-->
                <p>Normally, when a function is completed/executed, 
                    all of its variables are deleted. 
                    However, sometimes we want a local variable NOT to be deleted. 
                    We need it for a 
                    further job.
                </p>
                <p>To do this, use the <b>static</b> keyword when you first 
                    declare the variable.Then, each time the function is called, 
                    that variable will still have the information it contained 
                    from the last time the function was called. 
                    The variable is still local to the function.</p>
                <?php
                function myTest5() {
                    static $x = 0;
                    echo $x;
                    $x++;
                }

                myTest5();
                echo "<br>";
                myTest5();
                echo "<br>";
                myTest5();
                ?>
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP 5 Variables&lt/h2>
        &lt!--new example-->
        &lth2>Creating (Declaring) PHP Variables&lt/h2>
        &ltp>In PHP, a variable starts with the $ sign, 
            followed by the name of the variable:&lt/p>
        &lt?php
        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;

        echo $txt;
        echo "&ltbr>";
        echo $x;
        echo "&ltbr>";
        echo $y;
        ?>
        &lt!--new example-->
        &ltp>Note: Unlike other programming languages, 
            PHP has no command for declaring a variable. 
            It is created the moment you first assign a value to it.
        &lt/p>
        &ltp>The PHP echo statement is often used 
            to output data to the screen.&lt/p>
        &lt?php
        $txt = "W3Schools.com";
        echo "I love $txt!";
        ?>
        &lt?php
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!";
        ?> 
        &lt!--new example-->
        &lth2>PHP Variables Scope&lt/h2>
        &ltp>In PHP, variables can be declared anywhere in the script.&lt/p>
        &ltp>The scope of a variable is the part of the script where the variable can be referenced/used.&lt/p>
        &ltp>PHP has three different variable scopes:&lt/p>
        &ltul>
                &ltli>local&lt/li>
                &ltli>global&lt/li>
                &ltli>static&lt/li>
        &lt/ul>
        &ltp>A variable declared &ltb>outside&lt/b> a function has a 
            GLOBAL SCOPE and can only be accessed outside a function:
        &lt/p>
        &lt?php
        $x = 5; // global scope

        function myTest1() {
            // using x inside this function will generate an error
            echo "&ltp>Variable x inside function is: $x&lt/p>";
        }
        myTest1();

        echo "&ltp>Variable x outside function is: $x&lt/p>";
        ?>               
        &ltp>A variable declared within a function has a LOCAL SCOPE and 
            can only be accessed within that function:&lt/p>
        &lt?php
        function myTest2() {
            $x = 5; // local scope
            echo "&ltp>Variable x inside function is: $x&lt/p>";
        }
        myTest2();

        // using x outside the function will generate an error
        echo "&ltp>Variable x outside function is: $x&lt/p>";
        ?>
        &lt!--new example-->
        &ltp>The global keyword is used to access a global variable 
            from within a function. To do this, use the global keyword 
            before the variables (inside the function).
            PHP also stores all global variables in an array called 
            $GLOBALS[index]. The index holds the name of the variable. 
            This array is also accessible from within functions and can 
            be used to update global variables directly.
        &lt/p>
        &lt?php
        $x = 5;
        $y = 10;

        function myTest3() {
            global $x, $y;
            $y = $x + $y;
        }

        myTest3();  // run function
        echo $y; // output the new value for variable $y
        ?>
        &lt?php
        $x = 5;
        $y = 10;

        function myTest4() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest4();
        echo $y;
        ?>
        &lt!--new example-->
        &ltp>Normally, when a function is completed/executed, 
            all of its variables are deleted. 
            However, sometimes we want a local variable NOT to be deleted. 
            We need it for a 
            further job.
        &lt/p>
        &ltp>To do this, use the &ltb>static&lt/b> keyword when you first 
            declare the variable.Then, each time the function is called, 
            that variable will still have the information it contained 
            from the last time the function was called. 
            The variable is still local to the function.&lt/p>
        &lt?php
        function myTest5() {
            static $x = 0;
            echo $x;
            $x++;
        }

        myTest5();
        echo "&ltbr>";
        myTest5();
        echo "&ltbr>";
        myTest5();
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
                <li id="prev" class="active"><a href="./001.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./003.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



