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
