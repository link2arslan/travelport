<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Adjustment
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var float $Percent
     */
    public $Percent = null;

    /**
     * @var typeMoney $AdjustedTotalPrice
     */
    public $AdjustedTotalPrice = null;

    /**
     * @var typeMoney $ApproximateAdjustedTotalPrice
     */
    public $ApproximateAdjustedTotalPrice = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param typeMoney $Amount
     * @param float $Percent
     * @param typeMoney $AdjustedTotalPrice
     * @param typeMoney $ApproximateAdjustedTotalPrice
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($Amount = null, $Percent = null, $AdjustedTotalPrice = null, $ApproximateAdjustedTotalPrice = null, $BookingTravelerRef = null)
    {
      $this->Amount = $Amount;
      $this->Percent = $Percent;
      $this->AdjustedTotalPrice = $AdjustedTotalPrice;
      $this->ApproximateAdjustedTotalPrice = $ApproximateAdjustedTotalPrice;
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\UniversalRecord\Adjustment
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param float $Percent
     * @return \FilippoToso\Travelport\UniversalRecord\Adjustment
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAdjustedTotalPrice()
    {
      return $this->AdjustedTotalPrice;
    }

    /**
     * @param typeMoney $AdjustedTotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\Adjustment
     */
    public function setAdjustedTotalPrice($AdjustedTotalPrice)
    {
      $this->AdjustedTotalPrice = $AdjustedTotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateAdjustedTotalPrice()
    {
      return $this->ApproximateAdjustedTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateAdjustedTotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\Adjustment
     */
    public function setApproximateAdjustedTotalPrice($ApproximateAdjustedTotalPrice)
    {
      $this->ApproximateAdjustedTotalPrice = $ApproximateAdjustedTotalPrice;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\Adjustment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
