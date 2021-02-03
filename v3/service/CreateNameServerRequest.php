<?php

namespace ascio\v3;

class CreateNameServerRequest
{

    /**
     * @var NameServer $NameServer
     */
    protected $NameServer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NameServer
     */
    public function getNameServer()
    {
      return $this->NameServer;
    }

    /**
     * @param NameServer $NameServer
     * @return \ascio\v3\CreateNameServerRequest
     */
    public function setNameServer($NameServer)
    {
      $this->NameServer = $NameServer;
      return $this;
    }

}
