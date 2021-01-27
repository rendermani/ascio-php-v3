<?php

namespace ascio\v3;

class GetInvoiceResponse extends AbstractResponse
{

    /**
     * @var int $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $VatPercentage
     */
    protected $VatPercentage = null;

    /**
     * @var \DateTime $Created
     */
    protected $Created = null;

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var ArrayOfSalesLineGroups $SalesLineGroups
     */
    protected $SalesLineGroups = null;

    /**
     * @param int $ResultCode
     * @param int $InvoiceNo
     * @param float $Amount
     * @param \DateTime $Created
     * @param string $CreatedBy
     * @param string $Note
     * @param string $Currency
     */
    public function __construct($ResultCode, $InvoiceNo, $Amount, \DateTime $Created, $CreatedBy, $Note, $Currency)
    {
      parent::__construct($ResultCode);
      $this->InvoiceNo = $InvoiceNo;
      $this->Amount = $Amount;
      $this->Created = $Created->format(\DateTime::ATOM);
      $this->CreatedBy = $CreatedBy;
      $this->Note = $Note;
      $this->Currency = $Currency;
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
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
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
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setVatPercentage($VatPercentage)
    {
      $this->VatPercentage = $VatPercentage;
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
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setCreated(\DateTime $Created)
    {
      $this->Created = $Created->format(\DateTime::ATOM);
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
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setCreatedBy($CreatedBy)
    {
      $this->CreatedBy = $CreatedBy;
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
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return ArrayOfSalesLineGroups
     */
    public function getSalesLineGroups()
    {
      return $this->SalesLineGroups;
    }

    /**
     * @param ArrayOfSalesLineGroups $SalesLineGroups
     * @return \ascio\v3\GetInvoiceResponse
     */
    public function setSalesLineGroups($SalesLineGroups)
    {
      $this->SalesLineGroups = $SalesLineGroups;
      return $this;
    }

}
