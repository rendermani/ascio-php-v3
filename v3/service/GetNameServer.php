<?php

namespace ascio\v3;

class GetNameServer
{

    /**
     * @var GetNameServerRequest $request
     */
    protected $request = null;

    /**
     * @param GetNameServerRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetNameServerRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetNameServerRequest $request
     * @return \ascio\v3\GetNameServer
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
