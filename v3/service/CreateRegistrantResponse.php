<?php

namespace ascio\v3;

class CreateRegistrantResponse extends AbstractResponse
{

    /**
     * @var Registrant $Registrant
     */
    protected $Registrant = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \ascio\v3\CreateRegistrantResponse
     */
    public function setRegistrant($Registrant)
    {
      $this->Registrant = $Registrant;
      return $this;
    }

}
