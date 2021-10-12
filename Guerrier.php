<?php

class Guerrier extends Personnage {
    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->setDegats($adversaire->getDegats() + $this->_force);
        // parent::attaquer($adversaire);
        return $this;
    }
    public function insulter()
    {
        print("</br>".$this->getNom()." : DO U TOKIGN TO ME ? JE vais Te faire bobo !");
    }
}