<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeVehicleRates
{

    /**
     * @var typeMoney $EstimatedTotalAmount
     */
    public $EstimatedTotalAmount = null;

    /**
     * @var typeMoney $BaseRate
     */
    public $BaseRate = null;

    /**
     * @var typeMoney $RateForPeriod
     */
    public $RateForPeriod = null;

    /**
     * @var typeMoney $DropOffCharge
     */
    public $DropOffCharge = null;

    /**
     * @var typeMoney $YoungDriverCharge
     */
    public $YoungDriverCharge = null;

    /**
     * @var typeMoney $SeniorDriverCharge
     */
    public $SeniorDriverCharge = null;

    /**
     * @var typeMoney $FuelSurcharge
     */
    public $FuelSurcharge = null;

    /**
     * @var typeMoney $ExtraMileageCharge
     */
    public $ExtraMileageCharge = null;

    /**
     * @var typeMoney $PayNow
     */
    public $PayNow = null;

    /**
     * @var typeMoney $PayLater
     */
    public $PayLater = null;

    /**
     * @param typeMoney $EstimatedTotalAmount
     * @param typeMoney $BaseRate
     * @param typeMoney $RateForPeriod
     * @param typeMoney $DropOffCharge
     * @param typeMoney $YoungDriverCharge
     * @param typeMoney $SeniorDriverCharge
     * @param typeMoney $FuelSurcharge
     * @param typeMoney $ExtraMileageCharge
     * @param typeMoney $PayNow
     * @param typeMoney $PayLater
     */
    public function __construct($EstimatedTotalAmount = null, $BaseRate = null, $RateForPeriod = null, $DropOffCharge = null, $YoungDriverCharge = null, $SeniorDriverCharge = null, $FuelSurcharge = null, $ExtraMileageCharge = null, $PayNow = null, $PayLater = null)
    {
      $this->EstimatedTotalAmount = $EstimatedTotalAmount;
      $this->BaseRate = $BaseRate;
      $this->RateForPeriod = $RateForPeriod;
      $this->DropOffCharge = $DropOffCharge;
      $this->YoungDriverCharge = $YoungDriverCharge;
      $this->SeniorDriverCharge = $SeniorDriverCharge;
      $this->FuelSurcharge = $FuelSurcharge;
      $this->ExtraMileageCharge = $ExtraMileageCharge;
      $this->PayNow = $PayNow;
      $this->PayLater = $PayLater;
    }

    /**
     * @return typeMoney
     */
    public function getEstimatedTotalAmount()
    {
      return $this->EstimatedTotalAmount;
    }

    /**
     * @param typeMoney $EstimatedTotalAmount
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setEstimatedTotalAmount($EstimatedTotalAmount)
    {
      $this->EstimatedTotalAmount = $EstimatedTotalAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseRate()
    {
      return $this->BaseRate;
    }

    /**
     * @param typeMoney $BaseRate
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setBaseRate($BaseRate)
    {
      $this->BaseRate = $BaseRate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRateForPeriod()
    {
      return $this->RateForPeriod;
    }

    /**
     * @param typeMoney $RateForPeriod
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setRateForPeriod($RateForPeriod)
    {
      $this->RateForPeriod = $RateForPeriod;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getDropOffCharge()
    {
      return $this->DropOffCharge;
    }

    /**
     * @param typeMoney $DropOffCharge
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setDropOffCharge($DropOffCharge)
    {
      $this->DropOffCharge = $DropOffCharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getYoungDriverCharge()
    {
      return $this->YoungDriverCharge;
    }

    /**
     * @param typeMoney $YoungDriverCharge
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setYoungDriverCharge($YoungDriverCharge)
    {
      $this->YoungDriverCharge = $YoungDriverCharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getSeniorDriverCharge()
    {
      return $this->SeniorDriverCharge;
    }

    /**
     * @param typeMoney $SeniorDriverCharge
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setSeniorDriverCharge($SeniorDriverCharge)
    {
      $this->SeniorDriverCharge = $SeniorDriverCharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFuelSurcharge()
    {
      return $this->FuelSurcharge;
    }

    /**
     * @param typeMoney $FuelSurcharge
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setFuelSurcharge($FuelSurcharge)
    {
      $this->FuelSurcharge = $FuelSurcharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getExtraMileageCharge()
    {
      return $this->ExtraMileageCharge;
    }

    /**
     * @param typeMoney $ExtraMileageCharge
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setExtraMileageCharge($ExtraMileageCharge)
    {
      $this->ExtraMileageCharge = $ExtraMileageCharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getPayNow()
    {
      return $this->PayNow;
    }

    /**
     * @param typeMoney $PayNow
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setPayNow($PayNow)
    {
      $this->PayNow = $PayNow;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getPayLater()
    {
      return $this->PayLater;
    }

    /**
     * @param typeMoney $PayLater
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleRates
     */
    public function setPayLater($PayLater)
    {
      $this->PayLater = $PayLater;
      return $this;
    }

}
