<?php

namespace ascio\v3;

class GetContacts
{

    /**
     * @var GetContactsRequest $request
     */
    protected $request = null;

    /**
     * @param GetContactsRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetContactsRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetContactsRequest $request
     * @return \ascio\v3\GetContacts
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
