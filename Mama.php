<?php

class Mama extends Personnage {
    private $_magie;
    public function lancerUnSort(Personnage $adversaire): Personnage
    {
        $adversaire->_degats+=$this->_magie;
        parent::frapper($adversaire);
        return $this;
    }
}
