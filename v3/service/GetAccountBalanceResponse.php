<?php

namespace ascio\v3;

class GetAccountBalanceResponse extends AbstractResponse
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $Vat
     */
    protected $Vat = null;

    /**
     * @var float $UnInvoicedOrders
     */
    protected $UnInvoicedOrders = null;

    /**
     * @var float $UnInvoicedOpenOrders
     */
    protected $UnInvoicedOpenOrders = null;

    /**
     * @var float $UnInvoicedCompletedOrders
     */
    protected $UnInvoicedCompletedOrders = null;

    /**
     * @var float $UnInvoicedCompletedOrdersLast24h
     */
    protected $UnInvoicedCompletedOrdersLast24h = null;

    /**
     * @var float $AccountBalance
     */
    protected $AccountBalance = null;

    /**
     * @var float $CurrentBalance
     */
    protected $CurrentBalance = null;

    /**
     * @var float $ReminderThreshold
     */
    protected $ReminderThreshold = null;

    /**
     * @var float $BlockingThreshold
     */
    protected $BlockingThreshold = null;

    /**
     * @var ArrayOfstring $ReminderEmailAddress
     */
    protected $ReminderEmailAddress = null;

    /**
     * @var ArrayOfstring $InvoiceEmailAddress
     */
    protected $InvoiceEmailAddress = null;

    /**
     * @var \DateTime $LastReminderSent
     */
    protected $LastReminderSent = null;

    /**
     * @var int $NumberOfRemindersSent
     */
    protected $NumberOfRemindersSent = null;

    /**
     * @var \DateTime $LastBlockedAccountMessageSent
     */
    protected $LastBlockedAccountMessageSent = null;

    /**
     * @var int $NumberOfBlockedAccountMessagesSent
     */
    protected $NumberOfBlockedAccountMessagesSent = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getVat()
    {
      return $this->Vat;
    }

    /**
     * @param float $Vat
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setVat($Vat)
    {
      $this->Vat = $Vat;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnInvoicedOrders()
    {
      return $this->UnInvoicedOrders;
    }

    /**
     * @param float $UnInvoicedOrders
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setUnInvoicedOrders($UnInvoicedOrders)
    {
      $this->UnInvoicedOrders = $UnInvoicedOrders;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnInvoicedOpenOrders()
    {
      return $this->UnInvoicedOpenOrders;
    }

    /**
     * @param float $UnInvoicedOpenOrders
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setUnInvoicedOpenOrders($UnInvoicedOpenOrders)
    {
      $this->UnInvoicedOpenOrders = $UnInvoicedOpenOrders;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnInvoicedCompletedOrders()
    {
      return $this->UnInvoicedCompletedOrders;
    }

    /**
     * @param float $UnInvoicedCompletedOrders
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setUnInvoicedCompletedOrders($UnInvoicedCompletedOrders)
    {
      $this->UnInvoicedCompletedOrders = $UnInvoicedCompletedOrders;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnInvoicedCompletedOrdersLast24h()
    {
      return $this->UnInvoicedCompletedOrdersLast24h;
    }

    /**
     * @param float $UnInvoicedCompletedOrdersLast24h
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setUnInvoicedCompletedOrdersLast24h($UnInvoicedCompletedOrdersLast24h)
    {
      $this->UnInvoicedCompletedOrdersLast24h = $UnInvoicedCompletedOrdersLast24h;
      return $this;
    }

    /**
     * @return float
     */
    public function getAccountBalance()
    {
      return $this->AccountBalance;
    }

    /**
     * @param float $AccountBalance
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setAccountBalance($AccountBalance)
    {
      $this->AccountBalance = $AccountBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentBalance()
    {
      return $this->CurrentBalance;
    }

    /**
     * @param float $CurrentBalance
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setCurrentBalance($CurrentBalance)
    {
      $this->CurrentBalance = $CurrentBalance;
      return $this;
    }

    /**
     * @return float
     */
    public function getReminderThreshold()
    {
      return $this->ReminderThreshold;
    }

    /**
     * @param float $ReminderThreshold
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setReminderThreshold($ReminderThreshold)
    {
      $this->ReminderThreshold = $ReminderThreshold;
      return $this;
    }

    /**
     * @return float
     */
    public function getBlockingThreshold()
    {
      return $this->BlockingThreshold;
    }

    /**
     * @param float $BlockingThreshold
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setBlockingThreshold($BlockingThreshold)
    {
      $this->BlockingThreshold = $BlockingThreshold;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getReminderEmailAddress()
    {
      return $this->ReminderEmailAddress;
    }

    /**
     * @param ArrayOfstring $ReminderEmailAddress
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setReminderEmailAddress($ReminderEmailAddress)
    {
      $this->ReminderEmailAddress = $ReminderEmailAddress;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getInvoiceEmailAddress()
    {
      return $this->InvoiceEmailAddress;
    }

    /**
     * @param ArrayOfstring $InvoiceEmailAddress
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setInvoiceEmailAddress($InvoiceEmailAddress)
    {
      $this->InvoiceEmailAddress = $InvoiceEmailAddress;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastReminderSent()
    {
      if ($this->LastReminderSent == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReminderSent);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReminderSent
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setLastReminderSent(\DateTime $LastReminderSent = null)
    {
      if ($LastReminderSent == null) {
       $this->LastReminderSent = null;
      } else {
        $this->LastReminderSent = $LastReminderSent->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRemindersSent()
    {
      return $this->NumberOfRemindersSent;
    }

    /**
     * @param int $NumberOfRemindersSent
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setNumberOfRemindersSent($NumberOfRemindersSent)
    {
      $this->NumberOfRemindersSent = $NumberOfRemindersSent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBlockedAccountMessageSent()
    {
      if ($this->LastBlockedAccountMessageSent == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastBlockedAccountMessageSent);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastBlockedAccountMessageSent
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setLastBlockedAccountMessageSent(\DateTime $LastBlockedAccountMessageSent = null)
    {
      if ($LastBlockedAccountMessageSent == null) {
       $this->LastBlockedAccountMessageSent = null;
      } else {
        $this->LastBlockedAccountMessageSent = $LastBlockedAccountMessageSent->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfBlockedAccountMessagesSent()
    {
      return $this->NumberOfBlockedAccountMessagesSent;
    }

    /**
     * @param int $NumberOfBlockedAccountMessagesSent
     * @return \ascio\v3\GetAccountBalanceResponse
     */
    public function setNumberOfBlockedAccountMessagesSent($NumberOfBlockedAccountMessagesSent)
    {
      $this->NumberOfBlockedAccountMessagesSent = $NumberOfBlockedAccountMessagesSent;
      return $this;
    }

}
