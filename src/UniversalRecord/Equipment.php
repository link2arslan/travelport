<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Equipment
{

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @var int $Quantity
     */
    public $Quantity = null;

    /**
     * @var typeStatusCode $Status
     */
    public $Status = null;

    /**
     * @param string $Type
     * @param string $Description
     * @param int $Quantity
     * @param typeStatusCode $Status
     */
    public function __construct($Type = null, $Description = null, $Quantity = null, $Status = null)
    {
      $this->Type = $Type;
      $this->Description = $Description;
      $this->Quantity = $Quantity;
      $this->Status = $Status;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\UniversalRecord\Equipment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\UniversalRecord\Equipment
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FilippoToso\Travelport\UniversalRecord\Equipment
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return typeStatusCode
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeStatusCode $Status
     * @return \FilippoToso\Travelport\UniversalRecord\Equipment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
