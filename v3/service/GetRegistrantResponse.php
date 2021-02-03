<?php

namespace ascio\v3;

class GetRegistrantResponse extends AbstractResponse
{

    /**
     * @var RegistrantInfo $RegistrantInfo
     */
    protected $RegistrantInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RegistrantInfo
     */
    public function getRegistrantInfo()
    {
      return $this->RegistrantInfo;
    }

    /**
     * @param RegistrantInfo $RegistrantInfo
     * @return \ascio\v3\GetRegistrantResponse
     */
    public function setRegistrantInfo($RegistrantInfo)
    {
      $this->RegistrantInfo = $RegistrantInfo;
      return $this;
    }

}
