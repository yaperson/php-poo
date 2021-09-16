<?php

class PersonnageManager 
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb($db):PersonnageManager
    {
        $this->_db = $db;
    }

    public function add(Personnage $perso):Personnage
    {
        // TODO
    }

    public function delete(Personnage $perso):bool
    {
        // TODO
    }

    public function getOne(int $id)
    {
        // TODO
    }
    
    public function getList():array
    {
        // TODO
    }

    public function update(Personnage  $perso)
    {
        // TODO
    }

}

?>