<?php

namespace ascio\v3;

class GetInvoiceRequest
{

    /**
     * @var int $InvoiceNo
     */
    protected $InvoiceNo = null;

    
    public function __construct()
    {
    
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
