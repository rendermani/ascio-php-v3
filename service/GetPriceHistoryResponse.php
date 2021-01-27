<?php

namespace ascio\v3;

class GetPriceHistoryResponse extends AbstractResponse
{

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
     * @param string $Currency
     */
    public function __construct($ResultCode, $Currency)
    {
      parent::__construct($ResultCode);
      $this->Currency = $Currency;
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
     * @return \ascio\v3\GetPriceHistoryResponse
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
     * @return \ascio\v3\GetPriceHistoryResponse
     */
    public function setPrices($Prices)
    {
      $this->Prices = $Prices;
      return $this;
    }

}
