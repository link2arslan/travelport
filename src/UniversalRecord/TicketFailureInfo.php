<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TicketFailureInfo
{

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    public $AirPricingInfoRef = null;

    /**
     * @var Name $Name
     */
    public $Name = null;

    /**
     * @var int $Code
     */
    public $Code = null;

    /**
     * @var string $Message
     */
    public $Message = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param Name $Name
     * @param int $Code
     * @param string $Message
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($AirPricingInfoRef = null, $Name = null, $Code = null, $Message = null, $BookingTravelerRef = null)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->Name = $Name;
      $this->Code = $Code;
      $this->Message = $Message;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return AirPricingInfoRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\UniversalRecord\TicketFailureInfo
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\UniversalRecord\TicketFailureInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\UniversalRecord\TicketFailureInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FilippoToso\Travelport\UniversalRecord\TicketFailureInfo
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\TicketFailureInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
