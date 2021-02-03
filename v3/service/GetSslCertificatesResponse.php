<?php

namespace ascio\v3;

class GetSslCertificatesResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfSslCertificateInfo $SslCertificateInfos
     */
    protected $SslCertificateInfos = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \ascio\v3\GetSslCertificatesResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfSslCertificateInfo
     */
    public function getSslCertificateInfos()
    {
      return $this->SslCertificateInfos;
    }

    /**
     * @param ArrayOfSslCertificateInfo $SslCertificateInfos
     * @return \ascio\v3\GetSslCertificatesResponse
     */
    public function setSslCertificateInfos($SslCertificateInfos)
    {
      $this->SslCertificateInfos = $SslCertificateInfos;
      return $this;
    }

}
