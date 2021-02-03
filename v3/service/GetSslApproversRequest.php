<?php

namespace ascio\v3;

class GetSslApproversRequest
{

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \ascio\v3\GetSslApproversRequest
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ascio\v3\GetSslApproversRequest
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
