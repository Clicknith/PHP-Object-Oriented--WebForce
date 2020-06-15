<?php

class Article
{
	//Attributs
	private $titre;
	private $auteur ;
	private $resume ;

	public function __construct($titre, $auteur, $resume)
	{
		
		$this->titre = $titre;
		$this->auteur = $auteur;
		$this->resume = $resume;
	}

	//CONSTANTE
	const NBRE_PAGE = 200;

	//Methodes
	public function lire()
	{
		echo "Je lis des livres";
	}

	public function getTitre()
	{
		return $this->titre;
	}

	public function setTitre($titre)
	{
		return $this->titre = $titre;
	}

}

$test = new Article("Mon titre", "Mousssa", "Ceci est un test ");

$wf = new Article("webforce", "POO", "mon resume");

$wf3 = new Article("test", "POO", "mon resume");$wf = new Article("webforce", "POO", "mon resume");



var_dump($test, $wf);


