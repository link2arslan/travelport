<?php

namespace FilippoToso\Travelport\Util;

class Characteristic
{

    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @var typePosition $Position
     */
    public $Position = null;

    /**
     * @var typeRowLocation $RowLocation
     */
    public $RowLocation = null;

    /**
     * @var StringLength1to99 $PADISCode
     */
    public $PADISCode = null;

    /**
     * @param string $Value
     * @param typePosition $Position
     * @param typeRowLocation $RowLocation
     * @param StringLength1to99 $PADISCode
     */
    public function __construct($Value = null, $Position = null, $RowLocation = null, $PADISCode = null)
    {
      $this->Value = $Value;
      $this->Position = $Position;
      $this->RowLocation = $RowLocation;
      $this->PADISCode = $PADISCode;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\Util\Characteristic
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typePosition
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param typePosition $Position
     * @return \FilippoToso\Travelport\Util\Characteristic
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

    /**
     * @return typeRowLocation
     */
    public function getRowLocation()
    {
      return $this->RowLocation;
    }

    /**
     * @param typeRowLocation $RowLocation
     * @return \FilippoToso\Travelport\Util\Characteristic
     */
    public function setRowLocation($RowLocation)
    {
      $this->RowLocation = $RowLocation;
      return $this;
    }

    /**
     * @return StringLength1to99
     */
    public function getPADISCode()
    {
      return $this->PADISCode;
    }

    /**
     * @param StringLength1to99 $PADISCode
     * @return \FilippoToso\Travelport\Util\Characteristic
     */
    public function setPADISCode($PADISCode)
    {
      $this->PADISCode = $PADISCode;
      return $this;
    }

}
