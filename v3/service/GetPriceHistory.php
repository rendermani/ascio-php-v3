<?php

namespace ascio\v3;

class GetPriceHistory
{

    /**
     * @var GetPriceHistoryRequest $request
     */
    protected $request = null;

    /**
     * @param GetPriceHistoryRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetPriceHistoryRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetPriceHistoryRequest $request
     * @return \ascio\v3\GetPriceHistory
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
