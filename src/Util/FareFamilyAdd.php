<?php

namespace FilippoToso\Travelport\Util;

class FareFamilyAdd
{

    /**
     * @var FareFamily $FareFamily
     */
    public $FareFamily = null;

    /**
     * @param FareFamily $FareFamily
     */
    public function __construct($FareFamily = null)
    {
      $this->FareFamily = $FareFamily;
    }

    /**
     * @return FareFamily
     */
    public function getFareFamily()
    {
      return $this->FareFamily;
    }

    /**
     * @param FareFamily $FareFamily
     * @return \FilippoToso\Travelport\Util\FareFamilyAdd
     */
    public function setFareFamily($FareFamily)
    {
      $this->FareFamily = $FareFamily;
      return $this;
    }

}
