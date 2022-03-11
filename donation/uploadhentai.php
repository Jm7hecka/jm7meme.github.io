<?php
require('vendor/autoload.php')?:$_SESSION['status'] = 'S3 bucket unavailable');
session_start();
$_SESSION['status'] = " ";
$dir = "uploadedfile/";
$file = $_FILES["files"]["name"];
$files = $dir.basename($file);
$ok = 1;
$s3 = new Aws\S3\S3Client([
    'version'  => '2006-03-01',
    'region'   => 'eu-west-2',
]);
$bucket = getenv('S3_BUCKET')?: $_SESSION['status'] = 'S3 bucket unavailable');
$filetype = strtolower(pathinfo($files,PATHINFO_EXTENSION));

rename($file, pathinfo($files)['filename'].strval(rand()).'.'.$filetype);
rename($files, $dir.pathinfo($files)['filename'].strval(rand()).'.'.$filetype);

}


if ($ok == 1) {
    $s3->upload($bucket, $file , fopen($_FILES['files']['tmp_name'], 'rb'), 'public-read');)
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
