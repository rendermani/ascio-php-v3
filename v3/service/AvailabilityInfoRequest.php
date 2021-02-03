<?php

namespace ascio\v3;

class AvailabilityInfoRequest
{

    /**
     * @var string $DomainName
     */
    protected $DomainName = null;

    /**
     * @var string $Quality
     */
    protected $Quality = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
      return $this->DomainName;
    }

    /**
     * @param string $DomainName
     * @return \ascio\v3\AvailabilityInfoRequest
     */
    public function setDomainName($DomainName)
    {
      $this->DomainName = $DomainName;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuality()
    {
      return $this->Quality;
    }

    /**
     * @param string $Quality
     * @return \ascio\v3\AvailabilityInfoRequest
     */
    public function setQuality($Quality)
    {
      $this->Quality = $Quality;
      return $this;
    }

}
