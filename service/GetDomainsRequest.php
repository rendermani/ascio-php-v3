<?php

namespace ascio\v3;

class GetDomainsRequest
{

    /**
     * @var ArrayOfstring $ObjectNames
     */
    protected $ObjectNames = null;

    /**
     * @var ArrayOfstring $Handles
     */
    protected $Handles = null;

    /**
     * @var ArrayOfstring $Tlds
     */
    protected $Tlds = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var DomainType $DomainType
     */
    protected $DomainType = null;

    /**
     * @var ProxyType $ProxyType
     */
    protected $ProxyType = null;

    /**
     * @var string $DomainComment
     */
    protected $DomainComment = null;

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
     * @var string $OwnerName
     */
    protected $OwnerName = null;

    /**
     * @var string $OwnerOrganizationName
     */
    protected $OwnerOrganizationName = null;

    /**
     * @var string $OwnerEmail
     */
    protected $OwnerEmail = null;

    /**
     * @var string $ContactFirstName
     */
    protected $ContactFirstName = null;

    /**
     * @var string $ContactLastName
     */
    protected $ContactLastName = null;

    /**
     * @var string $ContactOrganizationName
     */
    protected $ContactOrganizationName = null;

    /**
     * @var string $ContactEmail
     */
    protected $ContactEmail = null;

    /**
     * @var string $NameServerHostName
     */
    protected $NameServerHostName = null;

    /**
     * @var string $NameServerIPv4
     */
    protected $NameServerIPv4 = null;

    /**
     * @var string $NameServerIPv6
     */
    protected $NameServerIPv6 = null;

    /**
     * @var DomainSortType $OrderSort
     */
    protected $OrderSort = null;

    /**
     * @var PagingInfo $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param DomainSortType $OrderSort
     */
    public function __construct($OrderSort)
    {
      $this->OrderSort = $OrderSort;
    }

    /**
     * @return ArrayOfstring
     */
    public function getObjectNames()
    {
      return $this->ObjectNames;
    }

    /**
     * @param ArrayOfstring $ObjectNames
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setObjectNames($ObjectNames)
    {
      $this->ObjectNames = $ObjectNames;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getHandles()
    {
      return $this->Handles;
    }

    /**
     * @param ArrayOfstring $Handles
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setHandles($Handles)
    {
      $this->Handles = $Handles;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTlds()
    {
      return $this->Tlds;
    }

    /**
     * @param ArrayOfstring $Tlds
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setTlds($Tlds)
    {
      $this->Tlds = $Tlds;
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
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return DomainType
     */
    public function getDomainType()
    {
      return $this->DomainType;
    }

    /**
     * @param DomainType $DomainType
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setDomainType($DomainType)
    {
      $this->DomainType = $DomainType;
      return $this;
    }

    /**
     * @return ProxyType
     */
    public function getProxyType()
    {
      return $this->ProxyType;
    }

    /**
     * @param ProxyType $ProxyType
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setProxyType($ProxyType)
    {
      $this->ProxyType = $ProxyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainComment()
    {
      return $this->DomainComment;
    }

    /**
     * @param string $DomainComment
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setDomainComment($DomainComment)
    {
      $this->DomainComment = $DomainComment;
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
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setCreationFromDate(\DateTime $CreationFromDate)
    {
      $this->CreationFromDate = $CreationFromDate->format(\DateTime::ATOM);
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
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setCreationToDate(\DateTime $CreationToDate)
    {
      $this->CreationToDate = $CreationToDate->format(\DateTime::ATOM);
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
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setExpireFromDate(\DateTime $ExpireFromDate)
    {
      $this->ExpireFromDate = $ExpireFromDate->format(\DateTime::ATOM);
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
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setExpireToDate(\DateTime $ExpireToDate)
    {
      $this->ExpireToDate = $ExpireToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getOwnerName()
    {
      return $this->OwnerName;
    }

    /**
     * @param string $OwnerName
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setOwnerName($OwnerName)
    {
      $this->OwnerName = $OwnerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwnerOrganizationName()
    {
      return $this->OwnerOrganizationName;
    }

    /**
     * @param string $OwnerOrganizationName
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setOwnerOrganizationName($OwnerOrganizationName)
    {
      $this->OwnerOrganizationName = $OwnerOrganizationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwnerEmail()
    {
      return $this->OwnerEmail;
    }

    /**
     * @param string $OwnerEmail
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setOwnerEmail($OwnerEmail)
    {
      $this->OwnerEmail = $OwnerEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactFirstName()
    {
      return $this->ContactFirstName;
    }

    /**
     * @param string $ContactFirstName
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setContactFirstName($ContactFirstName)
    {
      $this->ContactFirstName = $ContactFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactLastName()
    {
      return $this->ContactLastName;
    }

    /**
     * @param string $ContactLastName
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setContactLastName($ContactLastName)
    {
      $this->ContactLastName = $ContactLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactOrganizationName()
    {
      return $this->ContactOrganizationName;
    }

    /**
     * @param string $ContactOrganizationName
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setContactOrganizationName($ContactOrganizationName)
    {
      $this->ContactOrganizationName = $ContactOrganizationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
      return $this->ContactEmail;
    }

    /**
     * @param string $ContactEmail
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setContactEmail($ContactEmail)
    {
      $this->ContactEmail = $ContactEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameServerHostName()
    {
      return $this->NameServerHostName;
    }

    /**
     * @param string $NameServerHostName
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setNameServerHostName($NameServerHostName)
    {
      $this->NameServerHostName = $NameServerHostName;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameServerIPv4()
    {
      return $this->NameServerIPv4;
    }

    /**
     * @param string $NameServerIPv4
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setNameServerIPv4($NameServerIPv4)
    {
      $this->NameServerIPv4 = $NameServerIPv4;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameServerIPv6()
    {
      return $this->NameServerIPv6;
    }

    /**
     * @param string $NameServerIPv6
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setNameServerIPv6($NameServerIPv6)
    {
      $this->NameServerIPv6 = $NameServerIPv6;
      return $this;
    }

    /**
     * @return DomainSortType
     */
    public function getOrderSort()
    {
      return $this->OrderSort;
    }

    /**
     * @param DomainSortType $OrderSort
     * @return \ascio\v3\GetDomainsRequest
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
     * @return \ascio\v3\GetDomainsRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
