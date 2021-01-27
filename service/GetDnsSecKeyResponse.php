<?php

namespace ascio\v3;

class GetDnsSecKeyResponse extends AbstractResponse
{

    /**
     * @var DnsSecKey $DnsSecKey
     */
    protected $DnsSecKey = null;

    /**
     * @param int $ResultCode
     * @param DnsSecKey $DnsSecKey
     */
    public function __construct($ResultCode, $DnsSecKey)
    {
      parent::__construct($ResultCode);
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
     * @return \ascio\v3\GetDnsSecKeyResponse
     */
    public function setDnsSecKey($DnsSecKey)
    {
      $this->DnsSecKey = $DnsSecKey;
      return $this;
    }

}
