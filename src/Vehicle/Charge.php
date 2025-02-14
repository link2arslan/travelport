<?php

namespace FilippoToso\Travelport\Vehicle;

class Charge
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var string $RatePeriod
     */
    public $RatePeriod = null;

    /**
     * @var boolean $IncludedInEstTotalInd
     */
    public $IncludedInEstTotalInd = null;

    /**
     * @param typeMoney $Amount
     * @param string $RatePeriod
     * @param boolean $IncludedInEstTotalInd
     */
    public function __construct($Amount = null, $RatePeriod = null, $IncludedInEstTotalInd = null)
    {
      $this->Amount = $Amount;
      $this->RatePeriod = $RatePeriod;
      $this->IncludedInEstTotalInd = $IncludedInEstTotalInd;
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
     * @return \FilippoToso\Travelport\Vehicle\Charge
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRatePeriod()
    {
      return $this->RatePeriod;
    }

    /**
     * @param string $RatePeriod
     * @return \FilippoToso\Travelport\Vehicle\Charge
     */
    public function setRatePeriod($RatePeriod)
    {
      $this->RatePeriod = $RatePeriod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludedInEstTotalInd()
    {
      return $this->IncludedInEstTotalInd;
    }

    /**
     * @param boolean $IncludedInEstTotalInd
     * @return \FilippoToso\Travelport\Vehicle\Charge
     */
    public function setIncludedInEstTotalInd($IncludedInEstTotalInd)
    {
      $this->IncludedInEstTotalInd = $IncludedInEstTotalInd;
      return $this;
    }

}
