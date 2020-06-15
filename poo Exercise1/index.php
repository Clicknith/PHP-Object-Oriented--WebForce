<?php

class VilleDep
{   
    
    //Attributes//
    public $nom;
    public $departement;
    
    //Method//

    public function __construct($nom,$departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;

    }

     //CONSTANTE
    const NBRE_PAGE = 100;
    
    //Method//
    public function getNom
    ()
	{
		return $this->nom;
	}

	public function setNom($nom)
	{
		return $this->nom = $nom;
    }
    
    public function getDep()
	{
		return $this->departement;
	}

	public function setDep($departement)
	{
		return $this->departement = $departement;
    }
    

}

$ville1 = new VilleDep ("Trappes", "78");

$ville2 = new VilleDep("Emérainville", "77");

echo $ville1->getNom();

echo $ville1->getDep();

echo "<br>";
echo "<br>";
echo "<br>";

echo $ville2->getNom();

echo $ville2->getDep();

