<?php

namespace ascio\v3;

class GetDnsSecKeysResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfDnsSecKeys $DnsSecKeys
     */
    protected $DnsSecKeys = null;

    
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
     * @return \ascio\v3\GetDnsSecKeysResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfDnsSecKeys
     */
    public function getDnsSecKeys()
    {
      return $this->DnsSecKeys;
    }

    /**
     * @param ArrayOfDnsSecKeys $DnsSecKeys
     * @return \ascio\v3\GetDnsSecKeysResponse
     */
    public function setDnsSecKeys($DnsSecKeys)
    {
      $this->DnsSecKeys = $DnsSecKeys;
      return $this;
    }

}
