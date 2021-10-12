<?php

final class Archer extends Personnage {
    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->setDegats($adversaire->getDegats() + $this->_force);
        //parent::frapper($adversaire);
        return $this;
    }

    public function insulter()
    {
        print("</br> Tu vise comme ma grand mère ! ");
    }
}