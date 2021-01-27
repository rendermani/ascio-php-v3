<?php

namespace ascio\v3;

class CreateDnsSecKey
{

    /**
     * @var CreateDnsSecKeyRequest $request
     */
    protected $request = null;

    /**
     * @param CreateDnsSecKeyRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CreateDnsSecKeyRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateDnsSecKeyRequest $request
     * @return \ascio\v3\CreateDnsSecKey
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
