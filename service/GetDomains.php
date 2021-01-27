<?php

namespace ascio\v3;

class GetDomains
{

    /**
     * @var GetDomainsRequest $request
     */
    protected $request = null;

    /**
     * @param GetDomainsRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetDomainsRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetDomainsRequest $request
     * @return \ascio\v3\GetDomains
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
