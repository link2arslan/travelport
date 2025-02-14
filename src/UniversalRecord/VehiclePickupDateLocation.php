<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehiclePickupDateLocation
{

    /**
     * @var \DateTime $PickupDateTime
     */
    public $PickupDateTime = null;

    /**
     * @var typeIATACode $PickupLocation
     */
    public $PickupLocation = null;

    /**
     * @var typeVehicleLocation $PickupLocationType
     */
    public $PickupLocationType = null;

    /**
     * @var string $PickupLocationNumber
     */
    public $PickupLocationNumber = null;

    /**
     * @param \DateTime $PickupDateTime
     * @param typeIATACode $PickupLocation
     * @param typeVehicleLocation $PickupLocationType
     * @param string $PickupLocationNumber
     */
    public function __construct(\DateTime $PickupDateTime = null, $PickupLocation = null, $PickupLocationType = null, $PickupLocationNumber = null)
    {
      $this->PickupDateTime = $PickupDateTime ? $PickupDateTime->format(\DateTime::ATOM) : null;
      $this->PickupLocation = $PickupLocation;
      $this->PickupLocationType = $PickupLocationType;
      $this->PickupLocationNumber = $PickupLocationNumber;
    }

    /**
     * @return \DateTime
     */
    public function getPickupDateTime()
    {
      if ($this->PickupDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PickupDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PickupDateTime
     * @return \FilippoToso\Travelport\UniversalRecord\VehiclePickupDateLocation
     */
    public function setPickupDateTime(\DateTime $PickupDateTime)
    {
      $this->PickupDateTime = $PickupDateTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getPickupLocation()
    {
      return $this->PickupLocation;
    }

    /**
     * @param typeIATACode $PickupLocation
     * @return \FilippoToso\Travelport\UniversalRecord\VehiclePickupDateLocation
     */
    public function setPickupLocation($PickupLocation)
    {
      $this->PickupLocation = $PickupLocation;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getPickupLocationType()
    {
      return $this->PickupLocationType;
    }

    /**
     * @param typeVehicleLocation $PickupLocationType
     * @return \FilippoToso\Travelport\UniversalRecord\VehiclePickupDateLocation
     */
    public function setPickupLocationType($PickupLocationType)
    {
      $this->PickupLocationType = $PickupLocationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocationNumber()
    {
      return $this->PickupLocationNumber;
    }

    /**
     * @param string $PickupLocationNumber
     * @return \FilippoToso\Travelport\UniversalRecord\VehiclePickupDateLocation
     */
    public function setPickupLocationNumber($PickupLocationNumber)
    {
      $this->PickupLocationNumber = $PickupLocationNumber;
      return $this;
    }

}
