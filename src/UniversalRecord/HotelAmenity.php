<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelAmenity
{

    /**
     * @var typeAmenityLevel $Level
     */
    public $Level = null;

    /**
     * @var typeAmenityCode $AmenityCode
     */
    public $AmenityCode = null;

    /**
     * @param typeAmenityLevel $Level
     * @param typeAmenityCode $AmenityCode
     */
    public function __construct($Level = null, $AmenityCode = null)
    {
      $this->Level = $Level;
      $this->AmenityCode = $AmenityCode;
    }

    /**
     * @return typeAmenityLevel
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param typeAmenityLevel $Level
     * @return \FilippoToso\Travelport\UniversalRecord\HotelAmenity
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return typeAmenityCode
     */
    public function getAmenityCode()
    {
      return $this->AmenityCode;
    }

    /**
     * @param typeAmenityCode $AmenityCode
     * @return \FilippoToso\Travelport\UniversalRecord\HotelAmenity
     */
    public function setAmenityCode($AmenityCode)
    {
      $this->AmenityCode = $AmenityCode;
      return $this;
    }

}
