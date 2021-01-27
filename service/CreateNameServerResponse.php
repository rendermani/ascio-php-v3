<?php

namespace ascio\v3;

class CreateNameServerResponse extends AbstractResponse
{

    /**
     * @var NameServer $NameServer
     */
    protected $NameServer = null;

    /**
     * @param int $ResultCode
     * @param NameServer $NameServer
     */
    public function __construct($ResultCode, $NameServer)
    {
      parent::__construct($ResultCode);
      $this->NameServer = $NameServer;
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
