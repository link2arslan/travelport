<?php

namespace FilippoToso\Travelport\Hotel;

class MCOFeeInfo
{

    /**
     * @var anonymous177 $FeeAppliesToInd
     */
    public $FeeAppliesToInd = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    public $Percentage = null;

    /**
     * @param anonymous177 $FeeAppliesToInd
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percentage
     */
    public function __construct($FeeAppliesToInd = null, $Amount = null, $Percentage = null)
    {
      $this->FeeAppliesToInd = $FeeAppliesToInd;
      $this->Amount = $Amount;
      $this->Percentage = $Percentage;
    }

    /**
     * @return anonymous177
     */
    public function getFeeAppliesToInd()
    {
      return $this->FeeAppliesToInd;
    }

    /**
     * @param anonymous177 $FeeAppliesToInd
     * @return \FilippoToso\Travelport\Hotel\MCOFeeInfo
     */
    public function setFeeAppliesToInd($FeeAppliesToInd)
    {
      $this->FeeAppliesToInd = $FeeAppliesToInd;
      return $this;
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
     * @return \FilippoToso\Travelport\Hotel\MCOFeeInfo
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
     * @return \FilippoToso\Travelport\Hotel\MCOFeeInfo
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

}
