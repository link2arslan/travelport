<?php

namespace FilippoToso\Travelport\GDSQueue;

class SpecificSeatAssignment
{

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var typeRef $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @var typeRef $FlightDetailRef
     */
    public $FlightDetailRef = null;

    /**
     * @var string $SeatId
     */
    public $SeatId = null;

    /**
     * @var anonymous795 $RailCoachNumber
     */
    public $RailCoachNumber = null;

    /**
     * @param typeRef $BookingTravelerRef
     * @param typeRef $SegmentRef
     * @param typeRef $FlightDetailRef
     * @param string $SeatId
     * @param anonymous795 $RailCoachNumber
     */
    public function __construct($BookingTravelerRef = null, $SegmentRef = null, $FlightDetailRef = null, $SeatId = null, $RailCoachNumber = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->SegmentRef = $SegmentRef;
      $this->FlightDetailRef = $FlightDetailRef;
      $this->SeatId = $SeatId;
      $this->RailCoachNumber = $RailCoachNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\SpecificSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\SpecificSeatAssignment
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFlightDetailRef()
    {
      return $this->FlightDetailRef;
    }

    /**
     * @param typeRef $FlightDetailRef
     * @return \FilippoToso\Travelport\GDSQueue\SpecificSeatAssignment
     */
    public function setFlightDetailRef($FlightDetailRef)
    {
      $this->FlightDetailRef = $FlightDetailRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeatId()
    {
      return $this->SeatId;
    }

    /**
     * @param string $SeatId
     * @return \FilippoToso\Travelport\GDSQueue\SpecificSeatAssignment
     */
    public function setSeatId($SeatId)
    {
      $this->SeatId = $SeatId;
      return $this;
    }

    /**
     * @return anonymous795
     */
    public function getRailCoachNumber()
    {
      return $this->RailCoachNumber;
    }

    /**
     * @param anonymous795 $RailCoachNumber
     * @return \FilippoToso\Travelport\GDSQueue\SpecificSeatAssignment
     */
    public function setRailCoachNumber($RailCoachNumber)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      return $this;
    }

}
