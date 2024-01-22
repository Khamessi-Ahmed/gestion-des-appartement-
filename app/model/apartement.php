<?php
require_once "immobilier.php";
class apartement extends immobilier
{
    private $surfaceespacecommun;

    function __construct($ref, $l, $p, $q, $d, $i, $surfaceespacecommun)
    {
        
        parent::__construct($ref, $l, $p, $q, $d, $i);

    
        $this->surfaceespacecommun = $surfaceespacecommun;
    }

    
    public function getSurfaceEspaceCommun()
    {
        return $this->surfaceespacecommun;
    }

   
    public function setSurfaceEspaceCommun($surfaceespacecommun): self
    {
        $this->surfaceespacecommun = $surfaceespacecommun;

        return $this;
    }
}
