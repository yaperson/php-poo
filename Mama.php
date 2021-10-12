<?php

class Mama extends Personnage {
    private $_magie;
    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->setDegats($adversaire->getDegats() + $this->_force);
        // parent::attaquer($adversaire);
        return $this;
    }
    public function insulter()
    {
        print("</br>".$this->getNom()." : AAAYAYAYAYAYYAYAAAAAA !");
    }
}
