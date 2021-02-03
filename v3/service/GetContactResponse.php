<?php

namespace ascio\v3;

class GetContactResponse extends AbstractResponse
{

    /**
     * @var ContactInfo $ContactInfo
     */
    protected $ContactInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ContactInfo
     */
    public function getContactInfo()
    {
      return $this->ContactInfo;
    }

    /**
     * @param ContactInfo $ContactInfo
     * @return \ascio\v3\GetContactResponse
     */
    public function setContactInfo($ContactInfo)
    {
      $this->ContactInfo = $ContactInfo;
      return $this;
    }

}
