<?php

namespace FilippoToso\Travelport\Air;

class ETR
{

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    public $AirReservationLocatorCode = null;

    /**
     * @var AgencyInfo $AgencyInfo
     */
    public $AgencyInfo = null;

    /**
     * @var BookingTraveler $BookingTraveler
     */
    public $BookingTraveler = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var Payment $Payment
     */
    public $Payment = null;

    /**
     * @var CreditCardAuth $CreditCardAuth
     */
    public $CreditCardAuth = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    public $SupplierLocator = null;

    /**
     * @var string $FareCalc
     */
    public $FareCalc = null;

    /**
     * @var Ticket $Ticket
     */
    public $Ticket = null;

    /**
     * @var Commission $Commission
     */
    public $Commission = null;

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    public $AirPricingInfo = null;

    /**
     * @var AuditData $AuditData
     */
    public $AuditData = null;

    /**
     * @var Restriction $Restriction
     */
    public $Restriction = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    public $WaiverCode = null;

    /**
     * @var BaggageAllowances $BaggageAllowances
     */
    public $BaggageAllowances = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var boolean $Refundable
     */
    public $Refundable = null;

    /**
     * @var boolean $Exchangeable
     */
    public $Exchangeable = null;

    /**
     * @var typeTourCode $TourCode
     */
    public $TourCode = null;

    /**
     * @var string $IssuedDate
     */
    public $IssuedDate = null;

    /**
     * @var boolean $BulkTicket
     */
    public $BulkTicket = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    public $ProviderLocatorCode = null;

    /**
     * @var typeIATA $IATANumber
     */
    public $IATANumber = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @var typeCountry $CountryCode
     */
    public $CountryCode = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

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
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param AgencyInfo $AgencyInfo
     * @param BookingTraveler $BookingTraveler
     * @param FormOfPayment $FormOfPayment
     * @param Payment $Payment
     * @param CreditCardAuth $CreditCardAuth
     * @param SupplierLocator $SupplierLocator
     * @param string $FareCalc
     * @param Ticket $Ticket
     * @param Commission $Commission
     * @param AirPricingInfo $AirPricingInfo
     * @param AuditData $AuditData
     * @param Restriction $Restriction
     * @param WaiverCode $WaiverCode
     * @param BaggageAllowances $BaggageAllowances
     * @param typeRef $Key
     * @param boolean $Refundable
     * @param boolean $Exchangeable
     * @param typeTourCode $TourCode
     * @param string $IssuedDate
     * @param boolean $BulkTicket
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typeIATA $IATANumber
     * @param typePCC $PseudoCityCode
     * @param typeCountry $CountryCode
     * @param typeCarrier $PlatingCarrier
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
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($AirReservationLocatorCode = null, $AgencyInfo = null, $BookingTraveler = null, $FormOfPayment = null, $Payment = null, $CreditCardAuth = null, $SupplierLocator = null, $FareCalc = null, $Ticket = null, $Commission = null, $AirPricingInfo = null, $AuditData = null, $Restriction = null, $WaiverCode = null, $BaggageAllowances = null, $Key = null, $Refundable = null, $Exchangeable = null, $TourCode = null, $IssuedDate = null, $BulkTicket = null, $ProviderCode = null, $ProviderLocatorCode = null, $IATANumber = null, $PseudoCityCode = null, $CountryCode = null, $PlatingCarrier = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null, $ElStat = null, $KeyOverride = null)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->AgencyInfo = $AgencyInfo;
      $this->BookingTraveler = $BookingTraveler;
      $this->FormOfPayment = $FormOfPayment;
      $this->Payment = $Payment;
      $this->CreditCardAuth = $CreditCardAuth;
      $this->SupplierLocator = $SupplierLocator;
      $this->FareCalc = $FareCalc;
      $this->Ticket = $Ticket;
      $this->Commission = $Commission;
      $this->AirPricingInfo = $AirPricingInfo;
      $this->AuditData = $AuditData;
      $this->Restriction = $Restriction;
      $this->WaiverCode = $WaiverCode;
      $this->BaggageAllowances = $BaggageAllowances;
      $this->Key = $Key;
      $this->Refundable = $Refundable;
      $this->Exchangeable = $Exchangeable;
      $this->TourCode = $TourCode;
      $this->IssuedDate = $IssuedDate;
      $this->BulkTicket = $BulkTicket;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->IATANumber = $IATANumber;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->CountryCode = $CountryCode;
      $this->PlatingCarrier = $PlatingCarrier;
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
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return AirReservationLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return AgencyInfo
     */
    public function getAgencyInfo()
    {
      return $this->AgencyInfo;
    }

    /**
     * @param AgencyInfo $AgencyInfo
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
      return $this;
    }

    /**
     * @return BookingTraveler
     */
    public function getBookingTraveler()
    {
      return $this->BookingTraveler;
    }

    /**
     * @param BookingTraveler $BookingTraveler
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setBookingTraveler($BookingTraveler)
    {
      $this->BookingTraveler = $BookingTraveler;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return CreditCardAuth
     */
    public function getCreditCardAuth()
    {
      return $this->CreditCardAuth;
    }

    /**
     * @param CreditCardAuth $CreditCardAuth
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setCreditCardAuth($CreditCardAuth)
    {
      $this->CreditCardAuth = $CreditCardAuth;
      return $this;
    }

    /**
     * @return SupplierLocator
     */
    public function getSupplierLocator()
    {
      return $this->SupplierLocator;
    }

    /**
     * @param SupplierLocator $SupplierLocator
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setFareCalc($FareCalc)
    {
      $this->FareCalc = $FareCalc;
      return $this;
    }

    /**
     * @return Ticket
     */
    public function getTicket()
    {
      return $this->Ticket;
    }

    /**
     * @param Ticket $Ticket
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setTicket($Ticket)
    {
      $this->Ticket = $Ticket;
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return AirPricingInfo
     */
    public function getAirPricingInfo()
    {
      return $this->AirPricingInfo;
    }

    /**
     * @param AirPricingInfo $AirPricingInfo
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
      return $this;
    }

    /**
     * @return AuditData
     */
    public function getAuditData()
    {
      return $this->AuditData;
    }

    /**
     * @param AuditData $AuditData
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setAuditData($AuditData)
    {
      $this->AuditData = $AuditData;
      return $this;
    }

    /**
     * @return Restriction
     */
    public function getRestriction()
    {
      return $this->Restriction;
    }

    /**
     * @param Restriction $Restriction
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setRestriction($Restriction)
    {
      $this->Restriction = $Restriction;
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setBaggageAllowances($BaggageAllowances)
    {
      $this->BaggageAllowances = $BaggageAllowances;
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setExchangeable($Exchangeable)
    {
      $this->Exchangeable = $Exchangeable;
      return $this;
    }

    /**
     * @return typeTourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param typeTourCode $TourCode
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuedDate()
    {
      return $this->IssuedDate;
    }

    /**
     * @param string $IssuedDate
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setIssuedDate($IssuedDate)
    {
      $this->IssuedDate = $IssuedDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBulkTicket()
    {
      return $this->BulkTicket;
    }

    /**
     * @param boolean $BulkTicket
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param typeIATA $IATANumber
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param typeCountry $CountryCode
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
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
     * @return \FilippoToso\Travelport\Air\ETR
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
     * @return \FilippoToso\Travelport\Air\ETR
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
