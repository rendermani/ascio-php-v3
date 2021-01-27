<?php

namespace ascio\v3;

class GetInvoice
{

    /**
     * @var GetInvoiceRequest $request
     */
    protected $request = null;

    /**
     * @param GetInvoiceRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetInvoiceRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetInvoiceRequest $request
     * @return \ascio\v3\GetInvoice
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
