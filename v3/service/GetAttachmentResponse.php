<?php

namespace ascio\v3;

class GetAttachmentResponse extends AbstractResponse
{

    /**
     * @var Attachment $Attachment
     */
    protected $Attachment = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Attachment
     */
    public function getAttachment()
    {
      return $this->Attachment;
    }

    /**
     * @param Attachment $Attachment
     * @return \ascio\v3\GetAttachmentResponse
     */
    public function setAttachment($Attachment)
    {
      $this->Attachment = $Attachment;
      return $this;
    }

}
