<?php

namespace FilippoToso\Travelport\Vehicle;

class StockControl
{

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var string $Number
     */
    public $Number = null;

    /**
     * @param string $Type
     * @param string $Number
     */
    public function __construct($Type = null, $Number = null)
    {
      $this->Type = $Type;
      $this->Number = $Number;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Vehicle\StockControl
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\Vehicle\StockControl
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
