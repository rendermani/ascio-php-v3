<?php

namespace ascio\v3;

class ArrayOfContactInfo
{

    /**
     * @var ContactInfo[] $ContactInfo
     */
    protected $ContactInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactInfo[]
     */
    public function getContactInfo()
    {
      return $this->ContactInfo;
    }

    /**
     * @param ContactInfo[] $ContactInfo
     * @return \ascio\v3\ArrayOfContactInfo
     */
    public function setContactInfo(array $ContactInfo)
    {
      $this->ContactInfo = $ContactInfo;
      return $this;
    }

}
