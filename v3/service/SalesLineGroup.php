<?php

namespace ascio\v3;

class SalesLineGroup
{

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var float $Sum
     */
    protected $Sum = null;

    /**
     * @var int $Units
     */
    protected $Units = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \ascio\v3\SalesLineGroup
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return float
     */
    public function getSum()
    {
      return $this->Sum;
    }

    /**
     * @param float $Sum
     * @return \ascio\v3\SalesLineGroup
     */
    public function setSum($Sum)
    {
      $this->Sum = $Sum;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param int $Units
     * @return \ascio\v3\SalesLineGroup
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

}
