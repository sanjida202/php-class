<?php
if(isset($_POST['submit'])){
    $filename = $_FILES['filename']['name'];
    $tmp_loc = $_FILES['filename']['tmp_name'];

    $uploc = 'images/';
    if(!empty($filename)){
        move_uploaded_file($tmp_loc, $uploc.$filename);
    }else{
        echo 'Select File';
    }
}
?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
Select Image
<input type="file" name="filename"> <br><br>
<input type="submit" value="Upload" name="submit">
</form>