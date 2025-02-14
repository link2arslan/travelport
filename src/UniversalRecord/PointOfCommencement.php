<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PointOfCommencement
{

    /**
     * @var typeIATACode $CityOrAirportCode
     */
    public $CityOrAirportCode = null;

    /**
     * @var string $Time
     */
    public $Time = null;

    /**
     * @param typeIATACode $CityOrAirportCode
     * @param string $Time
     */
    public function __construct($CityOrAirportCode = null, $Time = null)
    {
      $this->CityOrAirportCode = $CityOrAirportCode;
      $this->Time = $Time;
    }

    /**
     * @return typeIATACode
     */
    public function getCityOrAirportCode()
    {
      return $this->CityOrAirportCode;
    }

    /**
     * @param typeIATACode $CityOrAirportCode
     * @return \FilippoToso\Travelport\UniversalRecord\PointOfCommencement
     */
    public function setCityOrAirportCode($CityOrAirportCode)
    {
      $this->CityOrAirportCode = $CityOrAirportCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param string $Time
     * @return \FilippoToso\Travelport\UniversalRecord\PointOfCommencement
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
