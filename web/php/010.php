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
        &lth2>PHP 5 File Handling&lt/h2>
        &lt!--new example-->
        &lt?php
        echo readfile("../txt/sometext1.txt");
        ?> 
        &lt!--new example-->
        &lt?php
        $myfile = fopen("../txt/sometext1.txt", "r") or 
                die("Unable to open file!");
        echo fread($myfile,filesize("../txt/sometext1.txt"));
        fclose($myfile);
        ?>
        &lt!--new example-->
        &lt?php
        $myfile = fopen("../txt/sometext1.txt", "r") or 
                die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
          echo fgets($myfile) . "&ltbr>";
        }
        fclose($myfile);
        ?>
        &lt!--new example-->
        &lt?php
        $myfile = fopen("../txt/sometext1.txt", "r") or 
                die("Unable to open file!");
        // Output one character until end-of-file
        while(!feof($myfile)) {
          echo fgetc($myfile);
        }
        fclose($myfile);
        ?>
        &lt!--new example-->
        &lt?php
        $myfile = fopen("../txt/newfile.txt", "w") 
                or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?> 
        &lt!--new example-->
        &lth2>PHP 5 File Upload&lt/h2>
        &ltform action="upload.php" method="post" enctype="multipart/form-data">
            &ltbr>&ltbr>
            Select image to upload:
            &ltbr>&ltbr>&ltinput type="file" name="fileToUpload" id="fileToUpload">
            &ltbr>&ltbr>&ltinput type="submit" value="Upload Image" name="submit">
        &lt/form> 
        
        &lt!--upload.php-->
        &lt!--used for 010.php-->
        &lt?php
        #upload directory relative to his file
        $target_dir = "uploads/";
        #get filename (incl. extension) to upload
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        #flag which determines whether to upload file (=1) or not (=0)
        $uploadOk = 1;
        #get extension
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Check if image file is an actual image or fake image
        #$_POST["submit"] resolves to Upload image
        #isset() resolves to 1
        foreach ($_FILES["fileToUpload"] as $key => $val) {
            echo "1: " . "$key" . "=>" . "$val" . "&ltbr>";
        }
        if(isset($_POST["submit"])) {
            #check if file dimension object exists
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            foreach ($check as $key => $val) {
                echo  "2: " . "$key" . "=>" . "$val" . "&ltbr>";
            }
            if($check !== false) {
                #print file type
                echo "3: File is an image - " . $check["mime"] . ".&ltbr>";
                $uploadOk = 1;
            } else {
                echo "3: File is not an image.&ltbr>";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "4: Sorry, file already exists.&ltbr>";
            $uploadOk = 0;
        }
        // Check file size in Bytes
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "5: Sorry, your file is too large.&ltbr>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "6: Sorry, only JPG, JPEG, PNG & GIF files are allowed.&ltbr>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "7: Sorry, your file was not uploaded.&ltbr>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). 
                        " has been uploaded.&ltbr>";
            } else {
                echo "Sorry, there was an error uploading your file.&ltbr>";
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
                <li id="prev" class="active"><a href="./009.php">« Previous</a></li>
                <li id="home" class="active"><a href="../index.html">HOME</a></li>
                <li id="next" class="active"><a href="./011.php">Next »</a></li>
            </ul>
        </div>
    </div> 
</body>
</html>



