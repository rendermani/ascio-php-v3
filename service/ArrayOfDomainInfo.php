<?php

namespace ascio\v3;

class ArrayOfDomainInfo
{

    /**
     * @var DomainInfo[] $DomainInfo
     */
    protected $DomainInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainInfo[]
     */
    public function getDomainInfo()
    {
      return $this->DomainInfo;
    }

    /**
     * @param DomainInfo[] $DomainInfo
     * @return \ascio\v3\ArrayOfDomainInfo
     */
    public function setDomainInfo(array $DomainInfo)
    {
      $this->DomainInfo = $DomainInfo;
      return $this;
    }

}
