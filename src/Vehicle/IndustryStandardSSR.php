<?php

namespace FilippoToso\Travelport\Vehicle;

class IndustryStandardSSR
{

    /**
     * @var string $Code
     */
    public $Code = null;

    /**
     * @param string $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\Vehicle\IndustryStandardSSR
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
