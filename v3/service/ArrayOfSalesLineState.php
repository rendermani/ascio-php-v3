<?php

namespace ascio\v3;

class ArrayOfSalesLineState implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesLineState[] $SalesLineState
     */
    protected $SalesLineState = null;

    
    public function __construct()
    {
    
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
    public function setSalesLineState(array $SalesLineState = null)
    {
      $this->SalesLineState = $SalesLineState;
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
      return isset($this->SalesLineState[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesLineState
     */
    public function offsetGet($offset)
    {
      return $this->SalesLineState[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesLineState $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SalesLineState[] = $value;
      } else {
        $this->SalesLineState[$offset] = $value;
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
      unset($this->SalesLineState[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesLineState Return the current element
     */
    public function current()
    {
      return current($this->SalesLineState);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesLineState);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesLineState);
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
      reset($this->SalesLineState);
    }

    /**
     * Countable implementation
     *
     * @return SalesLineState Return count of elements
     */
    public function count()
    {
      return count($this->SalesLineState);
    }

}
