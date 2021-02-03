<?php

namespace ascio\v3;

class UserInfo
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var \DateTime $Created
     */
    protected $Created = null;

    /**
     * @var boolean $IsLocked
     */
    protected $IsLocked = null;

    /**
     * @var \DateTime $LastSuccessfulLoginDate
     */
    protected $LastSuccessfulLoginDate = null;

    /**
     * @var \DateTime $LastLoginAttemptDate
     */
    protected $LastLoginAttemptDate = null;

    /**
     * @var int $InvalidPasswordAttempts
     */
    protected $InvalidPasswordAttempts = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \ascio\v3\UserInfo
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \ascio\v3\UserInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \ascio\v3\UserInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return \ascio\v3\UserInfo
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
     * @return boolean
     */
    public function getIsLocked()
    {
      return $this->IsLocked;
    }

    /**
     * @param boolean $IsLocked
     * @return \ascio\v3\UserInfo
     */
    public function setIsLocked($IsLocked)
    {
      $this->IsLocked = $IsLocked;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastSuccessfulLoginDate()
    {
      if ($this->LastSuccessfulLoginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastSuccessfulLoginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastSuccessfulLoginDate
     * @return \ascio\v3\UserInfo
     */
    public function setLastSuccessfulLoginDate(\DateTime $LastSuccessfulLoginDate = null)
    {
      if ($LastSuccessfulLoginDate == null) {
       $this->LastSuccessfulLoginDate = null;
      } else {
        $this->LastSuccessfulLoginDate = $LastSuccessfulLoginDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastLoginAttemptDate()
    {
      if ($this->LastLoginAttemptDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastLoginAttemptDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastLoginAttemptDate
     * @return \ascio\v3\UserInfo
     */
    public function setLastLoginAttemptDate(\DateTime $LastLoginAttemptDate = null)
    {
      if ($LastLoginAttemptDate == null) {
       $this->LastLoginAttemptDate = null;
      } else {
        $this->LastLoginAttemptDate = $LastLoginAttemptDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getInvalidPasswordAttempts()
    {
      return $this->InvalidPasswordAttempts;
    }

    /**
     * @param int $InvalidPasswordAttempts
     * @return \ascio\v3\UserInfo
     */
    public function setInvalidPasswordAttempts($InvalidPasswordAttempts)
    {
      $this->InvalidPasswordAttempts = $InvalidPasswordAttempts;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
      if ($this->LastUpdated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUpdated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUpdated
     * @return \ascio\v3\UserInfo
     */
    public function setLastUpdated(\DateTime $LastUpdated = null)
    {
      if ($LastUpdated == null) {
       $this->LastUpdated = null;
      } else {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
      }
      return $this;
    }

}
