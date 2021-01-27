<?php

namespace ascio\v3;

class GetRegistrantsResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfRegistrantInfo $RegistrantInfos
     */
    protected $RegistrantInfos = null;

    /**
     * @param int $ResultCode
     * @param int $TotalCount
     */
    public function __construct($ResultCode, $TotalCount)
    {
      parent::__construct($ResultCode);
      $this->TotalCount = $TotalCount;
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
     * @return \ascio\v3\GetRegistrantsResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfRegistrantInfo
     */
    public function getRegistrantInfos()
    {
      return $this->RegistrantInfos;
    }

    /**
     * @param ArrayOfRegistrantInfo $RegistrantInfos
     * @return \ascio\v3\GetRegistrantsResponse
     */
    public function setRegistrantInfos($RegistrantInfos)
    {
      $this->RegistrantInfos = $RegistrantInfos;
      return $this;
    }

}
