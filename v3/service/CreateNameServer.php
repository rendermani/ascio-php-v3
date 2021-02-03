<?php

namespace ascio\v3;

class CreateNameServer
{

    /**
     * @var CreateNameServerRequest $request
     */
    protected $request = null;

    /**
     * @param CreateNameServerRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return CreateNameServerRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateNameServerRequest $request
     * @return \ascio\v3\CreateNameServer
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
