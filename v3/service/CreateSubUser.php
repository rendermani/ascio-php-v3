<?php

namespace ascio\v3;

class CreateSubUser
{

    /**
     * @var CreateSubUserRequest $request
     */
    protected $request = null;

    /**
     * @param CreateSubUserRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return CreateSubUserRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateSubUserRequest $request
     * @return \ascio\v3\CreateSubUser
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
