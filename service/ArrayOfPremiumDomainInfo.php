<?php

namespace ascio\v3;

class ArrayOfPremiumDomainInfo
{

    /**
     * @var DomainInfo[] $PremiumDomainInfo
     */
    protected $PremiumDomainInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainInfo[]
     */
    public function getPremiumDomainInfo()
    {
      return $this->PremiumDomainInfo;
    }

    /**
     * @param DomainInfo[] $PremiumDomainInfo
     * @return \ascio\v3\ArrayOfPremiumDomainInfo
     */
    public function setPremiumDomainInfo(array $PremiumDomainInfo)
    {
      $this->PremiumDomainInfo = $PremiumDomainInfo;
      return $this;
    }

}
