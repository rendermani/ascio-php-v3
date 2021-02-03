<?php

namespace ascio\v3;

class SalesLine
{

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var Product $Product
     */
    protected $Product = null;

    /**
     * @var string $ObjectHandle
     */
    protected $ObjectHandle = null;

    /**
     * @var string $ObjectName
     */
    protected $ObjectName = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var string $PriceCategory
     */
    protected $PriceCategory = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var \DateTime $Created
     */
    protected $Created = null;

    /**
     * @var SalesLineState $State
     */
    protected $State = null;

    /**
     * @var int $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var int $CreditNo
     */
    protected $CreditNo = null;

    /**
     * @var string $DomainComment
     */
    protected $DomainComment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return \ascio\v3\SalesLine
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param Product $Product
     * @return \ascio\v3\SalesLine
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectHandle()
    {
      return $this->ObjectHandle;
    }

    /**
     * @param string $ObjectHandle
     * @return \ascio\v3\SalesLine
     */
    public function setObjectHandle($ObjectHandle)
    {
      $this->ObjectHandle = $ObjectHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectName()
    {
      return $this->ObjectName;
    }

    /**
     * @param string $ObjectName
     * @return \ascio\v3\SalesLine
     */
    public function setObjectName($ObjectName)
    {
      $this->ObjectName = $ObjectName;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \ascio\v3\SalesLine
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceCategory()
    {
      return $this->PriceCategory;
    }

    /**
     * @param string $PriceCategory
     * @return \ascio\v3\SalesLine
     */
    public function setPriceCategory($PriceCategory)
    {
      $this->PriceCategory = $PriceCategory;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \ascio\v3\SalesLine
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \ascio\v3\SalesLine
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
     * @return SalesLineState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param SalesLineState $State
     * @return \ascio\v3\SalesLine
     */
    public function setState($State)
    {
      $this->State = $State;
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
     * @return \ascio\v3\SalesLine
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
     * @return \ascio\v3\SalesLine
     */
    public function setCreditNo($CreditNo)
    {
      $this->CreditNo = $CreditNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainComment()
    {
      return $this->DomainComment;
    }

    /**
     * @param string $DomainComment
     * @return \ascio\v3\SalesLine
     */
    public function setDomainComment($DomainComment)
    {
      $this->DomainComment = $DomainComment;
      return $this;
    }

}
