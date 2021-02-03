<?php

namespace ascio\v3;

class ArrayOfOrderHistory implements \ArrayAccess, \Iterator, \Countable
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
    public function setOrderHistory(array $OrderHistory = null)
    {
      $this->OrderHistory = $OrderHistory;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->OrderHistory[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderHistory
     */
    public function offsetGet($offset)
    {
      return $this->OrderHistory[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderHistory $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OrderHistory[] = $value;
      } else {
        $this->OrderHistory[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderHistory[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderHistory Return the current element
     */
    public function current()
    {
      return current($this->OrderHistory);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderHistory);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderHistory);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->OrderHistory);
    }

    /**
     * Countable implementation
     *
     * @return OrderHistory Return count of elements
     */
    public function count()
    {
      return count($this->OrderHistory);
    }

}
