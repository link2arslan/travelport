<?php

namespace FilippoToso\Travelport\Rail;

class IncludeAddlBookingCodeInfo
{

    /**
     * @var typeCarrierCode $Type
     */
    public $Type = null;

    /**
     * @var typeCarrier $SecondaryCarrier
     */
    public $SecondaryCarrier = null;

    /**
     * @param typeCarrierCode $Type
     * @param typeCarrier $SecondaryCarrier
     */
    public function __construct($Type = null, $SecondaryCarrier = null)
    {
      $this->Type = $Type;
      $this->SecondaryCarrier = $SecondaryCarrier;
    }

    /**
     * @return typeCarrierCode
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeCarrierCode $Type
     * @return \FilippoToso\Travelport\Rail\IncludeAddlBookingCodeInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getSecondaryCarrier()
    {
      return $this->SecondaryCarrier;
    }

    /**
     * @param typeCarrier $SecondaryCarrier
     * @return \FilippoToso\Travelport\Rail\IncludeAddlBookingCodeInfo
     */
    public function setSecondaryCarrier($SecondaryCarrier)
    {
      $this->SecondaryCarrier = $SecondaryCarrier;
      return $this;
    }

}
