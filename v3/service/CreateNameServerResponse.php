<?php

namespace ascio\v3;

class CreateNameServerResponse extends AbstractResponse
{

    /**
     * @var NameServer $NameServer
     */
    protected $NameServer = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \ascio\v3\CreateNameServerResponse
     */
    public function setNameServer($NameServer)
    {
      $this->NameServer = $NameServer;
      return $this;
    }

}
