<?php

namespace FilippoToso\Travelport\GDSQueue;

class PassengerTicketNumber
{

    /**
     * @var typePassengerTicketNumber $TicketNumber
     */
    public $TicketNumber = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param typePassengerTicketNumber $TicketNumber
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($TicketNumber = null, $BookingTravelerRef = null)
    {
      $this->TicketNumber = $TicketNumber;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typePassengerTicketNumber
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param typePassengerTicketNumber $TicketNumber
     * @return \FilippoToso\Travelport\GDSQueue\PassengerTicketNumber
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassengerTicketNumber
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
