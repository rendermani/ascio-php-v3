<?php

namespace ascio\v3;

class ArrayOfAccountTransactions
{

    /**
     * @var AccountTransaction[] $AccountTransaction
     */
    protected $AccountTransaction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountTransaction[]
     */
    public function getAccountTransaction()
    {
      return $this->AccountTransaction;
    }

    /**
     * @param AccountTransaction[] $AccountTransaction
     * @return \ascio\v3\ArrayOfAccountTransactions
     */
    public function setAccountTransaction(array $AccountTransaction)
    {
      $this->AccountTransaction = $AccountTransaction;
      return $this;
    }

}
