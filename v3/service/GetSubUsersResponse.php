<?php

namespace ascio\v3;

class GetSubUsersResponse extends AbstractResponse
{

    /**
     * @var ArrayOfUsers $SubUsers
     */
    protected $SubUsers = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfUsers
     */
    public function getSubUsers()
    {
      return $this->SubUsers;
    }

    /**
     * @param ArrayOfUsers $SubUsers
     * @return \ascio\v3\GetSubUsersResponse
     */
    public function setSubUsers($SubUsers)
    {
      $this->SubUsers = $SubUsers;
      return $this;
    }

}
