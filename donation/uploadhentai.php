<?php
session_start();
require('vendor/autoload.php');
$_SESSION['status'] = " ";
$dir = "uploadedfile/";
$file = $_FILES["files"]["name"];
$files = $dir.basename($file);
$ok = 1;
$s3 = new Aws\S3\S3Client([
    'version'  => '2006-03-01',
    'region'   => 'eu-west-2',
]);
$bucket = getenv('S3_BUCKET')?: die( $_SESSION['status'] = 'S3 bucket unavailable');


$filetype = strtolower(pathinfo($files,PATHINFO_EXTENSION));
if (file_exists($files)) {
    rename($file, pathinfo($files)['filename'].strval(rand()).'.'.$filetype);
    rename($files, $dir.pathinfo($files)['filename'].strval(rand()).'.'.$filetype);

}

if($filetype == 'jpg' || $filetype == 'png' ||  $filetype == 'mp4' || $filetype == 'jpeg' || $filetype == 'gif' || $filetype == 'mov' || $filetype == 'avi'){
    $ok = 1;
}else {
    $ok = 0;
    $_SESSION['status'] =  "File must be video or image :(";
    header("location: donatehentai.php");
}
if ($ok == 1) {
    if ($s3->upload($bucket, $file , fopen($_FILES['files']['tmp_name'], 'rb'), 'public-read');)) {
        $_SESSION['status'] =  "File upload successful";
        $_SESSION['filepath'] = $files;
        header("location: donatehentai.php");
    } else {
        $_SESSION['status'] =  "File can't be uploaded :(";
        header("location: donatehentai.php");
    }
}

?>
