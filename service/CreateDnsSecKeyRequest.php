<?php

namespace ascio\v3;

class CreateDnsSecKeyRequest
{

    /**
     * @var DnsSecKey $DnsSecKey
     */
    protected $DnsSecKey = null;

    /**
     * @param DnsSecKey $DnsSecKey
     */
    public function __construct($DnsSecKey)
    {
      $this->DnsSecKey = $DnsSecKey;
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
     * @return \ascio\v3\CreateDnsSecKeyRequest
     */
    public function setDnsSecKey($DnsSecKey)
    {
      $this->DnsSecKey = $DnsSecKey;
      return $this;
    }

}
