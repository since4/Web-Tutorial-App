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
                <li id="prev" class="active"><a href="./005.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./007.php">Next »</a></li>
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
                <h2>PHP Global Variables - Superglobals</h2>
                <!--new example-->
                <?php
                $x = 75;
                $y = 25;

                function addition() {
                    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
                }

                addition();
                echo $z;
                ?>
                <!--new example-->
                <?php
                echo "<br>-PHP_SELF<br>";
                echo $_SERVER['PHP_SELF'];
                echo "-GATEWAY_INTERFACE<br>";
                echo $_SERVER['GATEWAY_INTERFACE'];
                echo "-SERVER_ADDR<br>";
                echo $_SERVER['SERVER_ADDR'];
                echo "-SERVER_NAME<br>";
                echo $_SERVER['SERVER_NAME'];
                echo "-SERVER_SOFTWARE<br>";
                echo $_SERVER['SERVER_SOFTWARE'];
                echo "-SERVER_PROTOCOL<br>";
                echo $_SERVER['SERVER_PROTOCOL'];
                echo "-REQUEST_METHOD<br>";
                echo $_SERVER['REQUEST_METHOD'];
                echo "-REQUEST_TIME<br>";
                echo $_SERVER['REQUEST_TIME'];
                echo "-QUERY_STRING<br>";
                echo $_SERVER['QUERY_STRING'];
                echo "-HTTP_ACCEPT<br>";
                echo $_SERVER['HTTP_ACCEPT'];
                echo "-HTTP_ACCEPT_CHARSET<br>";
                echo $_SERVER['HTTP_ACCEPT_CHARSET'];
                echo "-HTTP_HOST<br>";
                echo $_SERVER['HTTP_HOST'];
                echo "-HTTP_REFERER<br>";
                echo $_SERVER['HTTP_REFERER'];
                echo "-HTTPS<br>";
                echo $_SERVER['HTTPS'];
                echo "-REMOTE_ADDR<br>";
                echo $_SERVER['REMOTE_ADDR'];
                echo "-REMOTE_HOST<br>";
                echo $_SERVER['REMOTE_HOST'];
                echo "-REMOTE_PORT<br>";
                echo $_SERVER['REMOTE_PORT'];
                echo "-SCRIPT_FILENAME<br>";
                echo $_SERVER['SCRIPT_FILENAME'];
                echo "-SERVER_ADMIN<br>";
                echo $_SERVER['SERVER_ADMIN'];
                echo "-SERVER_PORT<br>";
                echo $_SERVER['SERVER_PORT'];
                echo "-SERVER_SIGNATURE<br>";
                echo $_SERVER['SERVER_SIGNATURE'];
                echo "-PATH_TRANSLATED<br>";
                echo $_SERVER['PATH_TRANSLATED'];
                echo "-SCRIPT_NAME<br>";
                echo $_SERVER['SCRIPT_NAME'];
                echo "-SCRIPT_URI<br>";
                echo $_SERVER['SCRIPT_URI'];
                echo "<br>";
                ?>
                <!--new example-->
                <h2>PHP $_REQUEST</h2>
                <p>PHP $_REQUEST is used to collect data after submitting 
                    an HTML form.</p>
                When a user submits the data by clicking on "Submit", 
                    the form data is sent to the file specified in the 
                    action attribute of the &lt;form&gt; tag. 
                    In this example, we point to the file itself 
                    for processing form data. Then, we can use the super 
                    global variable $_REQUEST to collect the value of the input field:</p>
                
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <!--input text field-->
                    Name: <input type="text" name="fname1">
                    <!--input submit button-->
                    <input type="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $name = $_REQUEST['fname1'];
                    if (empty($name)) {
                        echo "Name is empty";
                    } else {
                        echo $name;
                    }
                }
                ?>
                <!--new example-->
                <h2>PHP $_POST</h2>
                <p>PHP $_POST is widely used to collect form data after submitting an HTML form 
                with method="post". 
                $_POST is also widely used to pass variables.</p>
                <p>Same form as in example above... Then, we can use the super 
                    global variable $_POST to collect the value of the input field:</p>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <!--input text field-->
                    Name: <input type="text" name="fname2">
                    <!--input submit button-->
                    <input type="submit">
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $name = $_POST['fname2'];
                    if (empty($name)) {
                        echo "Name is empty";
                    } else {
                        echo $name;
                    }
                }
                ?>
                <!--new example-->
                <h2>PHP $_GET</h2>
                <p>PHP $_GET can also be used to collect form data after 
                    submitting an HTML form with method="get".</p>
                <p>$_GET can also collect data sent in the URL.</p>
                <p>Assume we have an HTML page that contains a 
                    hyperlink with parameters:</p>
                <p>When a user clicks on the link "Test $GET", 
                    the parameters "subject" and "web" are sent to the file
                    "<?php echo $_SERVER['PHP_SELF'];?>", 
                    and you can then access their values in the file with $_GET.</p>
                <a href="<?php echo $_SERVER['PHP_SELF'];?>?subject=PHP&web=W3schools.com">Test $GET</a>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    // collect value of input field
                    $subject = $_GET['subject'];
                    $web = $_GET['web'];
                    if (empty($subject) or empty($web)) {
                        echo "<br>subject or web is empty";
                    } else {
                        echo "<br>$subject <br>$web";
                    }
                }
                ?>
                <!--new example-->
                
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP Global Variables - Superglobals&lt/h2>
        &lt!--new example-->
        &lt?php
        $x = 75;
        $y = 25;

        function addition() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        addition();
        echo $z;
        ?>
        &lt!--new example-->
        &lt?php
        echo "&ltbr>-PHP_SELF&ltbr>";
        echo $_SERVER['PHP_SELF'];
        echo "-GATEWAY_INTERFACE&ltbr>";
        echo $_SERVER['GATEWAY_INTERFACE'];
        echo "-SERVER_ADDR&ltbr>";
        echo $_SERVER['SERVER_ADDR'];
        echo "-SERVER_NAME&ltbr>";
        echo $_SERVER['SERVER_NAME'];
        echo "-SERVER_SOFTWARE&ltbr>";
        echo $_SERVER['SERVER_SOFTWARE'];
        echo "-SERVER_PROTOCOL&ltbr>";
        echo $_SERVER['SERVER_PROTOCOL'];
        echo "-REQUEST_METHOD&ltbr>";
        echo $_SERVER['REQUEST_METHOD'];
        echo "-REQUEST_TIME&ltbr>";
        echo $_SERVER['REQUEST_TIME'];
        echo "-QUERY_STRING&ltbr>";
        echo $_SERVER['QUERY_STRING'];
        echo "-HTTP_ACCEPT&ltbr>";
        echo $_SERVER['HTTP_ACCEPT'];
        echo "-HTTP_ACCEPT_CHARSET&ltbr>";
        echo $_SERVER['HTTP_ACCEPT_CHARSET'];
        echo "-HTTP_HOST&ltbr>";
        echo $_SERVER['HTTP_HOST'];
        echo "-HTTP_REFERER&ltbr>";
        echo $_SERVER['HTTP_REFERER'];
        echo "-HTTPS&ltbr>";
        echo $_SERVER['HTTPS'];
        echo "-REMOTE_ADDR&ltbr>";
        echo $_SERVER['REMOTE_ADDR'];
        echo "-REMOTE_HOST&ltbr>";
        echo $_SERVER['REMOTE_HOST'];
        echo "-REMOTE_PORT&ltbr>";
        echo $_SERVER['REMOTE_PORT'];
        echo "-SCRIPT_FILENAME&ltbr>";
        echo $_SERVER['SCRIPT_FILENAME'];
        echo "-SERVER_ADMIN&ltbr>";
        echo $_SERVER['SERVER_ADMIN'];
        echo "-SERVER_PORT&ltbr>";
        echo $_SERVER['SERVER_PORT'];
        echo "-SERVER_SIGNATURE&ltbr>";
        echo $_SERVER['SERVER_SIGNATURE'];
        echo "-PATH_TRANSLATED&ltbr>";
        echo $_SERVER['PATH_TRANSLATED'];
        echo "-SCRIPT_NAME&ltbr>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "-SCRIPT_URI&ltbr>";
        echo $_SERVER['SCRIPT_URI'];
        echo "&ltbr>";
        ?>
        &lt!--new example-->
        &lth2>PHP $_REQUEST&lt/h2>
        &ltp>PHP $_REQUEST is used to collect data after submitting 
            an HTML form.&lt/p>
        When a user submits the data by clicking on "Submit", 
            the form data is sent to the file specified in the 
            action attribute of the &lt;form&gt; tag. 
            In this example, we point to the file itself 
            for processing form data. Then, we can use the super 
            global variable $_REQUEST to collect the value of the input field:&lt/p>

        &ltform method="post" action="&lt?php echo $_SERVER['PHP_SELF'];?>">
            &lt!--input text field-->
            Name: &ltinput type="text" name="fname1">
            &lt!--input submit button-->
            &ltinput type="submit">
        &lt/form>

        &lt?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_REQUEST['fname1'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
        &lt!--new example-->
        &lth2>PHP $_POST&lt/h2>
        &ltp>PHP $_POST is widely used to collect form data after submitting an HTML form 
        with method="post". 
        $_POST is also widely used to pass variables.&lt/p>
        &ltp>Same form as in example above... Then, we can use the super 
            global variable $_POST to collect the value of the input field:&lt/p>
        &ltform method="post" action="&lt?php echo $_SERVER['PHP_SELF'];?>">
            &lt!--input text field-->
            Name: &ltinput type="text" name="fname2">
            &lt!--input submit button-->
            &ltinput type="submit">
        &lt/form>

        &lt?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname2'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
        &lt!--new example-->
        &lth2>PHP $_GET&lt/h2>
        &ltp>PHP $_GET can also be used to collect form data after 
            submitting an HTML form with method="get".&lt/p>
        &ltp>$_GET can also collect data sent in the URL.&lt/p>
        &ltp>Assume we have an HTML page that contains a 
            hyperlink with parameters:&lt/p>
        &ltp>When a user clicks on the link "Test $GET", 
            the parameters "subject" and "web" are sent to the file
            "&lt?php echo $_SERVER['PHP_SELF'];?>", 
            and you can then access their values in the file with $_GET.&lt/p>
        &lta href="&lt?php echo $_SERVER['PHP_SELF'];?>?subject=PHP&web=W3schools.com">Test $GET&lt/a>
        &lt?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // collect value of input field
            $subject = $_GET['subject'];
            $web = $_GET['web'];
            if (empty($subject) or empty($web)) {
                echo "&ltbr>subject or web is empty";
            } else {
                echo "&ltbr>$subject &ltbr>$web";
            }
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
                <li id="prev" class="active"><a href="./005.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./007.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



