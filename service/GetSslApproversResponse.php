<?php

namespace ascio\v3;

class GetSslApproversResponse extends AbstractResponse
{

    /**
     * @var ArrayOfstring $ApproverEmails
     */
    protected $ApproverEmails = null;

    /**
     * @param int $ResultCode
     */
    public function __construct($ResultCode)
    {
      parent::__construct($ResultCode);
    }

    /**
     * @return ArrayOfstring
     */
    public function getApproverEmails()
    {
      return $this->ApproverEmails;
    }

    /**
     * @param ArrayOfstring $ApproverEmails
     * @return \ascio\v3\GetSslApproversResponse
     */
    public function setApproverEmails($ApproverEmails)
    {
      $this->ApproverEmails = $ApproverEmails;
      return $this;
    }

}
