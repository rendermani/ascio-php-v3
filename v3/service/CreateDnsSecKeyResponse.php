<?php

namespace ascio\v3;

class CreateDnsSecKeyResponse extends AbstractResponse
{

    /**
     * @var DnsSecKey $DnsSecKey
     */
    protected $DnsSecKey = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return DnsSecKey
     */
    public function getDnsSecKey()
    {
      return $this->DnsSecKey;
    }

    /**
     * @param DnsSecKey $DnsSecKey
     * @return \ascio\v3\CreateDnsSecKeyResponse
     */
    public function setDnsSecKey($DnsSecKey)
    {
      $this->DnsSecKey = $DnsSecKey;
      return $this;
    }

}
