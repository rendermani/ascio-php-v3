<?php

namespace ascio\v3;

class ArrayOfSalesLineGroups
{

    /**
     * @var SalesLineGroup[] $SalesLineGroup
     */
    protected $SalesLineGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesLineGroup[]
     */
    public function getSalesLineGroup()
    {
      return $this->SalesLineGroup;
    }

    /**
     * @param SalesLineGroup[] $SalesLineGroup
     * @return \ascio\v3\ArrayOfSalesLineGroups
     */
    public function setSalesLineGroup(array $SalesLineGroup)
    {
      $this->SalesLineGroup = $SalesLineGroup;
      return $this;
    }

}
