<?php session_start(); ?> 

<html>
      <link href="bootstrap.min.css" rel="stylesheet"  media="screen">
      <script src="bootstrap.min.js"></script>
</html>
<?php
// Define path where file will be uploaded to
//   User ID is set as directory name
include 'dbCon.php';
$city= $_POST["city"];
//Checking if city is in database
$query = "SELECT COUNT(*) as totalno FROM Locations where City='$city'";
    $result = mysql_query($query);
    while($data=mysql_fetch_array($result)){
    $count = $data['totalno'];
    }
   
$userID= $_SESSION["valid_id"];

//Checking to make sure size is less than 100KB
$size = $_FILES['uploadedfile']['size'];
$name = $_FILES['uploadedfile']['tmp_name'];
list($width, $height, $type, $attr)=getimagesize($name);

if (intval($count)==0)
{
    echo "<script> alert('Sorry! Your city $city is not currently tracked by our software');
    window.location.href='addphotos.php' </script>";
}

else if (intval($size) > 99000 || intval($size)<=0)
{
    echo "<script> alert('Sorry! Photo being uploaded is either empty or over 100 KB in size');
    window.location.href='addphotos.php' </script>";
}
//Making sure image is right type
else if ($type != IMAGETYPE_GIF && $type != IMAGETYPE_JPEG && $type != IMAGETYPE_PNG)
{
    echo "<script> alert('Sorry! Photo can only be .jpg, .gif, or .png!');
    window.location.href='addphotos.php' </script>";
}
//Checking if city exists already in the database.

else{

    $folderPath = "uploads/$userID";
    
    // Check to see if directory already exists
    $exist = is_dir($folderPath);
    
    // If directory doesn't exist, create directory
    if(!$exist) {
    mkdir($folderPath);
    chmod("$folderPath", 0755);
    }
    // PROCESS FILE UPLOAD
    
    // Set initial/temporary upload location
    //   temp_uploads must have proper read/write permissions (755 or 777)
    $target_path = "uploads/temp_uploads/";
    
    // Append the name of the uploaded file to the temp directory
    $target_path .= basename( $_FILES['uploadedfile']['name']);
    
    /*echo "<br> target: ";
    echo "$target_path <br>";
    echo "tmp file ";*/
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    $filename = basename( $_FILES['uploadedfile']['name']);
    // Location where temporary file is being stored
    $temp_location = 'uploads/temp_uploads/' . basename( $_FILES['uploadedfile']['name']);
    
    // Final destination where file will be located
    //$destination = "uploads/$folderPath/$filename";
    $destination = "$folderPath/$filename";
    /*echo "<br> destination: ";
    echo $destination;
    echo "<br>";*/
    rename($temp_location, $destination);
    $query ="INSERT INTO `UserPhotos` (`UserID` ,`City`, `ImageLink`) VALUES ('$userID', '$city', '$destination')";
    mysql_query($query);
    echo "<script> alert('Thank you for sharing your photo! It can be viewed in the slide show for $city');
    window.location.href='addphotos.php' </script>";

    }
}
?>