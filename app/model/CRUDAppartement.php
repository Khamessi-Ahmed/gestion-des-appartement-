<?php
require_once "apartement.php";
require_once "../config/connexion.php";
require_once "immobilier.php";

class crudeappartement{

    protected $pdo;
    public function __construct()
    {
        $obj = new connexion();
        $this->pdo = $obj->getConnexion();
    }
    function requperer($refernce)
    {
        $sql = "select * from apartement where refernce='$refernce'";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function result($refernce)
    {
        $sql = "select * from apartement where refernce='$refernce'";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

   

    function listerapp()
    {
        $sql = "select * from apartement ";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    
    

    function ajouterapp(apartement $p)
    {
        $sql = "insert into apartement values(null,
                                                '{$p->getPropriete()}',
                                                 '{$p->getLocalite()}',
                                                {$p->getSurface()},
                                                {$p->getNbpices()},
                                                '{$p->getDomaineusage()}',
                                            {$p->getSurfaceEspaceCommun()});";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function modifierapp(apartement $p)
    {
        $sql = "update apartement set refernce={$p->getRefernce()},
                                propriete ='{$p->getPropriete()}',
                                localite='{$p->getLocalite()}',
                                surface= {$p->getSurface()},
                                nbpices=  {$p->getNbpices()},
                                domaineusage ='{$p->getDomaineusage()}',
                                surfaceespacecommun = {$p->getSurfaceEspaceCommun()}
                    where refernce ={$p->getRefernce()};";
        $res = $this->pdo->exec($sql);
        return $res;
    }

    function suprimer($refernce)
    {
        $sql = "delete from apartement where refernce =$refernce";
        $res = $this->pdo->exec($sql);
        return $res;
    }

} 