<?php

namespace ascio\v3;

class AvailabilityInfo
{

    /**
     * @var AvailabilityInfoRequest $request
     */
    protected $request = null;

    /**
     * @param AvailabilityInfoRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return AvailabilityInfoRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AvailabilityInfoRequest $request
     * @return \ascio\v3\AvailabilityInfo
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
