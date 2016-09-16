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
                <li id="prev" class="active"><a href="./012.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./014.php">Next »</a></li>
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
                <h2>PHP Error Handling</h2>
                <!--new example-->
                <h3>How do I get PHP Errors to display?</h3>
                <p>This always works for me:<br>
                    * ini_set('display_errors', 1);<br>
                    * ini_set('display_startup_errors', 1);<br>
                    * error_reporting(E_ALL);<br>
                    However, this doesn't make PHP to show parse errors - 
                    the only way to show those errors is to modify 
                    your php.ini with this line:<br>
                    * display_errors = on<br>
                    * error_reporting=on<br>
                </p> 
                <!--new example-->
                <?php
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                ?>
                <!--new example-->
                <h3>Open non-existant file without error handling</h3>
                <?php
                $file=fopen("welcome.txt","r");
                echo "I am still executed."
                ?> 
                <!--new example-->
                <h3>Open non-existant file with error handling</h3>
                <?php
                if(!file_exists("welcome.txt")) {
                  //die("File not found");
                    echo "File not found";
                } else {
                  $file=fopen("welcome.txt","r");
                }
                ?>                 
                <!--new example-->
                <h3>Creating a Custom Error Handler</h3>
                <?php
                //error handler function
                function customError1($errno, $errstr) {
                  echo "<b>Error:</b> [$errno] $errstr";
                }

                //set error handler
                set_error_handler("customError1");

                //trigger error
                echo($test);
                ?> 
                <!--new example-->
                <h3>Trigger an Error</h3>
                <?php
                //error handler function
                function customError2($errno, $errstr) {
                  echo "<b>Error:</b> [$errno] $errstr<br>";
                  echo "Ending Script with die()";
                  //die();
                }

                //set error handler
                set_error_handler("customError2",E_USER_WARNING);

                //trigger error
                $test=2;
                if ($test>=1) {
                  trigger_error("Value must be 1 or below",E_USER_WARNING);
                }
                ?> 
                <!--new example-->
                <h2>PHP Exception Handling</h2>
                <p>This is what normally happens when an exception is triggered:</p>
                <ul>
                        <li>The current code state is saved</li>
                        <li>The code execution will switch to a predefined (custom) exception 
                        handler function</li>
                        <li>Depending on the situation, the handler may then resume the execution 
                        from the saved code state, terminate the script execution or continue the 
                        script from a different location in the code</li>
                </ul>
                <!--new example-->
                <?php
                //create function with an exception
                function checkNum($number) {
                  if($number>1) {
                    throw new Exception("Value must be 1 or below");
                  }
                  return true;
                }

                //trigger exception in a "try" block
                try {
                  checkNum(2);
                  //If the exception is thrown, this text will not be shown
                  echo 'If you see this, the number is 1 or below';
                }

                //catch exception
                catch(Exception $e) {
                  echo 'Message: ' .$e->getMessage();
                }
                echo "<br>code after try catch blocks<br>"
                ?> 
                <!--new example-->
                <h2>Creating a Custom Exception Class</h2>
                <p>The new class is a copy of the old exception class with 
                    an addition of the errorMessage() function. 
                    Since it is a copy of the old class, and it inherits 
                    the properties and methods from the old class, 
                    we can use the exception class methods like getLine() 
                    and getFile() and getMessage().</p>
                <?php
                class customException extends Exception {
                  public function errorMessage() {
                    //error message
                    $errorMsg = 'Error on line '.$this->getLine().' in '
                            .$this->getFile() .': <b>'
                            .$this->getMessage() 
                            .'</b> is not a valid E-Mail address';
                    return $errorMsg;
                  }
                }

                $email = "someone@example...com";

                try {
                  //check if
                  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                    //throw exception if email is not valid
                    throw new customException($email);
                  }
                }

                catch (customException $e) {
                  //display custom message
                  echo $e->errorMessage();
                }
                ?> 
                <!--new example-->
                <h2>Multiple Exceptions</h2>
                <?php
                class customException2 extends Exception {
                  public function errorMessage() {
                    //error message
                    $errorMsg = 'Error on line '
                            .$this->getLine().' in '
                            .$this->getFile().': <b>'
                            .$this->getMessage().'</b> '
                            . 'is not a valid E-Mail address';
                    return $errorMsg;
                  }
                }

                $email = "someone@example.com";

                try {
                  //check if
                  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                    //throw exception if email is not valid
                    throw new customException2($email);
                  }
                  //check for "example" in mail address
                  if(strpos($email, "example") !== FALSE) {
                    throw new Exception("$email is an example e-mail");
                  }
                }

                catch (customException2 $e) {
                  echo $e->errorMessage();
                }

                catch(Exception $e) {
                  echo $e->getMessage();
                }
                ?> 
                <!--new example-->
                <h2>Set a Top Level Exception Handler</h2>
                <?php
                function myException($exception) {
                  echo "<b>Exception:</b> " . $exception->getMessage();
                }

                set_exception_handler('myException');
                
                #uncomment line, will stop page execution
                //throw new Exception('Uncaught Exception occurred');
                ?> 
                <!--new example-->
            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP Error Handling&lt/h2>
        &lt!--new example-->
        &lth3>How do I get PHP Errors to display?&lt/h3>
        &ltp>This always works for me:&ltbr>
            * ini_set('display_errors', 1);&ltbr>
            * ini_set('display_startup_errors', 1);&ltbr>
            * error_reporting(E_ALL);&ltbr>
            However, this doesn't make PHP to show parse errors - 
            the only way to show those errors is to modify 
            your php.ini with this line:&ltbr>
            * display_errors = on&ltbr>
            * error_reporting=on&ltbr>
        &lt/p> 
        &lt!--new example-->
        &lt?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        ?>
        &lt!--new example-->
        &lth3>Open non-existant file without error handling&lt/h3>
        &lt?php
        $file=fopen("welcome.txt","r");
        echo "I am still executed."
        ?> 
        &lt!--new example-->
        &lth3>Open non-existant file with error handling&lt/h3>
        &lt?php
        if(!file_exists("welcome.txt")) {
          //die("File not found");
          echo "File not found";
        } else {
          $file=fopen("welcome.txt","r");
        }
        ?>                 
        &lt!--new example-->
        &lth3>Creating a Custom Error Handler&lt/h3>
        &lt?php
        //error handler function
        function customError1($errno, $errstr) {
          echo "&ltb>Error:&lt/b> [$errno] $errstr";
        }

        //set error handler
        set_error_handler("customError1");

        //trigger error
        echo($test);
        ?> 
        &lt!--new example-->
        &lth3>Trigger an Error&lt/h3>
        &lt?php
        //error handler function
        function customError2($errno, $errstr) {
          echo "&ltb>Error:&lt/b> [$errno] $errstr&ltbr>";
          echo "Ending Script with die()";
          //die();
        }

        //set error handler
        set_error_handler("customError2",E_USER_WARNING);

        //trigger error
        $test=2;
        if ($test>=1) {
          trigger_error("Value must be 1 or below",E_USER_WARNING);
        }
        ?> 
        &lt!--new example-->
        &lth2>PHP Exception Handling&lt/h2>
        &ltp>This is what normally happens when an exception is triggered:&lt/p>
        &ltul>
                &ltli>The current code state is saved&lt/li>
                &ltli>The code execution will switch to a predefined (custom) exception 
                handler function&lt/li>
                &ltli>Depending on the situation, the handler may then resume the execution 
                from the saved code state, terminate the script execution or continue the 
                script from a different location in the code&lt/li>
        &lt/ul>
        &lt!--new example-->
        &lt?php
        //create function with an exception
        function checkNum($number) {
          if($number>1) {
            throw new Exception("Value must be 1 or below");
          }
          return true;
        }

        //trigger exception in a "try" block
        try {
          checkNum(2);
          //If the exception is thrown, this text will not be shown
          echo 'If you see this, the number is 1 or below';
        }

        //catch exception
        catch(Exception $e) {
          echo 'Message: ' .$e->getMessage();
        }
        echo "&ltbr>code after try catch blocks&ltbr>"
        ?> 
        &lt!--new example-->
        &lth2>Creating a Custom Exception Class&lt/h2>
        &ltp>The new class is a copy of the old exception class with 
            an addition of the errorMessage() function. 
            Since it is a copy of the old class, and it inherits 
            the properties and methods from the old class, 
            we can use the exception class methods like getLine() 
            and getFile() and getMessage().&lt/p>
        &lt?php
        class customException extends Exception {
          public function errorMessage() {
            //error message
            $errorMsg = 'Error on line '.$this->getLine().' in '
                    .$this->getFile() .': &ltb>'
                    .$this->getMessage() 
                    .'&lt/b> is not a valid E-Mail address';
            return $errorMsg;
          }
        }

        $email = "someone@example...com";

        try {
          //check if
          if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //throw exception if email is not valid
            throw new customException($email);
          }
        }

        catch (customException $e) {
          //display custom message
          echo $e->errorMessage();
        }
        ?> 
        &lt!--new example-->
        &lth2>Multiple Exceptions&lt/h2>
        &lt?php
        class customException2 extends Exception {
          public function errorMessage() {
            //error message
            $errorMsg = 'Error on line '
                    .$this->getLine().' in '
                    .$this->getFile().': &ltb>'
                    .$this->getMessage().'&lt/b> '
                    . 'is not a valid E-Mail address';
            return $errorMsg;
          }
        }

        $email = "someone@example.com";

        try {
          //check if
          if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //throw exception if email is not valid
            throw new customException2($email);
          }
          //check for "example" in mail address
          if(strpos($email, "example") !== FALSE) {
            throw new Exception("$email is an example e-mail");
          }
        }

        catch (customException2 $e) {
          echo $e->errorMessage();
        }

        catch(Exception $e) {
          echo $e->getMessage();
        }
        ?> 
        &lt!--new example-->
        &lth2>Set a Top Level Exception Handler&lt/h2>
        &lt?php
        function myException($exception) {
          echo "&ltb>Exception:&lt/b> " . $exception->getMessage();
        }

        set_exception_handler('myException');
        
        #to uncomment would stop the page execution
        //throw new Exception('Uncaught Exception occurred');
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
                <li id="prev" class="active"><a href="./012.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./014.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>