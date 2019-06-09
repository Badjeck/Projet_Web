<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" type="image/png" href="images/logo.ico">
  <link rel="stylesheet" type="text/css" href="update.css" media="all"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

<title>Update</title>
</head>
<body>
<?php
  if (isset($_POST['mdp']) AND $_POST['mdp'] ==  "oui") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>
  <form action="view.php" method="post">
  <div id="download">
    <input name="licorne" type="submit" value="Prévisualiation"/>  
  </div>
  <div class="part">
    <div id=leftblock>
      <div id="img">
        <input type="text" name="img_profil" placeholder="url image de profil" maxlength="100" autocomplete="off">
      </div>
      <div id=name>
       <input class="oui" type="text" name="prenom_profil" placeholder="Prénom" maxlength="30" autocomplete="off">
       <input class="oui" type="text" name="nom_profil" placeholder="Nom" maxlength="30" autocomplete="off">
       <input type="text" name="ville_profil" placeholder="Ville" maxlength="30" autocomplete="off">
       <input type="text" name="etude_profil" placeholder="Niveau d'étude" maxlength="100" autocomplete="off">
      </div>
      <div id="presentation">
      <textarea name="presentation_profil"  min ="5" maxlength="600" placeholder="présentation"></textarea>
      </div>
    </div>

    <div id="rightblock">
      <ul id="navbar">
        <li><a class ="js-scrollTo" href="#page2" alt="compétences" title="Compétences"> <p>COMPÉTENCES</p></a></li>
        <li><a class ="js-scrollTo" href="#page3" alt="mes projets" title="Mes projets"> <p>MES PROJETS</p></a></li>
        <li><a href="contact.html" alt="me contacter" title="Me contacter"> <p>ME CONTACTER</p></a></li>
      </ul>

      <div id="wallpaper">
      <input type="text" name="wallpaper_profil" placeholder="url wallpaper" maxlength="50" autocomplete="off">
      </div>
    </div>
  </div>


  <div id="page2" class="part">
    <h2>COMPÉTENCES</h2>
    <div id="description">
      <textarea name="description_compétence"  min ="5" maxlength="600" placeholder="description des compétences"></textarea>
    </div>

    <ul id="skill">
      <li class="skill-cont">
        <input type="text" name="skill1" placeholder="Catégorie des compétences" maxlength="20" autocomplete="off">
        <ul>
          <li><input type="text" name="nomcompétence1.1" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
          <li><input type="text" name="nomcompétence1.2" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
          <li><input type="text" name="nomcompétence1.3" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
          <li><input type="text" name="nomcompétence1.4" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
          <li><input type="text" name="nomcompétence1.5" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
        </ul>
      </li>
      
      <li class="skill-cont">
        <input type="text" name="skill2" placeholder="Catégorie des compétences" maxlength="20" autocomplete="off">
          <ul>
            <li><input type="text" name="nomcompétence2.1" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
            <li><input type="text" name="nomcompétence2.2" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
            <li><input type="text" name="nomcompétence2.3" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
            <li><input type="text" name="nomcompétence2.4" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
            <li><input type="text" name="nomcompétence2.5" placeholder="Compétences" maxlength="30" autocomplete="off"><input type="text" name="pourcent1.1" placeholder="%" maxlength="3" autocomplete="off"></li>
          </ul>
      </li>
    </ul>

  </div>


  <div id="page3" class="part">
    <h2>MES PROJETS</h2>
    <div class="projet">
    <input type="text" name="projet1" placeholder="Nom projet" maxlength="20" autocomplete="off">
      <div>
        <div id="img">
          <input type="text" name="imgp1" placeholder="url image" maxlength="50" autocomplete="off">
        </div>
        <textarea name="desc1"  min ="5" maxlength="100" placeholder="description projet"></textarea>
      </div>
    </div>

    <div class="projet">
    <input type="text" name="projet2" placeholder="Nom projet" maxlength="20" autocomplete="off">
      <div>
        <div id="img">
          <input type="text" name="imgp2" placeholder="url image" maxlength="50" autocomplete="off">
        </div>  
        <textarea name="desc2"  min ="5" maxlength="100" placeholder="description projet"></textarea>
      </div>
    </div>

    <div class="projet">
    <input type="text" name="projet3" placeholder="Nom projet" maxlength="20" autocomplete="off">
      <div>
        <div id="img">
          <input type="text" name="imgp3" placeholder="url image" maxlength="50" autocomplete="off">
        </div>
        <textarea name="desc3"  min ="5" maxlength="100" placeholder="description projet"></textarea>
      </div>
      </div>
    
    <div class="projet">
    <input type="text" name="projet4" placeholder="Nom projet" maxlength="20" autocomplete="off">
      <div>
        <div id="img">
          <input type="text" name="imgp4" placeholder="url image" maxlength="50" autocomplete="off">
        </div>
        <textarea name="desc4"  min ="5" maxlength="100" placeholder="description projet"></textarea>
      </div>
    </form> 
    
  </div>
    <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>ba non en fait</p>';
        echo '<img src="images/banon.gif" alt="mot de passe incorect" title="espèce de male blanc cisgenre privilégié">';
    }
    ?>


  <script src="./script.js"></script>

</body>
</html>