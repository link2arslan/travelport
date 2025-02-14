<?php

namespace FilippoToso\Travelport\Hotel;

class BookingSource
{

    /**
     * @var anonymous297 $Code
     */
    public $Code = null;

    /**
     * @var anonymous298 $Type
     */
    public $Type = null;

    /**
     * @param anonymous297 $Code
     * @param anonymous298 $Type
     */
    public function __construct($Code = null, $Type = null)
    {
      $this->Code = $Code;
      $this->Type = $Type;
    }

    /**
     * @return anonymous297
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous297 $Code
     * @return \FilippoToso\Travelport\Hotel\BookingSource
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous298
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous298 $Type
     * @return \FilippoToso\Travelport\Hotel\BookingSource
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
