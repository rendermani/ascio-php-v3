<?php

namespace ascio\v3;

class UpdateSubUserResponse extends AbstractResponse
{

    /**
     * @var User $SubUser
     */
    protected $SubUser = null;

    
    public function __construct()
    {
      parent::__construct();
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
