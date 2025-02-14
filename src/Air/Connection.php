<?php

namespace FilippoToso\Travelport\Air;

class Connection
{

    /**
     * @var FareNote $FareNote
     */
    public $FareNote = null;

    /**
     * @var boolean $ChangeOfPlane
     */
    public $ChangeOfPlane = null;

    /**
     * @var boolean $ChangeOfTerminal
     */
    public $ChangeOfTerminal = null;

    /**
     * @var boolean $ChangeOfAirport
     */
    public $ChangeOfAirport = null;

    /**
     * @var boolean $StopOver
     */
    public $StopOver = null;

    /**
     * @var int $MinConnectionTime
     */
    public $MinConnectionTime = null;

    /**
     * @var int $Duration
     */
    public $Duration = null;

    /**
     * @var int $SegmentIndex
     */
    public $SegmentIndex = null;

    /**
     * @var int $FlightDetailsIndex
     */
    public $FlightDetailsIndex = null;

    /**
     * @var typeIgnoreStopOver $IncludeStopOverToFareQuote
     */
    public $IncludeStopOverToFareQuote = null;

    /**
     * @param FareNote $FareNote
     * @param boolean $ChangeOfPlane
     * @param boolean $ChangeOfTerminal
     * @param boolean $ChangeOfAirport
     * @param boolean $StopOver
     * @param int $MinConnectionTime
     * @param int $Duration
     * @param int $SegmentIndex
     * @param int $FlightDetailsIndex
     * @param typeIgnoreStopOver $IncludeStopOverToFareQuote
     */
    public function __construct($FareNote = null, $ChangeOfPlane = null, $ChangeOfTerminal = null, $ChangeOfAirport = null, $StopOver = null, $MinConnectionTime = null, $Duration = null, $SegmentIndex = null, $FlightDetailsIndex = null, $IncludeStopOverToFareQuote = null)
    {
      $this->FareNote = $FareNote;
      $this->ChangeOfPlane = $ChangeOfPlane;
      $this->ChangeOfTerminal = $ChangeOfTerminal;
      $this->ChangeOfAirport = $ChangeOfAirport;
      $this->StopOver = $StopOver;
      $this->MinConnectionTime = $MinConnectionTime;
      $this->Duration = $Duration;
      $this->SegmentIndex = $SegmentIndex;
      $this->FlightDetailsIndex = $FlightDetailsIndex;
      $this->IncludeStopOverToFareQuote = $IncludeStopOverToFareQuote;
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
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setFareNote($FareNote)
    {
      $this->FareNote = $FareNote;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangeOfPlane()
    {
      return $this->ChangeOfPlane;
    }

    /**
     * @param boolean $ChangeOfPlane
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setChangeOfPlane($ChangeOfPlane)
    {
      $this->ChangeOfPlane = $ChangeOfPlane;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangeOfTerminal()
    {
      return $this->ChangeOfTerminal;
    }

    /**
     * @param boolean $ChangeOfTerminal
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setChangeOfTerminal($ChangeOfTerminal)
    {
      $this->ChangeOfTerminal = $ChangeOfTerminal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangeOfAirport()
    {
      return $this->ChangeOfAirport;
    }

    /**
     * @param boolean $ChangeOfAirport
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setChangeOfAirport($ChangeOfAirport)
    {
      $this->ChangeOfAirport = $ChangeOfAirport;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopOver()
    {
      return $this->StopOver;
    }

    /**
     * @param boolean $StopOver
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setStopOver($StopOver)
    {
      $this->StopOver = $StopOver;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinConnectionTime()
    {
      return $this->MinConnectionTime;
    }

    /**
     * @param int $MinConnectionTime
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setMinConnectionTime($MinConnectionTime)
    {
      $this->MinConnectionTime = $MinConnectionTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param int $Duration
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentIndex()
    {
      return $this->SegmentIndex;
    }

    /**
     * @param int $SegmentIndex
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setSegmentIndex($SegmentIndex)
    {
      $this->SegmentIndex = $SegmentIndex;
      return $this;
    }

    /**
     * @return int
     */
    public function getFlightDetailsIndex()
    {
      return $this->FlightDetailsIndex;
    }

    /**
     * @param int $FlightDetailsIndex
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setFlightDetailsIndex($FlightDetailsIndex)
    {
      $this->FlightDetailsIndex = $FlightDetailsIndex;
      return $this;
    }

    /**
     * @return typeIgnoreStopOver
     */
    public function getIncludeStopOverToFareQuote()
    {
      return $this->IncludeStopOverToFareQuote;
    }

    /**
     * @param typeIgnoreStopOver $IncludeStopOverToFareQuote
     * @return \FilippoToso\Travelport\Air\Connection
     */
    public function setIncludeStopOverToFareQuote($IncludeStopOverToFareQuote)
    {
      $this->IncludeStopOverToFareQuote = $IncludeStopOverToFareQuote;
      return $this;
    }

}
