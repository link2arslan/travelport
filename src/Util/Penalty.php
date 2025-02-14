<?php

namespace FilippoToso\Travelport\Util;

class Penalty
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var string $PenaltyType
     */
    public $PenaltyType = null;

    /**
     * @param typeMoney $Amount
     * @param string $PenaltyType
     */
    public function __construct($Amount = null, $PenaltyType = null)
    {
      $this->Amount = $Amount;
      $this->PenaltyType = $PenaltyType;
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
     * @return \FilippoToso\Travelport\Util\Penalty
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPenaltyType()
    {
      return $this->PenaltyType;
    }

    /**
     * @param string $PenaltyType
     * @return \FilippoToso\Travelport\Util\Penalty
     */
    public function setPenaltyType($PenaltyType)
    {
      $this->PenaltyType = $PenaltyType;
      return $this;
    }

}
