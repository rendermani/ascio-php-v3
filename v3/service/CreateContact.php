<?php

namespace ascio\v3;

class CreateContact
{

    /**
     * @var CreateContactRequest $request
     */
    protected $request = null;

    /**
     * @param CreateContactRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return CreateContactRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateContactRequest $request
     * @return \ascio\v3\CreateContact
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
