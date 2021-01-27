<?php

namespace ascio\v3;

class GetSubUser
{

    /**
     * @var GetSubUserRequest $request
     */
    protected $request = null;

    /**
     * @param GetSubUserRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetSubUserRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetSubUserRequest $request
     * @return \ascio\v3\GetSubUser
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
