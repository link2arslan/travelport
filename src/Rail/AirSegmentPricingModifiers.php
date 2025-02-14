<?php

namespace FilippoToso\Travelport\Rail;

class AirSegmentPricingModifiers
{

    /**
     * @var PermittedBookingCodes $PermittedBookingCodes
     */
    public $PermittedBookingCodes = null;

    /**
     * @var typeRef $AirSegmentRef
     */
    public $AirSegmentRef = null;

    /**
     * @var string $CabinClass
     */
    public $CabinClass = null;

    /**
     * @var string $AccountCode
     */
    public $AccountCode = null;

    /**
     * @var boolean $ProhibitAdvancePurchaseFares
     */
    public $ProhibitAdvancePurchaseFares = null;

    /**
     * @var boolean $ProhibitNonRefundableFares
     */
    public $ProhibitNonRefundableFares = null;

    /**
     * @var boolean $ProhibitPenaltyFares
     */
    public $ProhibitPenaltyFares = null;

    /**
     * @var string $FareBasisCode
     */
    public $FareBasisCode = null;

    /**
     * @var typeFareBreak $FareBreak
     */
    public $FareBreak = null;

    /**
     * @var typeConnectionIndicator $ConnectionIndicator
     */
    public $ConnectionIndicator = null;

    /**
     * @var StringLength1to10 $BrandTier
     */
    public $BrandTier = null;

    /**
     * @param typeRef $AirSegmentRef
     * @param string $CabinClass
     * @param string $AccountCode
     * @param boolean $ProhibitAdvancePurchaseFares
     * @param boolean $ProhibitNonRefundableFares
     * @param boolean $ProhibitPenaltyFares
     * @param string $FareBasisCode
     * @param typeFareBreak $FareBreak
     * @param typeConnectionIndicator $ConnectionIndicator
     * @param StringLength1to10 $BrandTier
     */
    public function __construct($AirSegmentRef = null, $CabinClass = null, $AccountCode = null, $ProhibitAdvancePurchaseFares = null, $ProhibitNonRefundableFares = null, $ProhibitPenaltyFares = null, $FareBasisCode = null, $FareBreak = null, $ConnectionIndicator = null, $BrandTier = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->CabinClass = $CabinClass;
      $this->AccountCode = $AccountCode;
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
      $this->FareBasisCode = $FareBasisCode;
      $this->FareBreak = $FareBreak;
      $this->ConnectionIndicator = $ConnectionIndicator;
      $this->BrandTier = $BrandTier;
    }

    /**
     * @return PermittedBookingCodes
     */
    public function getPermittedBookingCodes()
    {
      return $this->PermittedBookingCodes;
    }

    /**
     * @param PermittedBookingCodes $PermittedBookingCodes
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setPermittedBookingCodes($PermittedBookingCodes)
    {
      $this->PermittedBookingCodes = $PermittedBookingCodes;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeRef $AirSegmentRef
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitAdvancePurchaseFares()
    {
      return $this->ProhibitAdvancePurchaseFares;
    }

    /**
     * @param boolean $ProhibitAdvancePurchaseFares
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setProhibitAdvancePurchaseFares($ProhibitAdvancePurchaseFares)
    {
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitNonRefundableFares()
    {
      return $this->ProhibitNonRefundableFares;
    }

    /**
     * @param boolean $ProhibitNonRefundableFares
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setProhibitNonRefundableFares($ProhibitNonRefundableFares)
    {
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitPenaltyFares()
    {
      return $this->ProhibitPenaltyFares;
    }

    /**
     * @param boolean $ProhibitPenaltyFares
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setProhibitPenaltyFares($ProhibitPenaltyFares)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
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
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setFareBasisCode($FareBasisCode)
    {
      $this->FareBasisCode = $FareBasisCode;
      return $this;
    }

    /**
     * @return typeFareBreak
     */
    public function getFareBreak()
    {
      return $this->FareBreak;
    }

    /**
     * @param typeFareBreak $FareBreak
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setFareBreak($FareBreak)
    {
      $this->FareBreak = $FareBreak;
      return $this;
    }

    /**
     * @return typeConnectionIndicator
     */
    public function getConnectionIndicator()
    {
      return $this->ConnectionIndicator;
    }

    /**
     * @param typeConnectionIndicator $ConnectionIndicator
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setConnectionIndicator($ConnectionIndicator)
    {
      $this->ConnectionIndicator = $ConnectionIndicator;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getBrandTier()
    {
      return $this->BrandTier;
    }

    /**
     * @param StringLength1to10 $BrandTier
     * @return \FilippoToso\Travelport\Rail\AirSegmentPricingModifiers
     */
    public function setBrandTier($BrandTier)
    {
      $this->BrandTier = $BrandTier;
      return $this;
    }

}
