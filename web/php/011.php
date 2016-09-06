<?php
#$_SESSION is global over all pages with session_start() set
#if not set on a page $_SESSION is just a page variable
session_start(['use_only_cookies' =>0 , 'use_trans_sid'=> 1]);
?>
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
                <li id="prev" class="active"><a href="./010.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./012.php">Next »</a></li>
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
                <h2>PHP 5 Cookies</h2>
                <!--new example-->
                <h2>What is a Cookie? </h2>
                <p>A cookie is often used to identify a user. 
                    A cookie is a small file that the server embeds 
                    on the user's computer. Each time the same computer 
                    requests a page with a browser, it will send the cookie too. 
                    With PHP, you can both create and retrieve cookie values.</p>
                <!--new example-->
                <h2>Create/Retrieve a Cookie</h2>
                <?php
                $cookie_name = "user";
                $cookie_value = "John Doe";
                #sets the cookie in the browser for 30 days 
                #"/" means that the cookie is available in entire website 
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                ?>
                <?php
                #checks whether cookie is set
                if(!isset($_COOKIE[$cookie_name])) {
                     echo "Cookie named '" . $cookie_name . "' is not set!";
                } else {
                     echo "Cookie '" . $cookie_name . "' is set!<br>";
                     echo "Value is: " . $_COOKIE[$cookie_name];
                }
                ?>
                <p><strong>Note:</strong> You might have to reload the page 
                    to see the value of the cookie.</p>
                <!--new example-->
                <?php
                #make a change
                $cookie_name = "user";
                $cookie_value = "Alex Porter";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                ?>
                <?php
                if(!isset($_COOKIE[$cookie_name])) {
                    echo "Cookie named '" . $cookie_name . "' is not set!";
                } else {
                    echo "Cookie '" . $cookie_name . "' is set!<br>";
                    echo "Value is: " . $_COOKIE[$cookie_name];
                }
                ?>
                <!--new example-->
                <h2>Delete a Cookie</h2>
                <p>To delete a cookie, use the setcookie() function with 
                    an expiration date in the past:</p>
                <!--new example-->
                <?php
                // set the expiration date to one hour ago
                setcookie("user", "", time() - 3600);
                ?>
                <?php
                echo "Cookie 'user' is deleted.";
                ?>
                <!--new example-->
                <h2>Check if Cookies are Enabled</h2>
                <?php
                if(count($_COOKIE) > 0) {
                    echo "Cookies are enabled.";
                } else {
                    echo "Cookies are disabled.";
                }
                ?>
                <!--new example-->
                <h2>PHP 5 Sessions</h2>
                <p>A session is a way to store information (in variables) 
                    to be used across multiple pages. Unlike a cookie, 
                    the information is not stored on the users computer.</p>
                <p>What is a PHP Session? When you work with an application, 
                    you open it, do some changes, and then you close it. 
                    This is much like a Session. The computer knows who you are. 
                    It knows when you start the application and when you end. 
                    But on the internet there is one problem: the web server 
                    does not know who you are or what you do, because the HTTP 
                    address doesn't maintain state. Session variables solve 
                    this problem by storing user information to be used 
                    across multiple pages (e.g. username, favorite color, etc). 
                    By default, session variables last until the user closes 
                    the browser. So; Session variables hold information about 
                    one single user, and are available to all pages in one 
                    application.</p>
                <p>A session key is an encryption and decryption key that 
                    is randomly generated to ensure the security of a 
                    communications session between a user and another 
                    computer or between two computers. Session keys are 
                    sometimes called symmetric keys, because the same key 
                    is used for both encryption and decryption. A session 
                    key may be derived from a hash value, using the 
                    CryptDeriveKey function (this method is called a 
                    session-key derivation scheme). Throughout each session, 
                    the key is transmitted along with each message and is 
                    encrypted with the recipient's public key. Because much 
                    of their security relies upon the brevity of their use, 
                    session keys are changed frequently. A different session 
                    key may be used for each message.</p>
                <!--new example-->
                <h2>Start a PHP Session</h2>
                <p>A session is started with the session_start() function. 
                    Session variables are set with the PHP global variable: 
                    $_SESSION.
                </p>
                <?php
                #$_SESSION["favcolor"] = null;
                #$_SESSION["favanimal"] = null;
                echo "1: <a href=http://localhost:8000/php/redirect.php>"
                . "redirect.php</a>";
                echo "1: <a href=http://localhost:8000/php/demo_session2.php>"
                . "demo_session2.php</a>";
                ?> 
                <?php
                echo "1: <br>";
                print_r($_SESSION);
                ?>
                <!--new example-->
                <h2>Get PHP Session Variable Values</h2>
                <p>How does it work? How does it know it's me?
                    Most sessions set a user-key on the user's computer 
                    that looks something like this: 
                    765487cf34ert8dede5a562e4f3a7e12. 
                    Then, when a session is opened on another page, 
                    it scans the computer for a user-key. If there is a match, 
                    it accesses that session, if not, it starts a new session. 
                </p>
                <?php
                // Echo session variables that were set on previous page
                echo "5: <br>";
                echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
                echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
                ?>
                <!--new example-->
                <h2>Modify a PHP Session Variable</h2>
                <?php
                // to change a session variable, just overwrite it
                echo "6: <br>";
                $_SESSION["favcolor"] = "yellow";
                print_r($_SESSION);
                ?>
                <!--new example-->
                <h2>Session variables</h2>
                <?php
                foreach ($_SESSION as $value) {
                  echo "$value <br>";
                }
                echo "<br>" . "session_name(): " . session_name() ."<br>";
                echo "session_id(): " . session_id()."<br>";
                echo "SID: " . SID."<br>";
                ?>
                <!--new example-->
                <h2>Destroy a PHP Session </h2>
                <?php
                // remove all session variables
                session_unset();
                // destroy the session
                session_destroy();
                echo "All session variables are now removed, "
                . "and the session is destroyed. Or not? SID is still "
                . "remembered.";
                echo "<br>" . "session_name(): " . session_name() ."<br>";
                echo "session_id(): " . session_id()."<br>";
                echo "SID: " . SID ."<br>";
                echo "htmlspecialchars(SID): " . htmlspecialchars(SID). "<br>";
                ?>
                <!--new example-->
                <h2>Session variables</h2>
                <?php
                foreach ($_SESSION as $value) {
                  echo "$value <br>";
                }
                ?>
                <!--new example-->
                <h2>PID</h2>
                <p>http://php.net/manual/en/session.idpassing.php</p>
                <p>There are two methods to propagate a session id: 
                    <br>Cookies <br>
                    <br>URL parameter<br>
                    The session module supports both methods. 
                    Cookies are optimal, but because they are not 
                    always available, we also provide an alternative way. 
                    The second method embeds the session id directly into URLs.
                    PHP is capable of transforming links transparently. 
                    Unless you are using PHP 4.2.0 or later, you need 
                    to enable it manually when building PHP. Under Unix, 
                    pass --enable-trans-sid to configure. If this build 
                    option and the run-time option 
                    session.use_trans_sid a
                    re enabled, relative URIs will be changed to contain 
                    the session id automatically. 
                    Alternatively, you can use the constant SID which is 
                    defined if the session started. If the client did not send 
                    an appropriate session cookie, it has the form 
                    session_name=session_id. 
                    Otherwise, it expands to an empty string. 
                    Thus, you can embed it unconditionally into URLs. 
                    The following example demonstrates how to register a variable, 
                    and how to link correctly to another page using SID. 
                </p>
                <p>The constant SID would always be '' (an empty string) if 
                    directive session.use_trans_sid in php ini file is set to 0.
                    But set session.use_trans_sid to 1 is not effective if 
                    director session.use_only_cookies is 1.
                    try:
                    session_start(['use_only_cookies'=>0])
                    or
                    session_start(['use_only_cookies'=>0,'use_trans_sid'=>1])
                </p>
                
                <p>Try to switch on and off the Browser's Cookies and 
                    watch the difference in behaviour of the two links.
                </p>
                <?php
                echo "// Funktioniert, falls das Session-Cookie akzeptiert wurde";
                echo '<br /><a href="demo_session_seite1.php">Seite 1</a><br>';

                echo "// Oder die Session-ID mit übergeben, für den Fall, dass sie benötigt wird";
                echo '<br /><a href="demo_session_seite1.php?' . SID . '">Seite 1</a><br>';

                echo "<br>" . "session_name(): " . session_name() ."<br>";
                echo "session_id(): " . session_id()."<br>";
                echo "SID: " . SID ."<br>";
                echo "htmlspecialchars(SID): " . htmlspecialchars(SID). "<br>";
                ?>
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
                <li id="prev" class="active"><a href="./010.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./012.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>