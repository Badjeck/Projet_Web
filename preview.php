<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <link rel="icon" type="image/png" href="images/logo.ico">
      <link rel="stylesheet" type="text/css" href="style.css" media="all"/>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    
      <title>Prévisualisation</title>
    </head>
    <body>
    
    <?php
    if (isset($_POST)) // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
  <div id="download">
    <input type="submit" value="Enregister"/>  
  </div>
<div class="part">
    <div id=leftblock>
      <?php echo '<img src="'.htmlspecialchars($_POST['img_profil']) . '" alt="Photo de profil" title="Photo de profil" id="pprofil"';?>
      <div id=name>
        <?php echo '<p class="oui">'.htmlspecialchars($_POST['prenom_profil']) .'</p>';?>
        <?php echo '<p class="oui">'.htmlspecialchars($_POST['nom_profil']) .'</p>';?>
        <?php echo '<p>'.htmlspecialchars($_POST['ville_profil']) .'</p>';?>
        <?php echo '<p>'.htmlspecialchars($_POST["etude_profil"]) .'</p>';?>
      </div>
      <div id="presentation">
        <?php echo '<p>'.htmlspecialchars($_POST['presentation_profil']) .'</p>';?>
      </div>
    </div>
 
    <div id="rightblock">
      <ul id="navbar">
        <li><a class ="js-scrollTo" href="#page2" alt="compétences" title="Compétences"> <p>COMPÉTENCE</p></a></li>
        <li><a class ="js-scrollTo" href="#page3" alt="mes projets" title="Mes projets"> <p>MES PROJETS</p></a></li>
        <li><a href="contact.html" alt="me contacter" title="Me contacter"> <p>ME CONTACTER</p></a></li>
      </ul>
 
      <div id="wallpaper"></div>
    </div>
  </div>
 
 
  <div id="page2" class="part">
    <h2>COMPÉTENCES</h2>
    <div id="description">
      <?php echo '<p>'.htmlspecialchars($_POST['description_compétences']) .'</p>';?>
    </div>
 
    <ul id="skill">
      <li class="skill-cont">
        <?php echo '<h3>'.htmlspecialchars($_POST['skill1']) .'</h3>';?>
        <ul>
 
          <li><div id="progress"><p id="help">C</p><div id="bleu11"></div><p id="aled">40%</p></div></li>
          <li><div id="progress"><p id="help">Python</p><div id="bleu12"></div><p id="aled">60%</p></div></li>
          <li><div id="progress"><p id="help">CPP</p><div id="bleu13"></div><p id="aled">30%</p></div></li>
          <li><div id="progress"><p id="help">Java-Script</p><div id="bleu14"></div><p id="aled">30%</p></div></li>        
          <li><div id="progress"><p id="help">PHP</p><div id="bleu15"></div><p id="aled">40%</p></div></li>
        </ul>
      </li>
 
      <li class="skill-cont">
        <?php echo '<h3>'.htmlspecialchars($_POST['skill2']) .'</h3>';?>
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
      <?php echo '<h3>'.htmlspecialchars($_POST['project1']) .'</h3>';?>
      <div>
        <?php echo '<img src="'.htmlspecialchars($_POST['imgp1']) .'" alt="'.htmlspecialchars($_POST['project1']) .'" title="'.htmlspecialchars($_POST['project1']) .'">';?>
        <?php echo '<p>'.htmlspecialchars($_POST['desc1']) .'</p>';?>
      </div>
    </div>
 
    <div class="projet">
      <?php echo '<h3>'.htmlspecialchars($_POST['project2']) .'</h3>';?>
      <div>
        <?php echo '<img src="'.htmlspecialchars($_POST['imgp2']) .'" alt="'.htmlspecialchars($_POST['project2']) .'" title="'.htmlspecialchars($_POST['project2']) .'">';?>
        <?php echo '<p>'.htmlspecialchars($_POST['desc2']) .'</p>';?>
      </div>
    </div>
 
    <div class="projet">
      <?php echo '<h3>'.htmlspecialchars($_POST['project3']) .'</h3>';?>
      <div>
        <?php echo '<img src="'.htmlspecialchars($_POST['imgp3']) .'" alt="'.htmlspecialchars($_POST['project3']) .'" title="'.htmlspecialchars($_POST['project3']) .'">';?>
        <?php echo '<p>'.htmlspecialchars($_POST['desc3']) .'</p>';?>
      </div>
    </div>
 
    <div class="projet">
      <?php echo '<h3>'.htmlspecialchars($_POST['project4']) .'</h3>';?>
      <div>
        <?php echo '<img src="'.htmlspecialchars($_POST['imgp4']) .'" alt="'.htmlspecialchars($_POST['project4']) .'" title="'.htmlspecialchars($_POST['project4']) .'">';?>
        <?php echo '<p>'.htmlspecialchars($_POST['desc4']) .'</p>';?>
      </div>
    </div>
 
  </div>
 
 
  <script src="./script.js"></script>


    
    
    
    
    <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>ba non en fait</p>';
        echo '<img src="images/banon.gif" alt="mot de passe incorect" title="espèce de male blanc cisgenre privilégié">';
    }
    ?>
        
    </body>
</html>