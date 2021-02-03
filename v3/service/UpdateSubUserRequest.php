<?php

namespace ascio\v3;

class UpdateSubUserRequest
{

    /**
     * @var User $SubUser
     */
    protected $SubUser = null;

    
    public function __construct()
    {
    
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
     * @return \ascio\v3\UpdateSubUserRequest
     */
    public function setSubUser($SubUser)
    {
      $this->SubUser = $SubUser;
      return $this;
    }

}
