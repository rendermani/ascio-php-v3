<?php

namespace ascio\v3;

class AccountTransaction
{

    /**
     * @var AccountTransactionType $AccountTransactionType
     */
    protected $AccountTransactionType = null;

    /**
     * @var \DateTime $Created
     */
    protected $Created = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Balance
     */
    protected $Balance = null;

    /**
     * @var int $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var int $CreditNo
     */
    protected $CreditNo = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var float $VatPercentage
     */
    protected $VatPercentage = null;

    /**
     * @param \DateTime $Created
     * @param float $Amount
     * @param float $Balance
     * @param string $Note
     * @param string $CreatedBy
     */
    public function __construct(\DateTime $Created, $Amount, $Balance, $Note, $CreatedBy)
    {
      $this->Created = $Created->format(\DateTime::ATOM);
      $this->Amount = $Amount;
      $this->Balance = $Balance;
      $this->Note = $Note;
      $this->CreatedBy = $CreatedBy;
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
     * @return \ascio\v3\AccountTransaction
     */
    public function setAccountTransactionType($AccountTransactionType)
    {
      $this->AccountTransactionType = $AccountTransactionType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
      if ($this->Created == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Created);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Created
     * @return \ascio\v3\AccountTransaction
     */
    public function setCreated(\DateTime $Created)
    {
      $this->Created = $Created->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \ascio\v3\AccountTransaction
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param float $Balance
     * @return \ascio\v3\AccountTransaction
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
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
     * @return \ascio\v3\AccountTransaction
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
     * @return \ascio\v3\AccountTransaction
     */
    public function setCreditNo($CreditNo)
    {
      $this->CreditNo = $CreditNo;
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
     * @return \ascio\v3\AccountTransaction
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
      return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return \ascio\v3\AccountTransaction
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatPercentage()
    {
      return $this->VatPercentage;
    }

    /**
     * @param float $VatPercentage
     * @return \ascio\v3\AccountTransaction
     */
    public function setVatPercentage($VatPercentage)
    {
      $this->VatPercentage = $VatPercentage;
      return $this;
    }

}
