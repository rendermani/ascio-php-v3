<?php

namespace ascio\v3;

class ArrayOfOrderHistory
{

    /**
     * @var OrderHistory[] $OrderHistory
     */
    protected $OrderHistory = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderHistory[]
     */
    public function getOrderHistory()
    {
      return $this->OrderHistory;
    }

    /**
     * @param OrderHistory[] $OrderHistory
     * @return \ascio\v3\ArrayOfOrderHistory
     */
    public function setOrderHistory(array $OrderHistory)
    {
      $this->OrderHistory = $OrderHistory;
      return $this;
    }

}
