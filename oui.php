<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" type="image/png" href="images/logo.ico">
  <link rel="stylesheet" type="text/css" href="update.css" media="all"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <meta http-equiv="refresh" content="5; URL=preview.php">

<title>Update</title>
</head>
<body>
<?php
    include 'conf.php';

    // UPDATE `profil` SET `img`=[value-1],`prenom`=[value-2],`nom`=[value-3],`etude`=[value-4],`ville`=[value-5],`presentation`=[value-6]
    //Accueil
    if(isset($_POST['img_profil']))
    {
        $pimg = $_POST['img_profil'];
        $proj = $pdo->prepare("UPDATE `profil` SET `img`=$pimg");
        $proj->execute();
    }
    if(isset($_POST['prenom_profil']))
    {
        $pprenom = $_POST['prenom_profil'];
        $proj = $pdo->prepare("UPDATE `profil` SET `prenom`=$pprenom");
        $proj->execute();
    }
    if(isset($_POST['nom_profil']))
    {   
        $pnom = $_POST['nom_profil'];
        $proj = $pdo->prepare("UPDATE `profil` SET `nom`=$pnom");
        $proj->execute();
    }
    if(isset($_POST['ville_profil']))
    {   
        $pville = $_POST['ville_profil'];
        $proj = $pdo->prepare("UPDATE `profil` SET `ville`=$pville");
        $proj->execute();
    }
    if(isset($_POST['etude_profil']))
    {   
        $petude = $_POST['etude_profil'];
        $proj = $pdo->prepare("UPDATE `profil` SET `etude`=$petude");
        $proj->execute();
    }
    if(isset($_POST['presentation_profil']))
    {   
        $ppres = $_POST['presentation_profil'];
        $proj = $pdo->prepare("UPDATE `profil` SET `presentation`=$ppres");
        $proj->execute(); 
    }
    
    if(isset($_POST['description compétences']))
    {   
        $cdesc = $_POST['description compétences'];
        $comp = $pdo->prepare("UPDATE `profil` SET `description`=$cdesc WHERE id='1'");
        $comp->execute();
    }



    //Compétences
    if(isset($_POST['skill1']))
    {   
        $cskill1 = $_POST['skill1'];
        $comp = $pdo->prepare("UPDATE `profil` SET `skill`=$cskill1 WHERE id='1'");
        $comp->execute();
    }
    if(isset($_POST['compétences11']))
    {   
        $ccomp11 =$_POST['compétences11']; 
        $comp = $pdo->prepare("UPDATE `profil` SET `comp1`=$ccomp11 WHERE id='1'");
        $comp->execute();
    }
    if(isset($_POST['compétences12']))
    {   
        $ccomp12 =$_POST['compétences12'];
        $comp = $pdo->prepare("UPDATE `profil` SET `comp2`=$ccomp12 WHERE id='1'");
        $comp->execute();
    }
    if(isset($_POST['compétences13']))
    {   
        $ccomp13 =$_POST['compétences13'];
        $comp = $pdo->prepare("UPDATE `profil` SET `comp3`=$ccomp13 WHERE id='1'");
        $comp->execute();
    }
    if(isset($_POST['compétences14']))
    {   
        $ccomp14 =$_POST['compétences14'];
        $comp = $pdo->prepare("UPDATE `profil` SET `comp4`=$ccomp14 WHERE id='1'");
        $comp->execute();
    }
    if(isset($_POST['compétences15']))
    {   
        $ccomp15 =$_POST['compétences15'];
        $comp = $pdo->prepare("UPDATE `profil` SET `comp5`=$ccomp15 WHERE id='1'");
        $comp->execute();
    }

    if(isset($_POST['skill2']))
    {   
        $cskill2 = $_POST['skill2'];
    }
    if(isset($_POST['compétences21']))
    {   
        $ccomp21 =$_POST['compétences21']; 
    }
    if(isset($_POST['compétences22']))
    {   
        $ccomp22 =$_POST['compétences22'];
    }
    if(isset($_POST['compétences23']))
    {   
        $ccomp23 =$_POST['compétences23'];
    }
    if(isset($_POST['compétences24']))
    {   
        $ccomp24 =$_POST['compétences24'];
    }
    if(isset($_POST['compétences25']))
    {   
        $ccomp25 =$_POST['compétences25'];
    }




    //projets
    if(isset($_POST['projet1']))
    {   
        $prnom1 = $_POST['projet1'];
    }
    if(isset($_POST['imgp1']))
    {   
        $primg1 = $_POST['imgp1'];
    }
    if(isset($_POST['desc1']))
    {   
        $prdes1 = $_POST['desc1'];
    }

    if(isset($_POST['projet2']))
    {   
        $prnom2 = $_POST['projet2'];
    }
    if(isset($_POST['imgp2']))
    {   
        $primg2 = $_POST['imgp2'];
    }
    if(isset($_POST['desc2']))
    {   
        $prdes2 = $_POST['desc2'];
    }

    if(isset($_POST['projet3']))
    {   
        $prnom3 = $_POST['projet3'];
    }
    if(isset($_POST['imgp3']))
    {   
        $primg3 = $_POST['imgp3'];
    }
    if(isset($_POST['desc3']))
    {   
        $prdes3 = $_POST['desc3'];
    }

    if(isset($_POST['projet4']))
    {   
        $prnom4 = $_POST['projet4'];
    }
    if(isset($_POST['imgp4']))
    {   
        $primg4 = $_POST['imgp4'];
    }
    if(isset($_POST['desc4']))
    {   
        $prdes4 = $_POST['desc4'];
    }


?>





</body>