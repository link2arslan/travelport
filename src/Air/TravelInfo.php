<?php

namespace FilippoToso\Travelport\Air;

class TravelInfo
{

    /**
     * @var anonymous292 $TripName
     */
    public $TripName = null;

    /**
     * @var anonymous293 $TravelPurpose
     */
    public $TravelPurpose = null;

    /**
     * @param anonymous292 $TripName
     * @param anonymous293 $TravelPurpose
     */
    public function __construct($TripName = null, $TravelPurpose = null)
    {
      $this->TripName = $TripName;
      $this->TravelPurpose = $TravelPurpose;
    }

    /**
     * @return anonymous292
     */
    public function getTripName()
    {
      return $this->TripName;
    }

    /**
     * @param anonymous292 $TripName
     * @return \FilippoToso\Travelport\Air\TravelInfo
     */
    public function setTripName($TripName)
    {
      $this->TripName = $TripName;
      return $this;
    }

    /**
     * @return anonymous293
     */
    public function getTravelPurpose()
    {
      return $this->TravelPurpose;
    }

    /**
     * @param anonymous293 $TravelPurpose
     * @return \FilippoToso\Travelport\Air\TravelInfo
     */
    public function setTravelPurpose($TravelPurpose)
    {
      $this->TravelPurpose = $TravelPurpose;
      return $this;
    }

}
