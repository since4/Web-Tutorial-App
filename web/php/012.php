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
                <li id="prev" class="active"><a href="./011.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./013.php">Next »</a></li>
            </ul>
        </div>
    </div>

    <!--External Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <link rel="stylesheet" type="text/css" href="../css/site-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/background-images.css">
    
    <!--Internal Stylesheet-->
    <style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
    </style>
    
</head>    
<body>       
    <div>
        <!--Body content-->
        <div class = "mainbody"> 
            <h1>What Can PHP Do?</h1>
            <div class = "interactive">
                <h2>PHP Filters</h2>                
                <!--new example-->
                <p>Validating data = Determine if the data is in proper form. <br>
                    Sanitizing data = Remove any illegal character from the data.
                </p>
                <p>PHP filters are used to validate and sanitize external input. 
                    The PHP filter extension has many of the functions needed 
                    for checking user input, and is designed to make data 
                    validation easier and quicker.
                </p>
                <!--new example-->
                <p>The filter_list() function can be used to list what the 
                    PHP filter extension offers: </p>
                <table>
                    <tr>
                      <td>Filter Name</td>
                      <td>Filter ID</td>
                    </tr>
                    <?php
                        foreach (filter_list() as $id =>$filter) {
                            echo '<tr>'
                                    . '<td>' . $filter . '</td>'
                                    . '<td>' . filter_id($filter) . '</td>'
                              . '</tr>';
                        }
                    ?>
                </table>
                <!--new example-->
                <h2>PHP filter_var() Function</h2>
                <p>The filter_var() function both validate and sanitize data.</p>
                <p>The filter_var() function filters a single variable with a 
                    specified filter. It takes two pieces of data:</p>
                <ul>
                        <li>The variable you want to check</li>
                        <li>The type of check to use</li>
                </ul>
                <hr>
                <!--new example-->
                <?php
                echo "str=<h1>Hello World!</h1>" . "<br>";
                $str = "<h1>Hello World!</h1>";
                $newstr = filter_var($str, FILTER_SANITIZE_STRING);               
                echo $newstr;
                ?>
                <?php
                echo "int=0" . "<br>";
                $int = 0;
                if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
                    echo("Integer is valid");
                } else {
                    echo("Integer is not valid");
                }
                ?> 
                <?php
                echo "ip = 127.0.0.1" . "<br>";
                $ip = "127.0.0.1";

                if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
                    echo("$ip is a valid IP address");
                } else {
                    echo("$ip is not a valid IP address");
                }
                ?> 
                <?php
                echo "email = john.doe@example.com" . "<br>";
                $email = "john.doe@example.com";

                // Remove all illegal characters from email
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);

                // Validate e-mail
                if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    echo("$email is a valid email address");
                } else {
                    echo("$email is not a valid email address");
                }
                ?> 
                <?php
                echo "url = http://www.w3schools.com" . "<br>";
                $url = "http://www.w3schools.com";

                // Remove all illegal characters from a url
                $url = filter_var($url, FILTER_SANITIZE_URL);

                // Validate url
                if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                    echo("$url is a valid URL");
                } else {
                    echo("$url is not a valid URL");
                }
                ?> 
                <!--new example-->
                <?php
                echo "int = 122" . "<br>";
                /* variable to check */
                $int = 122;

                /* min value */
                $min = 1;
                /* max value */
                $max = 200;

                if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
                    echo("Variable value is not within the legal range");
                } else {
                    echo("Variable value is within the legal range");
                }
                ?>
                <?php
                echo "http://www.w3schools.com" . "<br>";
                $url = "http://www.w3schools.com";

                if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
                    echo("$url is a valid URL");
                } else {
                    echo("$url is not a valid URL");
                }
                ?> 
                <?php
                echo "str=<h1>Hello WorldÆØÅ!</h1>" . "<br>";
                // Variable to check
                $str = "<h1>Hello WorldÆØÅ!</h1>";

                // Remove HTML tags and all characters with ASCII value > 127
                $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
                echo $newstr;
                ?>
                <!--new example-->
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
                <li id="prev" class="active"><a href="./011.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./013.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>