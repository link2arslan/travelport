<?php

namespace FilippoToso\Travelport\Vehicle;

class typeLocation
{

    /**
     * @var Airport $Airport
     */
    public $Airport = null;

    /**
     * @var City $City
     */
    public $City = null;

    /**
     * @var CityOrAirport $CityOrAirport
     */
    public $CityOrAirport = null;

    /**
     * @param Airport $Airport
     * @param City $City
     * @param CityOrAirport $CityOrAirport
     */
    public function __construct($Airport = null, $City = null, $CityOrAirport = null)
    {
      $this->Airport = $Airport;
      $this->City = $City;
      $this->CityOrAirport = $CityOrAirport;
    }

    /**
     * @return Airport
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport $Airport
     * @return \FilippoToso\Travelport\Vehicle\typeLocation
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

    /**
     * @return City
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City $City
     * @return \FilippoToso\Travelport\Vehicle\typeLocation
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return CityOrAirport
     */
    public function getCityOrAirport()
    {
      return $this->CityOrAirport;
    }

    /**
     * @param CityOrAirport $CityOrAirport
     * @return \FilippoToso\Travelport\Vehicle\typeLocation
     */
    public function setCityOrAirport($CityOrAirport)
    {
      $this->CityOrAirport = $CityOrAirport;
      return $this;
    }

}
