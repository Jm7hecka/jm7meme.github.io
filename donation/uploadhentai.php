<?php
session_start();
$_SESSION['status'] = " ";
$dir = "uploadedfile/";
$file = $_FILES["files"]["name"];
$files = $dir.basename($file);
$ok = 1;
$filetype = strtolower(pathinfo($files,PATHINFO_EXTENSION));
if (file_exists($files)) {
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
    if (move_uploaded_file($_FILES["files"]["tmp_name"], $files)) {
        $_SESSION['status'] =  "File upload successful";
        $_SESSION['filepath'] = $files;
        header("location: donatehentai.php");
    } else {
        $_SESSION['status'] =  "File can't be uploaded :(";
        header("location: donatehentai.php");
    }
}

?>