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
                <li id="prev" class="active"><a href="./007.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./009.php">Next »</a></li>
            </ul>
        </div>
    </div>

    <!--External Stylesheets-->
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <link rel="stylesheet" type="text/css" href="../css/site-navigation.css">
    <link rel="stylesheet" type="text/css" href="../css/background-images.css">
    
    <!--Internal Stylesheet-->
    <style>
        .error {color: #FF0000;}
    </style>
    
</head>    
<body>       
    <div>
        <!--Body content-->
        <div class = "mainbody"> 
            <h1>What Can PHP Do?</h1>
            <div class = "interactive">
                <h2>PHP Form Validation</h2>
                <!--new example-->
                <p>the $_SERVER["PHP_SELF"] sends the submitted form data to 
                    the page itself, instead of jumping to a different page. 
                    This way, the user will get error messages on the 
                    same page as the form.</p>
                <p>The htmlspecialchars() function converts special characters 
                    to HTML entities. This means that it will replace 
                    HTML characters like &lt; and &gt; with &amp;lt; and &amp;gt;. 
                    This prevents attackers from exploiting the code by 
                    injecting HTML or Javascript code(Cross-site Scripting attacks) 
                    in forms.</p>
                <form method="post" action="<?php echo htmlspecialchars(
                        $_SERVER["PHP_SELF"]);?>">
                Name: <input type="text" name="name">
                E-mail: <input type="text" name="email">
                Website: <input type="text" name="website">
                Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                Gender:
                <input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <br><br>
                <input name="submit" value="Submit" type="submit">  
                <!--new example-->
                <h2>Big Note on PHP Form Security</h2>
                <p>The $_SERVER["PHP_SELF"] variable can be used by hackers!</p>
                <p>If PHP_SELF is used in your page then a user can enter 
                    a slash (/) and then some Cross Site Scripting (XSS) 
                    commands to execute.</p>
                <p><strong>Cross-site scripting (XSS) is a type of 
                        computer security vulnerability typically found in 
                        Web applications. XSS enables attackers to inject 
                        client-side script into Web pages viewed by other users.
                </strong></p>
                <!--new example-->
                <p>Assume we have the following form in a page named 
                    "008.php":
                </p>
                &ltform method="post" action="&lt?php echo $_SERVER["PHP_SELF"];?&gt"&gt
                <br><br>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                    <br><br>this is a form:  <input type="text" name="blabla"><br><br>
                    <br><input name="submit" value="Submit" type="submit"><br>
                </form>
                <p>Now, if a user enters the normal URL in the address bar 
                    like "http://localhost:8000/php/008.php", 
                    the above code will be translated to:
                </p>
                &ltform method="post" action=008.php">
                <p>However, consider that a user enters the following URL 
                    in the address bar: 
                    http://localhost:8000/php/008.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
                    In this case, the above code will be translated to:</p>
                &ltform method="post" action="test_form.php/">&ltscript>alert('hacked')&lt/script>
                <!--new example-->
                <h3></h3>
                <h3>Redirect</h3>
                <p>
                localhost:8000/php/008.php/%22%3E%3Cscript%3Ewindow.
                location.href = "http://www.example.com";%3C/script%3E
                </p>
                <!--new example-->
                <h2>How To Avoid $_SERVER["PHP_SELF"] Exploits?</h2>
                <p>$_SERVER["PHP_SELF"] exploits can be avoided by 
                    using the htmlspecialchars() function.</p>
                <p>The form code should look like this:</p>
                &lt;form method="post" action="&lt;?php echo htmlspecialchars(
                $_SERVER["PHP_SELF"]);?&gt;"&gt;
                <!--new example-->
                <h3>Validate Form Data With PHP</h3>
                <?php
                // define variables and set to empty values
                $name = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $name = test_input1($_POST["name"]);
                  $email = test_input1($_POST["email"]);
                  $website = test_input1($_POST["website"]);
                  $comment = test_input1($_POST["comment"]);
                  $gender = test_input1($_POST["gender"]);
                }

                function test_input1($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
                ?>

                <h2>PHP Form Validation Example</h2>
                <form method="post" action="<?php echo htmlspecialchars(
                        $_SERVER["PHP_SELF"]);?>">  
                  Name: <input type="text" name="name">
                  <br><br>
                  E-mail: <input type="text" name="email">
                  <br><br>
                  Website: <input type="text" name="website">
                  <br><br>
                  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                  <br><br>
                  Gender:
                  <input type="radio" name="gender" value="female">Female
                  <input type="radio" name="gender" value="male">Male
                  <br><br>
                  <input type="submit" name="submit" value="Submit">  
                </form>

                <?php
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
                ?>
                <!--new example-->
                <h3>Required Fields</h3>
                <?php
                // define variables and set to empty values
                $nameErr = $emailErr = $genderErr = $websiteErr = "";
                $name = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                  } else {
                    $name = test_input2($_POST["name"]);
                  }

                  if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } else {
                    $email = test_input2($_POST["email"]);
                  }

                  if (empty($_POST["website"])) {
                    $website = "";
                  } else {
                    $website = test_input2($_POST["website"]);
                  }

                  if (empty($_POST["comment"])) {
                    $comment = "";
                  } else {
                    $comment = test_input2($_POST["comment"]);
                  }

                  if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                  } else {
                    $gender = test_input2($_POST["gender"]);
                  }
                }

                function test_input2($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
                ?>

                <h2>PHP Form Validation Example</h2>
                <p><span class="error">* required field.</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                  Name: <input type="text" name="name">
                  <span class="error">* <?php echo $nameErr;?></span>
                  <br><br>
                  E-mail: <input type="text" name="email">
                  <span class="error">* <?php echo $emailErr;?></span>
                  <br><br>
                  Website: <input type="text" name="website">
                  <span class="error"><?php echo $websiteErr;?></span>
                  <br><br>
                  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                  <br><br>
                  Gender:
                  <input type="radio" name="gender" value="female">Female
                  <input type="radio" name="gender" value="male">Male
                  <span class="error">* <?php echo $genderErr;?></span>
                  <br><br>
                  <input type="submit" name="submit" value="Submit">  
                </form>

                <?php
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
                ?>
                <!--new example-->
                <h3>Validate E-mail and URL</h3>
                <?php
                // define variables and set to empty values
                $nameErr = $emailErr = $genderErr = $websiteErr = "";
                $name = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                  } else {
                    $name = test_input3($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                      $nameErr = "Only letters and white space allowed";
                    }
                  }

                  if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } else {
                    $email = test_input3($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "Invalid email format";
                    }
                  }

                  if (empty($_POST["website"])) {
                    $website = "";
                  } else {
                    $website = test_input3($_POST["website"]);
                    // check if URL address syntax is valid
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                      $websiteErr = "Invalid URL";
                    }    
                  }

                  if (empty($_POST["comment"])) {
                    $comment = "";
                  } else {
                    $comment = test_input3($_POST["comment"]);
                  }

                  if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                  } else {
                    $gender = test_input3($_POST["gender"]);
                  }
                }

                function test_input3($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
                ?>

                <h2>PHP Form Validation Example</h2>
                <p><span class="error">* required field.</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                  Name: <input type="text" name="name">
                  <span class="error">* <?php echo $nameErr;?></span>
                  <br><br>
                  E-mail: <input type="text" name="email">
                  <span class="error">* <?php echo $emailErr;?></span>
                  <br><br>
                  Website: <input type="text" name="website">
                  <span class="error"><?php echo $websiteErr;?></span>
                  <br><br>
                  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                  <br><br>
                  Gender:
                  <input type="radio" name="gender" value="female">Female
                  <input type="radio" name="gender" value="male">Male
                  <span class="error">* <?php echo $genderErr;?></span>
                  <br><br>
                  <input type="submit" name="submit" value="Submit">  
                </form>

                <?php
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
                ?>
                <!--new example-->
                <h3>PHP - Keep The Values in The Form</h3>
                <?php
                // define variables and set to empty values
                $nameErr = $emailErr = $genderErr = $websiteErr = "";
                $name = $email = $gender = $comment = $website = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  if (empty($_POST["name"])) {
                    $nameErr = "Name is required";
                  } else {
                    $name = test_input4($_POST["name"]);
                    // check if name only contains letters and whitespace
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                      $nameErr = "Only letters and white space allowed";
                    }
                  }

                  if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } else {
                    $email = test_input4($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "Invalid email format";
                    }
                  }

                  if (empty($_POST["website"])) {
                    $website = "";
                  } else {
                    $website = test_input4($_POST["website"]);
                    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                      $websiteErr = "Invalid URL";
                    }
                  }

                  if (empty($_POST["comment"])) {
                    $comment = "";
                  } else {
                    $comment = test_input4($_POST["comment"]);
                  }

                  if (empty($_POST["gender"])) {
                    $genderErr = "Gender is required";
                  } else {
                    $gender = test_input4($_POST["gender"]);
                  }
                }

                function test_input4($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
                ?>

                <h2>PHP Form Validation Example</h2>
                <p><span class="error">* required field.</span></p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                  Name: <input type="text" name="name" value="<?php echo $name;?>">
                  <span class="error">* <?php echo $nameErr;?></span>
                  <br><br>
                  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                  <span class="error">* <?php echo $emailErr;?></span>
                  <br><br>
                  Website: <input type="text" name="website" value="<?php echo $website;?>">
                  <span class="error"><?php echo $websiteErr;?></span>
                  <br><br>
                  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                  <br><br>
                  Gender:
                  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                  <span class="error">* <?php echo $genderErr;?></span>
                  <br><br>
                  <input type="submit" name="submit" value="Submit">  
                </form>

                <?php
                echo "<h2>Your Input:</h2>";
                echo $name;
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $website;
                echo "<br>";
                echo $comment;
                echo "<br>";
                echo $gender;
                ?>

            </div>
        </div>
        
        <!--Code verbose-->
        <div class="code">
        <pre class="code_">
        <code class="language-html">
        &lt!--Body content-->
        &lth2>PHP Form Validation&lt/h2>
        &lt!--new example-->
        &ltp>the $_SERVER["PHP_SELF"] sends the submitted form data to 
            the page itself, instead of jumping to a different page. 
            This way, the user will get error messages on the 
            same page as the form.&lt/p>
        &ltp>The htmlspecialchars() function converts special characters 
            to HTML entities. This means that it will replace 
            HTML characters like &lt; and &gt; with &amp;lt; and &amp;gt;. 
            This prevents attackers from exploiting the code by 
            injecting HTML or Javascript code(Cross-site Scripting attacks) 
            in forms.&lt/p>
        &ltform method="post" action="&lt?php echo htmlspecialchars(
                $_SERVER["PHP_SELF"]);?>">
        Name: &ltinput type="text" name="name">
        E-mail: &ltinput type="text" name="email">
        Website: &ltinput type="text" name="website">
        Comment: &lttextarea name="comment" rows="5" cols="40">&lt/textarea>
        Gender:
        &ltinput type="radio" name="gender" value="female">Female
        &ltinput type="radio" name="gender" value="male">Male
        &ltbr>&ltbr>
        &ltinput name="submit" value="Submit" type="submit">  
        &lt!--new example-->
        &lth2>Big Note on PHP Form Security&lt/h2>
        &ltp>The $_SERVER["PHP_SELF"] variable can be used by hackers!&lt/p>
        &ltp>If PHP_SELF is used in your page then a user can enter 
            a slash (/) and then some Cross Site Scripting (XSS) 
            commands to execute.&lt/p>
        &ltp>&ltstrong>Cross-site scripting (XSS) is a type of 
                computer security vulnerability typically found in 
                Web applications. XSS enables attackers to inject 
                client-side script into Web pages viewed by other users.
        &lt/strong>&lt/p>
        &lt!--new example-->
        &ltp>Assume we have the following form in a page named 
            "008.php":
        &lt/p>
        &ltform method="post" action="&lt?php echo $_SERVER["PHP_SELF"];?&gt"&gt
        &ltbr>&ltbr>
        &ltform method="post" action="&lt?php echo $_SERVER["PHP_SELF"];?>">
            &ltbr>&ltbr>this is a form:  &ltinput type="text" name="blabla">&ltbr>&ltbr>
            &ltbr>&ltinput name="submit" value="Submit" type="submit">&ltbr>
        &lt/form>
        &ltp>Now, if a user enters the normal URL in the address bar 
            like "http://localhost:8000/php/008.php", 
            the above code will be translated to:
        &lt/p>
        &ltform method="post" action=008.php">
        &ltp>However, consider that a user enters the following URL 
            in the address bar: 
            http://localhost:8000/php/008.php/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E
            In this case, the above code will be translated to:&lt/p>
        &ltform method="post" action="test_form.php/">&ltscript>alert('hacked')&lt/script>
        &lt!--new example-->
        &lth3>&lt/h3>
        &lth3>Redirect&lt/h3>
        &ltp>
        localhost:8000/php/008.php/%22%3E%3Cscript%3Ewindow.
        location.href = "http://www.example.com";%3C/script%3E
        &lt/p>
        &lt!--new example-->
        &lth2>How To Avoid $_SERVER["PHP_SELF"] Exploits?&lt/h2>
        &ltp>$_SERVER["PHP_SELF"] exploits can be avoided by 
            using the htmlspecialchars() function.&lt/p>
        &ltp>The form code should look like this:&lt/p>
        &lt;form method="post" action="&lt;?php echo htmlspecialchars(
        $_SERVER["PHP_SELF"]);?&gt;"&gt;
        &lt!--new example-->
        &lth3>Validate Form Data With PHP&lt/h3>
        &lt?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input1($_POST["name"]);
          $email = test_input1($_POST["email"]);
          $website = test_input1($_POST["website"]);
          $comment = test_input1($_POST["comment"]);
          $gender = test_input1($_POST["gender"]);
        }

        function test_input1($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        &lth2>PHP Form Validation Example&lt/h2>
        &ltform method="post" action="&lt?php echo htmlspecialchars(
                $_SERVER["PHP_SELF"]);?>">  
          Name: &ltinput type="text" name="name">
          &ltbr>&ltbr>
          E-mail: &ltinput type="text" name="email">
          &ltbr>&ltbr>
          Website: &ltinput type="text" name="website">
          &ltbr>&ltbr>
          Comment: &lttextarea name="comment" rows="5" cols="40">&lt/textarea>
          &ltbr>&ltbr>
          Gender:
          &ltinput type="radio" name="gender" value="female">Female
          &ltinput type="radio" name="gender" value="male">Male
          &ltbr>&ltbr>
          &ltinput type="submit" name="submit" value="Submit">  
        &lt/form>

        &lt?php
        echo "&lth2>Your Input:&lt/h2>";
        echo $name;
        echo "&ltbr>";
        echo $email;
        echo "&ltbr>";
        echo $website;
        echo "&ltbr>";
        echo $comment;
        echo "&ltbr>";
        echo $gender;
        ?>
        &lt!--new example-->
        &lth3>Required Fields&lt/h3>
        &lt?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input2($_POST["name"]);
          }

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input2($_POST["email"]);
          }

          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input2($_POST["website"]);
          }

          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input2($_POST["comment"]);
          }

          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input2($_POST["gender"]);
          }
        }

        function test_input2($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        &lth2>PHP Form Validation Example&lt/h2>
        &ltp>&ltspan class="error">* required field.&lt/span>&lt/p>
        &ltform method="post" action="&lt?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Name: &ltinput type="text" name="name">
          &ltspan class="error">* &lt?php echo $nameErr;?>&lt/span>
          &ltbr>&ltbr>
          E-mail: &ltinput type="text" name="email">
          &ltspan class="error">* &lt?php echo $emailErr;?>&lt/span>
          &ltbr>&ltbr>
          Website: &ltinput type="text" name="website">
          &ltspan class="error">&lt?php echo $websiteErr;?>&lt/span>
          &ltbr>&ltbr>
          Comment: &lttextarea name="comment" rows="5" cols="40">&lt/textarea>
          &ltbr>&ltbr>
          Gender:
          &ltinput type="radio" name="gender" value="female">Female
          &ltinput type="radio" name="gender" value="male">Male
          &ltspan class="error">* &lt?php echo $genderErr;?>&lt/span>
          &ltbr>&ltbr>
          &ltinput type="submit" name="submit" value="Submit">  
        &lt/form>

        &lt?php
        echo "&lth2>Your Input:&lt/h2>";
        echo $name;
        echo "&ltbr>";
        echo $email;
        echo "&ltbr>";
        echo $website;
        echo "&ltbr>";
        echo $comment;
        echo "&ltbr>";
        echo $gender;
        ?>
        &lt!--new example-->
        &lth3>Validate E-mail and URL&lt/h3>
        &lt?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input3($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }
          }

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input3($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }

          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input3($_POST["website"]);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "Invalid URL";
            }    
          }

          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input3($_POST["comment"]);
          }

          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input3($_POST["gender"]);
          }
        }

        function test_input3($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        &lth2>PHP Form Validation Example&lt/h2>
        &ltp>&ltspan class="error">* required field.&lt/span>&lt/p>
        &ltform method="post" action="&lt?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Name: &ltinput type="text" name="name">
          &ltspan class="error">* &lt?php echo $nameErr;?>&lt/span>
          &ltbr>&ltbr>
          E-mail: &ltinput type="text" name="email">
          &ltspan class="error">* &lt?php echo $emailErr;?>&lt/span>
          &ltbr>&ltbr>
          Website: &ltinput type="text" name="website">
          &ltspan class="error">&lt?php echo $websiteErr;?>&lt/span>
          &ltbr>&ltbr>
          Comment: &lttextarea name="comment" rows="5" cols="40">&lt/textarea>
          &ltbr>&ltbr>
          Gender:
          &ltinput type="radio" name="gender" value="female">Female
          &ltinput type="radio" name="gender" value="male">Male
          &ltspan class="error">* &lt?php echo $genderErr;?>&lt/span>
          &ltbr>&ltbr>
          &ltinput type="submit" name="submit" value="Submit">  
        &lt/form>

        &lt?php
        echo "&lth2>Your Input:&lt/h2>";
        echo $name;
        echo "&ltbr>";
        echo $email;
        echo "&ltbr>";
        echo $website;
        echo "&ltbr>";
        echo $comment;
        echo "&ltbr>";
        echo $gender;
        ?>
        &lt!--new example-->
        &lth3>PHP - Keep The Values in The Form&lt/h3>
        &lt?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = test_input4($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }
          }

          if (empty($_POST["email"])) {
            $emailErr = "Email is required";
          } else {
            $email = test_input4($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }

          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input4($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "Invalid URL";
            }
          }

          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input4($_POST["comment"]);
          }

          if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
          } else {
            $gender = test_input4($_POST["gender"]);
          }
        }

        function test_input4($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        ?>

        &lth2>PHP Form Validation Example&lt/h2>
        &ltp>&ltspan class="error">* required field.&lt/span>&lt/p>
        &ltform method="post" action="&lt?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Name: &ltinput type="text" name="name" value="&lt?php echo $name;?>">
          &ltspan class="error">* &lt?php echo $nameErr;?>&lt/span>
          &ltbr>&ltbr>
          E-mail: &ltinput type="text" name="email" value="&lt?php echo $email;?>">
          &ltspan class="error">* &lt?php echo $emailErr;?>&lt/span>
          &ltbr>&ltbr>
          Website: &ltinput type="text" name="website" value="&lt?php echo $website;?>">
          &ltspan class="error">&lt?php echo $websiteErr;?>&lt/span>
          &ltbr>&ltbr>
          Comment: &lttextarea name="comment" rows="5" cols="40">&lt?php echo $comment;?>&lt/textarea>
          &ltbr>&ltbr>
          Gender:
          &ltinput type="radio" name="gender" &lt?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
          &ltinput type="radio" name="gender" &lt?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          &ltspan class="error">* &lt?php echo $genderErr;?>&lt/span>
          &ltbr>&ltbr>
          &ltinput type="submit" name="submit" value="Submit">  
        &lt/form>

        &lt?php
        echo "&lth2>Your Input:&lt/h2>";
        echo $name;
        echo "&ltbr>";
        echo $email;
        echo "&ltbr>";
        echo $website;
        echo "&ltbr>";
        echo $comment;
        echo "&ltbr>";
        echo $gender;
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
                <li id="prev" class="active"><a href="./007.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./009.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



