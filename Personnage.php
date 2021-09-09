<?php

class Personnage
{
    private $_nom = 'Inconnu';
    private $_force = 50;
    private $_experience = 1;
    private $_degats = 0;

    public function frapper()
    {

    }

    public function gagnerExperience()
    {
        $this->_experience++;
    }

    public function afficheExperience(){
        return $this->_experience;
    }

    public function parler()
    {
        print("Hé TOI JVAI MANGER T MORT !");
    }

}
