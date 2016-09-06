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
                <li id="prev" class="active"><a href="./009.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./011.php">Next »</a></li>
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
                <h2>PHP 5 File Handling</h2>
                <!--new example-->
                <?php
                echo readfile("../txt/sometext1.txt");
                ?> 
                <!--new example-->
                <?php
                $myfile = fopen("../txt/sometext1.txt", "r") or 
                        die("Unable to open file!");
                echo fread($myfile,filesize("../txt/sometext1.txt"));
                fclose($myfile);
                ?>
                <!--new example-->
                <?php
                $myfile = fopen("../txt/sometext1.txt", "r") or 
                        die("Unable to open file!");
                // Output one line until end-of-file
                while(!feof($myfile)) {
                  echo fgets($myfile) . "<br>";
                }
                fclose($myfile);
                ?>
                <!--new example-->
                <?php
                $myfile = fopen("../txt/sometext1.txt", "r") or 
                        die("Unable to open file!");
                // Output one character until end-of-file
                while(!feof($myfile)) {
                  echo fgetc($myfile);
                }
                fclose($myfile);
                ?>
                <!--new example-->
                <?php
                $myfile = fopen("../txt/newfile.txt", "w") 
                        or die("Unable to open file!");
                $txt = "John Doe\n";
                fwrite($myfile, $txt);
                $txt = "Jane Doe\n";
                fwrite($myfile, $txt);
                fclose($myfile);
                ?> 
                <!--new example-->
                <h2>PHP 5 File Upload</h2>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <br><br>
                    Select image to upload:
                    <br><br><input type="file" name="fileToUpload" id="fileToUpload">
                    <br><br><input type="submit" value="Upload Image" name="submit">
                </form>             
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
                <li id="prev" class="active"><a href="./009.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./011.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



