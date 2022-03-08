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
        <strong>Horny files</strong>
      </div>
     <img src="jm7newlogoxback.png" class="jm7logohold">
      <div id='menu' class="menu">
          <a class="closebtn" href='javascript:void(0)'onclick='closemenu()' >x</a>
          <center class="menuword"> <u>Menu</u></center>
          <center > <a href='../'> HOME </a></center>
          <center > <a href='../shop/'> SHOP </a></center>
          <center > <a href='../followme.html'> FOLLOW </a></center>
          <center > <a href='mailto:jm7memeofficial@gmail.com'> CONTACT </a></center>
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
    <div class='hornyfilelabel'>
        <p class='namelabel'> File name </p> 
        <p class='timelabel'>  Date uploaded</p>
        <p class='sizelabel'> Size </p>
    </div>
    <?php
    $file = scandir('uploadedfile');
    function humanfilesize($byte, $decimal=0){
        $units = array('B','KB','MB','GB','TB','PB','EB','ZB','YB');
        $devide = 1024;
        $i = 0;
        while (($byte/$devide) > 0.9) {
            $byte = $byte / $devide;
            $i++;
        }
        return round($byte, $decimal).' '.$units[$i];
    }
    if (end($file) == $file[1]) {
        echo "<div class='error'>
                <center> <p > No files yet... </p> </center>
                <center> <a href='./donatehentai.php' > <p > Donate your hentai</p> </a> </center>
               </div>";
                 
    } else{ 
    for ($num = 2; $num <= 100 ; $num ++) {
        $filename = $file[$num];
        $filesize = humanfilesize(filesize('./uploadedfile/'.$filename));
        $filetime = date('d M Y' , filemtime('./uploadedfile/'.$filename));
        $filetype = mime_content_type('./uploadedfile/'.$filename);
        if (strstr($filetype, 'video/')) {
            echo "<div class='hornyfile'>
                    <video class='fileimage'>
                       <source src='uploadedfile/$filename#t=10' type='video/mp4'> 
                    </video>
                    <a href ='uploadedfile/$filename'> <p class='filename'> $filename</p> </a> 
                    <p class='filetime'> $filetime </p>
                    <p class='filesize'> $filesize </p>
                  </div>";
        } else {
            echo "<div class='hornyfile'>
                     <img src='uploadedfile/$filename ' class='fileimage'> 
                     <a href ='uploadedfile/$filename'> <p class='filename'> $filename</p> </a> 
                     <p class='filetime'> $filetime </p>
                     <p class='filesize'> $filesize </p>
                  </div>";
        }
        
        if ($filename == end($file)){
            break;
        } 
        
    }
    }
    ?>
</body>
</html>
