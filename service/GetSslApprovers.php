<?php

namespace ascio\v3;

class GetSslApprovers
{

    /**
     * @var GetSslApproversRequest $request
     */
    protected $request = null;

    /**
     * @param GetSslApproversRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetSslApproversRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetSslApproversRequest $request
     * @return \ascio\v3\GetSslApprovers
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
