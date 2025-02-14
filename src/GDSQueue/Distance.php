<?php

namespace FilippoToso\Travelport\GDSQueue;

class Distance
{

    /**
     * @var anonymous66 $Units
     */
    public $Units = null;

    /**
     * @var int $Value
     */
    public $Value = null;

    /**
     * @var anonymous67 $Direction
     */
    public $Direction = null;

    /**
     * @param anonymous66 $Units
     * @param int $Value
     * @param anonymous67 $Direction
     */
    public function __construct($Units = null, $Value = null, $Direction = null)
    {
      $this->Units = $Units;
      $this->Value = $Value;
      $this->Direction = $Direction;
    }

    /**
     * @return anonymous66
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param anonymous66 $Units
     * @return \FilippoToso\Travelport\GDSQueue\Distance
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
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
     * @return \FilippoToso\Travelport\GDSQueue\Distance
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return anonymous67
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous67 $Direction
     * @return \FilippoToso\Travelport\GDSQueue\Distance
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
