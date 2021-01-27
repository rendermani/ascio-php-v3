<?php

namespace ascio\v3;

class ArrayOfRegistrantInfo
{

    /**
     * @var RegistrantInfo[] $RegistrantInfo
     */
    protected $RegistrantInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RegistrantInfo[]
     */
    public function getRegistrantInfo()
    {
      return $this->RegistrantInfo;
    }

    /**
     * @param RegistrantInfo[] $RegistrantInfo
     * @return \ascio\v3\ArrayOfRegistrantInfo
     */
    public function setRegistrantInfo(array $RegistrantInfo)
    {
      $this->RegistrantInfo = $RegistrantInfo;
      return $this;
    }

}
