<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CodeshareInfo
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var typeCarrier $OperatingCarrier
     */
    public $OperatingCarrier = null;

    /**
     * @var typeFlightNumber $OperatingFlightNumber
     */
    public $OperatingFlightNumber = null;

    /**
     * @param string $_
     * @param typeCarrier $OperatingCarrier
     * @param typeFlightNumber $OperatingFlightNumber
     */
    public function __construct($_ = null, $OperatingCarrier = null, $OperatingFlightNumber = null)
    {
      $this->_ = $_;
      $this->OperatingCarrier = $OperatingCarrier;
      $this->OperatingFlightNumber = $OperatingFlightNumber;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\UniversalRecord\CodeshareInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\UniversalRecord\CodeshareInfo
     */
    public function setOperatingCarrier($OperatingCarrier)
    {
      $this->OperatingCarrier = $OperatingCarrier;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getOperatingFlightNumber()
    {
      return $this->OperatingFlightNumber;
    }

    /**
     * @param typeFlightNumber $OperatingFlightNumber
     * @return \FilippoToso\Travelport\UniversalRecord\CodeshareInfo
     */
    public function setOperatingFlightNumber($OperatingFlightNumber)
    {
      $this->OperatingFlightNumber = $OperatingFlightNumber;
      return $this;
    }

}
