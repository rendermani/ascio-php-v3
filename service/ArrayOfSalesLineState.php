<?php

namespace ascio\v3;

class ArrayOfSalesLineState
{

    /**
     * @var SalesLineState[] $SalesLineState
     */
    protected $SalesLineState = null;

    /**
     * @param SalesLineState[] $SalesLineState
     */
    public function __construct(array $SalesLineState)
    {
      $this->SalesLineState = $SalesLineState;
    }

    /**
     * @return SalesLineState[]
     */
    public function getSalesLineState()
    {
      return $this->SalesLineState;
    }

    /**
     * @param SalesLineState[] $SalesLineState
     * @return \ascio\v3\ArrayOfSalesLineState
     */
    public function setSalesLineState(array $SalesLineState)
    {
      $this->SalesLineState = $SalesLineState;
      return $this;
    }

}
