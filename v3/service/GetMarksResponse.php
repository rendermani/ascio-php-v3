<?php

namespace ascio\v3;

class GetMarksResponse extends AbstractResponse
{

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @var ArrayOfMarkInfo $MarkInfos
     */
    protected $MarkInfos = null;

    
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
     * @return \ascio\v3\GetMarksResponse
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

    /**
     * @return ArrayOfMarkInfo
     */
    public function getMarkInfos()
    {
      return $this->MarkInfos;
    }

    /**
     * @param ArrayOfMarkInfo $MarkInfos
     * @return \ascio\v3\GetMarksResponse
     */
    public function setMarkInfos($MarkInfos)
    {
      $this->MarkInfos = $MarkInfos;
      return $this;
    }

}
