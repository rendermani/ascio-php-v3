<?php

namespace ascio\v3;

class CreateContactResponse extends AbstractResponse
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    
    public function __construct()
    {
      parent::__construct();
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
