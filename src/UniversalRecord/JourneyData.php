<?php

namespace FilippoToso\Travelport\UniversalRecord;

class JourneyData
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    public $AirSegment = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     */
    public function __construct($AirSegment = null)
    {
      $this->AirSegment = $AirSegment;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \FilippoToso\Travelport\UniversalRecord\JourneyData
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

}
