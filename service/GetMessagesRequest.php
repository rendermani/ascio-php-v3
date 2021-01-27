<?php

namespace ascio\v3;

class GetMessagesRequest
{

    /**
     * @var string $OrderId
     */
    protected $OrderId = null;

    /**
     * @var boolean $IncludeAttachmentContent
     */
    protected $IncludeAttachmentContent = null;

    
    public function __construct()
    {
    
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
     * @return \ascio\v3\GetMessagesRequest
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeAttachmentContent()
    {
      return $this->IncludeAttachmentContent;
    }

    /**
     * @param boolean $IncludeAttachmentContent
     * @return \ascio\v3\GetMessagesRequest
     */
    public function setIncludeAttachmentContent($IncludeAttachmentContent)
    {
      $this->IncludeAttachmentContent = $IncludeAttachmentContent;
      return $this;
    }

}
