<?php

class Magicien extends Personnage {
    private $_magie;
    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->setDegats($adversaire->getDegats() + $this->_force);
        // parent::attaquer($adversaire);
        return $this;
    }
    public function insulter()
    {
        print("</br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit !");
        print("</br>  comprennez, parler latin donne vraiment un style de magicien :)");
    }
}
