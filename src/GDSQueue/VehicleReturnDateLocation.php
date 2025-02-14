<?php

namespace FilippoToso\Travelport\GDSQueue;

class VehicleReturnDateLocation
{

    /**
     * @var string $ReturnDateTime
     */
    public $ReturnDateTime = null;

    /**
     * @var typeIATACode $ReturnLocation
     */
    public $ReturnLocation = null;

    /**
     * @var typeVehicleLocation $ReturnLocationType
     */
    public $ReturnLocationType = null;

    /**
     * @var string $ReturnLocationNumber
     */
    public $ReturnLocationNumber = null;

    /**
     * @param string $ReturnDateTime
     * @param typeIATACode $ReturnLocation
     * @param typeVehicleLocation $ReturnLocationType
     * @param string $ReturnLocationNumber
     */
    public function __construct($ReturnDateTime = null, $ReturnLocation = null, $ReturnLocationType = null, $ReturnLocationNumber = null)
    {
      $this->ReturnDateTime = $ReturnDateTime;
      $this->ReturnLocation = $ReturnLocation;
      $this->ReturnLocationType = $ReturnLocationType;
      $this->ReturnLocationNumber = $ReturnLocationNumber;
    }

    /**
     * @return string
     */
    public function getReturnDateTime()
    {
      return $this->ReturnDateTime;
    }

    /**
     * @param string $ReturnDateTime
     * @return \FilippoToso\Travelport\GDSQueue\VehicleReturnDateLocation
     */
    public function setReturnDateTime($ReturnDateTime)
    {
      $this->ReturnDateTime = $ReturnDateTime;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getReturnLocation()
    {
      return $this->ReturnLocation;
    }

    /**
     * @param typeIATACode $ReturnLocation
     * @return \FilippoToso\Travelport\GDSQueue\VehicleReturnDateLocation
     */
    public function setReturnLocation($ReturnLocation)
    {
      $this->ReturnLocation = $ReturnLocation;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getReturnLocationType()
    {
      return $this->ReturnLocationType;
    }

    /**
     * @param typeVehicleLocation $ReturnLocationType
     * @return \FilippoToso\Travelport\GDSQueue\VehicleReturnDateLocation
     */
    public function setReturnLocationType($ReturnLocationType)
    {
      $this->ReturnLocationType = $ReturnLocationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnLocationNumber()
    {
      return $this->ReturnLocationNumber;
    }

    /**
     * @param string $ReturnLocationNumber
     * @return \FilippoToso\Travelport\GDSQueue\VehicleReturnDateLocation
     */
    public function setReturnLocationNumber($ReturnLocationNumber)
    {
      $this->ReturnLocationNumber = $ReturnLocationNumber;
      return $this;
    }

}
