<?php

namespace ascio\v3;

class GetInvoiceRequest
{

    /**
     * @var int $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @param int $InvoiceNo
     */
    public function __construct($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
    }

    /**
     * @return int
     */
    public function getInvoiceNo()
    {
      return $this->InvoiceNo;
    }

    /**
     * @param int $InvoiceNo
     * @return \ascio\v3\GetInvoiceRequest
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

}
