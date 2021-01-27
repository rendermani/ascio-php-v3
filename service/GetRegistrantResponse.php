<?php

namespace ascio\v3;

class GetRegistrantResponse extends AbstractResponse
{

    /**
     * @var RegistrantInfo $RegistrantInfo
     */
    protected $RegistrantInfo = null;

    /**
     * @param int $ResultCode
     * @param RegistrantInfo $RegistrantInfo
     */
    public function __construct($ResultCode, $RegistrantInfo)
    {
      parent::__construct($ResultCode);
      $this->RegistrantInfo = $RegistrantInfo;
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
