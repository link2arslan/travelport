<?php

namespace FilippoToso\Travelport\Terminal;

class ReservationName
{

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var NameOverride $NameOverride
     */
    public $NameOverride = null;

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @param NameOverride $NameOverride
     */
    public function __construct($BookingTravelerRef = null, $NameOverride = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->NameOverride = $NameOverride;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\Terminal\ReservationName
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return NameOverride
     */
    public function getNameOverride()
    {
      return $this->NameOverride;
    }

    /**
     * @param NameOverride $NameOverride
     * @return \FilippoToso\Travelport\Terminal\ReservationName
     */
    public function setNameOverride($NameOverride)
    {
      $this->NameOverride = $NameOverride;
      return $this;
    }

}
