<?php

namespace ascio\v3;

class GetRegistrant
{

    /**
     * @var GetRegistrantRequest $request
     */
    protected $request = null;

    /**
     * @param GetRegistrantRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetRegistrantRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetRegistrantRequest $request
     * @return \ascio\v3\GetRegistrant
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
