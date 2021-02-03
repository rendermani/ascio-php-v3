<?php

namespace ascio\v3;

class GetDnsSecKeys
{

    /**
     * @var GetDnsSecKeysRequest $request
     */
    protected $request = null;

    /**
     * @param GetDnsSecKeysRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetDnsSecKeysRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetDnsSecKeysRequest $request
     * @return \ascio\v3\GetDnsSecKeys
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
