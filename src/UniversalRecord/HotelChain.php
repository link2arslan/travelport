<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelChain
{

    /**
     * @var typeHotelChainCode $Code
     */
    public $Code = null;

    /**
     * @param typeHotelChainCode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeHotelChainCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeHotelChainCode $Code
     * @return \FilippoToso\Travelport\UniversalRecord\HotelChain
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
