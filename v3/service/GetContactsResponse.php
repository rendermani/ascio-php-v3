<?php

namespace ascio\v3;

class GetContactsResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfContactInfo $ContactInfos
     */
    protected $ContactInfos = null;

    
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
     * @return \ascio\v3\GetContactsResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfContactInfo
     */
    public function getContactInfos()
    {
      return $this->ContactInfos;
    }

    /**
     * @param ArrayOfContactInfo $ContactInfos
     * @return \ascio\v3\GetContactsResponse
     */
    public function setContactInfos($ContactInfos)
    {
      $this->ContactInfos = $ContactInfos;
      return $this;
    }

}
