<?php

namespace ascio\v3;

class ArrayOfMarkInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MarkInfo[] $MarkInfo
     */
    protected $MarkInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MarkInfo[]
     */
    public function getMarkInfo()
    {
      return $this->MarkInfo;
    }

    /**
     * @param MarkInfo[] $MarkInfo
     * @return \ascio\v3\ArrayOfMarkInfo
     */
    public function setMarkInfo(array $MarkInfo = null)
    {
      $this->MarkInfo = $MarkInfo;
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
      return isset($this->MarkInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MarkInfo
     */
    public function offsetGet($offset)
    {
      return $this->MarkInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MarkInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MarkInfo[] = $value;
      } else {
        $this->MarkInfo[$offset] = $value;
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
      unset($this->MarkInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MarkInfo Return the current element
     */
    public function current()
    {
      return current($this->MarkInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MarkInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MarkInfo);
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
      reset($this->MarkInfo);
    }

    /**
     * Countable implementation
     *
     * @return MarkInfo Return count of elements
     */
    public function count()
    {
      return count($this->MarkInfo);
    }

}
