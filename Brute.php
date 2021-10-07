<?php

class Brute extends Personnage {
    public function frapper(Personnage $adversaire): Personnage
    {
        $adversaire->_degats+=$this->_magie;
        parent::frapper($adversaire);
        return $this;
    }
}