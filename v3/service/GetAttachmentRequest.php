<?php

namespace ascio\v3;

class GetAttachmentRequest
{

    /**
     * @var int $AttachmentId
     */
    protected $AttachmentId = null;

    /**
     * @var string $OrderId
     */
    protected $OrderId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAttachmentId()
    {
      return $this->AttachmentId;
    }

    /**
     * @param int $AttachmentId
     * @return \ascio\v3\GetAttachmentRequest
     */
    public function setAttachmentId($AttachmentId)
    {
      $this->AttachmentId = $AttachmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param string $OrderId
     * @return \ascio\v3\GetAttachmentRequest
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

}
