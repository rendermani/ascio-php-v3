<?php

namespace ascio\v3;

class CreateSubUserRequest
{

    /**
     * @var User $SubUser
     */
    protected $SubUser = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    
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
     * @return \ascio\v3\CreateSubUserRequest
     */
    public function setSubUser($SubUser)
    {
      $this->SubUser = $SubUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \ascio\v3\CreateSubUserRequest
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
