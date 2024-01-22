<?php

class immobilier
{
    protected $refernce;
   protected $propriete;
   protected $localite;
   protected $surface;
   protected $nbpices;
   protected $domaineusage;
   
    function __construct($ref, $l, $p, $q, $d, $i)
    {
        $this-> refernce= $ref;
        $this->propriete = $l;
        $this->localite= $p;
        $this->surface = $q;
        $this->nbpices = $d;
        $this->domaineusage = $i;
       
    }

    /**
     * Get the value of refernce
     */
    public function getRefernce()
    {
        return $this->refernce;
    }


    /**
     * Set the value of refernce
     */
    public function setRefernce($refernce): self
    {
        $this->refernce = $refernce;

        return $this;
    }

    /**
     * Get the value of propriete
     */
    public function getPropriete()
    {
        return $this->propriete;
    }


    /**
     * Set the value of propriete
     */
    public function setPropriete($propriete): self
    {
        $this->propriete = $propriete;

        return $this;
    }

    /**
     * Get the value of localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set the value of localite
     */
    public function setLocalite($localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get the value of surface
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     */
    public function setSurface($surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get the value of nbpices
     */
    public function getNbpices()
    {
        return $this->nbpices;
    }

    /**
     * Set the value of nbpices
     */
    public function setNbpices($nbpices): self
    {
        $this->nbpices = $nbpices;

        return $this;
    }

    /**
     * Get the value of domaineusage
     */
    public function getDomaineusage()
    {
        return $this->domaineusage;
    }

    /**
     * Set the value of domaineusage
     */
    public function setDomaineusage($domaineusage): self
    {
        $this->domaineusage = $domaineusage;

        return $this;
    }
}