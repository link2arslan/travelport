<?php

namespace FilippoToso\Travelport\Air;

class typeApplicableSegment
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeRef $AirItineraryDetailsRef
     */
    public $AirItineraryDetailsRef = null;

    /**
     * @var string $BookingCounts
     */
    public $BookingCounts = null;

    /**
     * @param typeRef $Key
     * @param typeRef $AirItineraryDetailsRef
     * @param string $BookingCounts
     */
    public function __construct($Key = null, $AirItineraryDetailsRef = null, $BookingCounts = null)
    {
      $this->Key = $Key;
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
      $this->BookingCounts = $BookingCounts;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Air\typeApplicableSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirItineraryDetailsRef()
    {
      return $this->AirItineraryDetailsRef;
    }

    /**
     * @param typeRef $AirItineraryDetailsRef
     * @return \FilippoToso\Travelport\Air\typeApplicableSegment
     */
    public function setAirItineraryDetailsRef($AirItineraryDetailsRef)
    {
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCounts()
    {
      return $this->BookingCounts;
    }

    /**
     * @param string $BookingCounts
     * @return \FilippoToso\Travelport\Air\typeApplicableSegment
     */
    public function setBookingCounts($BookingCounts)
    {
      $this->BookingCounts = $BookingCounts;
      return $this;
    }

}
