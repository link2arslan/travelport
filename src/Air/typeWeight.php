<?php

namespace FilippoToso\Travelport\Air;

class typeWeight
{

    /**
     * @var int $Value
     */
    public $Value = null;

    /**
     * @var typeUnitWeight $Unit
     */
    public $Unit = null;

    /**
     * @param int $Value
     * @param typeUnitWeight $Unit
     */
    public function __construct($Value = null, $Unit = null)
    {
      $this->Value = $Value;
      $this->Unit = $Unit;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param int $Value
     * @return \FilippoToso\Travelport\Air\typeWeight
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeUnitWeight
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param typeUnitWeight $Unit
     * @return \FilippoToso\Travelport\Air\typeWeight
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

}
