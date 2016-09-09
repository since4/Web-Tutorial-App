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
                <li id="prev" class="active"><a href="./006.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./008.php">Next »</a></li>
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
                <h2>PHP 5 Form Handling</h2>
                <!--new example-->
                <p>When the user fills out the form above and clicks 
                    the submit button, the form data is sent for processing 
                    to a PHP file. 
                    The form data is sent with the HTTP POST method.</p>
                <p>To display the submitted data you could simply 
                    echo all the variables. </p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    Name: <input type="text" name="name"><br>
                    E-mail: <input type="text" name="email"><br>
                    <input type="submit">
                </form>
                Welcome <?php echo $_POST["name"]; ?><br>
                Your email address is: <?php echo $_POST["email"]; ?>
                <!--new example-->
                <p>The same with HTTP GET</p>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
                Name: <input type="text" name="name"><br>
                E-mail: <input type="text" name="email"><br>
                <input type="submit">
                </form>Welcome <?php echo $_GET["name"]; ?><br>
                Your email address is: <?php echo $_GET["email"]; ?>
                <!--new example-->
                <h2>GET vs. POST</h2>
                <p>Both GET and POST create an array 
                    (e.g. array( key =&gt; value, key2 =&gt; value2, 
                    key3 =&gt; value3, ...)). This array holds key/value pairs, 
                    where keys are the names of the form controls and values 
                    are the input data from the user.</p>
                <p>Both GET and POST are treated as $_GET and $_POST. 
                    These are superglobals,which means that they are 
                    always accessible, regardless of scope - 
                    and you can access them from any function,
                    class or file without having to do anything special.</p>
                <p>$_GET is an array of variables passed to the current 
                    script via the URL parameters.</p>
                <p>Information sent from a form with the GET method is 
                    <strong>visible to everyone</strong> (all variable names 
                    and values are displayed in the URL). GET also has limits 
                    on the amount of information to send. The limitation is 
                    about 2000 characters. However, because the variables are 
                    displayed in the URL, it is possible to bookmark the page. 
                    This can be useful in some cases.</p>
                <p>GET may be used for sending non-sensitive data.</p>
                <p>$_POST is an array of variables passed to the current 
                    script via the HTTP POST method.</p>
                <p>Information sent from a form with the POST method is 
                    <strong>invisible to others</strong> 
                    (all names/values are embedded within the body 
                    of the HTTP request) and has <strong>no limits</strong> 
                    on the amount of information to send.</p>
                <p>Moreover POST supports advanced functionality such as 
                    support for multi-part binary input while uploading files 
                    to server.</p>
                <p>However, because the variables are not displayed in the URL, 
                    it is not possible to bookmark the page.</p>                
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP 5 Form Handling&lt/h2>
        &lt!--new example-->
        &ltp>When the user fills out the form above and clicks 
            the submit button, the form data is sent for processing 
            to a PHP file. 
            The form data is sent with the HTTP POST method.&lt/p>
        &ltp>To display the submitted data you could simply 
            echo all the variables. &lt/p>
        &ltform action="&lt?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Name: &ltinput type="text" name="name">&ltbr>
            E-mail: &ltinput type="text" name="email">&ltbr>
            &ltinput type="submit">
        &lt/form>
        Welcome &lt?php echo $_POST["name"]; ?>&ltbr>
        Your email address is: &lt?php echo $_POST["email"]; ?>
        &lt!--new example-->
        &ltp>The same with HTTP GET&lt/p>
        &ltform action="&lt?php echo $_SERVER['PHP_SELF'];?>" method="get">
        Name: &ltinput type="text" name="name">&ltbr>
        E-mail: &ltinput type="text" name="email">&ltbr>
        &ltinput type="submit">
        &lt/form>Welcome &lt?php echo $_GET["name"]; ?>&ltbr>
        Your email address is: &lt?php echo $_GET["email"]; ?>
        &lt!--new example-->
        &lth2>GET vs. POST&lt/h2>
        &ltp>Both GET and POST create an array 
            (e.g. array( key =&gt; value, key2 =&gt; value2, 
            key3 =&gt; value3, ...)). This array holds key/value pairs, 
            where keys are the names of the form controls and values 
            are the input data from the user.&lt/p>
        &ltp>Both GET and POST are treated as $_GET and $_POST. 
            These are superglobals,which means that they are 
            always accessible, regardless of scope - 
            and you can access them from any function,
            class or file without having to do anything special.&lt/p>
        &ltp>$_GET is an array of variables passed to the current 
            script via the URL parameters.&lt/p>
        &ltp>Information sent from a form with the GET method is 
            &ltstrong>visible to everyone&lt/strong> (all variable names 
            and values are displayed in the URL). GET also has limits 
            on the amount of information to send. The limitation is 
            about 2000 characters. However, because the variables are 
            displayed in the URL, it is possible to bookmark the page. 
            This can be useful in some cases.&lt/p>
        &ltp>GET may be used for sending non-sensitive data.&lt/p>
        &ltp>$_POST is an array of variables passed to the current 
            script via the HTTP POST method.&lt/p>
        &ltp>Information sent from a form with the POST method is 
            &ltstrong>invisible to others&lt/strong> 
            (all names/values are embedded within the body 
            of the HTTP request) and has &ltstrong>no limits&lt/strong> 
            on the amount of information to send.&lt/p>
        &ltp>Moreover POST supports advanced functionality such as 
            support for multi-part binary input while uploading files 
            to server.&lt/p>
        &ltp>However, because the variables are not displayed in the URL, 
            it is not possible to bookmark the page.&lt/p>  

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
                <li id="prev" class="active"><a href="./006.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./008.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



