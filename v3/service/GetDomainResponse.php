<?php

namespace ascio\v3;

class GetDomainResponse extends AbstractResponse
{

    /**
     * @var DomainInfo $DomainInfo
     */
    protected $DomainInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DomainInfo
     */
    public function getDomainInfo()
    {
      return $this->DomainInfo;
    }

    /**
     * @param DomainInfo $DomainInfo
     * @return \ascio\v3\GetDomainResponse
     */
    public function setDomainInfo($DomainInfo)
    {
      $this->DomainInfo = $DomainInfo;
      return $this;
    }

}
