<?php

namespace ascio\v3;

class ArrayOfSslCertificateInfo
{

    /**
     * @var SslCertificateInfo[] $SslCertificateInfo
     */
    protected $SslCertificateInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SslCertificateInfo[]
     */
    public function getSslCertificateInfo()
    {
      return $this->SslCertificateInfo;
    }

    /**
     * @param SslCertificateInfo[] $SslCertificateInfo
     * @return \ascio\v3\ArrayOfSslCertificateInfo
     */
    public function setSslCertificateInfo(array $SslCertificateInfo)
    {
      $this->SslCertificateInfo = $SslCertificateInfo;
      return $this;
    }

}
