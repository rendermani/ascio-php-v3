<?php

namespace ascio\v3;

class GetAccountTransactionsRequest
{

    /**
     * @var AccountTransactionType $AccountTransactionType
     */
    protected $AccountTransactionType = null;

    /**
     * @var int $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var int $CreditNo
     */
    protected $CreditNo = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var PagingInfo $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param int $InvoiceNo
     * @param int $CreditNo
     * @param \DateTime $FromDate
     * @param \DateTime $ToDate
     * @param string $Note
     * @param PagingInfo $PageInfo
     */
    public function __construct($InvoiceNo, $CreditNo, \DateTime $FromDate, \DateTime $ToDate, $Note, $PageInfo)
    {
      $this->InvoiceNo = $InvoiceNo;
      $this->CreditNo = $CreditNo;
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      $this->Note = $Note;
      $this->PageInfo = $PageInfo;
    }

    /**
     * @return AccountTransactionType
     */
    public function getAccountTransactionType()
    {
      return $this->AccountTransactionType;
    }

    /**
     * @param AccountTransactionType $AccountTransactionType
     * @return \ascio\v3\GetAccountTransactionsRequest
     */
    public function setAccountTransactionType($AccountTransactionType)
    {
      $this->AccountTransactionType = $AccountTransactionType;
      return $this;
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
     * @return \ascio\v3\GetAccountTransactionsRequest
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
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
     * @return \ascio\v3\GetAccountTransactionsRequest
     */
    public function setCreditNo($CreditNo)
    {
      $this->CreditNo = $CreditNo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \ascio\v3\GetAccountTransactionsRequest
     */
    public function setFromDate(\DateTime $FromDate)
    {
      $this->FromDate = $FromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \ascio\v3\GetAccountTransactionsRequest
     */
    public function setToDate(\DateTime $ToDate)
    {
      $this->ToDate = $ToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param string $Note
     * @return \ascio\v3\GetAccountTransactionsRequest
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return PagingInfo
     */
    public function getPageInfo()
    {
      return $this->PageInfo;
    }

    /**
     * @param PagingInfo $PageInfo
     * @return \ascio\v3\GetAccountTransactionsRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
