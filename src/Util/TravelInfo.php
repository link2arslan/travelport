<?php

namespace FilippoToso\Travelport\Util;

class TravelInfo
{

    /**
     * @var anonymous289 $TripName
     */
    public $TripName = null;

    /**
     * @var anonymous290 $TravelPurpose
     */
    public $TravelPurpose = null;

    /**
     * @param anonymous289 $TripName
     * @param anonymous290 $TravelPurpose
     */
    public function __construct($TripName = null, $TravelPurpose = null)
    {
      $this->TripName = $TripName;
      $this->TravelPurpose = $TravelPurpose;
    }

    /**
     * @return anonymous289
     */
    public function getTripName()
    {
      return $this->TripName;
    }

    /**
     * @param anonymous289 $TripName
     * @return \FilippoToso\Travelport\Util\TravelInfo
     */
    public function setTripName($TripName)
    {
      $this->TripName = $TripName;
      return $this;
    }

    /**
     * @return anonymous290
     */
    public function getTravelPurpose()
    {
      return $this->TravelPurpose;
    }

    /**
     * @param anonymous290 $TravelPurpose
     * @return \FilippoToso\Travelport\Util\TravelInfo
     */
    public function setTravelPurpose($TravelPurpose)
    {
      $this->TravelPurpose = $TravelPurpose;
      return $this;
    }

}
