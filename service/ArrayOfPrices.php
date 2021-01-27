<?php

namespace ascio\v3;

class ArrayOfPrices
{

    /**
     * @var PriceInfo[] $PriceInfo
     */
    protected $PriceInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceInfo[]
     */
    public function getPriceInfo()
    {
      return $this->PriceInfo;
    }

    /**
     * @param PriceInfo[] $PriceInfo
     * @return \ascio\v3\ArrayOfPrices
     */
    public function setPriceInfo(array $PriceInfo)
    {
      $this->PriceInfo = $PriceInfo;
      return $this;
    }

}
