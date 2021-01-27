<?php

namespace ascio\v3;

class OrderHistory
{

    /**
     * @var OrderStatusType $State
     */
    protected $State = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderStatusType
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param OrderStatusType $State
     * @return \ascio\v3\OrderHistory
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \ascio\v3\OrderHistory
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

}
