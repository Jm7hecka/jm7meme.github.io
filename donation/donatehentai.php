<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../jm7newlogo2.png" />
    <title>Donate JM7</title>
    <script type="text/javascript" src="../app.js"></script>
    <link rel="stylesheet" href="../style.css?v=<?php echo time(); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <div class="commontop">
      <div class="pagename">
        <strong>Donation</strong>
      </div>
     <img src="jm7newlogoxback.png" class="jm7logohold">
      <div id='menu' class="menu">
          <a class="closebtn" href='javascript:void(0)'onclick='closemenu()' >x</a>
          <center class="menuword"> <u>Menu</u></center>
          <center > <a href='../index.html'> HOME </a></center>
          <center > <a href='../shop/shop.html'> SHOP </a></center>
          <center > <a href='followme.html'> FOLLOW </a></center>
          <center > <a href=''> CONTACT </a></center>
      </div>
      <div class="bottommenu" id="menu2">
          <center > <a class="account" href='../account/login.html'> LOG IN </a></center>
          <center > <a class="account" href='../account/signup.html'> SIGN UP </a></center>
      </div>
      <span id='menubutton' class="menubutton" onclick="menu(this)">
          <div class="menu1"></div>
          <div class="menu2"></div>
          <div class="menu3"></div>
      </span>
    </div>
    <div class="donatehentaidiv" >
         <p class='donatehentaiword' align='center'> Donate Hentai</p>
         <form id="donatehentai" action="uploadhentai.php" method="post" enctype="multipart/form-data">
           <input type="file" name="files" id="browse" value="Select file" style='display:none;'  accept='image/*, video/*, application/pdf' >
           <input type='button' value='Choose file' class='browse' onclick="document.getElementById('browse').click()">
           <center> <p id='filename'></p> </center>
           <input type="submit" id="upload" value="Upload">
         </form>
         <center> <p class='directhornyfile'>Feel horny?  <a href='hornyfile.php'>Check this out</a></p> </center>
         <?php 
         if ($status = $_SESSION['status']) {
          $status = $_SESSION['status'];
          echo "<center> <p class='status'> $status </p> </center>";
          echo '<center> <a href="'.$_SESSION['filepath'].'"><p class="checkfile"> Check out your file here!</p> </a> </center>';
         }
         $_SESSION['status'] = '';
         ?>
    </div>
    <script>
      var input = document.getElementById('browse');
      var info = document.getElementById('filename');
      input.addEventListener('change', showfilename)
      function showfilename(event){
        var input = event.srcElement;
        var filename = input.files[0].name;
        info.textContent = filename;
      }
    </script>
</body>
</html>
