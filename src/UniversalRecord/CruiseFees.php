<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CruiseFees
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var StringLength1to13 $Description
     */
    public $Description = null;

    /**
     * @param typeMoney $Amount
     * @param StringLength1to13 $Description
     */
    public function __construct($Amount = null, $Description = null)
    {
      $this->Amount = $Amount;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseFees
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return StringLength1to13
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to13 $Description
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseFees
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
