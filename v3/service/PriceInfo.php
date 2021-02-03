<?php

namespace ascio\v3;

class PriceInfo
{

    /**
     * @var Product $Product
     */
    protected $Product = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var \DateTime $ValidFrom
     */
    protected $ValidFrom = null;

    /**
     * @var \DateTime $ValidTo
     */
    protected $ValidTo = null;

    
    public function __construct()
    {
    
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
     * @return \ascio\v3\PriceInfo
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
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
     * @return \ascio\v3\PriceInfo
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
      if ($this->ValidFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidFrom
     * @return \ascio\v3\PriceInfo
     */
    public function setValidFrom(\DateTime $ValidFrom = null)
    {
      if ($ValidFrom == null) {
       $this->ValidFrom = null;
      } else {
        $this->ValidFrom = $ValidFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidTo()
    {
      if ($this->ValidTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidTo
     * @return \ascio\v3\PriceInfo
     */
    public function setValidTo(\DateTime $ValidTo = null)
    {
      if ($ValidTo == null) {
       $this->ValidTo = null;
      } else {
        $this->ValidTo = $ValidTo->format(\DateTime::ATOM);
      }
      return $this;
    }

}
