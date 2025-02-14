<?php

namespace FilippoToso\Travelport\Rail;

class typeBaseAirReservation extends BaseReservation
{

    /**
     * @var OptionalServices $OptionalServices
     */
    public $OptionalServices = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    public $SupplierLocator = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    public $ThirdPartyInformation = null;

    /**
     * @var DocumentInfo $DocumentInfo
     */
    public $DocumentInfo = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    public $AirSegment = null;

    /**
     * @var SvcSegment $SvcSegment
     */
    public $SvcSegment = null;

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    public $AirPricingInfo = null;

    /**
     * @var Payment $Payment
     */
    public $Payment = null;

    /**
     * @var CreditCardAuth $CreditCardAuth
     */
    public $CreditCardAuth = null;

    /**
     * @var FareNote $FareNote
     */
    public $FareNote = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    public $FeeInfo = null;

    /**
     * @var typeTaxInfoWithPaymentRef[] $TaxInfo
     */
    public $TaxInfo = null;

    /**
     * @var TicketingModifiers $TicketingModifiers
     */
    public $TicketingModifiers = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    public $AssociatedRemark = null;

    /**
     * @var PocketItineraryRemark $PocketItineraryRemark
     */
    public $PocketItineraryRemark = null;

    /**
     * @var AirExchangeBundleTotal $AirExchangeBundleTotal
     */
    public $AirExchangeBundleTotal = null;

    /**
     * @var AirExchangeBundle $AirExchangeBundle
     */
    public $AirExchangeBundle = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     * @param OptionalServices $OptionalServices
     * @param SupplierLocator $SupplierLocator
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param DocumentInfo $DocumentInfo
     * @param BookingTravelerRef $BookingTravelerRef
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeBaseAirSegment $AirSegment
     * @param SvcSegment $SvcSegment
     * @param AirPricingInfo $AirPricingInfo
     * @param Payment $Payment
     * @param CreditCardAuth $CreditCardAuth
     * @param FareNote $FareNote
     * @param typeFeeInfo $FeeInfo
     * @param TicketingModifiers $TicketingModifiers
     * @param AssociatedRemark $AssociatedRemark
     * @param PocketItineraryRemark $PocketItineraryRemark
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @param AirExchangeBundle $AirExchangeBundle
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null, $OptionalServices = null, $SupplierLocator = null, $ThirdPartyInformation = null, $DocumentInfo = null, $BookingTravelerRef = null, $ProviderReservationInfoRef = null, $AirSegment = null, $SvcSegment = null, $AirPricingInfo = null, $Payment = null, $CreditCardAuth = null, $FareNote = null, $FeeInfo = null, $TicketingModifiers = null, $AssociatedRemark = null, $PocketItineraryRemark = null, $AirExchangeBundleTotal = null, $AirExchangeBundle = null)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber);
      $this->OptionalServices = $OptionalServices;
      $this->SupplierLocator = $SupplierLocator;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->DocumentInfo = $DocumentInfo;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->AirSegment = $AirSegment;
      $this->SvcSegment = $SvcSegment;
      $this->AirPricingInfo = $AirPricingInfo;
      $this->Payment = $Payment;
      $this->CreditCardAuth = $CreditCardAuth;
      $this->FareNote = $FareNote;
      $this->FeeInfo = $FeeInfo;
      $this->TicketingModifiers = $TicketingModifiers;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->PocketItineraryRemark = $PocketItineraryRemark;
      $this->AirExchangeBundleTotal = $AirExchangeBundleTotal;
      $this->AirExchangeBundle = $AirExchangeBundle;
    }

    /**
     * @return OptionalServices
     */
    public function getOptionalServices()
    {
      return $this->OptionalServices;
    }

    /**
     * @param OptionalServices $OptionalServices
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
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
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return ThirdPartyInformation
     */
    public function getThirdPartyInformation()
    {
      return $this->ThirdPartyInformation;
    }

    /**
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return DocumentInfo
     */
    public function getDocumentInfo()
    {
      return $this->DocumentInfo;
    }

    /**
     * @param DocumentInfo $DocumentInfo
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setDocumentInfo($DocumentInfo)
    {
      $this->DocumentInfo = $DocumentInfo;
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
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return ProviderReservationInfoRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return SvcSegment
     */
    public function getSvcSegment()
    {
      return $this->SvcSegment;
    }

    /**
     * @param SvcSegment $SvcSegment
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setSvcSegment($SvcSegment)
    {
      $this->SvcSegment = $SvcSegment;
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
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
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
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
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
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setCreditCardAuth($CreditCardAuth)
    {
      $this->CreditCardAuth = $CreditCardAuth;
      return $this;
    }

    /**
     * @return FareNote
     */
    public function getFareNote()
    {
      return $this->FareNote;
    }

    /**
     * @param FareNote $FareNote
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setFareNote($FareNote)
    {
      $this->FareNote = $FareNote;
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
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return typeTaxInfoWithPaymentRef[]
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfoWithPaymentRef[] $TaxInfo
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setTaxInfo(array $TaxInfo = null)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return TicketingModifiers
     */
    public function getTicketingModifiers()
    {
      return $this->TicketingModifiers;
    }

    /**
     * @param TicketingModifiers $TicketingModifiers
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setTicketingModifiers($TicketingModifiers)
    {
      $this->TicketingModifiers = $TicketingModifiers;
      return $this;
    }

    /**
     * @return AssociatedRemark
     */
    public function getAssociatedRemark()
    {
      return $this->AssociatedRemark;
    }

    /**
     * @param AssociatedRemark $AssociatedRemark
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
      return $this;
    }

    /**
     * @return PocketItineraryRemark
     */
    public function getPocketItineraryRemark()
    {
      return $this->PocketItineraryRemark;
    }

    /**
     * @param PocketItineraryRemark $PocketItineraryRemark
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setPocketItineraryRemark($PocketItineraryRemark)
    {
      $this->PocketItineraryRemark = $PocketItineraryRemark;
      return $this;
    }

    /**
     * @return AirExchangeBundleTotal
     */
    public function getAirExchangeBundleTotal()
    {
      return $this->AirExchangeBundleTotal;
    }

    /**
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setAirExchangeBundleTotal($AirExchangeBundleTotal)
    {
      $this->AirExchangeBundleTotal = $AirExchangeBundleTotal;
      return $this;
    }

    /**
     * @return AirExchangeBundle
     */
    public function getAirExchangeBundle()
    {
      return $this->AirExchangeBundle;
    }

    /**
     * @param AirExchangeBundle $AirExchangeBundle
     * @return \FilippoToso\Travelport\Rail\typeBaseAirReservation
     */
    public function setAirExchangeBundle($AirExchangeBundle)
    {
      $this->AirExchangeBundle = $AirExchangeBundle;
      return $this;
    }

}
