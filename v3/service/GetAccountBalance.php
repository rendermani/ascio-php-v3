<?php

namespace ascio\v3;

class GetAccountBalance
{

    /**
     * @var GetAccountBalanceRequest $request
     */
    protected $request = null;

    /**
     * @param GetAccountBalanceRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetAccountBalanceRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetAccountBalanceRequest $request
     * @return \ascio\v3\GetAccountBalance
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
