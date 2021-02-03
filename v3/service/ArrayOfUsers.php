<?php

namespace ascio\v3;

class ArrayOfUsers implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UserInfo[] $UserInfo
     */
    protected $UserInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserInfo[]
     */
    public function getUserInfo()
    {
      return $this->UserInfo;
    }

    /**
     * @param UserInfo[] $UserInfo
     * @return \ascio\v3\ArrayOfUsers
     */
    public function setUserInfo(array $UserInfo = null)
    {
      $this->UserInfo = $UserInfo;
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
      return isset($this->UserInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UserInfo
     */
    public function offsetGet($offset)
    {
      return $this->UserInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UserInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UserInfo[] = $value;
      } else {
        $this->UserInfo[$offset] = $value;
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
      unset($this->UserInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserInfo Return the current element
     */
    public function current()
    {
      return current($this->UserInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UserInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UserInfo);
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
      reset($this->UserInfo);
    }

    /**
     * Countable implementation
     *
     * @return UserInfo Return count of elements
     */
    public function count()
    {
      return count($this->UserInfo);
    }

}
