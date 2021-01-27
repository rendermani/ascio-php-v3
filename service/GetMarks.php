<?php

namespace ascio\v3;

class GetMarks
{

    /**
     * @var GetMarksRequest $request
     */
    protected $request = null;

    /**
     * @param GetMarksRequest $request
     */
    public function __construct($request)
    {
      $this->request = $request;
    }

    /**
     * @return GetMarksRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param GetMarksRequest $request
     * @return \ascio\v3\GetMarks
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
