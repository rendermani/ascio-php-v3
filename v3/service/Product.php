<?php

namespace ascio\v3;

class Product
{

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var ObjectType $ObjectType
     */
    protected $ObjectType = null;

    /**
     * @var OrderType $OrderType
     */
    protected $OrderType = null;

    /**
     * @var string $Tld
     */
    protected $Tld = null;

    /**
     * @var string $TldCountry
     */
    protected $TldCountry = null;

    /**
     * @var int $Period
     */
    protected $Period = null;

    /**
     * @var string $Note
     */
    protected $Note = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \ascio\v3\Product
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return ObjectType
     */
    public function getObjectType()
    {
      return $this->ObjectType;
    }

    /**
     * @param ObjectType $ObjectType
     * @return \ascio\v3\Product
     */
    public function setObjectType($ObjectType)
    {
      $this->ObjectType = $ObjectType;
      return $this;
    }

    /**
     * @return OrderType
     */
    public function getOrderType()
    {
      return $this->OrderType;
    }

    /**
     * @param OrderType $OrderType
     * @return \ascio\v3\Product
     */
    public function setOrderType($OrderType)
    {
      $this->OrderType = $OrderType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTld()
    {
      return $this->Tld;
    }

    /**
     * @param string $Tld
     * @return \ascio\v3\Product
     */
    public function setTld($Tld)
    {
      $this->Tld = $Tld;
      return $this;
    }

    /**
     * @return string
     */
    public function getTldCountry()
    {
      return $this->TldCountry;
    }

    /**
     * @param string $TldCountry
     * @return \ascio\v3\Product
     */
    public function setTldCountry($TldCountry)
    {
      $this->TldCountry = $TldCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriod()
    {
      return $this->Period;
    }

    /**
     * @param int $Period
     * @return \ascio\v3\Product
     */
    public function setPeriod($Period)
    {
      $this->Period = $Period;
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
     * @return \ascio\v3\Product
     */
    public function setNote($Note)
    {
      $this->Note = $Note;
      return $this;
    }

}
