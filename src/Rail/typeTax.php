<?php

namespace FilippoToso\Travelport\Rail;

class typeTax
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var string $Code
     */
    public $Code = null;

    /**
     * @param typeMoney $Amount
     * @param string $Code
     */
    public function __construct($Amount = null, $Code = null)
    {
      $this->Amount = $Amount;
      $this->Code = $Code;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Rail\typeTax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\typeTax
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
