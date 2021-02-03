<?php

namespace ascio\v3;

class ArrayOfSalesLines implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SalesLine[] $SalesLine
     */
    protected $SalesLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SalesLine[]
     */
    public function getSalesLine()
    {
      return $this->SalesLine;
    }

    /**
     * @param SalesLine[] $SalesLine
     * @return \ascio\v3\ArrayOfSalesLines
     */
    public function setSalesLine(array $SalesLine = null)
    {
      $this->SalesLine = $SalesLine;
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
      return isset($this->SalesLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SalesLine
     */
    public function offsetGet($offset)
    {
      return $this->SalesLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SalesLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SalesLine[] = $value;
      } else {
        $this->SalesLine[$offset] = $value;
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
      unset($this->SalesLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SalesLine Return the current element
     */
    public function current()
    {
      return current($this->SalesLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SalesLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SalesLine);
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
      reset($this->SalesLine);
    }

    /**
     * Countable implementation
     *
     * @return SalesLine Return count of elements
     */
    public function count()
    {
      return count($this->SalesLine);
    }

}
