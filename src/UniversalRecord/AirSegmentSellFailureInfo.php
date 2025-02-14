<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirSegmentSellFailureInfo
{

    /**
     * @var AirSegmentError $AirSegmentError
     */
    public $AirSegmentError = null;

    /**
     * @param AirSegmentError $AirSegmentError
     */
    public function __construct($AirSegmentError = null)
    {
      $this->AirSegmentError = $AirSegmentError;
    }

    /**
     * @return AirSegmentError
     */
    public function getAirSegmentError()
    {
      return $this->AirSegmentError;
    }

    /**
     * @param AirSegmentError $AirSegmentError
     * @return \FilippoToso\Travelport\UniversalRecord\AirSegmentSellFailureInfo
     */
    public function setAirSegmentError($AirSegmentError)
    {
      $this->AirSegmentError = $AirSegmentError;
      return $this;
    }

}
