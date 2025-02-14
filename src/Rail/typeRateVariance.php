<?php

namespace FilippoToso\Travelport\Rail;

class typeRateVariance
{

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var float $Value
     */
    public $Value = null;

    /**
     * @var string $Apply
     */
    public $Apply = null;

    /**
     * @param string $Type
     * @param float $Value
     * @param string $Apply
     */
    public function __construct($Type = null, $Value = null, $Apply = null)
    {
      $this->Type = $Type;
      $this->Value = $Value;
      $this->Apply = $Apply;
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
     * @return \FilippoToso\Travelport\Rail\typeRateVariance
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \FilippoToso\Travelport\Rail\typeRateVariance
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getApply()
    {
      return $this->Apply;
    }

    /**
     * @param string $Apply
     * @return \FilippoToso\Travelport\Rail\typeRateVariance
     */
    public function setApply($Apply)
    {
      $this->Apply = $Apply;
      return $this;
    }

}
