<?php

namespace ascio\v3;

class GetPricesRequest
{

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var ArrayOfObjectType $ObjectTypes
     */
    protected $ObjectTypes = null;

    /**
     * @var ArrayOfOrderType $OrderTypes
     */
    protected $OrderTypes = null;

    /**
     * @var ArrayOfstring $Tlds
     */
    protected $Tlds = null;

    /**
     * @var string $TldCountryCode
     */
    protected $TldCountryCode = null;

    /**
     * @var ArrayOfint $Periods
     */
    protected $Periods = null;

    /**
     * @var ArrayOfstring $ProductOptions
     */
    protected $ProductOptions = null;

    /**
     * @var boolean $DefaultPeriodsOnly
     */
    protected $DefaultPeriodsOnly = null;

    /**
     * @var PagingInfo $PageInfo
     */
    protected $PageInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \ascio\v3\GetPricesRequest
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfObjectType
     */
    public function getObjectTypes()
    {
      return $this->ObjectTypes;
    }

    /**
     * @param ArrayOfObjectType $ObjectTypes
     * @return \ascio\v3\GetPricesRequest
     */
    public function setObjectTypes($ObjectTypes)
    {
      $this->ObjectTypes = $ObjectTypes;
      return $this;
    }

    /**
     * @return ArrayOfOrderType
     */
    public function getOrderTypes()
    {
      return $this->OrderTypes;
    }

    /**
     * @param ArrayOfOrderType $OrderTypes
     * @return \ascio\v3\GetPricesRequest
     */
    public function setOrderTypes($OrderTypes)
    {
      $this->OrderTypes = $OrderTypes;
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
     * @return \ascio\v3\GetPricesRequest
     */
    public function setTlds($Tlds)
    {
      $this->Tlds = $Tlds;
      return $this;
    }

    /**
     * @return string
     */
    public function getTldCountryCode()
    {
      return $this->TldCountryCode;
    }

    /**
     * @param string $TldCountryCode
     * @return \ascio\v3\GetPricesRequest
     */
    public function setTldCountryCode($TldCountryCode)
    {
      $this->TldCountryCode = $TldCountryCode;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPeriods()
    {
      return $this->Periods;
    }

    /**
     * @param ArrayOfint $Periods
     * @return \ascio\v3\GetPricesRequest
     */
    public function setPeriods($Periods)
    {
      $this->Periods = $Periods;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getProductOptions()
    {
      return $this->ProductOptions;
    }

    /**
     * @param ArrayOfstring $ProductOptions
     * @return \ascio\v3\GetPricesRequest
     */
    public function setProductOptions($ProductOptions)
    {
      $this->ProductOptions = $ProductOptions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultPeriodsOnly()
    {
      return $this->DefaultPeriodsOnly;
    }

    /**
     * @param boolean $DefaultPeriodsOnly
     * @return \ascio\v3\GetPricesRequest
     */
    public function setDefaultPeriodsOnly($DefaultPeriodsOnly)
    {
      $this->DefaultPeriodsOnly = $DefaultPeriodsOnly;
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
     * @return \ascio\v3\GetPricesRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
