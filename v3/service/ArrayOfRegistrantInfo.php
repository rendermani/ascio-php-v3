<?php

namespace ascio\v3;

class ArrayOfRegistrantInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RegistrantInfo[] $RegistrantInfo
     */
    protected $RegistrantInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RegistrantInfo[]
     */
    public function getRegistrantInfo()
    {
      return $this->RegistrantInfo;
    }

    /**
     * @param RegistrantInfo[] $RegistrantInfo
     * @return \ascio\v3\ArrayOfRegistrantInfo
     */
    public function setRegistrantInfo(array $RegistrantInfo = null)
    {
      $this->RegistrantInfo = $RegistrantInfo;
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
      return isset($this->RegistrantInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RegistrantInfo
     */
    public function offsetGet($offset)
    {
      return $this->RegistrantInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RegistrantInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RegistrantInfo[] = $value;
      } else {
        $this->RegistrantInfo[$offset] = $value;
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
      unset($this->RegistrantInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RegistrantInfo Return the current element
     */
    public function current()
    {
      return current($this->RegistrantInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RegistrantInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RegistrantInfo);
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
      reset($this->RegistrantInfo);
    }

    /**
     * Countable implementation
     *
     * @return RegistrantInfo Return count of elements
     */
    public function count()
    {
      return count($this->RegistrantInfo);
    }

}
