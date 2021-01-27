<?php

namespace ascio\v3;

class DeleteSubUser
{

    /**
     * @var DeleteSubUserRequest $request
     */
    protected $request = null;

    /**
     * @param DeleteSubUserRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return DeleteSubUserRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DeleteSubUserRequest $request
     * @return \ascio\v3\DeleteSubUser
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
