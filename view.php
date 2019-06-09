<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" type="image/png" href="images/logo.ico">
  <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

<title>Curriculum Vitae</title>
</head>
<body>
<div id="download">
  <a href="http://hasthelargehadroncolliderdestroyedtheworldyet.com/" alt="Appliquer les changements" title="Appliquer les changements"><p>APPLIQUER</p></a>  
</div>
  <div class="part">
    <div id=leftblock>
      <img src="<?php echo htmlspecialchars($_POST['img_profil']);?>" alt="Photo de profil" title="Photo de profil" id="pprofil">
      <div id=name>
        <p class="oui"><?php echo htmlspecialchars($_POST['prenom_profil']);?></p>
        <p class="oui"><?php echo htmlspecialchars($_POST['nom_profil']);?></p>
        <p><?php echo htmlspecialchars($_POST['ville_profil']);?></p>
        <p><?php echo htmlspecialchars($_POST['etude_profil']);?></p>
      </div>
      <div id="presentation">
        <p><?php echo htmlspecialchars($_POST['presentation_profil']);?></p>
      </div>
    </div>

    <div id="rightblock">
      <ul id="navbar">
        <li><a class ="js-scrollTo" href="#page2" alt="compétences" title="Compétences"> <p>COMPÉTENCES</p></a></li>
        <li><a class ="js-scrollTo" href="#page3" alt="mes projets" title="Mes projets"> <p>MES PROJETS</p></a></li>
        <li><a href="contact.html" alt="me contacter" title="Me contacter"> <p>ME CONTACTER</p></a></li>
      </ul>

      <div id="wallpaper"></div>
    </div>
  </div>


  <div id="page2" class="part">
    <h2>COMPÉTENCES</h2>
    <div id="description">
      <p><?php echo htmlspecialchars($_POST['description_competence']);?></p>
    </div>

    <ul id="skill">
      <li class="skill-cont">
        <h3><?php echo htmlspecialchars($_POST['skill1'])?></h3>
        <ul>
          <li><div id="progress"><p id="help">C</p><div id="bleu11"></div><p id="aled">40%</p></div></li>
          <li><div id="progress"><p id="help">Python</p><div id="bleu12"></div><p id="aled">60%</p></div></li>
          <li><div id="progress"><p id="help">CPP</p><div id="bleu13"></div><p id="aled">30%</p></div></li>
          <li><div id="progress"><p id="help">Java-Script</p><div id="bleu14"></div><p id="aled">30%</p></div></li>        
          <li><div id="progress"><p id="help">PHP</p><div id="bleu15"></div><p id="aled">40%</p></div></li>
        </ul>
      </li>
      
      <li class="skill-cont">
          <h3><?php echo htmlspecialchars($_POST['skill2']);?></h3>
          <ul>
              <li><div id="progress"><p id="help">HTML</p><div id="bleu21"></div><p id="aled">80%</p></div></li>
              <li><div id="progress"><p id="help">CSS</p><div id="bleu22"></div><p id="aled">70%</p></div></li>
              <li><div id="progress"><p id="help">Bootstrap</p><div id="bleu23"></div><p id="aled">10%</p></div></li>
              <li><div id="progress"><p id="help">Billard</p><div id="bleu24"></div><p id="aled">80%</p></div></li>
              <li><div id="progress"><p id="help">Skate</p><div id="bleu25"></div><p id="aled">20%</p></div></li>
          </ul>
      </li>
    </ul>

  </div>


  <div id="page3" class="part">
    <h2>MES PROJETS</h2>
    <div class="projet">
      <h3><?php echo htmlspecialchars($_POST['projet1']);?></h3>
      <div>
        <img src="<?php echo htmlspecialchars($_POST['imgp1']);?>" alt=" <?php echo 'Projet' .htmlspecialchars($_POST['projet1']);?>" title="<?php echo htmlspecialchars($_POST['projet1']);?>">
        <p><?php echo htmlspecialchars($_POST['desc1']);?></p>
    </div>
    </div>

    <div class="projet">
      <h3><?php echo htmlspecialchars($_POST['projet2']);?></h3>
      <div>
        <img src="<?php echo htmlspecialchars($_POST['imgp2']);?>" alt=" <?php echo 'Projet' .htmlspecialchars($_POST['projet2']);?>" title="<?php echo htmlspecialchars($_POST['projet2']);?>">
        <p><?php echo htmlspecialchars($_POST['desc2']);?></p>
    </div>
    </div>

    <div class="projet">
      <h3><?php echo htmlspecialchars($_POST['projet3']);?></h3>
      <div>
        <img src="<?php echo htmlspecialchars($_POST['imgp3']);?>" alt=" <?php echo 'Projet' .htmlspecialchars($_POST['projet3']);?>" title="<?php echo htmlspecialchars($_POST['projet3']);?>">
        <p><?php echo htmlspecialchars($_POST['desc3']);?></p>
    </div>
    </div>
    
    <div class="projet">
      <h3><?php echo htmlspecialchars($_POST['projet4']);?></h3>
      <div>
        <img src="<?php echo htmlspecialchars($_POST['imgp4']);?>" alt=" <?php echo 'Projet' .htmlspecialchars($_POST['projet4']);?>" title="<?php echo htmlspecialchars($_POST['projet4']);?>">
        <p><?php echo htmlspecialchars($_POST['desc4']);?></p>
    </div>
    </div>
    
  </div>


  <script src="./script.js"></script>

</body>
</html>