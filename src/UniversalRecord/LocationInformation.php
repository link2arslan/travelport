<?php

namespace FilippoToso\Travelport\UniversalRecord;

class LocationInformation
{

    /**
     * @var typeStructuredAddress $Address
     */
    public $Address = null;

    /**
     * @var typeVehicleLocation $LocationType
     */
    public $LocationType = null;

    /**
     * @var string $AreaGroup
     */
    public $AreaGroup = null;

    /**
     * @var typeIATACode $Location
     */
    public $Location = null;

    /**
     * @var typeAreaInfo $AreaType
     */
    public $AreaType = null;

    /**
     * @param typeVehicleLocation $LocationType
     * @param string $AreaGroup
     * @param typeIATACode $Location
     * @param typeAreaInfo $AreaType
     */
    public function __construct($LocationType = null, $AreaGroup = null, $Location = null, $AreaType = null)
    {
      $this->LocationType = $LocationType;
      $this->AreaGroup = $AreaGroup;
      $this->Location = $Location;
      $this->AreaType = $AreaType;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress $Address
     * @return \FilippoToso\Travelport\UniversalRecord\LocationInformation
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param typeVehicleLocation $LocationType
     * @return \FilippoToso\Travelport\UniversalRecord\LocationInformation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaGroup()
    {
      return $this->AreaGroup;
    }

    /**
     * @param string $AreaGroup
     * @return \FilippoToso\Travelport\UniversalRecord\LocationInformation
     */
    public function setAreaGroup($AreaGroup)
    {
      $this->AreaGroup = $AreaGroup;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param typeIATACode $Location
     * @return \FilippoToso\Travelport\UniversalRecord\LocationInformation
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return typeAreaInfo
     */
    public function getAreaType()
    {
      return $this->AreaType;
    }

    /**
     * @param typeAreaInfo $AreaType
     * @return \FilippoToso\Travelport\UniversalRecord\LocationInformation
     */
    public function setAreaType($AreaType)
    {
      $this->AreaType = $AreaType;
      return $this;
    }

}
