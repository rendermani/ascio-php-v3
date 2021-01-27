<?php

namespace ascio\v3;

class GetSubUsers
{

    /**
     * @var GetSubUsersRequest $request
     */
    protected $request = null;

    /**
     * @param GetSubUsersRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetSubUsersRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetSubUsersRequest $request
     * @return \ascio\v3\GetSubUsers
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
