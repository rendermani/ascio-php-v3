<?php

namespace ascio\v3;

class GetDomain
{

    /**
     * @var GetDomainRequest $request
     */
    protected $request = null;

    /**
     * @param GetDomainRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetDomainRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetDomainRequest $request
     * @return \ascio\v3\GetDomain
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
