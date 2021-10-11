<?php

// demarer la session  
    session_start();

    // tableau des equipes
    
        $equipe=[' Brésil ',
        'Argentine', 
        'France ',
        'Italie ',
        'Espagne',
        'Allemagne',
        'Portugal ',
        'Haïti '];

        // tirages et repartition en mode aleatoire 

        $indiceUnGroupeA=rand(0,1);
        $indiceUnGroupeB=rand(0,1);


        $indiceDeuxGroupeA=rand(2,3);
        $indiceDeuxGroupeB=rand(2,3);

        $indiceTroisGroupeA=rand(4,5);
        $indiceTroisGroupeB=rand(4,5);

        $indiceQuatreGroupeA=rand(6,7);
        $indiceQuatreGroupeB=rand(6,7);

// Condition pour les classecments des equipes  

        while($indiceUnGroupeA==$indiceUnGroupeB ) {   
            $indiceUnGroupeB=rand(0,1);
        }
              
        while($indiceDeuxGroupeA==$indiceDeuxGroupeB) {
                $indiceDeuxGroupeB =rand(2,3);
        }

           while($indiceTroisGroupeA==$indiceTroisGroupeB){
                    $indiceTroisGroupeB =rand(4,5);
                }

           while($indiceQuatreGroupeA ==$indiceQuatreGroupeB){ 
                    $indiceQuatreGroupeB=rand(6,7);
                }

                    // Etat des matchs.....................

                $_SESSION['matchUn']=false;
                $_SESSION['matchDeux']=true;
                $_SESSION['matchTrois']=true;
                $_SESSION['matchQuatre']=true;
                $_SESSION['matchCinq']=true;
                $_SESSION['matchSix']=true;
                $_SESSION['matchSept']=true;
                $_SESSION['matchHuit']=true;
                $_SESSION['matchNeuf']=true;
                $_SESSION['matchDix']=true;
                $_SESSION['matchOnze']=true;
                $_SESSION['matchDouze']=true;

        ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Tirage</title>

</head>


<style>
    * {
    margin: 0;
    padding: 0;
}

body {
    background-image: url(img/backg.jpg);
    background-size: cover;
    font-family: sans-serif;
}

h1{
    color: white;
    font-family: cursive;

}

select{
    border: none;
    background: #436990;
    color: white;
}

td {
    border: none;
    background-color: rgba(0, 0, 0, 0.187);
    /* text droit dans le tableau  */
    text-align: center;
}

marquee{
        color: #5180b4;
        font-size: 90px;
        margin-top: 145px;
        margin-left: -10px;
        width: 900px;
}

tr {
    border: none;
    color: white;
    width: 50%;
}

th {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    border: none;
    color: #fff;
}

table{
    margin-top: 50px;
    /* margin-left: 270px ; */
    width: 50%;
    height: 50px;
    border: none;
    font-size: large;
}
.btn-btn-succes {
            height: 30px;
            width: 16%;
            border-radius: 10px;
            margin-top: 5px;
            /* margin-left: 450px; */
            border-color: white;
            background: none;
            color: white;
            background-color: rgba(2, 2, 141, 0.692);
        }
        @media (max-width:700px) {
    body{
      background-image: url(img/back222.jpg);
    }  
    th{
        font-size: 15px;
        color: yellow;
    }
    table{
        width: 80%;
    }
    .btn-btn-succes {
            height: 30px;
            width: 25%;
            border-radius: 10px;
            border-color: black;
            background: none;
            color: black;
            background-color: yellow;
        }
        marquee{
            display: none;
        }
        td{
            font-size: 15px;
        }
}
</style>


<body>
    <center>
         <h1>Coupe 3e infos</h1>
        
        <div class="tableau">
<!-- creation des tables  -->
              <table>


        <tr>
            <th>1e tête de série</th>
            <th>2e tête de série</th>
            <th>3e tête de série</th>
            <th>5e tête de série</th>
        </tr>

<!-- repatition des equipes dans le table -->

        <tr>
            <td><?php echo $equipe[0]; ?></td>  
            <td><?php echo $equipe[2]; ?> </td>
            <td><?php echo $equipe[4]; ?> </td>
            <td><?php echo $equipe[6]; ?> </td>
        </tr>

        <tr>
        <td><?php echo $equipe[1]; ?> </td>
        <td><?php echo $equipe[3]; ?> </td>
        <td><?php echo $equipe[5]; ?> </td>
        <td><?php echo $equipe[7]; ?> </td>
        </tr>
    </table>
        </div>
  
        

     <form action="" method="post" class="tirage">
         <input type="submit" name="tirage" value="Tirage" class="btn-btn-succes">
     </form>


     <!-- Gerer les donnees  -->
    
     <?php  
         if (isset($_POST['tirage'])) 
       { 
        include 'DataClassement/dataBase.php';
        include 'DataClassement/traitementClassement.php';
           $_SESSION['equipeUnGroupeA']["nomEquipe"]=$equipe[$indiceUnGroupeA]; 
           $_SESSION['equipeUnGroupeB']["nomEquipe"]=$equipe[$indiceUnGroupeB];  
           $_SESSION['equipeDeuxGroupeA']["nomEquipe"]=$equipe[$indiceDeuxGroupeA]; 
           $_SESSION['equipeDeuxGroupeB']["nomEquipe"]=$equipe[$indiceDeuxGroupeB]; 
           $_SESSION['equipeTroisGroupeA']["nomEquipe"]=$equipe[$indiceTroisGroupeA]; 
           $_SESSION['equipeTroisGroupeB']["nomEquipe"]=$equipe[$indiceTroisGroupeB]; 
           $_SESSION['equipeQuatreGroupeA']["nomEquipe"]=$equipe[$indiceQuatreGroupeA]; 
           $_SESSION['equipeQuatreGroupeB']["nomEquipe"]=$equipe[$indiceQuatreGroupeB]; 
           ?>

        <div class="">
        <table>
            <!-- en tete du tableau  -->
            <tr>
                <th></th>
                <th>Groupe A</th>
                <th>Groupe B</th>
            </tr>
<!-- le premier lot equipe en tete de serie  -->
            <tr>
                <td>1e tête de série </td>
                <td><?php echo $_SESSION['equipeUnGroupeA']["nomEquipe"]; ?></td>
                <td><?php echo $_SESSION['equipeUnGroupeB']["nomEquipe"]; ?></td>    
            </tr>
<!-- la deuxieme lot equipe en tete de serie  -->
            <tr>
                <td>2e tête de série </td>
                <td><?php echo  $_SESSION['equipeDeuxGroupeA']["nomEquipe"]; ?></td>
                <td><?php echo $_SESSION['equipeDeuxGroupeB']["nomEquipe"]; ?></td>
            </tr>

   <!-- la troisieme lot equipe en tete de serie  -->     
       <tr>
            <td>3e tête de série </td>
                <td><?php echo $_SESSION['equipeTroisGroupeA']["nomEquipe"]; ?></td>
                <td><?php echo $_SESSION['equipeTroisGroupeB']["nomEquipe"]; ?></td>
            </tr>
<!-- la quatrieme lot equipe en tete de serie  -->
            <tr>
            <td>4e tête de série </td>
                <td><?php echo $_SESSION['equipeQuatreGroupeA']["nomEquipe"]; ?></td>
                <td><?php echo $_SESSION['equipeQuatreGroupeB']["nomEquipe"]; ?></td>
            </tr>
        </table>
     </div>
    <!-- creation de button pour valider le tirage  -->

     <form action=" " method="post" class="tirage">
     <input type="submit" name="valider" value="Valider le tirage" class="btn-btn-succes">
     </form>
      <marquee behavior="" direction="left"> BIENVENUE DANS COUPE 3<SUP>eme</SUP> INFOS</marquee>
    <?php
    }
    
// validation pour le premierTour 

    if (isset($_POST['valider'])){   
        header('Location:PremierTour.php');
     }
     ?>  
      </center>

</body>
</html>