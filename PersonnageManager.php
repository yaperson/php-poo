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
        
        $request = $this->_db->prepare('SELECT nom, `force`, degats, niveau, experience, classe FROM perso WHERE id = ?;');
        $request->execute(array($id));
        $ligne = $request->fetch();
        switch((int)$ligne['classe']){
            case Personnage::MAGICIEN:
                $perso = new Magicien($ligne);
                break;
            case Personnage::ARCHER:
                $perso = new Archer($ligne);
                break;
            case Personnage::BRUTE:
                $perso = new Brute($ligne);
                break;
            case Personnage::GUERRIER:
                $perso = new Guerrier($ligne);
                break;
            case Personnage::MAMA:
                $perso = new Mama($ligne);
                break;
            default:
                break;
        }
        return $perso;
    }
    
    public function getList():array
    {
        $persoList = array();

        $request = $this->_db->query('SELECT id, nom, `force`, degats, niveau, experience, classe FROM perso;');
        while ($ligne = $request->fetch(PDO::FETCH_ASSOC)) {
            switch((int)$ligne['classe']){
                case Personnage::MAGICIEN:
                    $perso = new Magicien($ligne);
                    break;
                case Personnage::ARCHER:
                    $perso = new Archer($ligne);
                    break;
                case Personnage::BRUTE:
                    $perso = new Brute($ligne);
                    break;
                case Personnage::GUERRIER:
                    $perso = new Guerrier($ligne);
                    break;
                case Personnage::MAMA:
                    $perso = new Mama($ligne);
                    break;
                default:
                    break;
            }
            // $perso = new Personnage($ligne);
            $persoList[] = $perso;
        }
        return $persoList;
    }
}
