<?php

namespace FilippoToso\Travelport\GDSQueue;

class RailCoachDetails
{

    /**
     * @var string $RailCoachNumber
     */
    public $RailCoachNumber = null;

    /**
     * @var string $AvailableRailSeats
     */
    public $AvailableRailSeats = null;

    /**
     * @var boolean $RailSeatMapAvailability
     */
    public $RailSeatMapAvailability = null;

    /**
     * @param string $RailCoachNumber
     * @param string $AvailableRailSeats
     * @param boolean $RailSeatMapAvailability
     */
    public function __construct($RailCoachNumber = null, $AvailableRailSeats = null, $RailSeatMapAvailability = null)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      $this->AvailableRailSeats = $AvailableRailSeats;
      $this->RailSeatMapAvailability = $RailSeatMapAvailability;
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
     * @return \FilippoToso\Travelport\GDSQueue\RailCoachDetails
     */
    public function setRailCoachNumber($RailCoachNumber)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvailableRailSeats()
    {
      return $this->AvailableRailSeats;
    }

    /**
     * @param string $AvailableRailSeats
     * @return \FilippoToso\Travelport\GDSQueue\RailCoachDetails
     */
    public function setAvailableRailSeats($AvailableRailSeats)
    {
      $this->AvailableRailSeats = $AvailableRailSeats;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRailSeatMapAvailability()
    {
      return $this->RailSeatMapAvailability;
    }

    /**
     * @param boolean $RailSeatMapAvailability
     * @return \FilippoToso\Travelport\GDSQueue\RailCoachDetails
     */
    public function setRailSeatMapAvailability($RailSeatMapAvailability)
    {
      $this->RailSeatMapAvailability = $RailSeatMapAvailability;
      return $this;
    }

}
