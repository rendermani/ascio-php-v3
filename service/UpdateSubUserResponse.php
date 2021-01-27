<?php

namespace ascio\v3;

class UpdateSubUserResponse extends AbstractResponse
{

    /**
     * @var User $SubUser
     */
    protected $SubUser = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
    }

    /**
     * @return User
     */
    public function getSubUser()
    {
      return $this->SubUser;
    }

    /**
     * @param User $SubUser
     * @return \ascio\v3\UpdateSubUserResponse
     */
    public function setSubUser($SubUser)
    {
      $this->SubUser = $SubUser;
      return $this;
    }

}
