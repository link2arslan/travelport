<?php

namespace FilippoToso\Travelport\System;

class Commission
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    public $Percentage = null;

    /**
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     */
    public function __construct($Amount = null, $Percentage = null)
    {
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
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
     * @return \FilippoToso\Travelport\System\Commission
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param typePercentageWithDecimal $Percentage
     * @return \FilippoToso\Travelport\System\Commission
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

}
