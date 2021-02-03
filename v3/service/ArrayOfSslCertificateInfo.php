<?php

namespace ascio\v3;

class ArrayOfSslCertificateInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SslCertificateInfo[] $SslCertificateInfo
     */
    protected $SslCertificateInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SslCertificateInfo[]
     */
    public function getSslCertificateInfo()
    {
      return $this->SslCertificateInfo;
    }

    /**
     * @param SslCertificateInfo[] $SslCertificateInfo
     * @return \ascio\v3\ArrayOfSslCertificateInfo
     */
    public function setSslCertificateInfo(array $SslCertificateInfo = null)
    {
      $this->SslCertificateInfo = $SslCertificateInfo;
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
      return isset($this->SslCertificateInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SslCertificateInfo
     */
    public function offsetGet($offset)
    {
      return $this->SslCertificateInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SslCertificateInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SslCertificateInfo[] = $value;
      } else {
        $this->SslCertificateInfo[$offset] = $value;
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
      unset($this->SslCertificateInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SslCertificateInfo Return the current element
     */
    public function current()
    {
      return current($this->SslCertificateInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SslCertificateInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SslCertificateInfo);
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
      reset($this->SslCertificateInfo);
    }

    /**
     * Countable implementation
     *
     * @return SslCertificateInfo Return count of elements
     */
    public function count()
    {
      return count($this->SslCertificateInfo);
    }

}
