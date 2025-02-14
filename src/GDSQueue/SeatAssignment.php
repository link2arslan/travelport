<?php

namespace FilippoToso\Travelport\GDSQueue;

class SeatAssignment
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeStatusCode $Status
     */
    public $Status = null;

    /**
     * @var string $Seat
     */
    public $Seat = null;

    /**
     * @var typeSeatTypeCode $SeatTypeCode
     */
    public $SeatTypeCode = null;

    /**
     * @var typeRef $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @var typeRef $FlightDetailsRef
     */
    public $FlightDetailsRef = null;

    /**
     * @var string $RailCoachNumber
     */
    public $RailCoachNumber = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param typeStatusCode $Status
     * @param string $Seat
     * @param typeSeatTypeCode $SeatTypeCode
     * @param typeRef $SegmentRef
     * @param typeRef $FlightDetailsRef
     * @param string $RailCoachNumber
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $Status = null, $Seat = null, $SeatTypeCode = null, $SegmentRef = null, $FlightDetailsRef = null, $RailCoachNumber = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->Status = $Status;
      $this->Seat = $Seat;
      $this->SeatTypeCode = $SeatTypeCode;
      $this->SegmentRef = $SegmentRef;
      $this->FlightDetailsRef = $FlightDetailsRef;
      $this->RailCoachNumber = $RailCoachNumber;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeStatusCode
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeStatusCode $Status
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeat()
    {
      return $this->Seat;
    }

    /**
     * @param string $Seat
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setSeat($Seat)
    {
      $this->Seat = $Seat;
      return $this;
    }

    /**
     * @return typeSeatTypeCode
     */
    public function getSeatTypeCode()
    {
      return $this->SeatTypeCode;
    }

    /**
     * @param typeSeatTypeCode $SeatTypeCode
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setSeatTypeCode($SeatTypeCode)
    {
      $this->SeatTypeCode = $SeatTypeCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFlightDetailsRef()
    {
      return $this->FlightDetailsRef;
    }

    /**
     * @param typeRef $FlightDetailsRef
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setFlightDetailsRef($FlightDetailsRef)
    {
      $this->FlightDetailsRef = $FlightDetailsRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getRailCoachNumber()
    {
      return $this->RailCoachNumber;
    }

    /**
     * @param string $RailCoachNumber
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setRailCoachNumber($RailCoachNumber)
    {
      $this->RailCoachNumber = $RailCoachNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
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
     * @return \FilippoToso\Travelport\GDSQueue\SeatAssignment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
