<?php

namespace ascio\v3;

class GetPrices
{

    /**
     * @var GetPricesRequest $request
     */
    protected $request = null;

    /**
     * @param GetPricesRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetPricesRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetPricesRequest $request
     * @return \ascio\v3\GetPrices
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
