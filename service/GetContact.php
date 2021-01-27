<?php

namespace ascio\v3;

class GetContact
{

    /**
     * @var GetContactRequest $request
     */
    protected $request = null;

    /**
     * @param GetContactRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetContactRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetContactRequest $request
     * @return \ascio\v3\GetContact
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
