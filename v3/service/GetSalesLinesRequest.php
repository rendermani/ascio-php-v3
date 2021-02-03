<?php

namespace ascio\v3;

class GetSalesLinesRequest
{

    /**
     * @var string $ObjectName
     */
    protected $ObjectName = null;

    /**
     * @var string $ObjectHandle
     */
    protected $ObjectHandle = null;

    /**
     * @var ObjectType $ObjectType
     */
    protected $ObjectType = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var \DateTime $ToDate
     */
    protected $ToDate = null;

    /**
     * @var ArrayOfSalesLineState $SalesLineStates
     */
    protected $SalesLineStates = null;

    /**
     * @var InvoiceState $InvoiceState
     */
    protected $InvoiceState = null;

    /**
     * @var int $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @var int $CreditNo
     */
    protected $CreditNo = null;

    /**
     * @var SalesLineSortType $OrderBy
     */
    protected $OrderBy = null;

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
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setObjectName($ObjectName)
    {
      $this->ObjectName = $ObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectHandle()
    {
      return $this->ObjectHandle;
    }

    /**
     * @param string $ObjectHandle
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setObjectHandle($ObjectHandle)
    {
      $this->ObjectHandle = $ObjectHandle;
      return $this;
    }

    /**
     * @return ObjectType
     */
    public function getObjectType()
    {
      return $this->ObjectType;
    }

    /**
     * @param ObjectType $ObjectType
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setObjectType($ObjectType)
    {
      $this->ObjectType = $ObjectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setFromDate(\DateTime $FromDate = null)
    {
      if ($FromDate == null) {
       $this->FromDate = null;
      } else {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getToDate()
    {
      if ($this->ToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ToDate
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setToDate(\DateTime $ToDate = null)
    {
      if ($ToDate == null) {
       $this->ToDate = null;
      } else {
        $this->ToDate = $ToDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfSalesLineState
     */
    public function getSalesLineStates()
    {
      return $this->SalesLineStates;
    }

    /**
     * @param ArrayOfSalesLineState $SalesLineStates
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setSalesLineStates($SalesLineStates)
    {
      $this->SalesLineStates = $SalesLineStates;
      return $this;
    }

    /**
     * @return InvoiceState
     */
    public function getInvoiceState()
    {
      return $this->InvoiceState;
    }

    /**
     * @param InvoiceState $InvoiceState
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setInvoiceState($InvoiceState)
    {
      $this->InvoiceState = $InvoiceState;
      return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceNo()
    {
      return $this->InvoiceNo;
    }

    /**
     * @param int $InvoiceNo
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreditNo()
    {
      return $this->CreditNo;
    }

    /**
     * @param int $CreditNo
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setCreditNo($CreditNo)
    {
      $this->CreditNo = $CreditNo;
      return $this;
    }

    /**
     * @return SalesLineSortType
     */
    public function getOrderBy()
    {
      return $this->OrderBy;
    }

    /**
     * @param SalesLineSortType $OrderBy
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setOrderBy($OrderBy)
    {
      $this->OrderBy = $OrderBy;
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
     * @return \ascio\v3\GetSalesLinesRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
