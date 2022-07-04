<?php
$lea = 1;
class Employe {
    public $nom;
    public $prenom;
    public $age;

    public function presentation()
    {
        var_dump("Yo, je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

$employe1 = new Employe();
$employe1->prenom = "Lea";
$employe1->nom = "Poiret";
$employe1->age = "24";

$employe2 = new Employe();
$employe2->prenom = "Momo";
$employe2->nom = "Elkorchi";
$employe2->age = "32";

$employe3 = new Employe();
$employe3->prenom = "Toto";
$employe3->nom = "Jouaux";
$employe3->age = "45";

$employe1->presentation();
$employe2->presentation();
$employe3->presentation();


