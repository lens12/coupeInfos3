<?php
session_start();

// pour diriger vers la page d'acceuil aprel la final 
if (isset($_POST['recommencer'])) {
    session_destroy();
    $_SESSION = array();
    header("Location:index.html");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gagnant</title>
<style>
   body{
      background-image: url(img/back22.jpg);
    background-size: cover;
   }

   marquee{
        color: #5180b4;
        font-size: 90px;
        margin-top: 155px;
        margin-left: 220px;
        width: 900px;
}
   #bt_s{
    height: 30px;
    width: 17%;
    border-radius: 10px;
    border-color: white;
    background: none;
    color: white;
    background-color: rgba(2, 2, 141, 0.692);
   }

   

   h2{
       color:cornsilk;
   }
   #S{
    color: yellow;
  }
</style>
</head>
<body>
    

<marquee behavior="" direction="left"> <?= "Felicitation" . $_SESSION['finale2']["champion"] ?> </marquee>


</body>
</html>