<?php

namespace ascio\v3;

class ArrayOfContactInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContactInfo[] $ContactInfo
     */
    protected $ContactInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContactInfo[]
     */
    public function getContactInfo()
    {
      return $this->ContactInfo;
    }

    /**
     * @param ContactInfo[] $ContactInfo
     * @return \ascio\v3\ArrayOfContactInfo
     */
    public function setContactInfo(array $ContactInfo = null)
    {
      $this->ContactInfo = $ContactInfo;
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
      return isset($this->ContactInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContactInfo
     */
    public function offsetGet($offset)
    {
      return $this->ContactInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContactInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContactInfo[] = $value;
      } else {
        $this->ContactInfo[$offset] = $value;
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
      unset($this->ContactInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContactInfo Return the current element
     */
    public function current()
    {
      return current($this->ContactInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContactInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContactInfo);
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
      reset($this->ContactInfo);
    }

    /**
     * Countable implementation
     *
     * @return ContactInfo Return count of elements
     */
    public function count()
    {
      return count($this->ContactInfo);
    }

}
