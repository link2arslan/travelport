<?php

namespace FilippoToso\Travelport\GDSQueue;

class VehicleDisclaimer
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var typeVehicleDisclaimer $Type
     */
    public $Type = null;

    /**
     * @var string $SubType
     */
    public $SubType = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @param string $_
     * @param typeVehicleDisclaimer $Type
     * @param string $SubType
     * @param string $Description
     */
    public function __construct($_ = null, $Type = null, $SubType = null, $Description = null)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->SubType = $SubType;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDisclaimer
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeVehicleDisclaimer
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeVehicleDisclaimer $Type
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDisclaimer
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
      return $this->SubType;
    }

    /**
     * @param string $SubType
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDisclaimer
     */
    public function setSubType($SubType)
    {
      $this->SubType = $SubType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDisclaimer
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
