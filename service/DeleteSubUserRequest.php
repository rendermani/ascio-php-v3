<?php

namespace ascio\v3;

class DeleteSubUserRequest
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @param string $UserName
     */
    public function __construct($UserName)
    {
      $this->UserName = $UserName;
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
     * @return \ascio\v3\DeleteSubUserRequest
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
