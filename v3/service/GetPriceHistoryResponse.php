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

    
    public function __construct()
    {
      parent::__construct();
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
