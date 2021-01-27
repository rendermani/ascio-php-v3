<?php

namespace ascio\v3;

class ArrayOfMarkInfo
{

    /**
     * @var MarkInfo[] $MarkInfo
     */
    protected $MarkInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MarkInfo[]
     */
    public function getMarkInfo()
    {
      return $this->MarkInfo;
    }

    /**
     * @param MarkInfo[] $MarkInfo
     * @return \ascio\v3\ArrayOfMarkInfo
     */
    public function setMarkInfo(array $MarkInfo)
    {
      $this->MarkInfo = $MarkInfo;
      return $this;
    }

}
