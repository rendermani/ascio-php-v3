<?php

namespace ascio\v3;

class GetPremiumDomains
{

    /**
     * @var GetPremiumDomainsRequest $request
     */
    protected $request = null;

    /**
     * @param GetPremiumDomainsRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetPremiumDomainsRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetPremiumDomainsRequest $request
     * @return \ascio\v3\GetPremiumDomains
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
