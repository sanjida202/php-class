<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Download Here</h2>
    <a href="download.php?file='../day13/destination/WhatsApp Image 2023-06-11 at 1.52.38 AM.jpeg">Click Here</a>
</body>
</html>

<?php
if(!empty($_GET['file'])){
    $filename = basename($_GET['file']);
    $filepath = 'destination/' .$filename;
    if(!empty($filename) && file_exists($filepath)){

        //Define Headers
        header("Cache-control:public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        readfile($filepath);
        exit;
    }else{
        echo "This file does not exist";
    }
}
?>