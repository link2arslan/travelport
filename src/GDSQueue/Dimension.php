<?php

namespace FilippoToso\Travelport\GDSQueue;

class Dimension extends typeUnitOfMeasure
{

    /**
     * @var string $type
     */
    public $type = null;

    /**
     * @param float $Value
     * @param string $Unit
     * @param string $type
     */
    public function __construct($Value = null, $Unit = null, $type = null)
    {
      parent::__construct($Value, $Unit);
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \FilippoToso\Travelport\GDSQueue\Dimension
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
