<?php

namespace ascio\v3;

class DomainOrderRequest extends AbstractOrderRequest
{

    /**
     * @var Domain $Domain
     */
    protected $Domain = null;

    /**
     * @var int $AgreedPrice
     */
    protected $AgreedPrice = null;

    /**
     * @param OrderType $Type
     */
    public function __construct($Type)
    {
      parent::__construct($Type);
    }

    /**
     * @return Domain
     */
    public function getDomain()
    {
      return $this->Domain;
    }

    /**
     * @param Domain $Domain
     * @return \ascio\v3\DomainOrderRequest
     */
    public function setDomain($Domain)
    {
      $this->Domain = $Domain;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgreedPrice()
    {
      return $this->AgreedPrice;
    }

    /**
     * @param int $AgreedPrice
     * @return \ascio\v3\DomainOrderRequest
     */
    public function setAgreedPrice($AgreedPrice)
    {
      $this->AgreedPrice = $AgreedPrice;
      return $this;
    }

}
