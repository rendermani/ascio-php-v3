<?php

namespace ascio\v3;

class GetAccountTransactionsResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfAccountTransactions $AccountTransactions
     */
    protected $AccountTransactions = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $VatPercentage
     */
    protected $VatPercentage = null;

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
     * @return \ascio\v3\GetAccountTransactionsResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfAccountTransactions
     */
    public function getAccountTransactions()
    {
      return $this->AccountTransactions;
    }

    /**
     * @param ArrayOfAccountTransactions $AccountTransactions
     * @return \ascio\v3\GetAccountTransactionsResponse
     */
    public function setAccountTransactions($AccountTransactions)
    {
      $this->AccountTransactions = $AccountTransactions;
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
     * @return \ascio\v3\GetAccountTransactionsResponse
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatPercentage()
    {
      return $this->VatPercentage;
    }

    /**
     * @param float $VatPercentage
     * @return \ascio\v3\GetAccountTransactionsResponse
     */
    public function setVatPercentage($VatPercentage)
    {
      $this->VatPercentage = $VatPercentage;
      return $this;
    }

}
