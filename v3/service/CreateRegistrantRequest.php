<?php

namespace ascio\v3;

class CreateRegistrantRequest
{

    /**
     * @var Registrant $Registrant
     */
    protected $Registrant = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Registrant
     */
    public function getRegistrant()
    {
      return $this->Registrant;
    }

    /**
     * @param Registrant $Registrant
     * @return \ascio\v3\CreateRegistrantRequest
     */
    public function setRegistrant($Registrant)
    {
      $this->Registrant = $Registrant;
      return $this;
    }

}
