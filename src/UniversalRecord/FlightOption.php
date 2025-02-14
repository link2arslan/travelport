<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FlightOption
{

    /**
     * @var Option $Option
     */
    public $Option = null;

    /**
     * @var typeRef $LegRef
     */
    public $LegRef = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @param Option $Option
     * @param typeRef $LegRef
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     */
    public function __construct($Option = null, $LegRef = null, $Origin = null, $Destination = null)
    {
      $this->Option = $Option;
      $this->LegRef = $LegRef;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
    }

    /**
     * @return Option
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param Option $Option
     * @return \FilippoToso\Travelport\UniversalRecord\FlightOption
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getLegRef()
    {
      return $this->LegRef;
    }

    /**
     * @param typeRef $LegRef
     * @return \FilippoToso\Travelport\UniversalRecord\FlightOption
     */
    public function setLegRef($LegRef)
    {
      $this->LegRef = $LegRef;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\UniversalRecord\FlightOption
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\UniversalRecord\FlightOption
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

}
