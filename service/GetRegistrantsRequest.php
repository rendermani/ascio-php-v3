<?php

namespace ascio\v3;

class GetRegistrantsRequest
{

    /**
     * @var string $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $OrgName
     */
    protected $OrgName = null;

    /**
     * @var string $OrganisationNumber
     */
    protected $OrganisationNumber = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

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
     * @var RegistrantSortType $OrderSort
     */
    protected $OrderSort = null;

    /**
     * @var PagingInfo $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param RegistrantSortType $OrderSort
     */
    public function __construct($OrderSort)
    {
      $this->OrderSort = $OrderSort;
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
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
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
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrgName()
    {
      return $this->OrgName;
    }

    /**
     * @param string $OrgName
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setOrgName($OrgName)
    {
      $this->OrgName = $OrgName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganisationNumber()
    {
      return $this->OrganisationNumber;
    }

    /**
     * @param string $OrganisationNumber
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setOrganisationNumber($OrganisationNumber)
    {
      $this->OrganisationNumber = $OrganisationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return \ascio\v3\GetRegistrantsRequest
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
     * @return \ascio\v3\GetRegistrantsRequest
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
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setCreationToDate(\DateTime $CreationToDate)
    {
      $this->CreationToDate = $CreationToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return RegistrantSortType
     */
    public function getOrderSort()
    {
      return $this->OrderSort;
    }

    /**
     * @param RegistrantSortType $OrderSort
     * @return \ascio\v3\GetRegistrantsRequest
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
     * @return \ascio\v3\GetRegistrantsRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
