<?php

namespace ascio\v3;

class GetNameServers
{

    /**
     * @var GetNameServersRequest $request
     */
    protected $request = null;

    /**
     * @param GetNameServersRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetNameServersRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetNameServersRequest $request
     * @return \ascio\v3\GetNameServers
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
