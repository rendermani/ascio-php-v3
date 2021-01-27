<?php

namespace ascio\v3;

class CreateContactResponse extends AbstractResponse
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @param int $ResultCode
     * @param Contact $Contact
     */
    public function __construct($ResultCode, $Contact)
    {
      parent::__construct($ResultCode);
      $this->Contact = $Contact;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param Contact $Contact
     * @return \ascio\v3\CreateContactResponse
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

}
