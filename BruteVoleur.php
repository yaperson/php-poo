<?php

class BruteVoleur extends Personnage implements Voleur {
    public function recel(Personnage $adversaire, int $butinAquis){
        $this->setPoche($this->getPoche() + $butinAquis);
        $adversaire->setPoche($adversaire->getPoche() - $butinAquis);
    }
    public function caval(){
    }
    public function attaquer(Personnage $adversaire): Personnage
    {
        $adversaire->setDegats($adversaire->getDegats() + $this->_force);
        $this->recel($adversaire, 20);
        return $this;
    }
    public function insulter()
    {
        print("</br>".$this->getNom()." : La BAGUAARE !!");
    }
}