<?php

namespace ascio\v3;

class GetPriceHistoryRequest
{

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @param string $ProductName
     */
    public function __construct($ProductName)
    {
      $this->ProductName = $ProductName;
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
     * @return \ascio\v3\GetPriceHistoryRequest
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

}
