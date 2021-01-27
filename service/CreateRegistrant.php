<?php

namespace ascio\v3;

class CreateRegistrant
{

    /**
     * @var CreateRegistrantRequest $request
     */
    protected $request = null;

    /**
     * @param CreateRegistrantRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return CreateRegistrantRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreateRegistrantRequest $request
     * @return \ascio\v3\CreateRegistrant
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
