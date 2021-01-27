<?php

namespace ascio\v3;

class GetNameServersResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfNameServers $NameServers
     */
    protected $NameServers = null;

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
     * @return \ascio\v3\GetNameServersResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfNameServers
     */
    public function getNameServers()
    {
      return $this->NameServers;
    }

    /**
     * @param ArrayOfNameServers $NameServers
     * @return \ascio\v3\GetNameServersResponse
     */
    public function setNameServers($NameServers)
    {
      $this->NameServers = $NameServers;
      return $this;
    }

}
