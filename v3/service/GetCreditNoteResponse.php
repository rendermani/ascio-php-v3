<?php

namespace ascio\v3;

class GetCreditNoteResponse extends AbstractResponse
{

    /**
     * @var int $CreditNo
     */
    protected $CreditNo = null;

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

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \ascio\v3\GetCreditNoteResponse
     */
    public function setCreditNo($CreditNo)
    {
      $this->CreditNo = $CreditNo;
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
     * @return \ascio\v3\GetCreditNoteResponse
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
     * @return \ascio\v3\GetCreditNoteResponse
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
     * @return \ascio\v3\GetCreditNoteResponse
     */
    public function setCreated(\DateTime $Created = null)
    {
      if ($Created == null) {
       $this->Created = null;
      } else {
        $this->Created = $Created->format(\DateTime::ATOM);
      }
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
     * @return \ascio\v3\GetCreditNoteResponse
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
     * @return \ascio\v3\GetCreditNoteResponse
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
     * @return \ascio\v3\GetCreditNoteResponse
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
     * @return \ascio\v3\GetCreditNoteResponse
     */
    public function setSalesLineGroups($SalesLineGroups)
    {
      $this->SalesLineGroups = $SalesLineGroups;
      return $this;
    }

}
