<?php

namespace FilippoToso\Travelport\System;

class AgencyInformation
{

    /**
     * @var typeStructuredAddress $Address
     */
    public $Address = null;

    /**
     * @var Email $Email
     */
    public $Email = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @param Email $Email
     * @param PhoneNumber $PhoneNumber
     */
    public function __construct($Email = null, $PhoneNumber = null)
    {
      $this->Email = $Email;
      $this->PhoneNumber = $PhoneNumber;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress $Address
     * @return \FilippoToso\Travelport\System\AgencyInformation
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Email $Email
     * @return \FilippoToso\Travelport\System\AgencyInformation
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\System\AgencyInformation
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}
