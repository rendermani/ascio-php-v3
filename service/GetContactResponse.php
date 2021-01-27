<?php

namespace ascio\v3;

class GetContactResponse extends AbstractResponse
{

    /**
     * @var ContactInfo $ContactInfo
     */
    protected $ContactInfo = null;

    /**
     * @param int $ResultCode
     * @param ContactInfo $ContactInfo
     */
    public function __construct($ResultCode, $ContactInfo)
    {
      parent::__construct($ResultCode);
      $this->ContactInfo = $ContactInfo;
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
