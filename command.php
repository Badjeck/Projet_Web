<?php

include_once 'conf.php';


$query = $pdo->prepare("SELECT * FROM users");
$query->execute();


$profil = $pdo->prepare("SELECT * FROM profil");
$profil->execute();
$pimg = $profil->fetch()['img'];

$profil = $pdo->prepare("SELECT * FROM profil");
$profil->execute();
$pprenom = $profil->fetch()['prenom'];

$profil = $pdo->prepare("SELECT * FROM profil");
$profil->execute();
$pnom = $profil->fetch()['nom'];

$profil = $pdo->prepare("SELECT * FROM profil");
$profil->execute();
$pville = $profil->fetch()['ville'];

$profil = $pdo->prepare("SELECT * FROM profil");
$profil->execute();
$petude = $profil->fetch()['etude'];

$profil = $pdo->prepare("SELECT * FROM profil");
$profil->execute();
$ppresentation = $profil->fetch()['presentation'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='1'");
$comp->execute();
$cpres = $comp->fetch()['description'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='1'");
$comp->execute();
$cskill1 = $comp->fetch()['skill'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='1'");
$comp->execute();
$ccomp11 = $comp->fetch()['comp1'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='1'");
$comp->execute();
$ccomp12 = $comp->fetch()['comp2'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='1'");
$comp->execute();
$ccomp13 = $comp->fetch()['comp3'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='1'");
$comp->execute();
$ccomp14 = $comp->fetch()['comp4'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='1'");
$comp->execute();
$ccomp15 = $comp->fetch()['comp5'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='2'");
$comp->execute();
$cskill2 = $comp->fetch()['skill'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='2'");
$comp->execute();
$ccomp21 = $comp->fetch()['comp1'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='2'");
$comp->execute();
$ccomp22 = $comp->fetch()['comp2'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='2'");
$comp->execute();
$ccomp23 = $comp->fetch()['comp3'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='2'");
$comp->execute();
$ccomp24 = $comp->fetch()['comp4'];

$comp = $pdo->prepare("SELECT * FROM competences WHERE id='2'");
$comp->execute();
$ccomp25 = $comp->fetch()['comp5'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='1'");
$projet->execute();
$prname1 = $projet->fetch()['name'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='1'");
$projet->execute();
$primg1 = $projet->fetch()['img'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='1'");
$projet->execute();
$prdesc1 = $projet->fetch()['description'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='2'");
$projet->execute();
$prname2 = $projet->fetch()['name'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='2'");
$projet->execute();
$primg2 = $projet->fetch()['img'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='2'");
$projet->execute();
$prdesc2 = $projet->fetch()['description'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='3'");
$projet->execute();
$prname3 = $projet->fetch()['name'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='3'");
$projet->execute();
$primg3 = $projet->fetch()['img'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='3'");
$projet->execute();
$prdesc3 = $projet->fetch()['description'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='4'");
$projet->execute();
$prname4 = $projet->fetch()['name'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='4'");
$projet->execute();
$primg4 = $projet->fetch()['img'];

$projet = $pdo->prepare("SELECT * FROM projet WHERE id='4'");
$projet->execute();
$prdesc4 = $projet->fetch()['description'];

$usr = $pdo->prepare("SELECT * FROM users");
$usr->execute();
$mdp = $usr->fetch()['password'];




?>