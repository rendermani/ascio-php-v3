<?php

namespace ascio\v3;

class GetDomainsResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfDomainInfo $DomainInfos
     */
    protected $DomainInfos = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return \ascio\v3\GetDomainsResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfDomainInfo
     */
    public function getDomainInfos()
    {
      return $this->DomainInfos;
    }

    /**
     * @param ArrayOfDomainInfo $DomainInfos
     * @return \ascio\v3\GetDomainsResponse
     */
    public function setDomainInfos($DomainInfos)
    {
      $this->DomainInfos = $DomainInfos;
      return $this;
    }

}
