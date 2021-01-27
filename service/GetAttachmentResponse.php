<?php

namespace ascio\v3;

class GetAttachmentResponse extends AbstractResponse
{

    /**
     * @var Attachment $Attachment
     */
    protected $Attachment = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
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
