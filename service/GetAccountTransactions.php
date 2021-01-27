<?php

namespace ascio\v3;

class GetAccountTransactions
{

    /**
     * @var GetAccountTransactionsRequest $request
     */
    protected $request = null;

    /**
     * @param GetAccountTransactionsRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetAccountTransactionsRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetAccountTransactionsRequest $request
     * @return \ascio\v3\GetAccountTransactions
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
