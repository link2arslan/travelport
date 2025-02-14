<?php

namespace FilippoToso\Travelport\Air;

class AutoPricingInfo
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    public $AirSegmentRef = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var AirPricingModifiers $AirPricingModifiers
     */
    public $AirPricingModifiers = null;

    /**
     * @var AirSegmentPricingModifiers $AirSegmentPricingModifiers
     */
    public $AirSegmentPricingModifiers = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var anonymous1053 $PricingType
     */
    public $PricingType = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param BookingTravelerRef $BookingTravelerRef
     * @param AirPricingModifiers $AirPricingModifiers
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @param typeRef $Key
     * @param anonymous1053 $PricingType
     * @param typeCarrier $PlatingCarrier
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($AirSegmentRef = null, $BookingTravelerRef = null, $AirPricingModifiers = null, $AirSegmentPricingModifiers = null, $Key = null, $PricingType = null, $PlatingCarrier = null, $ElStat = null, $KeyOverride = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->AirPricingModifiers = $AirPricingModifiers;
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      $this->Key = $Key;
      $this->PricingType = $PricingType;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return AirPricingModifiers
     */
    public function getAirPricingModifiers()
    {
      return $this->AirPricingModifiers;
    }

    /**
     * @param AirPricingModifiers $AirPricingModifiers
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setAirPricingModifiers($AirPricingModifiers)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      return $this;
    }

    /**
     * @return AirSegmentPricingModifiers
     */
    public function getAirSegmentPricingModifiers()
    {
      return $this->AirSegmentPricingModifiers;
    }

    /**
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setAirSegmentPricingModifiers($AirSegmentPricingModifiers)
    {
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous1053
     */
    public function getPricingType()
    {
      return $this->PricingType;
    }

    /**
     * @param anonymous1053 $PricingType
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setPricingType($PricingType)
    {
      $this->PricingType = $PricingType;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param typeCarrier $PlatingCarrier
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Air\AutoPricingInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
