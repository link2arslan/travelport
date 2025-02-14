<?php

namespace FilippoToso\Travelport\Air;

class AirSegmentDetails
{

    /**
     * @var PassengerDetailsRef $PassengerDetailsRef
     */
    public $PassengerDetailsRef = null;

    /**
     * @var BrandID $BrandID
     */
    public $BrandID = null;

    /**
     * @var string $BookingCodeList
     */
    public $BookingCodeList = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @var \DateTime $DepartureTime
     */
    public $DepartureTime = null;

    /**
     * @var \DateTime $ArrivalTime
     */
    public $ArrivalTime = null;

    /**
     * @var typeEquipment $Equipment
     */
    public $Equipment = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    public $ClassOfService = null;

    /**
     * @var string $CabinClass
     */
    public $CabinClass = null;

    /**
     * @var typeCarrier $OperatingCarrier
     */
    public $OperatingCarrier = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    public $FlightNumber = null;

    /**
     * @param PassengerDetailsRef $PassengerDetailsRef
     * @param BrandID $BrandID
     * @param typeRef $Key
     * @param typeProviderCode $ProviderCode
     * @param typeCarrier $Carrier
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param \DateTime $DepartureTime
     * @param \DateTime $ArrivalTime
     * @param typeEquipment $Equipment
     * @param typeClassOfService $ClassOfService
     * @param string $CabinClass
     * @param typeCarrier $OperatingCarrier
     * @param typeFlightNumber $FlightNumber
     */
    public function __construct($PassengerDetailsRef = null, $BrandID = null, $Key = null, $ProviderCode = null, $Carrier = null, $Origin = null, $Destination = null, \DateTime $DepartureTime = null, \DateTime $ArrivalTime = null, $Equipment = null, $ClassOfService = null, $CabinClass = null, $OperatingCarrier = null, $FlightNumber = null)
    {
      $this->PassengerDetailsRef = $PassengerDetailsRef;
      $this->BrandID = $BrandID;
      $this->Key = $Key;
      $this->ProviderCode = $ProviderCode;
      $this->Carrier = $Carrier;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime ? $DepartureTime->format(\DateTime::ATOM) : null;
      $this->ArrivalTime = $ArrivalTime ? $ArrivalTime->format(\DateTime::ATOM) : null;
      $this->Equipment = $Equipment;
      $this->ClassOfService = $ClassOfService;
      $this->CabinClass = $CabinClass;
      $this->OperatingCarrier = $OperatingCarrier;
      $this->FlightNumber = $FlightNumber;
    }

    /**
     * @return PassengerDetailsRef
     */
    public function getPassengerDetailsRef()
    {
      return $this->PassengerDetailsRef;
    }

    /**
     * @param PassengerDetailsRef $PassengerDetailsRef
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setPassengerDetailsRef($PassengerDetailsRef)
    {
      $this->PassengerDetailsRef = $PassengerDetailsRef;
      return $this;
    }

    /**
     * @return BrandID
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param BrandID $BrandID
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCodeList()
    {
      return $this->BookingCodeList;
    }

    /**
     * @param string $BookingCodeList
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setBookingCodeList($BookingCodeList)
    {
      $this->BookingCodeList = $BookingCodeList;
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
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
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
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
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
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureTime()
    {
      if ($this->DepartureTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureTime
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setDepartureTime(\DateTime $DepartureTime)
    {
      $this->DepartureTime = $DepartureTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArrivalTime()
    {
      if ($this->ArrivalTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalTime
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setArrivalTime(\DateTime $ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeEquipment
     */
    public function getEquipment()
    {
      return $this->Equipment;
    }

    /**
     * @param typeEquipment $Equipment
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
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
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getOperatingCarrier()
    {
      return $this->OperatingCarrier;
    }

    /**
     * @param typeCarrier $OperatingCarrier
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setOperatingCarrier($OperatingCarrier)
    {
      $this->OperatingCarrier = $OperatingCarrier;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \FilippoToso\Travelport\Air\AirSegmentDetails
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}
