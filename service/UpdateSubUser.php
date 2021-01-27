<?php

namespace ascio\v3;

class UpdateSubUser
{

    /**
     * @var UpdateSubUserRequest $request
     */
    protected $request = null;

    /**
     * @param UpdateSubUserRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return UpdateSubUserRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param UpdateSubUserRequest $request
     * @return \ascio\v3\UpdateSubUser
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
