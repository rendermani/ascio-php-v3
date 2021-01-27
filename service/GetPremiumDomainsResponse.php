<?php

namespace ascio\v3;

class GetPremiumDomainsResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfPremiumDomainInfo $PremiumDomainInfos
     */
    protected $PremiumDomainInfos = null;

    /**
     * @param int $ResultCode
     * @param int $TotalCount
     */
    public function __construct($ResultCode, $TotalCount)
    {
      parent::__construct($ResultCode);
      $this->TotalCount = $TotalCount;
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
     * @return \ascio\v3\GetPremiumDomainsResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfPremiumDomainInfo
     */
    public function getPremiumDomainInfos()
    {
      return $this->PremiumDomainInfos;
    }

    /**
     * @param ArrayOfPremiumDomainInfo $PremiumDomainInfos
     * @return \ascio\v3\GetPremiumDomainsResponse
     */
    public function setPremiumDomainInfos($PremiumDomainInfos)
    {
      $this->PremiumDomainInfos = $PremiumDomainInfos;
      return $this;
    }

}
