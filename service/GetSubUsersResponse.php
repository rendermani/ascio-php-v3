<?php

namespace ascio\v3;

class GetSubUsersResponse extends AbstractResponse
{

    /**
     * @var ArrayOfUsers $SubUsers
     */
    protected $SubUsers = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
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
