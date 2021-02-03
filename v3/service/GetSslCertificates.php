<?php

namespace ascio\v3;

class GetSslCertificates
{

    /**
     * @var GetSslCertificatesRequest $request
     */
    protected $request = null;

    /**
     * @param GetSslCertificatesRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetSslCertificatesRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetSslCertificatesRequest $request
     * @return \ascio\v3\GetSslCertificates
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
