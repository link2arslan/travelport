<?php

namespace FilippoToso\Travelport\GDSQueue;

class ExchangeAirSegment
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    public $AirSegment = null;

    /**
     * @var CabinClass $CabinClass
     */
    public $CabinClass = null;

    /**
     * @var string $FareBasisCode
     */
    public $FareBasisCode = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     * @param CabinClass $CabinClass
     * @param string $FareBasisCode
     */
    public function __construct($AirSegment = null, $CabinClass = null, $FareBasisCode = null)
    {
      $this->AirSegment = $AirSegment;
      $this->CabinClass = $CabinClass;
      $this->FareBasisCode = $FareBasisCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\ExchangeAirSegment
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return CabinClass
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param CabinClass $CabinClass
     * @return \FilippoToso\Travelport\GDSQueue\ExchangeAirSegment
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasisCode()
    {
      return $this->FareBasisCode;
    }

    /**
     * @param string $FareBasisCode
     * @return \FilippoToso\Travelport\GDSQueue\ExchangeAirSegment
     */
    public function setFareBasisCode($FareBasisCode)
    {
      $this->FareBasisCode = $FareBasisCode;
      return $this;
    }

}
