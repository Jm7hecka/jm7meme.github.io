<?php
session_start();
require('vendor/autoload.php')?:$_SESSION['status'] = 'S3 bucket unavailable');header("location: donatehentai.php");
$_SESSION['status'] = " ";
$dir = "uploadedfile/";
$file = $_FILES["files"]["name"];
$files = $dir.basename($file);
$ok = 1;
use  Aws\S3\S3Client;
$s3 = new S3Client([
    'version'  => 'latest',
    'region'   => 'eu-west-2',
]);
$bucket = getenv('S3_BUCKET')?: $_SESSION['status'] = 'S3 bucket unavailable');header("location: donatehentai.php");
$filetype = strtolower(pathinfo($files,PATHINFO_EXTENSION));

rename($file, pathinfo($files)['filename'].strval(rand()).'.'.$filetype);
rename($files, $dir.pathinfo($files)['filename'].strval(rand()).'.'.$filetype);

}


if ($ok == 1) {
    if (move_uploaded_file($_FILES["files"]["tmp_name"], $files)) {
        $s3->upload($bucket, $file , fopen($_FILES['files']['tmp_name'], 'rb'), 'public-read');
        $_SESSION['status'] =  "File upload successful";
        $_SESSION['filepath'] = $files;
        header("location: donatehentai.php");
    } else {
        $_SESSION['status'] =  "File can't be uploaded :(";
        header("location: donatehentai.php");
    }
}

?>
