<?php

class ville extends immobilier
{
    private $nbetage;

    function __construct($id, $l, $p, $q, $d, $i, $nbetage)
    {
        
        parent::__construct($id, $l, $p, $q, $d, $i);

    
        $this->nbetage= $nbetage;
    }

    

    /**
     * Get the value of nbetage
     */
    public function getNbetage()
    {
        return $this->nbetage;
    }

    /**
     * Set the value of nbetage
     */
    public function setNbetage($nbetage): self
    {
        $this->nbetage = $nbetage;

        return $this;
    }
}
