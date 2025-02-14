<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SegmentModifiers
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    public $AirSegmentRef = null;

    /**
     * @var TicketValidity $TicketValidity
     */
    public $TicketValidity = null;

    /**
     * @var BaggageAllowance $BaggageAllowance
     */
    public $BaggageAllowance = null;

    /**
     * @var typeTicketDesignator $TicketDesignator
     */
    public $TicketDesignator = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param TicketValidity $TicketValidity
     * @param BaggageAllowance $BaggageAllowance
     */
    public function __construct($AirSegmentRef = null, $TicketValidity = null, $BaggageAllowance = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->TicketValidity = $TicketValidity;
      $this->BaggageAllowance = $BaggageAllowance;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\SegmentModifiers
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return TicketValidity
     */
    public function getTicketValidity()
    {
      return $this->TicketValidity;
    }

    /**
     * @param TicketValidity $TicketValidity
     * @return \FilippoToso\Travelport\UniversalRecord\SegmentModifiers
     */
    public function setTicketValidity($TicketValidity)
    {
      $this->TicketValidity = $TicketValidity;
      return $this;
    }

    /**
     * @return BaggageAllowance
     */
    public function getBaggageAllowance()
    {
      return $this->BaggageAllowance;
    }

    /**
     * @param BaggageAllowance $BaggageAllowance
     * @return \FilippoToso\Travelport\UniversalRecord\SegmentModifiers
     */
    public function setBaggageAllowance($BaggageAllowance)
    {
      $this->BaggageAllowance = $BaggageAllowance;
      return $this;
    }

    /**
     * @return typeTicketDesignator
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param typeTicketDesignator $TicketDesignator
     * @return \FilippoToso\Travelport\UniversalRecord\SegmentModifiers
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

}
