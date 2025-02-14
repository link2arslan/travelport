<?php

namespace FilippoToso\Travelport\Rail;

class AirPricingInfo
{

    /**
     * @var FareInfo $FareInfo
     */
    public $FareInfo = null;

    /**
     * @var FareStatus $FareStatus
     */
    public $FareStatus = null;

    /**
     * @var FareInfoRef $FareInfoRef
     */
    public $FareInfoRef = null;

    /**
     * @var BookingInfo $BookingInfo
     */
    public $BookingInfo = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    public $TaxInfo = null;

    /**
     * @var string $FareCalc
     */
    public $FareCalc = null;

    /**
     * @var PassengerType $PassengerType
     */
    public $PassengerType = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    public $WaiverCode = null;

    /**
     * @var PaymentRef $PaymentRef
     */
    public $PaymentRef = null;

    /**
     * @var typeFarePenalty[] $ChangePenalty
     */
    public $ChangePenalty = null;

    /**
     * @var typeFarePenalty[] $CancelPenalty
     */
    public $CancelPenalty = null;

    /**
     * @var typeFarePenalty[] $NoShowPenalty
     */
    public $NoShowPenalty = null;

    /**
     * @var typeMostRestrictivePenalties $MostRestrictivePenalties
     */
    public $MostRestrictivePenalties = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    public $FeeInfo = null;

    /**
     * @var Adjustment $Adjustment
     */
    public $Adjustment = null;

    /**
     * @var YieldCustom $Yield
     */
    public $Yield = null;

    /**
     * @var AirPricingModifiers $AirPricingModifiers
     */
    public $AirPricingModifiers = null;

    /**
     * @var TicketingModifiersRef $TicketingModifiersRef
     */
    public $TicketingModifiersRef = null;

    /**
     * @var AirSegmentPricingModifiers $AirSegmentPricingModifiers
     */
    public $AirSegmentPricingModifiers = null;

    /**
     * @var FlightOptionsList $FlightOptionsList
     */
    public $FlightOptionsList = null;

    /**
     * @var BaggageAllowances $BaggageAllowances
     */
    public $BaggageAllowances = null;

    /**
     * @var FareRulesFilter $FareRulesFilter
     */
    public $FareRulesFilter = null;

    /**
     * @var PolicyCodesList $PolicyCodesList
     */
    public $PolicyCodesList = null;

    /**
     * @var PriceChangeType[] $PriceChange
     */
    public $PriceChange = null;

    /**
     * @var ActionDetails $ActionDetails
     */
    public $ActionDetails = null;

    /**
     * @var Commission $Commission
     */
    public $Commission = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var anonymous620 $CommandKey
     */
    public $CommandKey = null;

    /**
     * @var StringLength1to32 $AmountType
     */
    public $AmountType = null;

    /**
     * @var boolean $IncludesVAT
     */
    public $IncludesVAT = null;

    /**
     * @var typeMoney $ExchangeAmount
     */
    public $ExchangeAmount = null;

    /**
     * @var typeMoney $ForfeitAmount
     */
    public $ForfeitAmount = null;

    /**
     * @var boolean $Refundable
     */
    public $Refundable = null;

    /**
     * @var boolean $Exchangeable
     */
    public $Exchangeable = null;

    /**
     * @var string $LatestTicketingTime
     */
    public $LatestTicketingTime = null;

    /**
     * @var typePricingMethod $PricingMethod
     */
    public $PricingMethod = null;

    /**
     * @var string $Checksum
     */
    public $Checksum = null;

    /**
     * @var typeEticketability $ETicketability
     */
    public $ETicketability = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var int $AirPricingInfoGroup
     */
    public $AirPricingInfoGroup = null;

    /**
     * @var typeMoney $TotalNetPrice
     */
    public $TotalNetPrice = null;

    /**
     * @var boolean $Ticketed
     */
    public $Ticketed = null;

    /**
     * @var anonymous621 $PricingType
     */
    public $PricingType = null;

    /**
     * @var string $TrueLastDateToTicket
     */
    public $TrueLastDateToTicket = null;

    /**
     * @var anonymous622 $FareCalculationInd
     */
    public $FareCalculationInd = null;

    /**
     * @var boolean $Cat35Indicator
     */
    public $Cat35Indicator = null;

    /**
     * @var typeMoney $TotalPrice
     */
    public $TotalPrice = null;

    /**
     * @var typeMoney $BasePrice
     */
    public $BasePrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    public $ApproximateTotalPrice = null;

    /**
     * @var typeMoney $ApproximateBasePrice
     */
    public $ApproximateBasePrice = null;

    /**
     * @var typeMoney $EquivalentBasePrice
     */
    public $EquivalentBasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    public $Taxes = null;

    /**
     * @var typeMoney $Fees
     */
    public $Fees = null;

    /**
     * @var typeMoney $Services
     */
    public $Services = null;

    /**
     * @var typeMoney $ApproximateTaxes
     */
    public $ApproximateTaxes = null;

    /**
     * @var typeMoney $ApproximateFees
     */
    public $ApproximateFees = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @var boolean $InPolicy
     */
    public $InPolicy = null;

    /**
     * @var boolean $PreferredOption
     */
    public $PreferredOption = null;

    /**
     * @param FareInfo $FareInfo
     * @param FareStatus $FareStatus
     * @param FareInfoRef $FareInfoRef
     * @param BookingInfo $BookingInfo
     * @param typeTaxInfo $TaxInfo
     * @param string $FareCalc
     * @param PassengerType $PassengerType
     * @param BookingTravelerRef $BookingTravelerRef
     * @param WaiverCode $WaiverCode
     * @param PaymentRef $PaymentRef
     * @param typeFeeInfo $FeeInfo
     * @param Adjustment $Adjustment
     * @param YieldCustom $Yield
     * @param AirPricingModifiers $AirPricingModifiers
     * @param TicketingModifiersRef $TicketingModifiersRef
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @param FlightOptionsList $FlightOptionsList
     * @param BaggageAllowances $BaggageAllowances
     * @param FareRulesFilter $FareRulesFilter
     * @param PolicyCodesList $PolicyCodesList
     * @param ActionDetails $ActionDetails
     * @param Commission $Commission
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeRef $Key
     * @param anonymous620 $CommandKey
     * @param StringLength1to32 $AmountType
     * @param boolean $IncludesVAT
     * @param typeMoney $ExchangeAmount
     * @param typeMoney $ForfeitAmount
     * @param boolean $Refundable
     * @param boolean $Exchangeable
     * @param string $LatestTicketingTime
     * @param typePricingMethod $PricingMethod
     * @param string $Checksum
     * @param typeEticketability $ETicketability
     * @param typeCarrier $PlatingCarrier
     * @param typeRef $ProviderReservationInfoRef
     * @param int $AirPricingInfoGroup
     * @param typeMoney $TotalNetPrice
     * @param boolean $Ticketed
     * @param anonymous621 $PricingType
     * @param string $TrueLastDateToTicket
     * @param anonymous622 $FareCalculationInd
     * @param boolean $Cat35Indicator
     * @param typeMoney $TotalPrice
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateTotalPrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $EquivalentBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $Fees
     * @param typeMoney $Services
     * @param typeMoney $ApproximateTaxes
     * @param typeMoney $ApproximateFees
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param boolean $InPolicy
     * @param boolean $PreferredOption
     */
    public function __construct($FareInfo = null, $FareStatus = null, $FareInfoRef = null, $BookingInfo = null, $TaxInfo = null, $FareCalc = null, $PassengerType = null, $BookingTravelerRef = null, $WaiverCode = null, $PaymentRef = null, $FeeInfo = null, $Adjustment = null, $Yield = null, $AirPricingModifiers = null, $TicketingModifiersRef = null, $AirSegmentPricingModifiers = null, $FlightOptionsList = null, $BaggageAllowances = null, $FareRulesFilter = null, $PolicyCodesList = null, $ActionDetails = null, $Commission = null, $Origin = null, $Destination = null, $Key = null, $CommandKey = null, $AmountType = null, $IncludesVAT = null, $ExchangeAmount = null, $ForfeitAmount = null, $Refundable = null, $Exchangeable = null, $LatestTicketingTime = null, $PricingMethod = null, $Checksum = null, $ETicketability = null, $PlatingCarrier = null, $ProviderReservationInfoRef = null, $AirPricingInfoGroup = null, $TotalNetPrice = null, $Ticketed = null, $PricingType = null, $TrueLastDateToTicket = null, $FareCalculationInd = null, $Cat35Indicator = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null, $ProviderCode = null, $SupplierCode = null, $ElStat = null, $KeyOverride = null, $InPolicy = null, $PreferredOption = null)
    {
      $this->FareInfo = $FareInfo;
      $this->FareStatus = $FareStatus;
      $this->FareInfoRef = $FareInfoRef;
      $this->BookingInfo = $BookingInfo;
      $this->TaxInfo = $TaxInfo;
      $this->FareCalc = $FareCalc;
      $this->PassengerType = $PassengerType;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->WaiverCode = $WaiverCode;
      $this->PaymentRef = $PaymentRef;
      $this->FeeInfo = $FeeInfo;
      $this->Adjustment = $Adjustment;
      $this->Yield = $Yield;
      $this->AirPricingModifiers = $AirPricingModifiers;
      $this->TicketingModifiersRef = $TicketingModifiersRef;
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      $this->FlightOptionsList = $FlightOptionsList;
      $this->BaggageAllowances = $BaggageAllowances;
      $this->FareRulesFilter = $FareRulesFilter;
      $this->PolicyCodesList = $PolicyCodesList;
      $this->ActionDetails = $ActionDetails;
      $this->Commission = $Commission;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->Key = $Key;
      $this->CommandKey = $CommandKey;
      $this->AmountType = $AmountType;
      $this->IncludesVAT = $IncludesVAT;
      $this->ExchangeAmount = $ExchangeAmount;
      $this->ForfeitAmount = $ForfeitAmount;
      $this->Refundable = $Refundable;
      $this->Exchangeable = $Exchangeable;
      $this->LatestTicketingTime = $LatestTicketingTime;
      $this->PricingMethod = $PricingMethod;
      $this->Checksum = $Checksum;
      $this->ETicketability = $ETicketability;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->AirPricingInfoGroup = $AirPricingInfoGroup;
      $this->TotalNetPrice = $TotalNetPrice;
      $this->Ticketed = $Ticketed;
      $this->PricingType = $PricingType;
      $this->TrueLastDateToTicket = $TrueLastDateToTicket;
      $this->FareCalculationInd = $FareCalculationInd;
      $this->Cat35Indicator = $Cat35Indicator;
      $this->TotalPrice = $TotalPrice;
      $this->BasePrice = $BasePrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      $this->Taxes = $Taxes;
      $this->Fees = $Fees;
      $this->Services = $Services;
      $this->ApproximateTaxes = $ApproximateTaxes;
      $this->ApproximateFees = $ApproximateFees;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
      $this->InPolicy = $InPolicy;
      $this->PreferredOption = $PreferredOption;
    }

    /**
     * @return FareInfo
     */
    public function getFareInfo()
    {
      return $this->FareInfo;
    }

    /**
     * @param FareInfo $FareInfo
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFareInfo($FareInfo)
    {
      $this->FareInfo = $FareInfo;
      return $this;
    }

    /**
     * @return FareStatus
     */
    public function getFareStatus()
    {
      return $this->FareStatus;
    }

    /**
     * @param FareStatus $FareStatus
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFareStatus($FareStatus)
    {
      $this->FareStatus = $FareStatus;
      return $this;
    }

    /**
     * @return FareInfoRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param FareInfoRef $FareInfoRef
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

    /**
     * @return BookingInfo
     */
    public function getBookingInfo()
    {
      return $this->BookingInfo;
    }

    /**
     * @param BookingInfo $BookingInfo
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setBookingInfo($BookingInfo)
    {
      $this->BookingInfo = $BookingInfo;
      return $this;
    }

    /**
     * @return typeTaxInfo
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo $TaxInfo
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareCalc()
    {
      return $this->FareCalc;
    }

    /**
     * @param string $FareCalc
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFareCalc($FareCalc)
    {
      $this->FareCalc = $FareCalc;
      return $this;
    }

    /**
     * @return PassengerType
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerType $PassengerType
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
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
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return WaiverCode
     */
    public function getWaiverCode()
    {
      return $this->WaiverCode;
    }

    /**
     * @param WaiverCode $WaiverCode
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return PaymentRef
     */
    public function getPaymentRef()
    {
      return $this->PaymentRef;
    }

    /**
     * @param PaymentRef $PaymentRef
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

    /**
     * @return typeFarePenalty[]
     */
    public function getChangePenalty()
    {
      return $this->ChangePenalty;
    }

    /**
     * @param typeFarePenalty[] $ChangePenalty
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setChangePenalty(array $ChangePenalty = null)
    {
      $this->ChangePenalty = $ChangePenalty;
      return $this;
    }

    /**
     * @return typeFarePenalty[]
     */
    public function getCancelPenalty()
    {
      return $this->CancelPenalty;
    }

    /**
     * @param typeFarePenalty[] $CancelPenalty
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setCancelPenalty(array $CancelPenalty = null)
    {
      $this->CancelPenalty = $CancelPenalty;
      return $this;
    }

    /**
     * @return typeFarePenalty[]
     */
    public function getNoShowPenalty()
    {
      return $this->NoShowPenalty;
    }

    /**
     * @param typeFarePenalty[] $NoShowPenalty
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setNoShowPenalty(array $NoShowPenalty = null)
    {
      $this->NoShowPenalty = $NoShowPenalty;
      return $this;
    }

    /**
     * @return typeMostRestrictivePenalties
     */
    public function getMostRestrictivePenalties()
    {
      return $this->MostRestrictivePenalties;
    }

    /**
     * @param typeMostRestrictivePenalties $MostRestrictivePenalties
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setMostRestrictivePenalties($MostRestrictivePenalties)
    {
      $this->MostRestrictivePenalties = $MostRestrictivePenalties;
      return $this;
    }

    /**
     * @return typeFeeInfo
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo $FeeInfo
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return Adjustment
     */
    public function getAdjustment()
    {
      return $this->Adjustment;
    }

    /**
     * @param Adjustment $Adjustment
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setAdjustment($Adjustment)
    {
      $this->Adjustment = $Adjustment;
      return $this;
    }

    /**
     * @return YieldCustom
     */
    public function getYield()
    {
      return $this->Yield;
    }

    /**
     * @param YieldCustom $Yield
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setYield($Yield)
    {
      $this->Yield = $Yield;
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
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setAirPricingModifiers($AirPricingModifiers)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      return $this;
    }

    /**
     * @return TicketingModifiersRef
     */
    public function getTicketingModifiersRef()
    {
      return $this->TicketingModifiersRef;
    }

    /**
     * @param TicketingModifiersRef $TicketingModifiersRef
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setTicketingModifiersRef($TicketingModifiersRef)
    {
      $this->TicketingModifiersRef = $TicketingModifiersRef;
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
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setAirSegmentPricingModifiers($AirSegmentPricingModifiers)
    {
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      return $this;
    }

    /**
     * @return FlightOptionsList
     */
    public function getFlightOptionsList()
    {
      return $this->FlightOptionsList;
    }

    /**
     * @param FlightOptionsList $FlightOptionsList
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFlightOptionsList($FlightOptionsList)
    {
      $this->FlightOptionsList = $FlightOptionsList;
      return $this;
    }

    /**
     * @return BaggageAllowances
     */
    public function getBaggageAllowances()
    {
      return $this->BaggageAllowances;
    }

    /**
     * @param BaggageAllowances $BaggageAllowances
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setBaggageAllowances($BaggageAllowances)
    {
      $this->BaggageAllowances = $BaggageAllowances;
      return $this;
    }

    /**
     * @return FareRulesFilter
     */
    public function getFareRulesFilter()
    {
      return $this->FareRulesFilter;
    }

    /**
     * @param FareRulesFilter $FareRulesFilter
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFareRulesFilter($FareRulesFilter)
    {
      $this->FareRulesFilter = $FareRulesFilter;
      return $this;
    }

    /**
     * @return PolicyCodesList
     */
    public function getPolicyCodesList()
    {
      return $this->PolicyCodesList;
    }

    /**
     * @param PolicyCodesList $PolicyCodesList
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPolicyCodesList($PolicyCodesList)
    {
      $this->PolicyCodesList = $PolicyCodesList;
      return $this;
    }

    /**
     * @return PriceChangeType[]
     */
    public function getPriceChange()
    {
      return $this->PriceChange;
    }

    /**
     * @param PriceChangeType[] $PriceChange
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPriceChange(array $PriceChange = null)
    {
      $this->PriceChange = $PriceChange;
      return $this;
    }

    /**
     * @return ActionDetails
     */
    public function getActionDetails()
    {
      return $this->ActionDetails;
    }

    /**
     * @param ActionDetails $ActionDetails
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setActionDetails($ActionDetails)
    {
      $this->ActionDetails = $ActionDetails;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
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
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous620
     */
    public function getCommandKey()
    {
      return $this->CommandKey;
    }

    /**
     * @param anonymous620 $CommandKey
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setCommandKey($CommandKey)
    {
      $this->CommandKey = $CommandKey;
      return $this;
    }

    /**
     * @return StringLength1to32
     */
    public function getAmountType()
    {
      return $this->AmountType;
    }

    /**
     * @param StringLength1to32 $AmountType
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setAmountType($AmountType)
    {
      $this->AmountType = $AmountType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludesVAT()
    {
      return $this->IncludesVAT;
    }

    /**
     * @param boolean $IncludesVAT
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setIncludesVAT($IncludesVAT)
    {
      $this->IncludesVAT = $IncludesVAT;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getExchangeAmount()
    {
      return $this->ExchangeAmount;
    }

    /**
     * @param typeMoney $ExchangeAmount
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setExchangeAmount($ExchangeAmount)
    {
      $this->ExchangeAmount = $ExchangeAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getForfeitAmount()
    {
      return $this->ForfeitAmount;
    }

    /**
     * @param typeMoney $ForfeitAmount
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setForfeitAmount($ForfeitAmount)
    {
      $this->ForfeitAmount = $ForfeitAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExchangeable()
    {
      return $this->Exchangeable;
    }

    /**
     * @param boolean $Exchangeable
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setExchangeable($Exchangeable)
    {
      $this->Exchangeable = $Exchangeable;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatestTicketingTime()
    {
      return $this->LatestTicketingTime;
    }

    /**
     * @param string $LatestTicketingTime
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setLatestTicketingTime($LatestTicketingTime)
    {
      $this->LatestTicketingTime = $LatestTicketingTime;
      return $this;
    }

    /**
     * @return typePricingMethod
     */
    public function getPricingMethod()
    {
      return $this->PricingMethod;
    }

    /**
     * @param typePricingMethod $PricingMethod
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPricingMethod($PricingMethod)
    {
      $this->PricingMethod = $PricingMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getChecksum()
    {
      return $this->Checksum;
    }

    /**
     * @param string $Checksum
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setChecksum($Checksum)
    {
      $this->Checksum = $Checksum;
      return $this;
    }

    /**
     * @return typeEticketability
     */
    public function getETicketability()
    {
      return $this->ETicketability;
    }

    /**
     * @param typeEticketability $ETicketability
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setETicketability($ETicketability)
    {
      $this->ETicketability = $ETicketability;
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
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return int
     */
    public function getAirPricingInfoGroup()
    {
      return $this->AirPricingInfoGroup;
    }

    /**
     * @param int $AirPricingInfoGroup
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setAirPricingInfoGroup($AirPricingInfoGroup)
    {
      $this->AirPricingInfoGroup = $AirPricingInfoGroup;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalNetPrice()
    {
      return $this->TotalNetPrice;
    }

    /**
     * @param typeMoney $TotalNetPrice
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setTotalNetPrice($TotalNetPrice)
    {
      $this->TotalNetPrice = $TotalNetPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketed()
    {
      return $this->Ticketed;
    }

    /**
     * @param boolean $Ticketed
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setTicketed($Ticketed)
    {
      $this->Ticketed = $Ticketed;
      return $this;
    }

    /**
     * @return anonymous621
     */
    public function getPricingType()
    {
      return $this->PricingType;
    }

    /**
     * @param anonymous621 $PricingType
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPricingType($PricingType)
    {
      $this->PricingType = $PricingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrueLastDateToTicket()
    {
      return $this->TrueLastDateToTicket;
    }

    /**
     * @param string $TrueLastDateToTicket
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setTrueLastDateToTicket($TrueLastDateToTicket)
    {
      $this->TrueLastDateToTicket = $TrueLastDateToTicket;
      return $this;
    }

    /**
     * @return anonymous622
     */
    public function getFareCalculationInd()
    {
      return $this->FareCalculationInd;
    }

    /**
     * @param anonymous622 $FareCalculationInd
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFareCalculationInd($FareCalculationInd)
    {
      $this->FareCalculationInd = $FareCalculationInd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCat35Indicator()
    {
      return $this->Cat35Indicator;
    }

    /**
     * @param boolean $Cat35Indicator
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setCat35Indicator($Cat35Indicator)
    {
      $this->Cat35Indicator = $Cat35Indicator;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBasePrice()
    {
      return $this->ApproximateBasePrice;
    }

    /**
     * @param typeMoney $ApproximateBasePrice
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setApproximateBasePrice($ApproximateBasePrice)
    {
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentBasePrice()
    {
      return $this->EquivalentBasePrice;
    }

    /**
     * @param typeMoney $EquivalentBasePrice
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setEquivalentBasePrice($EquivalentBasePrice)
    {
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param typeMoney $Fees
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param typeMoney $Services
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTaxes()
    {
      return $this->ApproximateTaxes;
    }

    /**
     * @param typeMoney $ApproximateTaxes
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setApproximateTaxes($ApproximateTaxes)
    {
      $this->ApproximateTaxes = $ApproximateTaxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateFees()
    {
      return $this->ApproximateFees;
    }

    /**
     * @param typeMoney $ApproximateFees
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
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
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
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
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInPolicy()
    {
      return $this->InPolicy;
    }

    /**
     * @param boolean $InPolicy
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setInPolicy($InPolicy)
    {
      $this->InPolicy = $InPolicy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredOption()
    {
      return $this->PreferredOption;
    }

    /**
     * @param boolean $PreferredOption
     * @return \FilippoToso\Travelport\Rail\AirPricingInfo
     */
    public function setPreferredOption($PreferredOption)
    {
      $this->PreferredOption = $PreferredOption;
      return $this;
    }

}
