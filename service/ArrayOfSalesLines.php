<?php

namespace ascio\v3;

class ArrayOfSalesLines
{

    /**
     * @var SalesLine[] $SalesLine
     */
    protected $SalesLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesLine[]
     */
    public function getSalesLine()
    {
      return $this->SalesLine;
    }

    /**
     * @param SalesLine[] $SalesLine
     * @return \ascio\v3\ArrayOfSalesLines
     */
    public function setSalesLine(array $SalesLine)
    {
      $this->SalesLine = $SalesLine;
      return $this;
    }

}
