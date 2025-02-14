<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailJourney
{

    /**
     * @var RailSegment $RailSegment
     */
    public $RailSegment = null;

    /**
     * @var RailSegmentRef $RailSegmentRef
     */
    public $RailSegmentRef = null;

    /**
     * @var JourneyRemark $JourneyRemark
     */
    public $JourneyRemark = null;

    /**
     * @var HostToken $HostToken
     */
    public $HostToken = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var anonymous1270 $RouteDescription
     */
    public $RouteDescription = null;

    /**
     * @var typeJourneyDirection $JourneyDirection
     */
    public $JourneyDirection = null;

    /**
     * @var int $JourneyDuration
     */
    public $JourneyDuration = null;

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
     * @var anonymous1271 $RouteReference
     */
    public $RouteReference = null;

    /**
     * @var string $Operation
     */
    public $Operation = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @var string $DepartureTime
     */
    public $DepartureTime = null;

    /**
     * @var string $ArrivalTime
     */
    public $ArrivalTime = null;

    /**
     * @var string $OriginStationName
     */
    public $OriginStationName = null;

    /**
     * @var string $DestinationStationName
     */
    public $DestinationStationName = null;

    /**
     * @var typeRailLocationCode $RailLocOrigin
     */
    public $RailLocOrigin = null;

    /**
     * @var typeRailLocationCode $RailLocDestination
     */
    public $RailLocDestination = null;

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
     * @param RailSegment $RailSegment
     * @param RailSegmentRef $RailSegmentRef
     * @param JourneyRemark $JourneyRemark
     * @param HostToken $HostToken
     * @param typeRef $Key
     * @param anonymous1270 $RouteDescription
     * @param typeJourneyDirection $JourneyDirection
     * @param int $JourneyDuration
     * @param string $Status
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $PassiveProviderReservationInfoRef
     * @param int $TravelOrder
     * @param anonymous1271 $RouteReference
     * @param string $Operation
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $DepartureTime
     * @param string $ArrivalTime
     * @param string $OriginStationName
     * @param string $DestinationStationName
     * @param typeRailLocationCode $RailLocOrigin
     * @param typeRailLocationCode $RailLocDestination
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
     */
    public function __construct($RailSegment = null, $RailSegmentRef = null, $JourneyRemark = null, $HostToken = null, $Key = null, $RouteDescription = null, $JourneyDirection = null, $JourneyDuration = null, $Status = null, $ProviderReservationInfoRef = null, $PassiveProviderReservationInfoRef = null, $TravelOrder = null, $RouteReference = null, $Operation = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null, $OriginStationName = null, $DestinationStationName = null, $RailLocOrigin = null, $RailLocDestination = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null, $ProviderCode = null, $SupplierCode = null, $ElStat = null, $KeyOverride = null)
    {
      $this->RailSegment = $RailSegment;
      $this->RailSegmentRef = $RailSegmentRef;
      $this->JourneyRemark = $JourneyRemark;
      $this->HostToken = $HostToken;
      $this->Key = $Key;
      $this->RouteDescription = $RouteDescription;
      $this->JourneyDirection = $JourneyDirection;
      $this->JourneyDuration = $JourneyDuration;
      $this->Status = $Status;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      $this->TravelOrder = $TravelOrder;
      $this->RouteReference = $RouteReference;
      $this->Operation = $Operation;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->OriginStationName = $OriginStationName;
      $this->DestinationStationName = $DestinationStationName;
      $this->RailLocOrigin = $RailLocOrigin;
      $this->RailLocDestination = $RailLocDestination;
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
    }

    /**
     * @return RailSegment
     */
    public function getRailSegment()
    {
      return $this->RailSegment;
    }

    /**
     * @param RailSegment $RailSegment
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setRailSegment($RailSegment)
    {
      $this->RailSegment = $RailSegment;
      return $this;
    }

    /**
     * @return RailSegmentRef
     */
    public function getRailSegmentRef()
    {
      return $this->RailSegmentRef;
    }

    /**
     * @param RailSegmentRef $RailSegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setRailSegmentRef($RailSegmentRef)
    {
      $this->RailSegmentRef = $RailSegmentRef;
      return $this;
    }

    /**
     * @return JourneyRemark
     */
    public function getJourneyRemark()
    {
      return $this->JourneyRemark;
    }

    /**
     * @param JourneyRemark $JourneyRemark
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setJourneyRemark($JourneyRemark)
    {
      $this->JourneyRemark = $JourneyRemark;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous1270
     */
    public function getRouteDescription()
    {
      return $this->RouteDescription;
    }

    /**
     * @param anonymous1270 $RouteDescription
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setRouteDescription($RouteDescription)
    {
      $this->RouteDescription = $RouteDescription;
      return $this;
    }

    /**
     * @return typeJourneyDirection
     */
    public function getJourneyDirection()
    {
      return $this->JourneyDirection;
    }

    /**
     * @param typeJourneyDirection $JourneyDirection
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setJourneyDirection($JourneyDirection)
    {
      $this->JourneyDirection = $JourneyDirection;
      return $this;
    }

    /**
     * @return int
     */
    public function getJourneyDuration()
    {
      return $this->JourneyDuration;
    }

    /**
     * @param int $JourneyDuration
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setJourneyDuration($JourneyDuration)
    {
      $this->JourneyDuration = $JourneyDuration;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
      return $this;
    }

    /**
     * @return anonymous1271
     */
    public function getRouteReference()
    {
      return $this->RouteReference;
    }

    /**
     * @param anonymous1271 $RouteReference
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setRouteReference($RouteReference)
    {
      $this->RouteReference = $RouteReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param string $Operation
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param string $DepartureTime
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param string $ArrivalTime
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginStationName()
    {
      return $this->OriginStationName;
    }

    /**
     * @param string $OriginStationName
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setOriginStationName($OriginStationName)
    {
      $this->OriginStationName = $OriginStationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationStationName()
    {
      return $this->DestinationStationName;
    }

    /**
     * @param string $DestinationStationName
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setDestinationStationName($DestinationStationName)
    {
      $this->DestinationStationName = $DestinationStationName;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getRailLocOrigin()
    {
      return $this->RailLocOrigin;
    }

    /**
     * @param typeRailLocationCode $RailLocOrigin
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setRailLocOrigin($RailLocOrigin)
    {
      $this->RailLocOrigin = $RailLocOrigin;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getRailLocDestination()
    {
      return $this->RailLocDestination;
    }

    /**
     * @param typeRailLocationCode $RailLocDestination
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setRailLocDestination($RailLocDestination)
    {
      $this->RailLocDestination = $RailLocDestination;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourney
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
