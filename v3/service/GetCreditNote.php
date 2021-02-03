<?php

namespace ascio\v3;

class GetCreditNote
{

    /**
     * @var GetCreditNoteRequest $request
     */
    protected $request = null;

    /**
     * @param GetCreditNoteRequest $request
     */
    public function __construct($request = null)
    {
      $this->request = $request;
    }

    /**
     * @return GetCreditNoteRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetCreditNoteRequest $request
     * @return \ascio\v3\GetCreditNote
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
