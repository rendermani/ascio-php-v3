<?php

namespace ascio\v3;

class GetCreditNoteRequest
{

    /**
     * @var int $CreditNo
     */
    protected $CreditNo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCreditNo()
    {
      return $this->CreditNo;
    }

    /**
     * @param int $CreditNo
     * @return \ascio\v3\GetCreditNoteRequest
     */
    public function setCreditNo($CreditNo)
    {
      $this->CreditNo = $CreditNo;
      return $this;
    }

}
