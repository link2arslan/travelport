<?php

namespace FilippoToso\Travelport\Air;

class BookingTravelerInformation
{

    /**
     * @var Name $Name
     */
    public $Name = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param Name $Name
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($Name = null, $BookingTravelerRef = null)
    {
      $this->Name = $Name;
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\Air\BookingTravelerInformation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\Air\BookingTravelerInformation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
