<?php

namespace ascio\v3;

class ArrayOfDnsSecKeys
{

    /**
     * @var DnsSecKey[] $DnsSecKey
     */
    protected $DnsSecKey = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DnsSecKey[]
     */
    public function getDnsSecKey()
    {
      return $this->DnsSecKey;
    }

    /**
     * @param DnsSecKey[] $DnsSecKey
     * @return \ascio\v3\ArrayOfDnsSecKeys
     */
    public function setDnsSecKey(array $DnsSecKey)
    {
      $this->DnsSecKey = $DnsSecKey;
      return $this;
    }

}
