<?php

namespace ascio\v3;

class GetPricesResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var ArrayOfPrices $Prices
     */
    protected $Prices = null;

    /**
     * @param int $ResultCode
     * @param int $TotalCount
     * @param string $Currency
     */
    public function __construct($ResultCode, $TotalCount, $Currency)
    {
      parent::__construct($ResultCode);
      $this->TotalCount = $TotalCount;
      $this->Currency = $Currency;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return \ascio\v3\GetPricesResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
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
     * @return \ascio\v3\GetPricesResponse
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \ascio\v3\GetPricesResponse
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

}
