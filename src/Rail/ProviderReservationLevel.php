<?php

namespace FilippoToso\Travelport\Rail;

class ProviderReservationLevel
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
     * @var typeMoney $CommissionCap
     */
    public $CommissionCap = null;

    /**
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     * @param typeMoney $CommissionCap
     */
    public function __construct($Amount = null, $Percentage = null, $CommissionCap = null)
    {
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
      $this->CommissionCap = $CommissionCap;
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationLevel
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
     * @return \FilippoToso\Travelport\Rail\ProviderReservationLevel
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCommissionCap()
    {
      return $this->CommissionCap;
    }

    /**
     * @param typeMoney $CommissionCap
     * @return \FilippoToso\Travelport\Rail\ProviderReservationLevel
     */
    public function setCommissionCap($CommissionCap)
    {
      $this->CommissionCap = $CommissionCap;
      return $this;
    }

}
