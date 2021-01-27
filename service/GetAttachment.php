<?php

namespace ascio\v3;

class GetAttachment
{

    /**
     * @var GetAttachmentRequest $request
     */
    protected $request = null;

    /**
     * @param GetAttachmentRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetAttachmentRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetAttachmentRequest $request
     * @return \ascio\v3\GetAttachment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
