<?php

namespace Ecole\direction; // Working Name Space

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
	public function getEtablissement()
	{
		return $this->etablissement;
	}

	/*
	* Methode, toujours en public
	* Les mutateurs
	* permet de modifier la variable
	*/
	public function setEtablissement($etablissement)
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

 