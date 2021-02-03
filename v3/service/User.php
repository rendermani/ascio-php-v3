<?php

namespace ascio\v3;

class User
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var ArrayOfstring $UserRights
     */
    protected $UserRights = null;

    
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
     * @return \ascio\v3\User
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ascio\v3\User
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \ascio\v3\User
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return \ascio\v3\User
     */
    public function setUserRights($UserRights)
    {
      $this->UserRights = $UserRights;
      return $this;
    }

}
