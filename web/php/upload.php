<?php
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
    echo "1: " . "$key" . "=>" . "$val" . "<br>";
}
if(isset($_POST["submit"])) {
    #check if file dimension object exists
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    foreach ($check as $key => $val) {
        echo  "2: " . "$key" . "=>" . "$val" . "<br>";
    }
    if($check !== false) {
        #print file type
        echo "3: File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "3: File is not an image.<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "4: Sorry, file already exists.<br>";
    $uploadOk = 0;
}
// Check file size in Bytes
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "5: Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "6: Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "7: Sorry, your file was not uploaded.<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). 
                " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}
?>

