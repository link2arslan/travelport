<?php

namespace FilippoToso\Travelport\Rail;

class VehicleReservation extends BaseReservation
{

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var ReservationName $ReservationName
     */
    public $ReservationName = null;

    /**
     * @var VehicleDateLocation $VehicleDateLocation
     */
    public $VehicleDateLocation = null;

    /**
     * @var Vehicle $Vehicle
     */
    public $Vehicle = null;

    /**
     * @var SpecialEquipment $SpecialEquipment
     */
    public $SpecialEquipment = null;

    /**
     * @var VehicleSpecialRequest $VehicleSpecialRequest
     */
    public $VehicleSpecialRequest = null;

    /**
     * @var PaymentInformation $PaymentInformation
     */
    public $PaymentInformation = null;

    /**
     * @var DeliveryAddress $DeliveryAddress
     */
    public $DeliveryAddress = null;

    /**
     * @var CollectionAddress $CollectionAddress
     */
    public $CollectionAddress = null;

    /**
     * @var FlightArrivalInformation $FlightArrivalInformation
     */
    public $FlightArrivalInformation = null;

    /**
     * @var Guarantee $Guarantee
     */
    public $Guarantee = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    public $AssociatedRemark = null;

    /**
     * @var BookingSource $BookingSource
     */
    public $BookingSource = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    public $ThirdPartyInformation = null;

    /**
     * @var string $SellMessage
     */
    public $SellMessage = null;

    /**
     * @var string $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var string $BookingConfirmation
     */
    public $BookingConfirmation = null;

    /**
     * @var string $Status
     */
    public $Status = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $PassiveProviderReservationInfoRef
     */
    public $PassiveProviderReservationInfoRef = null;

    /**
     * @var int $TravelOrder
     */
    public $TravelOrder = null;

    /**
     * @var anonymous538 $ProviderSegmentOrder
     */
    public $ProviderSegmentOrder = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     * @param BookingTravelerRef $BookingTravelerRef
     * @param ReservationName $ReservationName
     * @param VehicleDateLocation $VehicleDateLocation
     * @param Vehicle $Vehicle
     * @param SpecialEquipment $SpecialEquipment
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @param PaymentInformation $PaymentInformation
     * @param DeliveryAddress $DeliveryAddress
     * @param CollectionAddress $CollectionAddress
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @param Guarantee $Guarantee
     * @param AssociatedRemark $AssociatedRemark
     * @param BookingSource $BookingSource
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param string $SellMessage
     * @param string $SupplierCode
     * @param string $BookingConfirmation
     * @param string $Status
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $PassiveProviderReservationInfoRef
     * @param int $TravelOrder
     * @param anonymous538 $ProviderSegmentOrder
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null, $BookingTravelerRef = null, $ReservationName = null, $VehicleDateLocation = null, $Vehicle = null, $SpecialEquipment = null, $VehicleSpecialRequest = null, $PaymentInformation = null, $DeliveryAddress = null, $CollectionAddress = null, $FlightArrivalInformation = null, $Guarantee = null, $AssociatedRemark = null, $BookingSource = null, $ThirdPartyInformation = null, $SellMessage = null, $SupplierCode = null, $BookingConfirmation = null, $Status = null, $ProviderReservationInfoRef = null, $PassiveProviderReservationInfoRef = null, $TravelOrder = null, $ProviderSegmentOrder = null)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber);
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->ReservationName = $ReservationName;
      $this->VehicleDateLocation = $VehicleDateLocation;
      $this->Vehicle = $Vehicle;
      $this->SpecialEquipment = $SpecialEquipment;
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      $this->PaymentInformation = $PaymentInformation;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->CollectionAddress = $CollectionAddress;
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      $this->Guarantee = $Guarantee;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->BookingSource = $BookingSource;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->SellMessage = $SellMessage;
      $this->SupplierCode = $SupplierCode;
      $this->BookingConfirmation = $BookingConfirmation;
      $this->Status = $Status;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      $this->TravelOrder = $TravelOrder;
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return ReservationName
     */
    public function getReservationName()
    {
      return $this->ReservationName;
    }

    /**
     * @param ReservationName $ReservationName
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setReservationName($ReservationName)
    {
      $this->ReservationName = $ReservationName;
      return $this;
    }

    /**
     * @return VehicleDateLocation
     */
    public function getVehicleDateLocation()
    {
      return $this->VehicleDateLocation;
    }

    /**
     * @param VehicleDateLocation $VehicleDateLocation
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setVehicleDateLocation($VehicleDateLocation)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
      return $this;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle()
    {
      return $this->Vehicle;
    }

    /**
     * @param Vehicle $Vehicle
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setSpecialEquipment($SpecialEquipment)
    {
      $this->SpecialEquipment = $SpecialEquipment;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setVehicleSpecialRequest($VehicleSpecialRequest)
    {
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setPaymentInformation($PaymentInformation)
    {
      $this->PaymentInformation = $PaymentInformation;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setCollectionAddress($CollectionAddress)
    {
      $this->CollectionAddress = $CollectionAddress;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setFlightArrivalInformation($FlightArrivalInformation)
    {
      $this->FlightArrivalInformation = $FlightArrivalInformation;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellMessage()
    {
      return $this->SellMessage;
    }

    /**
     * @param string $SellMessage
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setSellMessage($SellMessage)
    {
      $this->SellMessage = $SellMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingConfirmation()
    {
      return $this->BookingConfirmation;
    }

    /**
     * @param string $BookingConfirmation
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setBookingConfirmation($BookingConfirmation)
    {
      $this->BookingConfirmation = $BookingConfirmation;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassiveProviderReservationInfoRef()
    {
      return $this->PassiveProviderReservationInfoRef;
    }

    /**
     * @param typeRef $PassiveProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setPassiveProviderReservationInfoRef($PassiveProviderReservationInfoRef)
    {
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
      return $this;
    }

    /**
     * @return anonymous538
     */
    public function getProviderSegmentOrder()
    {
      return $this->ProviderSegmentOrder;
    }

    /**
     * @param anonymous538 $ProviderSegmentOrder
     * @return \FilippoToso\Travelport\Rail\VehicleReservation
     */
    public function setProviderSegmentOrder($ProviderSegmentOrder)
    {
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      return $this;
    }

}
