<?php

namespace ascio\v3;

class GetMarksRequest
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
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $MarkType
     */
    protected $MarkType = null;

    /**
     * @var string $ObjectComment
     */
    protected $ObjectComment = null;

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
     * @var MarkSortType $OrderSort
     */
    protected $OrderSort = null;

    /**
     * @var PagingInfo $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param MarkSortType $OrderSort
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
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
     */
    public function setHandles($Handles)
    {
      $this->Handles = $Handles;
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
     * @return \ascio\v3\GetMarksRequest
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarkType()
    {
      return $this->MarkType;
    }

    /**
     * @param string $MarkType
     * @return \ascio\v3\GetMarksRequest
     */
    public function setMarkType($MarkType)
    {
      $this->MarkType = $MarkType;
      return $this;
    }

    /**
     * @return string
     */
    public function getObjectComment()
    {
      return $this->ObjectComment;
    }

    /**
     * @param string $ObjectComment
     * @return \ascio\v3\GetMarksRequest
     */
    public function setObjectComment($ObjectComment)
    {
      $this->ObjectComment = $ObjectComment;
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
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
     */
    public function setOwnerEmail($OwnerEmail)
    {
      $this->OwnerEmail = $OwnerEmail;
      return $this;
    }

    /**
     * @return MarkSortType
     */
    public function getOrderSort()
    {
      return $this->OrderSort;
    }

    /**
     * @param MarkSortType $OrderSort
     * @return \ascio\v3\GetMarksRequest
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
     * @return \ascio\v3\GetMarksRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
