<?php

namespace ascio\v3;

class GetDnsSecKey
{

    /**
     * @var GetDnsSecKeyRequest $request
     */
    protected $request = null;

    /**
     * @param GetDnsSecKeyRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetDnsSecKeyRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetDnsSecKeyRequest $request
     * @return \ascio\v3\GetDnsSecKey
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
