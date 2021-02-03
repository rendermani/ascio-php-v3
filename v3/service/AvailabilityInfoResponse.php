<?php

namespace ascio\v3;

class AvailabilityInfoResponse extends AbstractResponse
{

    /**
     * @var string $DomainName
     */
    protected $DomainName = null;

    /**
     * @var string $DomainType
     */
    protected $DomainType = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $RenewalType
     */
    protected $RenewalType = null;

    /**
     * @var ArrayOfPrices $Prices
     */
    protected $Prices = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
      return $this->DomainName;
    }

    /**
     * @param string $DomainName
     * @return \ascio\v3\AvailabilityInfoResponse
     */
    public function setDomainName($DomainName)
    {
      $this->DomainName = $DomainName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainType()
    {
      return $this->DomainType;
    }

    /**
     * @param string $DomainType
     * @return \ascio\v3\AvailabilityInfoResponse
     */
    public function setDomainType($DomainType)
    {
      $this->DomainType = $DomainType;
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
     * @return \ascio\v3\AvailabilityInfoResponse
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getRenewalType()
    {
      return $this->RenewalType;
    }

    /**
     * @param string $RenewalType
     * @return \ascio\v3\AvailabilityInfoResponse
     */
    public function setRenewalType($RenewalType)
    {
      $this->RenewalType = $RenewalType;
      return $this;
    }

    /**
     * @return ArrayOfPrices
     */
    public function getPrices()
    {
      return $this->Prices;
    }

    /**
     * @param ArrayOfPrices $Prices
     * @return \ascio\v3\AvailabilityInfoResponse
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

}
