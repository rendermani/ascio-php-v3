<?php

namespace ascio\v3;

class GetSubUserRequest
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \ascio\v3\GetSubUserRequest
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
