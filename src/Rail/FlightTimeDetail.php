<?php

namespace FilippoToso\Travelport\Rail;

class FlightTimeDetail
{

    /**
     * @var typeDaysOfOperation $DaysOfOperation
     */
    public $DaysOfOperation = null;

    /**
     * @var Connection $Connection
     */
    public $Connection = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var string $VendorCode
     */
    public $VendorCode = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    public $FlightNumber = null;

    /**
     * @var typeAirport $Origin
     */
    public $Origin = null;

    /**
     * @var typeAirport $Destination
     */
    public $Destination = null;

    /**
     * @var time $DepartureTime
     */
    public $DepartureTime = null;

    /**
     * @var time $ArrivalTime
     */
    public $ArrivalTime = null;

    /**
     * @var int $StopCount
     */
    public $StopCount = null;

    /**
     * @var typeEquipment $Equipment
     */
    public $Equipment = null;

    /**
     * @var date $ScheduleStartDate
     */
    public $ScheduleStartDate = null;

    /**
     * @var date $ScheduleEndDate
     */
    public $ScheduleEndDate = null;

    /**
     * @var boolean $DisplayOption
     */
    public $DisplayOption = null;

    /**
     * @var int $OnTimePerformance
     */
    public $OnTimePerformance = null;

    /**
     * @var int $DayChange
     */
    public $DayChange = null;

    /**
     * @var int $JourneyTime
     */
    public $JourneyTime = null;

    /**
     * @var int $FlightTime
     */
    public $FlightTime = null;

    /**
     * @var string $StartTerminal
     */
    public $StartTerminal = null;

    /**
     * @var string $EndTerminal
     */
    public $EndTerminal = null;

    /**
     * @var typeIATACode $FirstIntermediateStop
     */
    public $FirstIntermediateStop = null;

    /**
     * @var typeIATACode $LastIntermediateStop
     */
    public $LastIntermediateStop = null;

    /**
     * @var anonymous1007 $InsideAvailability
     */
    public $InsideAvailability = null;

    /**
     * @var anonymous1008 $SecureSell
     */
    public $SecureSell = null;

    /**
     * @var typeAvailabilitySource $AvailabilitySource
     */
    public $AvailabilitySource = null;

    /**
     * @param Connection $Connection
     * @param typeRef $Key
     * @param string $VendorCode
     * @param typeFlightNumber $FlightNumber
     * @param typeAirport $Origin
     * @param typeAirport $Destination
     * @param time $DepartureTime
     * @param time $ArrivalTime
     * @param int $StopCount
     * @param typeEquipment $Equipment
     * @param date $ScheduleStartDate
     * @param date $ScheduleEndDate
     * @param boolean $DisplayOption
     * @param int $OnTimePerformance
     * @param int $DayChange
     * @param int $JourneyTime
     * @param int $FlightTime
     * @param string $StartTerminal
     * @param string $EndTerminal
     * @param typeIATACode $FirstIntermediateStop
     * @param typeIATACode $LastIntermediateStop
     * @param anonymous1007 $InsideAvailability
     * @param anonymous1008 $SecureSell
     * @param typeAvailabilitySource $AvailabilitySource
     */
    public function __construct($Connection = null, $Key = null, $VendorCode = null, $FlightNumber = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null, $StopCount = null, $Equipment = null, $ScheduleStartDate = null, $ScheduleEndDate = null, $DisplayOption = null, $OnTimePerformance = null, $DayChange = null, $JourneyTime = null, $FlightTime = null, $StartTerminal = null, $EndTerminal = null, $FirstIntermediateStop = null, $LastIntermediateStop = null, $InsideAvailability = null, $SecureSell = null, $AvailabilitySource = null)
    {
      $this->Connection = $Connection;
      $this->Key = $Key;
      $this->VendorCode = $VendorCode;
      $this->FlightNumber = $FlightNumber;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->StopCount = $StopCount;
      $this->Equipment = $Equipment;
      $this->ScheduleStartDate = $ScheduleStartDate;
      $this->ScheduleEndDate = $ScheduleEndDate;
      $this->DisplayOption = $DisplayOption;
      $this->OnTimePerformance = $OnTimePerformance;
      $this->DayChange = $DayChange;
      $this->JourneyTime = $JourneyTime;
      $this->FlightTime = $FlightTime;
      $this->StartTerminal = $StartTerminal;
      $this->EndTerminal = $EndTerminal;
      $this->FirstIntermediateStop = $FirstIntermediateStop;
      $this->LastIntermediateStop = $LastIntermediateStop;
      $this->InsideAvailability = $InsideAvailability;
      $this->SecureSell = $SecureSell;
      $this->AvailabilitySource = $AvailabilitySource;
    }

    /**
     * @return typeDaysOfOperation
     */
    public function getDaysOfOperation()
    {
      return $this->DaysOfOperation;
    }

    /**
     * @param typeDaysOfOperation $DaysOfOperation
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDaysOfOperation($DaysOfOperation)
    {
      $this->DaysOfOperation = $DaysOfOperation;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param Connection $Connection
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param string $VendorCode
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeAirport $Origin
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeAirport $Destination
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return time
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param time $DepartureTime
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return time
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param time $ArrivalTime
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getStopCount()
    {
      return $this->StopCount;
    }

    /**
     * @param int $StopCount
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setStopCount($StopCount)
    {
      $this->StopCount = $StopCount;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
      return $this;
    }

    /**
     * @return date
     */
    public function getScheduleStartDate()
    {
      return $this->ScheduleStartDate;
    }

    /**
     * @param date $ScheduleStartDate
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setScheduleStartDate($ScheduleStartDate)
    {
      $this->ScheduleStartDate = $ScheduleStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getScheduleEndDate()
    {
      return $this->ScheduleEndDate;
    }

    /**
     * @param date $ScheduleEndDate
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setScheduleEndDate($ScheduleEndDate)
    {
      $this->ScheduleEndDate = $ScheduleEndDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayOption()
    {
      return $this->DisplayOption;
    }

    /**
     * @param boolean $DisplayOption
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDisplayOption($DisplayOption)
    {
      $this->DisplayOption = $DisplayOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getOnTimePerformance()
    {
      return $this->OnTimePerformance;
    }

    /**
     * @param int $OnTimePerformance
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setOnTimePerformance($OnTimePerformance)
    {
      $this->OnTimePerformance = $OnTimePerformance;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayChange()
    {
      return $this->DayChange;
    }

    /**
     * @param int $DayChange
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDayChange($DayChange)
    {
      $this->DayChange = $DayChange;
      return $this;
    }

    /**
     * @return int
     */
    public function getJourneyTime()
    {
      return $this->JourneyTime;
    }

    /**
     * @param int $JourneyTime
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setJourneyTime($JourneyTime)
    {
      $this->JourneyTime = $JourneyTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getFlightTime()
    {
      return $this->FlightTime;
    }

    /**
     * @param int $FlightTime
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setFlightTime($FlightTime)
    {
      $this->FlightTime = $FlightTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTerminal()
    {
      return $this->StartTerminal;
    }

    /**
     * @param string $StartTerminal
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setStartTerminal($StartTerminal)
    {
      $this->StartTerminal = $StartTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTerminal()
    {
      return $this->EndTerminal;
    }

    /**
     * @param string $EndTerminal
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setEndTerminal($EndTerminal)
    {
      $this->EndTerminal = $EndTerminal;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getFirstIntermediateStop()
    {
      return $this->FirstIntermediateStop;
    }

    /**
     * @param typeIATACode $FirstIntermediateStop
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setFirstIntermediateStop($FirstIntermediateStop)
    {
      $this->FirstIntermediateStop = $FirstIntermediateStop;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLastIntermediateStop()
    {
      return $this->LastIntermediateStop;
    }

    /**
     * @param typeIATACode $LastIntermediateStop
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setLastIntermediateStop($LastIntermediateStop)
    {
      $this->LastIntermediateStop = $LastIntermediateStop;
      return $this;
    }

    /**
     * @return anonymous1007
     */
    public function getInsideAvailability()
    {
      return $this->InsideAvailability;
    }

    /**
     * @param anonymous1007 $InsideAvailability
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setInsideAvailability($InsideAvailability)
    {
      $this->InsideAvailability = $InsideAvailability;
      return $this;
    }

    /**
     * @return anonymous1008
     */
    public function getSecureSell()
    {
      return $this->SecureSell;
    }

    /**
     * @param anonymous1008 $SecureSell
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setSecureSell($SecureSell)
    {
      $this->SecureSell = $SecureSell;
      return $this;
    }

    /**
     * @return typeAvailabilitySource
     */
    public function getAvailabilitySource()
    {
      return $this->AvailabilitySource;
    }

    /**
     * @param typeAvailabilitySource $AvailabilitySource
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setAvailabilitySource($AvailabilitySource)
    {
      $this->AvailabilitySource = $AvailabilitySource;
      return $this;
    }

}
