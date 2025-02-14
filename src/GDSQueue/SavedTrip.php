<?php

namespace FilippoToso\Travelport\GDSQueue;

class SavedTrip
{

    /**
     * @var BookingTraveler $BookingTraveler
     */
    public $BookingTraveler = null;

    /**
     * @var AgencyContactInfo $AgencyContactInfo
     */
    public $AgencyContactInfo = null;

    /**
     * @var SearchPassenger $SearchPassenger
     */
    public $SearchPassenger = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    public $PointOfSale = null;

    /**
     * @var AccountingRemark $AccountingRemark
     */
    public $AccountingRemark = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    public $GeneralRemark = null;

    /**
     * @var AgencyInfo $AgencyInfo
     */
    public $AgencyInfo = null;

    /**
     * @var ReservationName $ReservationName
     */
    public $ReservationName = null;

    /**
     * @var AirPricingModifiers $AirPricingModifiers
     */
    public $AirPricingModifiers = null;

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    public $AirPricingSolution = null;

    /**
     * @var typeSavedTripNote[] $AirTripNote
     */
    public $AirTripNote = null;

    /**
     * @var VehicleSearchModifiers $VehicleSearchModifiers
     */
    public $VehicleSearchModifiers = null;

    /**
     * @var VehicleDateLocation $VehicleDateLocation
     */
    public $VehicleDateLocation = null;

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
     * @var Vehicle $Vehicle
     */
    public $Vehicle = null;

    /**
     * @var typeSavedTripNote[] $VehicleTripNote
     */
    public $VehicleTripNote = null;

    /**
     * @var VendorLocation $VendorLocation
     */
    public $VendorLocation = null;

    /**
     * @var HotelProperty $HotelProperty
     */
    public $HotelProperty = null;

    /**
     * @var HotelStay $HotelStay
     */
    public $HotelStay = null;

    /**
     * @var HotelRulesModifiers $HotelRulesModifiers
     */
    public $HotelRulesModifiers = null;

    /**
     * @var HotelDetailsModifiers $HotelDetailsModifiers
     */
    public $HotelDetailsModifiers = null;

    /**
     * @var HotelRateDetail $HotelRateDetail
     */
    public $HotelRateDetail = null;

    /**
     * @var PromotionCode $PromotionCode
     */
    public $PromotionCode = null;

    /**
     * @var typeSavedTripNote[] $HotelTripNote
     */
    public $HotelTripNote = null;

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    public $RailPricingSolution = null;

    /**
     * @var RailFareNote $RailFareNote
     */
    public $RailFareNote = null;

    /**
     * @var typeSavedTripNote[] $RailTripNote
     */
    public $RailTripNote = null;

    /**
     * @var typeSavedTripNote[] $SavedTripNote
     */
    public $SavedTripNote = null;

    /**
     * @var SavedTripActivity $SavedTripActivity
     */
    public $SavedTripActivity = null;

    /**
     * @var ProfileAssociation $ProfileAssociation
     */
    public $ProfileAssociation = null;

    /**
     * @var PolicyInformation $PolicyInformation
     */
    public $PolicyInformation = null;

    /**
     * @var typeLocatorCode $LocatorCode
     */
    public $LocatorCode = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    public $UniversalRecordLocatorCode = null;

    /**
     * @var anonymous1417 $Name
     */
    public $Name = null;

    /**
     * @var \DateTime $CreateDate
     */
    public $CreateDate = null;

    /**
     * @var \DateTime $ModifiedDate
     */
    public $ModifiedDate = null;

    /**
     * @var typeURVersion $Version
     */
    public $Version = null;

    /**
     * @var typeURStatus $Status
     */
    public $Status = null;

    /**
     * @var string $CreatedByAgent
     */
    public $CreatedByAgent = null;

    /**
     * @var string $ModifiedByAgent
     */
    public $ModifiedByAgent = null;

    /**
     * @param BookingTraveler $BookingTraveler
     * @param AgencyContactInfo $AgencyContactInfo
     * @param SearchPassenger $SearchPassenger
     * @param PointOfSale $PointOfSale
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param AgencyInfo $AgencyInfo
     * @param ReservationName $ReservationName
     * @param AirPricingModifiers $AirPricingModifiers
     * @param AirPricingSolution $AirPricingSolution
     * @param VehicleSearchModifiers $VehicleSearchModifiers
     * @param VehicleDateLocation $VehicleDateLocation
     * @param SpecialEquipment $SpecialEquipment
     * @param VehicleSpecialRequest $VehicleSpecialRequest
     * @param PaymentInformation $PaymentInformation
     * @param DeliveryAddress $DeliveryAddress
     * @param CollectionAddress $CollectionAddress
     * @param FlightArrivalInformation $FlightArrivalInformation
     * @param Vehicle $Vehicle
     * @param VendorLocation $VendorLocation
     * @param HotelProperty $HotelProperty
     * @param HotelStay $HotelStay
     * @param HotelRulesModifiers $HotelRulesModifiers
     * @param HotelDetailsModifiers $HotelDetailsModifiers
     * @param HotelRateDetail $HotelRateDetail
     * @param PromotionCode $PromotionCode
     * @param RailPricingSolution $RailPricingSolution
     * @param RailFareNote $RailFareNote
     * @param SavedTripActivity $SavedTripActivity
     * @param ProfileAssociation $ProfileAssociation
     * @param PolicyInformation $PolicyInformation
     * @param typeLocatorCode $LocatorCode
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param anonymous1417 $Name
     * @param \DateTime $CreateDate
     * @param \DateTime $ModifiedDate
     * @param typeURVersion $Version
     * @param typeURStatus $Status
     * @param string $CreatedByAgent
     * @param string $ModifiedByAgent
     */
    public function __construct($BookingTraveler = null, $AgencyContactInfo = null, $SearchPassenger = null, $PointOfSale = null, $AccountingRemark = null, $GeneralRemark = null, $AgencyInfo = null, $ReservationName = null, $AirPricingModifiers = null, $AirPricingSolution = null, $VehicleSearchModifiers = null, $VehicleDateLocation = null, $SpecialEquipment = null, $VehicleSpecialRequest = null, $PaymentInformation = null, $DeliveryAddress = null, $CollectionAddress = null, $FlightArrivalInformation = null, $Vehicle = null, $VendorLocation = null, $HotelProperty = null, $HotelStay = null, $HotelRulesModifiers = null, $HotelDetailsModifiers = null, $HotelRateDetail = null, $PromotionCode = null, $RailPricingSolution = null, $RailFareNote = null, $SavedTripActivity = null, $ProfileAssociation = null, $PolicyInformation = null, $LocatorCode = null, $UniversalRecordLocatorCode = null, $Name = null, \DateTime $CreateDate = null, \DateTime $ModifiedDate = null, $Version = null, $Status = null, $CreatedByAgent = null, $ModifiedByAgent = null)
    {
      $this->BookingTraveler = $BookingTraveler;
      $this->AgencyContactInfo = $AgencyContactInfo;
      $this->SearchPassenger = $SearchPassenger;
      $this->PointOfSale = $PointOfSale;
      $this->AccountingRemark = $AccountingRemark;
      $this->GeneralRemark = $GeneralRemark;
      $this->AgencyInfo = $AgencyInfo;
      $this->ReservationName = $ReservationName;
      $this->AirPricingModifiers = $AirPricingModifiers;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->VehicleSearchModifiers = $VehicleSearchModifiers;
      $this->VehicleDateLocation = $VehicleDateLocation;
      $this->SpecialEquipment = $SpecialEquipment;
      $this->VehicleSpecialRequest = $VehicleSpecialRequest;
      $this->PaymentInformation = $PaymentInformation;
      $this->DeliveryAddress = $DeliveryAddress;
      $this->CollectionAddress = $CollectionAddress;
      $this->FlightArrivalInformation = $FlightArrivalInformation;
      $this->Vehicle = $Vehicle;
      $this->VendorLocation = $VendorLocation;
      $this->HotelProperty = $HotelProperty;
      $this->HotelStay = $HotelStay;
      $this->HotelRulesModifiers = $HotelRulesModifiers;
      $this->HotelDetailsModifiers = $HotelDetailsModifiers;
      $this->HotelRateDetail = $HotelRateDetail;
      $this->PromotionCode = $PromotionCode;
      $this->RailPricingSolution = $RailPricingSolution;
      $this->RailFareNote = $RailFareNote;
      $this->SavedTripActivity = $SavedTripActivity;
      $this->ProfileAssociation = $ProfileAssociation;
      $this->PolicyInformation = $PolicyInformation;
      $this->LocatorCode = $LocatorCode;
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->Name = $Name;
      $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
      $this->ModifiedDate = $ModifiedDate ? $ModifiedDate->format(\DateTime::ATOM) : null;
      $this->Version = $Version;
      $this->Status = $Status;
      $this->CreatedByAgent = $CreatedByAgent;
      $this->ModifiedByAgent = $ModifiedByAgent;
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setBookingTraveler($BookingTraveler)
    {
      $this->BookingTraveler = $BookingTraveler;
      return $this;
    }

    /**
     * @return AgencyContactInfo
     */
    public function getAgencyContactInfo()
    {
      return $this->AgencyContactInfo;
    }

    /**
     * @param AgencyContactInfo $AgencyContactInfo
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setAgencyContactInfo($AgencyContactInfo)
    {
      $this->AgencyContactInfo = $AgencyContactInfo;
      return $this;
    }

    /**
     * @return SearchPassenger
     */
    public function getSearchPassenger()
    {
      return $this->SearchPassenger;
    }

    /**
     * @param SearchPassenger $SearchPassenger
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setSearchPassenger($SearchPassenger)
    {
      $this->SearchPassenger = $SearchPassenger;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setReservationName($ReservationName)
    {
      $this->ReservationName = $ReservationName;
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setAirPricingModifiers($AirPricingModifiers)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      return $this;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return typeSavedTripNote[]
     */
    public function getAirTripNote()
    {
      return $this->AirTripNote;
    }

    /**
     * @param typeSavedTripNote[] $AirTripNote
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setAirTripNote(array $AirTripNote = null)
    {
      $this->AirTripNote = $AirTripNote;
      return $this;
    }

    /**
     * @return VehicleSearchModifiers
     */
    public function getVehicleSearchModifiers()
    {
      return $this->VehicleSearchModifiers;
    }

    /**
     * @param VehicleSearchModifiers $VehicleSearchModifiers
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setVehicleSearchModifiers($VehicleSearchModifiers)
    {
      $this->VehicleSearchModifiers = $VehicleSearchModifiers;
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setVehicleDateLocation($VehicleDateLocation)
    {
      $this->VehicleDateLocation = $VehicleDateLocation;
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setFlightArrivalInformation($FlightArrivalInformation)
    {
      $this->FlightArrivalInformation = $FlightArrivalInformation;
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
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setVehicle($Vehicle)
    {
      $this->Vehicle = $Vehicle;
      return $this;
    }

    /**
     * @return typeSavedTripNote[]
     */
    public function getVehicleTripNote()
    {
      return $this->VehicleTripNote;
    }

    /**
     * @param typeSavedTripNote[] $VehicleTripNote
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setVehicleTripNote(array $VehicleTripNote = null)
    {
      $this->VehicleTripNote = $VehicleTripNote;
      return $this;
    }

    /**
     * @return VendorLocation
     */
    public function getVendorLocation()
    {
      return $this->VendorLocation;
    }

    /**
     * @param VendorLocation $VendorLocation
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setVendorLocation($VendorLocation)
    {
      $this->VendorLocation = $VendorLocation;
      return $this;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelStay
     */
    public function getHotelStay()
    {
      return $this->HotelStay;
    }

    /**
     * @param HotelStay $HotelStay
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
      return $this;
    }

    /**
     * @return HotelRulesModifiers
     */
    public function getHotelRulesModifiers()
    {
      return $this->HotelRulesModifiers;
    }

    /**
     * @param HotelRulesModifiers $HotelRulesModifiers
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setHotelRulesModifiers($HotelRulesModifiers)
    {
      $this->HotelRulesModifiers = $HotelRulesModifiers;
      return $this;
    }

    /**
     * @return HotelDetailsModifiers
     */
    public function getHotelDetailsModifiers()
    {
      return $this->HotelDetailsModifiers;
    }

    /**
     * @param HotelDetailsModifiers $HotelDetailsModifiers
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setHotelDetailsModifiers($HotelDetailsModifiers)
    {
      $this->HotelDetailsModifiers = $HotelDetailsModifiers;
      return $this;
    }

    /**
     * @return HotelRateDetail
     */
    public function getHotelRateDetail()
    {
      return $this->HotelRateDetail;
    }

    /**
     * @param HotelRateDetail $HotelRateDetail
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

    /**
     * @return PromotionCode
     */
    public function getPromotionCode()
    {
      return $this->PromotionCode;
    }

    /**
     * @param PromotionCode $PromotionCode
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setPromotionCode($PromotionCode)
    {
      $this->PromotionCode = $PromotionCode;
      return $this;
    }

    /**
     * @return typeSavedTripNote[]
     */
    public function getHotelTripNote()
    {
      return $this->HotelTripNote;
    }

    /**
     * @param typeSavedTripNote[] $HotelTripNote
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setHotelTripNote(array $HotelTripNote = null)
    {
      $this->HotelTripNote = $HotelTripNote;
      return $this;
    }

    /**
     * @return RailPricingSolution
     */
    public function getRailPricingSolution()
    {
      return $this->RailPricingSolution;
    }

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      return $this;
    }

    /**
     * @return RailFareNote
     */
    public function getRailFareNote()
    {
      return $this->RailFareNote;
    }

    /**
     * @param RailFareNote $RailFareNote
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setRailFareNote($RailFareNote)
    {
      $this->RailFareNote = $RailFareNote;
      return $this;
    }

    /**
     * @return typeSavedTripNote[]
     */
    public function getRailTripNote()
    {
      return $this->RailTripNote;
    }

    /**
     * @param typeSavedTripNote[] $RailTripNote
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setRailTripNote(array $RailTripNote = null)
    {
      $this->RailTripNote = $RailTripNote;
      return $this;
    }

    /**
     * @return typeSavedTripNote[]
     */
    public function getSavedTripNote()
    {
      return $this->SavedTripNote;
    }

    /**
     * @param typeSavedTripNote[] $SavedTripNote
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setSavedTripNote(array $SavedTripNote = null)
    {
      $this->SavedTripNote = $SavedTripNote;
      return $this;
    }

    /**
     * @return SavedTripActivity
     */
    public function getSavedTripActivity()
    {
      return $this->SavedTripActivity;
    }

    /**
     * @param SavedTripActivity $SavedTripActivity
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setSavedTripActivity($SavedTripActivity)
    {
      $this->SavedTripActivity = $SavedTripActivity;
      return $this;
    }

    /**
     * @return ProfileAssociation
     */
    public function getProfileAssociation()
    {
      return $this->ProfileAssociation;
    }

    /**
     * @param ProfileAssociation $ProfileAssociation
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setProfileAssociation($ProfileAssociation)
    {
      $this->ProfileAssociation = $ProfileAssociation;
      return $this;
    }

    /**
     * @return PolicyInformation
     */
    public function getPolicyInformation()
    {
      return $this->PolicyInformation;
    }

    /**
     * @param PolicyInformation $PolicyInformation
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setPolicyInformation($PolicyInformation)
    {
      $this->PolicyInformation = $PolicyInformation;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return anonymous1417
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous1417 $Name
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getModifiedDate()
    {
      if ($this->ModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ModifiedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ModifiedDate
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setModifiedDate(\DateTime $ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeURVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeURVersion $Version
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return typeURStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeURStatus $Status
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedByAgent()
    {
      return $this->CreatedByAgent;
    }

    /**
     * @param string $CreatedByAgent
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setCreatedByAgent($CreatedByAgent)
    {
      $this->CreatedByAgent = $CreatedByAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedByAgent()
    {
      return $this->ModifiedByAgent;
    }

    /**
     * @param string $ModifiedByAgent
     * @return \FilippoToso\Travelport\GDSQueue\SavedTrip
     */
    public function setModifiedByAgent($ModifiedByAgent)
    {
      $this->ModifiedByAgent = $ModifiedByAgent;
      return $this;
    }

}
