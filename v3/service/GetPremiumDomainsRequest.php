<?php

namespace ascio\v3;

class GetPremiumDomainsRequest
{

    /**
     * @var string $ObjectName
     */
    protected $ObjectName = null;

    /**
     * @var string $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Tld
     */
    protected $Tld = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $CreationFromDate
     */
    protected $CreationFromDate = null;

    /**
     * @var \DateTime $CreationToDate
     */
    protected $CreationToDate = null;

    /**
     * @var \DateTime $ExpireFromDate
     */
    protected $ExpireFromDate = null;

    /**
     * @var \DateTime $ExpireToDate
     */
    protected $ExpireToDate = null;

    /**
     * @var PagingInfo $PageInfo
     */
    protected $PageInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getObjectName()
    {
      return $this->ObjectName;
    }

    /**
     * @param string $ObjectName
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setObjectName($ObjectName)
    {
      $this->ObjectName = $ObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param string $Handle
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getTld()
    {
      return $this->Tld;
    }

    /**
     * @param string $Tld
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setTld($Tld)
    {
      $this->Tld = $Tld;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationFromDate()
    {
      if ($this->CreationFromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationFromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationFromDate
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setCreationFromDate(\DateTime $CreationFromDate = null)
    {
      if ($CreationFromDate == null) {
       $this->CreationFromDate = null;
      } else {
        $this->CreationFromDate = $CreationFromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationToDate()
    {
      if ($this->CreationToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationToDate
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setCreationToDate(\DateTime $CreationToDate = null)
    {
      if ($CreationToDate == null) {
       $this->CreationToDate = null;
      } else {
        $this->CreationToDate = $CreationToDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpireFromDate()
    {
      if ($this->ExpireFromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpireFromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpireFromDate
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setExpireFromDate(\DateTime $ExpireFromDate = null)
    {
      if ($ExpireFromDate == null) {
       $this->ExpireFromDate = null;
      } else {
        $this->ExpireFromDate = $ExpireFromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpireToDate()
    {
      if ($this->ExpireToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpireToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpireToDate
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setExpireToDate(\DateTime $ExpireToDate = null)
    {
      if ($ExpireToDate == null) {
       $this->ExpireToDate = null;
      } else {
        $this->ExpireToDate = $ExpireToDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return PagingInfo
     */
    public function getPageInfo()
    {
      return $this->PageInfo;
    }

    /**
     * @param PagingInfo $PageInfo
     * @return \ascio\v3\GetPremiumDomainsRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
