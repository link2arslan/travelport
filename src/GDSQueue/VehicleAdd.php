<?php

namespace FilippoToso\Travelport\GDSQueue;

class VehicleAdd
{

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    public $LoyaltyCard = null;

    /**
     * @var DriversLicense $DriversLicense
     */
    public $DriversLicense = null;

    /**
     * @var VehicleSpecialRequest $VehicleSpecialRequest
     */
    public $VehicleSpecialRequest = null;

    /**
     * @var SpecialEquipment $SpecialEquipment
     */
    public $SpecialEquipment = null;

    /**
     * @var PaymentInformation $PaymentInformation
     */
    public $PaymentInformation = null;

    /**
     * @var Guarantee $Guarantee
     */
    public $Guarantee = null;

    /**
     * @var BookingSource $BookingSource
     */
    public $BookingSource = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    public $AssociatedRemark = null;

    /**
     * @var DeliveryAddress $DeliveryAddress
     */
    public $DeliveryAddress = null;

    /**
     * @var CollectionAddress $CollectionAddress
     */
    public $CollectionAddress = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    public $ThirdPartyInformation = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    public $TravelComplianceData = null;

    /**
     * @var FlightArrivalInformation $FlightArrivalInformation
     */
    public $FlightArrivalInformation = null;

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    public $ReservationLocatorCode = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @param DriversLicense $DriversLicense
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @param SpecialEquipment $SpecialEquipment
     * @param PaymentInformation $PaymentInformation
     * @param Guarantee $Guarantee
     * @param BookingSource $BookingSource
     * @param AssociatedRemark $AssociatedRemark
     * @param DeliveryAddress $DeliveryAddress
     * @param CollectionAddress $CollectionAddress
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param TravelComplianceData $TravelComplianceData
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($LoyaltyCard = null, $DriversLicense = null, $VehicleSpecialRequest = null, $SpecialEquipment = null, $PaymentInformation = null, $Guarantee = null, $BookingSource = null, $AssociatedRemark = null, $DeliveryAddress = null, $CollectionAddress = null, $ThirdPartyInformation = null, $TravelComplianceData = null, $FlightArrivalInformation = null, $ReservationLocatorCode = null, $BookingTravelerRef = null)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      $this->DriversLicense = $DriversLicense;
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      $this->SpecialEquipment = $SpecialEquipment;
      $this->PaymentInformation = $PaymentInformation;
      $this->Guarantee = $Guarantee;
      $this->BookingSource = $BookingSource;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->CollectionAddress = $CollectionAddress;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return DriversLicense
     */
    public function getDriversLicense()
    {
      return $this->DriversLicense;
    }

    /**
     * @param DriversLicense $DriversLicense
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setDriversLicense($DriversLicense)
    {
      $this->DriversLicense = $DriversLicense;
      return $this;
    }

    /**
     * @return VehicleSpecialRequest
     */
    public function getVehicleSpecialRequest()
    {
      return $this->VehicleSpecialRequest;
    }

    /**
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setVehicleSpecialRequest($VehicleSpecialRequest)
    {
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      return $this;
    }

    /**
     * @return SpecialEquipment
     */
    public function getSpecialEquipment()
    {
      return $this->SpecialEquipment;
    }

    /**
     * @param SpecialEquipment $SpecialEquipment
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setSpecialEquipment($SpecialEquipment)
    {
      $this->SpecialEquipment = $SpecialEquipment;
      return $this;
    }

    /**
     * @return PaymentInformation
     */
    public function getPaymentInformation()
    {
      return $this->PaymentInformation;
    }

    /**
     * @param PaymentInformation $PaymentInformation
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setPaymentInformation($PaymentInformation)
    {
      $this->PaymentInformation = $PaymentInformation;
      return $this;
    }

    /**
     * @return Guarantee
     */
    public function getGuarantee()
    {
      return $this->Guarantee;
    }

    /**
     * @param Guarantee $Guarantee
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
      return $this;
    }

    /**
     * @return BookingSource
     */
    public function getBookingSource()
    {
      return $this->BookingSource;
    }

    /**
     * @param BookingSource $BookingSource
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
      return $this;
    }

    /**
     * @return DeliveryAddress
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param DeliveryAddress $DeliveryAddress
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return CollectionAddress
     */
    public function getCollectionAddress()
    {
      return $this->CollectionAddress;
    }

    /**
     * @param CollectionAddress $CollectionAddress
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setCollectionAddress($CollectionAddress)
    {
      $this->CollectionAddress = $CollectionAddress;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return TravelComplianceData
     */
    public function getTravelComplianceData()
    {
      return $this->TravelComplianceData;
    }

    /**
     * @param TravelComplianceData $TravelComplianceData
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
      return $this;
    }

    /**
     * @return FlightArrivalInformation
     */
    public function getFlightArrivalInformation()
    {
      return $this->FlightArrivalInformation;
    }

    /**
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setFlightArrivalInformation($FlightArrivalInformation)
    {
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\VehicleAdd
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
