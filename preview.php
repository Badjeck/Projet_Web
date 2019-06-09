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
<?php include_once 'command.php'?>
<div id="download">
  <a href="https://auvencecom-my.sharepoint.com/:b:/g/personal/gabriel_fougerolle_ynov_com/EWX-bKiK6WZFrUriHNlkhnYBxNRXQwlN71A_61RDYIb8kA?e=mF6Hnu" alt="Télécharger le cv au format PDF" title="Télécharger le fomat pdf"><p>COMMIT</p></a>  
</div>
  <div class="part">
    <div id=leftblock>
      <?php echo "<img src='".$pimg. "' alt='Photo de profil' title='Photo de profil' id='pprofil'>";?>
      <div id=name>
        <?php echo "<p class='oui'>" .$pprenom."</p>";?>
        <p class="oui"><?php echo $pnom;?></p>
        <p><?php echo $pville;?></p>
        <p><?php echo $petude;?></p>
      </div>
      <div id="presentation">
        <p><?php echo $ppresentation;?></p>
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
      <p><?php echo $cpres; ?></p>
    </div>

    <ul id="skill">
      <li class="skill-cont">
        <h3><?php echo $cskill1;?></h3>
        <ul>
          <li><div id="progress"><p id="help"><?php echo $ccomp11;?></p><div id="bleu11"></div><p id="aled">40%</p></div></li>
          <li><div id="progress"><p id="help"><?php echo $ccomp12;?></p><div id="bleu12"></div><p id="aled">60%</p></div></li>
          <li><div id="progress"><p id="help"><?php echo $ccomp13;?></p><div id="bleu13"></div><p id="aled">30%</p></div></li>
          <li><div id="progress"><p id="help"><?php echo $ccomp14;?></p><div id="bleu14"></div><p id="aled">30%</p></div></li>        
          <li><div id="progress"><p id="help"><?php echo $ccomp15;?></p><div id="bleu15"></div><p id="aled">40%</p></div></li>
        </ul>
      </li>
      
      <li class="skill-cont">
          <h3><?php echo $cskill2 ?></h3>
          <ul>
            <li><div id="progress"><p id="help"><?php echo $ccomp21;?></p><div id="bleu11"></div><p id="aled">40%</p></div></li>
            <li><div id="progress"><p id="help"><?php echo $ccomp22;?></p><div id="bleu12"></div><p id="aled">60%</p></div></li>
            <li><div id="progress"><p id="help"><?php echo $ccomp23;?></p><div id="bleu13"></div><p id="aled">30%</p></div></li>
            <li><div id="progress"><p id="help"><?php echo $ccomp24;?></p><div id="bleu14"></div><p id="aled">30%</p></div></li>        
            <li><div id="progress"><p id="help"><?php echo $ccomp25;?></p><div id="bleu15"></div><p id="aled">40%</p></div></li>
          </ul>
      </li>
    </ul>

  </div>


  <div id="page3" class="part">
    <h2>MES PROJETS</h2>
    <div class="projet">
      <h3><?php echo $prname1;?></h3>
      <div>
        <img src="<?php echo $primg1;?>" alt="Projet 4L trophy" title="4L Trophy">
        <p><?php echo $prdesc1;?></p>
      </div>
    </div>

    <div class="projet">
      <h3><?php echo $prname2;?></h3>
      <div>
        <img src="<?php echo $primg2;?>" alt="Projet 4L trophy" title="4L Trophy">
        <p><?php echo $prdesc2;?></p>
      </div>
    </div>

    <div class="projet">
      <h3><?php echo $prname3;?></h3>
      <div>
        <img src="<?php echo $primg3;?>" alt="Projet 4L trophy" title="4L Trophy">
        <p><?php echo $prdesc3;?></p>
      </div>
    </div>
    
    <div class="projet">
      <h3><?php echo $prname4;?></h3>
      <div>
        <img src="<?php echo $primg4;?>" alt="Projet 4L trophy" title="4L Trophy">
        <p><?php echo $prdesc4;?></p>
      </div>
    </div>
    
  </div>


  <script src="./script.js"></script>

</body>
</html>