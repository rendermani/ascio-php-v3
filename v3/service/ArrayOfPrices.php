<?php

namespace ascio\v3;

class ArrayOfPrices implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PriceInfo[] $PriceInfo
     */
    protected $PriceInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceInfo[]
     */
    public function getPriceInfo()
    {
      return $this->PriceInfo;
    }

    /**
     * @param PriceInfo[] $PriceInfo
     * @return \ascio\v3\ArrayOfPrices
     */
    public function setPriceInfo(array $PriceInfo = null)
    {
      $this->PriceInfo = $PriceInfo;
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
      return isset($this->PriceInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PriceInfo
     */
    public function offsetGet($offset)
    {
      return $this->PriceInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PriceInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PriceInfo[] = $value;
      } else {
        $this->PriceInfo[$offset] = $value;
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
      unset($this->PriceInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PriceInfo Return the current element
     */
    public function current()
    {
      return current($this->PriceInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PriceInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PriceInfo);
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
      reset($this->PriceInfo);
    }

    /**
     * Countable implementation
     *
     * @return PriceInfo Return count of elements
     */
    public function count()
    {
      return count($this->PriceInfo);
    }

}
