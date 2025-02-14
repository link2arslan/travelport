<?php

namespace FilippoToso\Travelport\Util;

class FlightOptionsList
{

    /**
     * @var FlightOption $FlightOption
     */
    public $FlightOption = null;

    /**
     * @param FlightOption $FlightOption
     */
    public function __construct($FlightOption = null)
    {
      $this->FlightOption = $FlightOption;
    }

    /**
     * @return FlightOption
     */
    public function getFlightOption()
    {
      return $this->FlightOption;
    }

    /**
     * @param FlightOption $FlightOption
     * @return \FilippoToso\Travelport\Util\FlightOptionsList
     */
    public function setFlightOption($FlightOption)
    {
      $this->FlightOption = $FlightOption;
      return $this;
    }

}
