<?php

namespace ascio\v3;

class CreateContactRequest
{

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    
    public function __construct()
    {
    
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
     * @return \ascio\v3\CreateContactRequest
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

}
