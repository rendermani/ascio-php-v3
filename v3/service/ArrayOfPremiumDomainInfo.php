<?php

namespace ascio\v3;

class ArrayOfPremiumDomainInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DomainInfo[] $PremiumDomainInfo
     */
    protected $PremiumDomainInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DomainInfo[]
     */
    public function getPremiumDomainInfo()
    {
      return $this->PremiumDomainInfo;
    }

    /**
     * @param DomainInfo[] $PremiumDomainInfo
     * @return \ascio\v3\ArrayOfPremiumDomainInfo
     */
    public function setPremiumDomainInfo(array $PremiumDomainInfo = null)
    {
      $this->PremiumDomainInfo = $PremiumDomainInfo;
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
      return isset($this->PremiumDomainInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DomainInfo
     */
    public function offsetGet($offset)
    {
      return $this->PremiumDomainInfo[$offset];
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
        $this->PremiumDomainInfo[] = $value;
      } else {
        $this->PremiumDomainInfo[$offset] = $value;
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
      unset($this->PremiumDomainInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DomainInfo Return the current element
     */
    public function current()
    {
      return current($this->PremiumDomainInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PremiumDomainInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PremiumDomainInfo);
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
      reset($this->PremiumDomainInfo);
    }

    /**
     * Countable implementation
     *
     * @return DomainInfo Return count of elements
     */
    public function count()
    {
      return count($this->PremiumDomainInfo);
    }

}
