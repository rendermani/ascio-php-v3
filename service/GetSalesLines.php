<?php

namespace ascio\v3;

class GetSalesLines
{

    /**
     * @var GetSalesLinesRequest $request
     */
    protected $request = null;

    /**
     * @param GetSalesLinesRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetSalesLinesRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetSalesLinesRequest $request
     * @return \ascio\v3\GetSalesLines
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
