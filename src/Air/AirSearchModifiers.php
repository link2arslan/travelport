<?php

namespace FilippoToso\Travelport\Air;

class AirSearchModifiers
{

    /**
     * @var DisfavoredProviders $DisfavoredProviders
     */
    public $DisfavoredProviders = null;

    /**
     * @var PreferredProviders $PreferredProviders
     */
    public $PreferredProviders = null;

    /**
     * @var DisfavoredCarriers $DisfavoredCarriers
     */
    public $DisfavoredCarriers = null;

    /**
     * @var PermittedCarriers $PermittedCarriers
     */
    public $PermittedCarriers = null;

    /**
     * @var ProhibitedCarriers $ProhibitedCarriers
     */
    public $ProhibitedCarriers = null;

    /**
     * @var PreferredCarriers $PreferredCarriers
     */
    public $PreferredCarriers = null;

    /**
     * @var PermittedCabins $PermittedCabins
     */
    public $PermittedCabins = null;

    /**
     * @var PreferredCabins $PreferredCabins
     */
    public $PreferredCabins = null;

    /**
     * @var PreferredAlliances $PreferredAlliances
     */
    public $PreferredAlliances = null;

    /**
     * @var DisfavoredAlliances $DisfavoredAlliances
     */
    public $DisfavoredAlliances = null;

    /**
     * @var PermittedBookingCodes $PermittedBookingCodes
     */
    public $PermittedBookingCodes = null;

    /**
     * @var PreferredBookingCodes $PreferredBookingCodes
     */
    public $PreferredBookingCodes = null;

    /**
     * @var ProhibitedBookingCodes $ProhibitedBookingCodes
     */
    public $ProhibitedBookingCodes = null;

    /**
     * @var FlightType $FlightType
     */
    public $FlightType = null;

    /**
     * @var MaxLayoverDurationType $MaxLayoverDuration
     */
    public $MaxLayoverDuration = null;

    /**
     * @var typeNativeSearchModifier $NativeSearchModifier
     */
    public $NativeSearchModifier = null;

    /**
     * @var typeDistance $DistanceType
     */
    public $DistanceType = null;

    /**
     * @var boolean $IncludeFlightDetails
     */
    public $IncludeFlightDetails = null;

    /**
     * @var boolean $AllowChangeOfAirport
     */
    public $AllowChangeOfAirport = null;

    /**
     * @var boolean $ProhibitOvernightLayovers
     */
    public $ProhibitOvernightLayovers = null;

    /**
     * @var int $MaxSolutions
     */
    public $MaxSolutions = null;

    /**
     * @var int $MaxConnectionTime
     */
    public $MaxConnectionTime = null;

    /**
     * @var boolean $SearchWeekends
     */
    public $SearchWeekends = null;

    /**
     * @var boolean $IncludeExtraSolutions
     */
    public $IncludeExtraSolutions = null;

    /**
     * @var boolean $ProhibitMultiAirportConnection
     */
    public $ProhibitMultiAirportConnection = null;

    /**
     * @var boolean $PreferNonStop
     */
    public $PreferNonStop = null;

    /**
     * @var anonymous684 $OrderBy
     */
    public $OrderBy = null;

    /**
     * @var boolean $ExcludeOpenJawAirport
     */
    public $ExcludeOpenJawAirport = null;

    /**
     * @var boolean $ExcludeGroundTransportation
     */
    public $ExcludeGroundTransportation = null;

    /**
     * @var typeMaxJourneyTime $MaxJourneyTime
     */
    public $MaxJourneyTime = null;

    /**
     * @var boolean $JetServiceOnly
     */
    public $JetServiceOnly = null;

    /**
     * @param PermittedCarriers $PermittedCarriers
     * @param ProhibitedCarriers $ProhibitedCarriers
     * @param PreferredCarriers $PreferredCarriers
     * @param PermittedCabins $PermittedCabins
     * @param PreferredCabins $PreferredCabins
     * @param PreferredBookingCodes $PreferredBookingCodes
     * @param FlightType $FlightType
     * @param typeDistance $DistanceType
     * @param boolean $IncludeFlightDetails
     * @param boolean $AllowChangeOfAirport
     * @param boolean $ProhibitOvernightLayovers
     * @param int $MaxSolutions
     * @param int $MaxConnectionTime
     * @param boolean $SearchWeekends
     * @param boolean $IncludeExtraSolutions
     * @param boolean $ProhibitMultiAirportConnection
     * @param boolean $PreferNonStop
     * @param anonymous684 $OrderBy
     * @param boolean $ExcludeOpenJawAirport
     * @param boolean $ExcludeGroundTransportation
     * @param typeMaxJourneyTime $MaxJourneyTime
     * @param boolean $JetServiceOnly
     */
    public function __construct($PermittedCarriers = null, $ProhibitedCarriers = null, $PreferredCarriers = null, $PermittedCabins = null, $PreferredCabins = null, $PreferredBookingCodes = null, $FlightType = null, $DistanceType = null, $IncludeFlightDetails = null, $AllowChangeOfAirport = null, $ProhibitOvernightLayovers = null, $MaxSolutions = null, $MaxConnectionTime = null, $SearchWeekends = null, $IncludeExtraSolutions = null, $ProhibitMultiAirportConnection = null, $PreferNonStop = null, $OrderBy = null, $ExcludeOpenJawAirport = null, $ExcludeGroundTransportation = null, $MaxJourneyTime = null, $JetServiceOnly = null)
    {
      $this->PermittedCarriers = $PermittedCarriers;
      $this->ProhibitedCarriers = $ProhibitedCarriers;
      $this->PreferredCarriers = $PreferredCarriers;
      $this->PermittedCabins = $PermittedCabins;
      $this->PreferredCabins = $PreferredCabins;
      $this->PreferredBookingCodes = $PreferredBookingCodes;
      $this->FlightType = $FlightType;
      $this->DistanceType = $DistanceType;
      $this->IncludeFlightDetails = $IncludeFlightDetails;
      $this->AllowChangeOfAirport = $AllowChangeOfAirport;
      $this->ProhibitOvernightLayovers = $ProhibitOvernightLayovers;
      $this->MaxSolutions = $MaxSolutions;
      $this->MaxConnectionTime = $MaxConnectionTime;
      $this->SearchWeekends = $SearchWeekends;
      $this->IncludeExtraSolutions = $IncludeExtraSolutions;
      $this->ProhibitMultiAirportConnection = $ProhibitMultiAirportConnection;
      $this->PreferNonStop = $PreferNonStop;
      $this->OrderBy = $OrderBy;
      $this->ExcludeOpenJawAirport = $ExcludeOpenJawAirport;
      $this->ExcludeGroundTransportation = $ExcludeGroundTransportation;
      $this->MaxJourneyTime = $MaxJourneyTime;
      $this->JetServiceOnly = $JetServiceOnly;
    }

    /**
     * @return DisfavoredProviders
     */
    public function getDisfavoredProviders()
    {
      return $this->DisfavoredProviders;
    }

    /**
     * @param DisfavoredProviders $DisfavoredProviders
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setDisfavoredProviders($DisfavoredProviders)
    {
      $this->DisfavoredProviders = $DisfavoredProviders;
      return $this;
    }

    /**
     * @return PreferredProviders
     */
    public function getPreferredProviders()
    {
      return $this->PreferredProviders;
    }

    /**
     * @param PreferredProviders $PreferredProviders
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPreferredProviders($PreferredProviders)
    {
      $this->PreferredProviders = $PreferredProviders;
      return $this;
    }

    /**
     * @return DisfavoredCarriers
     */
    public function getDisfavoredCarriers()
    {
      return $this->DisfavoredCarriers;
    }

    /**
     * @param DisfavoredCarriers $DisfavoredCarriers
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setDisfavoredCarriers($DisfavoredCarriers)
    {
      $this->DisfavoredCarriers = $DisfavoredCarriers;
      return $this;
    }

    /**
     * @return PermittedCarriers
     */
    public function getPermittedCarriers()
    {
      return $this->PermittedCarriers;
    }

    /**
     * @param PermittedCarriers $PermittedCarriers
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPermittedCarriers($PermittedCarriers)
    {
      $this->PermittedCarriers = $PermittedCarriers;
      return $this;
    }

    /**
     * @return ProhibitedCarriers
     */
    public function getProhibitedCarriers()
    {
      return $this->ProhibitedCarriers;
    }

    /**
     * @param ProhibitedCarriers $ProhibitedCarriers
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setProhibitedCarriers($ProhibitedCarriers)
    {
      $this->ProhibitedCarriers = $ProhibitedCarriers;
      return $this;
    }

    /**
     * @return PreferredCarriers
     */
    public function getPreferredCarriers()
    {
      return $this->PreferredCarriers;
    }

    /**
     * @param PreferredCarriers $PreferredCarriers
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPreferredCarriers($PreferredCarriers)
    {
      $this->PreferredCarriers = $PreferredCarriers;
      return $this;
    }

    /**
     * @return PermittedCabins
     */
    public function getPermittedCabins()
    {
      return $this->PermittedCabins;
    }

    /**
     * @param PermittedCabins $PermittedCabins
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPermittedCabins($PermittedCabins)
    {
      $this->PermittedCabins = $PermittedCabins;
      return $this;
    }

    /**
     * @return PreferredCabins
     */
    public function getPreferredCabins()
    {
      return $this->PreferredCabins;
    }

    /**
     * @param PreferredCabins $PreferredCabins
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPreferredCabins($PreferredCabins)
    {
      $this->PreferredCabins = $PreferredCabins;
      return $this;
    }

    /**
     * @return PreferredAlliances
     */
    public function getPreferredAlliances()
    {
      return $this->PreferredAlliances;
    }

    /**
     * @param PreferredAlliances $PreferredAlliances
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPreferredAlliances($PreferredAlliances)
    {
      $this->PreferredAlliances = $PreferredAlliances;
      return $this;
    }

    /**
     * @return DisfavoredAlliances
     */
    public function getDisfavoredAlliances()
    {
      return $this->DisfavoredAlliances;
    }

    /**
     * @param DisfavoredAlliances $DisfavoredAlliances
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setDisfavoredAlliances($DisfavoredAlliances)
    {
      $this->DisfavoredAlliances = $DisfavoredAlliances;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPermittedBookingCodes($PermittedBookingCodes)
    {
      $this->PermittedBookingCodes = $PermittedBookingCodes;
      return $this;
    }

    /**
     * @return PreferredBookingCodes
     */
    public function getPreferredBookingCodes()
    {
      return $this->PreferredBookingCodes;
    }

    /**
     * @param PreferredBookingCodes $PreferredBookingCodes
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPreferredBookingCodes($PreferredBookingCodes)
    {
      $this->PreferredBookingCodes = $PreferredBookingCodes;
      return $this;
    }

    /**
     * @return ProhibitedBookingCodes
     */
    public function getProhibitedBookingCodes()
    {
      return $this->ProhibitedBookingCodes;
    }

    /**
     * @param ProhibitedBookingCodes $ProhibitedBookingCodes
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setProhibitedBookingCodes($ProhibitedBookingCodes)
    {
      $this->ProhibitedBookingCodes = $ProhibitedBookingCodes;
      return $this;
    }

    /**
     * @return FlightType
     */
    public function getFlightType()
    {
      return $this->FlightType;
    }

    /**
     * @param FlightType $FlightType
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
      return $this;
    }

    /**
     * @return MaxLayoverDurationType
     */
    public function getMaxLayoverDuration()
    {
      return $this->MaxLayoverDuration;
    }

    /**
     * @param MaxLayoverDurationType $MaxLayoverDuration
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setMaxLayoverDuration($MaxLayoverDuration)
    {
      $this->MaxLayoverDuration = $MaxLayoverDuration;
      return $this;
    }

    /**
     * @return typeNativeSearchModifier
     */
    public function getNativeSearchModifier()
    {
      return $this->NativeSearchModifier;
    }

    /**
     * @param typeNativeSearchModifier $NativeSearchModifier
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setNativeSearchModifier($NativeSearchModifier)
    {
      $this->NativeSearchModifier = $NativeSearchModifier;
      return $this;
    }

    /**
     * @return typeDistance
     */
    public function getDistanceType()
    {
      return $this->DistanceType;
    }

    /**
     * @param typeDistance $DistanceType
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setDistanceType($DistanceType)
    {
      $this->DistanceType = $DistanceType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFlightDetails()
    {
      return $this->IncludeFlightDetails;
    }

    /**
     * @param boolean $IncludeFlightDetails
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setIncludeFlightDetails($IncludeFlightDetails)
    {
      $this->IncludeFlightDetails = $IncludeFlightDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowChangeOfAirport()
    {
      return $this->AllowChangeOfAirport;
    }

    /**
     * @param boolean $AllowChangeOfAirport
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setAllowChangeOfAirport($AllowChangeOfAirport)
    {
      $this->AllowChangeOfAirport = $AllowChangeOfAirport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitOvernightLayovers()
    {
      return $this->ProhibitOvernightLayovers;
    }

    /**
     * @param boolean $ProhibitOvernightLayovers
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setProhibitOvernightLayovers($ProhibitOvernightLayovers)
    {
      $this->ProhibitOvernightLayovers = $ProhibitOvernightLayovers;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxSolutions()
    {
      return $this->MaxSolutions;
    }

    /**
     * @param int $MaxSolutions
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setMaxSolutions($MaxSolutions)
    {
      $this->MaxSolutions = $MaxSolutions;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxConnectionTime()
    {
      return $this->MaxConnectionTime;
    }

    /**
     * @param int $MaxConnectionTime
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setMaxConnectionTime($MaxConnectionTime)
    {
      $this->MaxConnectionTime = $MaxConnectionTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchWeekends()
    {
      return $this->SearchWeekends;
    }

    /**
     * @param boolean $SearchWeekends
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setSearchWeekends($SearchWeekends)
    {
      $this->SearchWeekends = $SearchWeekends;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeExtraSolutions()
    {
      return $this->IncludeExtraSolutions;
    }

    /**
     * @param boolean $IncludeExtraSolutions
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setIncludeExtraSolutions($IncludeExtraSolutions)
    {
      $this->IncludeExtraSolutions = $IncludeExtraSolutions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitMultiAirportConnection()
    {
      return $this->ProhibitMultiAirportConnection;
    }

    /**
     * @param boolean $ProhibitMultiAirportConnection
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setProhibitMultiAirportConnection($ProhibitMultiAirportConnection)
    {
      $this->ProhibitMultiAirportConnection = $ProhibitMultiAirportConnection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferNonStop()
    {
      return $this->PreferNonStop;
    }

    /**
     * @param boolean $PreferNonStop
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setPreferNonStop($PreferNonStop)
    {
      $this->PreferNonStop = $PreferNonStop;
      return $this;
    }

    /**
     * @return anonymous684
     */
    public function getOrderBy()
    {
      return $this->OrderBy;
    }

    /**
     * @param anonymous684 $OrderBy
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setOrderBy($OrderBy)
    {
      $this->OrderBy = $OrderBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeOpenJawAirport()
    {
      return $this->ExcludeOpenJawAirport;
    }

    /**
     * @param boolean $ExcludeOpenJawAirport
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setExcludeOpenJawAirport($ExcludeOpenJawAirport)
    {
      $this->ExcludeOpenJawAirport = $ExcludeOpenJawAirport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeGroundTransportation()
    {
      return $this->ExcludeGroundTransportation;
    }

    /**
     * @param boolean $ExcludeGroundTransportation
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setExcludeGroundTransportation($ExcludeGroundTransportation)
    {
      $this->ExcludeGroundTransportation = $ExcludeGroundTransportation;
      return $this;
    }

    /**
     * @return typeMaxJourneyTime
     */
    public function getMaxJourneyTime()
    {
      return $this->MaxJourneyTime;
    }

    /**
     * @param typeMaxJourneyTime $MaxJourneyTime
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setMaxJourneyTime($MaxJourneyTime)
    {
      $this->MaxJourneyTime = $MaxJourneyTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getJetServiceOnly()
    {
      return $this->JetServiceOnly;
    }

    /**
     * @param boolean $JetServiceOnly
     * @return \FilippoToso\Travelport\Air\AirSearchModifiers
     */
    public function setJetServiceOnly($JetServiceOnly)
    {
      $this->JetServiceOnly = $JetServiceOnly;
      return $this;
    }

}
