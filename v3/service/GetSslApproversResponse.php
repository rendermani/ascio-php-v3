<?php

namespace ascio\v3;

class GetSslApproversResponse extends AbstractResponse
{

    /**
     * @var ArrayOfstring $ApproverEmails
     */
    protected $ApproverEmails = null;

    
    public function __construct()
    {
      parent::__construct();
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
