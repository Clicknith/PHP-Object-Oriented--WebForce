<?php

require 'personne.php';
require 'direction.php';

use Ecole\Etudiant as Etudiant;
use Ecole\Direction;


$moussa = new Etudiant\personne(); //Goes to the Working Name space and gets the Class "Personne", all its attributes, methods and constants. 
$marieFrance = new Direction\personne();

echo $moussa->getPrenom();
$moussa->setPrenom("Moussa");
$moussa->setNom("Camara");
$moussa->age =29;


echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";

var_dump($moussa);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($marieFrance);
