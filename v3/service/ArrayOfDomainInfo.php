<?php

namespace ascio\v3;

class ArrayOfDomainInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainInfo[] $DomainInfo
     */
    protected $DomainInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainInfo[]
     */
    public function getDomainInfo()
    {
      return $this->DomainInfo;
    }

    /**
     * @param DomainInfo[] $DomainInfo
     * @return \ascio\v3\ArrayOfDomainInfo
     */
    public function setDomainInfo(array $DomainInfo = null)
    {
      $this->DomainInfo = $DomainInfo;
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
      return isset($this->DomainInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainInfo
     */
    public function offsetGet($offset)
    {
      return $this->DomainInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DomainInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DomainInfo[] = $value;
      } else {
        $this->DomainInfo[$offset] = $value;
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
      unset($this->DomainInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainInfo Return the current element
     */
    public function current()
    {
      return current($this->DomainInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DomainInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DomainInfo);
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
      reset($this->DomainInfo);
    }

    /**
     * Countable implementation
     *
     * @return DomainInfo Return count of elements
     */
    public function count()
    {
      return count($this->DomainInfo);
    }

}
