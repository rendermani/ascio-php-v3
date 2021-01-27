<?php

namespace ascio\v3;

class GetDomainResponse extends AbstractResponse
{

    /**
     * @var DomainInfo $DomainInfo
     */
    protected $DomainInfo = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
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
