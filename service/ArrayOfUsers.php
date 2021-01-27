<?php

namespace ascio\v3;

class ArrayOfUsers
{

    /**
     * @var UserInfo[] $UserInfo
     */
    protected $UserInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserInfo[]
     */
    public function getUserInfo()
    {
      return $this->UserInfo;
    }

    /**
     * @param UserInfo[] $UserInfo
     * @return \ascio\v3\ArrayOfUsers
     */
    public function setUserInfo(array $UserInfo)
    {
      $this->UserInfo = $UserInfo;
      return $this;
    }

}
