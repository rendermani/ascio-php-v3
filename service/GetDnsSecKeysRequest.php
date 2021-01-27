<?php

namespace ascio\v3;

class GetDnsSecKeysRequest
{

    /**
     * @var string $Handle
     */
    protected $Handle = null;

    /**
     * @var string $DigestAlgorithm
     */
    protected $DigestAlgorithm = null;

    /**
     * @var string $DigestType
     */
    protected $DigestType = null;

    /**
     * @var string $Digest
     */
    protected $Digest = null;

    /**
     * @var string $Protocol
     */
    protected $Protocol = null;

    /**
     * @var string $KeyType
     */
    protected $KeyType = null;

    /**
     * @var string $KeyAlgorithm
     */
    protected $KeyAlgorithm = null;

    /**
     * @var string $KeyTag
     */
    protected $KeyTag = null;

    /**
     * @var string $PublicKey
     */
    protected $PublicKey = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $CreationFromDate
     */
    protected $CreationFromDate = null;

    /**
     * @var \DateTime $CreationToDate
     */
    protected $CreationToDate = null;

    /**
     * @var DnsSecKeySortType $OrderSort
     */
    protected $OrderSort = null;

    /**
     * @var PagingInfo $PageInfo
     */
    protected $PageInfo = null;

    /**
     * @param DnsSecKeySortType $OrderSort
     */
    public function __construct($OrderSort)
    {
      $this->OrderSort = $OrderSort;
    }

    /**
     * @return string
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param string $Handle
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getDigestAlgorithm()
    {
      return $this->DigestAlgorithm;
    }

    /**
     * @param string $DigestAlgorithm
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setDigestAlgorithm($DigestAlgorithm)
    {
      $this->DigestAlgorithm = $DigestAlgorithm;
      return $this;
    }

    /**
     * @return string
     */
    public function getDigestType()
    {
      return $this->DigestType;
    }

    /**
     * @param string $DigestType
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setDigestType($DigestType)
    {
      $this->DigestType = $DigestType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDigest()
    {
      return $this->Digest;
    }

    /**
     * @param string $Digest
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setDigest($Digest)
    {
      $this->Digest = $Digest;
      return $this;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
      return $this->Protocol;
    }

    /**
     * @param string $Protocol
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setProtocol($Protocol)
    {
      $this->Protocol = $Protocol;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyType()
    {
      return $this->KeyType;
    }

    /**
     * @param string $KeyType
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setKeyType($KeyType)
    {
      $this->KeyType = $KeyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyAlgorithm()
    {
      return $this->KeyAlgorithm;
    }

    /**
     * @param string $KeyAlgorithm
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setKeyAlgorithm($KeyAlgorithm)
    {
      $this->KeyAlgorithm = $KeyAlgorithm;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyTag()
    {
      return $this->KeyTag;
    }

    /**
     * @param string $KeyTag
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setKeyTag($KeyTag)
    {
      $this->KeyTag = $KeyTag;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublicKey()
    {
      return $this->PublicKey;
    }

    /**
     * @param string $PublicKey
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setPublicKey($PublicKey)
    {
      $this->PublicKey = $PublicKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationFromDate()
    {
      if ($this->CreationFromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationFromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationFromDate
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setCreationFromDate(\DateTime $CreationFromDate)
    {
      $this->CreationFromDate = $CreationFromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationToDate()
    {
      if ($this->CreationToDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationToDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationToDate
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setCreationToDate(\DateTime $CreationToDate)
    {
      $this->CreationToDate = $CreationToDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return DnsSecKeySortType
     */
    public function getOrderSort()
    {
      return $this->OrderSort;
    }

    /**
     * @param DnsSecKeySortType $OrderSort
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setOrderSort($OrderSort)
    {
      $this->OrderSort = $OrderSort;
      return $this;
    }

    /**
     * @return PagingInfo
     */
    public function getPageInfo()
    {
      return $this->PageInfo;
    }

    /**
     * @param PagingInfo $PageInfo
     * @return \ascio\v3\GetDnsSecKeysRequest
     */
    public function setPageInfo($PageInfo)
    {
      $this->PageInfo = $PageInfo;
      return $this;
    }

}
