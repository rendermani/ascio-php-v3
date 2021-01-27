<?php

namespace ascio\v3;

class CreateRegistrantResponse extends AbstractResponse
{

    /**
     * @var Registrant $Registrant
     */
    protected $Registrant = null;

    /**
     * @param int $ResultCode
     * @param Registrant $Registrant
     */
    public function __construct($ResultCode, $Registrant)
    {
      parent::__construct($ResultCode);
      $this->Registrant = $Registrant;
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
