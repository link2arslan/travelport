<?php

namespace FilippoToso\Travelport\Rail;

class PermittedCarriers
{

    /**
     * @var Carrier $Carrier
     */
    public $Carrier = null;

    /**
     * @param Carrier $Carrier
     */
    public function __construct($Carrier = null)
    {
      $this->Carrier = $Carrier;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param Carrier $Carrier
     * @return \FilippoToso\Travelport\Rail\PermittedCarriers
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

}
