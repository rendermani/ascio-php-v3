<?php

namespace ascio\v3;

class RegistrantInfo extends Registrant
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @param \DateTime $CreationDate
     */
    public function __construct(\DateTime $CreationDate)
    {
      parent::__construct();
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \ascio\v3\RegistrantInfo
     */
    public function setCreationDate(\DateTime $CreationDate)
    {
      $this->CreationDate = $CreationDate->format(\DateTime::ATOM);
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
     * @return \ascio\v3\RegistrantInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
