<?php

namespace ascio\v3;

class GetSubUserResponse extends AbstractResponse
{

    /**
     * @var UserInfo $SubUser
     */
    protected $SubUser = null;

    /**
     * @var ArrayOfstring $UserRights
     */
    protected $UserRights = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return UserInfo
     */
    public function getSubUser()
    {
      return $this->SubUser;
    }

    /**
     * @param UserInfo $SubUser
     * @return \ascio\v3\GetSubUserResponse
     */
    public function setSubUser($SubUser)
    {
      $this->SubUser = $SubUser;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getUserRights()
    {
      return $this->UserRights;
    }

    /**
     * @param ArrayOfstring $UserRights
     * @return \ascio\v3\GetSubUserResponse
     */
    public function setUserRights($UserRights)
    {
      $this->UserRights = $UserRights;
      return $this;
    }

}
