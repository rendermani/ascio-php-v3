<?php

namespace ascio\v3;

class PremiumDomainInfo
{

    /**
     * @var string $DomainName
     */
    protected $DomainName = null;

    /**
     * @var string $DomainHandle
     */
    protected $DomainHandle = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $Created
     */
    protected $Created = null;

    /**
     * @var \DateTime $Expires
     */
    protected $Expires = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $RegistrationPrice
     */
    protected $RegistrationPrice = null;

    /**
     * @var int $RegistrationPeriod
     */
    protected $RegistrationPeriod = null;

    /**
     * @var float $RenewalPrice
     */
    protected $RenewalPrice = null;

    /**
     * @var int $RenewPeriod
     */
    protected $RenewPeriod = null;

    /**
     * @var float $ExplicitRenewalPrice
     */
    protected $ExplicitRenewalPrice = null;

    /**
     * @var int $ExplicitRenewPeriod
     */
    protected $ExplicitRenewPeriod = null;

    /**
     * @var float $TransferPrice
     */
    protected $TransferPrice = null;

    /**
     * @var int $TransferPeriod
     */
    protected $TransferPeriod = null;

    /**
     * @var float $RestorePrice
     */
    protected $RestorePrice = null;

    /**
     * @var int $RestorePeriod
     */
    protected $RestorePeriod = null;

    /**
     * @var boolean $RenewsAtStandardPrice
     */
    protected $RenewsAtStandardPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
      return $this->DomainName;
    }

    /**
     * @param string $DomainName
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setDomainName($DomainName)
    {
      $this->DomainName = $DomainName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomainHandle()
    {
      return $this->DomainHandle;
    }

    /**
     * @param string $DomainHandle
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setDomainHandle($DomainHandle)
    {
      $this->DomainHandle = $DomainHandle;
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
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
      if ($this->Created == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Created);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Created
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setCreated(\DateTime $Created = null)
    {
      if ($Created == null) {
       $this->Created = null;
      } else {
        $this->Created = $Created->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpires()
    {
      if ($this->Expires == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Expires);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Expires
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setExpires(\DateTime $Expires = null)
    {
      if ($Expires == null) {
       $this->Expires = null;
      } else {
        $this->Expires = $Expires->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegistrationPrice()
    {
      return $this->RegistrationPrice;
    }

    /**
     * @param float $RegistrationPrice
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setRegistrationPrice($RegistrationPrice)
    {
      $this->RegistrationPrice = $RegistrationPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getRegistrationPeriod()
    {
      return $this->RegistrationPeriod;
    }

    /**
     * @param int $RegistrationPeriod
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setRegistrationPeriod($RegistrationPeriod)
    {
      $this->RegistrationPeriod = $RegistrationPeriod;
      return $this;
    }

    /**
     * @return float
     */
    public function getRenewalPrice()
    {
      return $this->RenewalPrice;
    }

    /**
     * @param float $RenewalPrice
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setRenewalPrice($RenewalPrice)
    {
      $this->RenewalPrice = $RenewalPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getRenewPeriod()
    {
      return $this->RenewPeriod;
    }

    /**
     * @param int $RenewPeriod
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setRenewPeriod($RenewPeriod)
    {
      $this->RenewPeriod = $RenewPeriod;
      return $this;
    }

    /**
     * @return float
     */
    public function getExplicitRenewalPrice()
    {
      return $this->ExplicitRenewalPrice;
    }

    /**
     * @param float $ExplicitRenewalPrice
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setExplicitRenewalPrice($ExplicitRenewalPrice)
    {
      $this->ExplicitRenewalPrice = $ExplicitRenewalPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getExplicitRenewPeriod()
    {
      return $this->ExplicitRenewPeriod;
    }

    /**
     * @param int $ExplicitRenewPeriod
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setExplicitRenewPeriod($ExplicitRenewPeriod)
    {
      $this->ExplicitRenewPeriod = $ExplicitRenewPeriod;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransferPrice()
    {
      return $this->TransferPrice;
    }

    /**
     * @param float $TransferPrice
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setTransferPrice($TransferPrice)
    {
      $this->TransferPrice = $TransferPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransferPeriod()
    {
      return $this->TransferPeriod;
    }

    /**
     * @param int $TransferPeriod
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setTransferPeriod($TransferPeriod)
    {
      $this->TransferPeriod = $TransferPeriod;
      return $this;
    }

    /**
     * @return float
     */
    public function getRestorePrice()
    {
      return $this->RestorePrice;
    }

    /**
     * @param float $RestorePrice
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setRestorePrice($RestorePrice)
    {
      $this->RestorePrice = $RestorePrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getRestorePeriod()
    {
      return $this->RestorePeriod;
    }

    /**
     * @param int $RestorePeriod
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setRestorePeriod($RestorePeriod)
    {
      $this->RestorePeriod = $RestorePeriod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRenewsAtStandardPrice()
    {
      return $this->RenewsAtStandardPrice;
    }

    /**
     * @param boolean $RenewsAtStandardPrice
     * @return \ascio\v3\PremiumDomainInfo
     */
    public function setRenewsAtStandardPrice($RenewsAtStandardPrice)
    {
      $this->RenewsAtStandardPrice = $RenewsAtStandardPrice;
      return $this;
    }

}
