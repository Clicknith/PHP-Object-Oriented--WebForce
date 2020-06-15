<?php

namespace Ecole\etudiant;

class Personne
{

    private $nom; // private variable locale (accessible qu'ici)
    //public $prenom; // public variable gloabale (accessible partout);
    private $prenom;
    public $naissance;
    public $age;

	public function donneMoiLeNom($nom)
	{
		return $this->nom = $nom;
	}

	/*
	*
	* Les accesseurs
	* permet d'afficher la variable
	*/
	public function getNom()
	{
		return $this->nom;
	}

	/*
	* Methode, toujours en public
	* Les mutateurs
	* permet de modifier la variable
	*/
	public function setNom($nom)
	{
		return $this->nom = $nom;
	}

	/*
	*
	* Les accesseurs
	* permet d'afficher la variable
	*/
	public function getPrenom()
	{
		return $this->prenom;
	}

	/*
	* Methode, toujours en public
	* Les mutateurs
	* permet de modifier la variable
	*/
	public function setPrenom($prenom)
	{
		return $this->prenom = $prenom;
	}

	const MAJEUR = 18; //always Const has to have the follwinf text in capital letters

	public function bientotlapause()
	{
		echo "c'est la pause ???";
	}

	public function courir($prenom)
	{
		echo $prenom ." cours vite que Bolt";
	}

	public function majeur($prenom)
	{
		if (Personne::MAJEUR < 18){
			echo $prenom. " est mineur";
		}else{
			echo $prenom. " est majeur";
		}
	}
}

// $moussa = new Personne();

// $jean = new Personne();

// //echo $moussa->donneMoiLeNom("test");
// echo $moussa->getPrenom();
// $moussa->setPrenom("Nithya");

// echo $moussa->courir($moussa->getPrenom());
// echo "<br>";
// echo "<br>";

// var_dump($jean);

// echo "<br>";
// echo "<br>";
// echo $jean->majeur($moussa->getPrenom());



