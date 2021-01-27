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

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
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
