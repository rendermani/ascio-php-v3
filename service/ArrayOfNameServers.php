<?php

namespace ascio\v3;

class ArrayOfNameServers
{

    /**
     * @var NameServer[] $NameServer
     */
    protected $NameServer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NameServer[]
     */
    public function getNameServer()
    {
      return $this->NameServer;
    }

    /**
     * @param NameServer[] $NameServer
     * @return \ascio\v3\ArrayOfNameServers
     */
    public function setNameServer(array $NameServer)
    {
      $this->NameServer = $NameServer;
      return $this;
    }

}
