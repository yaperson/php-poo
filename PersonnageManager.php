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
        return $this;
    }

    public function add(Personnage $perso):Personnage
    {
        // TODO
        return $perso;

    }

    public function delete(Personnage $perso)//:bool
    {
        // TODO
    }

    public function update(Personnage $perso)//:bool
    {
        // TODO
    }
    
    public function getOne(int $id)
    {
        // TODO
    }
    
    public function getList():array
    {
        $persoList = array();

        $request = $this->_db->query('SELECT id, nom, `force`, degats, niveau, experience FROM perso;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            $perso = new Personnage($ligne);
            $persoList[] = $perso;
        }
        return $persoList;
    }
}

?>