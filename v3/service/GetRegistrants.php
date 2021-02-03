<?php

namespace ascio\v3;

class GetRegistrants
{

    /**
     * @var GetRegistrantsRequest $request
     */
    protected $request = null;

    /**
     * @param GetRegistrantsRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetRegistrantsRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetRegistrantsRequest $request
     * @return \ascio\v3\GetRegistrants
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
