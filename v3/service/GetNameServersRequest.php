<?php

namespace ascio\v3;

class GetNameServersRequest
{

    /**
     * @var string $Handle
     */
    protected $Handle = null;

    /**
     * @var string $HostName
     */
    protected $HostName = null;

    /**
     * @var string $IpAddress
     */
    protected $IpAddress = null;

    /**
     * @var string $IpV6Address
     */
    protected $IpV6Address = null;

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
     * @var NameServerSortType $OrderSort
     */
    protected $OrderSort = null;

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
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param string $Handle
     * @return \ascio\v3\GetNameServersRequest
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostName()
    {
      return $this->HostName;
    }

    /**
     * @param string $HostName
     * @return \ascio\v3\GetNameServersRequest
     */
    public function setHostName($HostName)
    {
      $this->HostName = $HostName;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
      return $this->IpAddress;
    }

    /**
     * @param string $IpAddress
     * @return \ascio\v3\GetNameServersRequest
     */
    public function setIpAddress($IpAddress)
    {
      $this->IpAddress = $IpAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpV6Address()
    {
      return $this->IpV6Address;
    }

    /**
     * @param string $IpV6Address
     * @return \ascio\v3\GetNameServersRequest
     */
    public function setIpV6Address($IpV6Address)
    {
      $this->IpV6Address = $IpV6Address;
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
     * @return \ascio\v3\GetNameServersRequest
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
     * @return \ascio\v3\GetNameServersRequest
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
     * @return \ascio\v3\GetNameServersRequest
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
     * @return NameServerSortType
     */
    public function getOrderSort()
    {
      return $this->OrderSort;
    }

    /**
     * @param NameServerSortType $OrderSort
     * @return \ascio\v3\GetNameServersRequest
     */
    public function setOrderSort($OrderSort)
    {
      $this->OrderSort = $OrderSort;
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
     * @return \ascio\v3\GetNameServersRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
