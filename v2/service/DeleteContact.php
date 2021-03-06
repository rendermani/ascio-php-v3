<?php

namespace ascio\v2;

class DeleteContact
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var string $contactHandle
     */
    protected $contactHandle = null;

    /**
     * @param string $sessionId
     * @param string $contactHandle
     */
    public function __construct($sessionId = null, $contactHandle = null)
    {
      $this->sessionId = $sessionId;
      $this->contactHandle = $contactHandle;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \ascio\v2\DeleteContact
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactHandle()
    {
      return $this->contactHandle;
    }

    /**
     * @param string $contactHandle
     * @return \ascio\v2\DeleteContact
     */
    public function setContactHandle($contactHandle)
    {
      $this->contactHandle = $contactHandle;
      return $this;
    }

}
