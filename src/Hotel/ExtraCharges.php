<?php

namespace FilippoToso\Travelport\Hotel;

class ExtraCharges
{

    /**
     * @var typeMoney $ExtraAdultAmount
     */
    public $ExtraAdultAmount = null;

    /**
     * @var typeMoney $ExtraChildAmount
     */
    public $ExtraChildAmount = null;

    /**
     * @var typeMoney $CribAmount
     */
    public $CribAmount = null;

    /**
     * @var typeMoney $AdultRollawayCharge
     */
    public $AdultRollawayCharge = null;

    /**
     * @var typeMoney $ChildRollawayCharge
     */
    public $ChildRollawayCharge = null;

    /**
     * @param typeMoney $ExtraAdultAmount
     * @param typeMoney $ExtraChildAmount
     * @param typeMoney $CribAmount
     * @param typeMoney $AdultRollawayCharge
     * @param typeMoney $ChildRollawayCharge
     */
    public function __construct($ExtraAdultAmount = null, $ExtraChildAmount = null, $CribAmount = null, $AdultRollawayCharge = null, $ChildRollawayCharge = null)
    {
      $this->ExtraAdultAmount = $ExtraAdultAmount;
      $this->ExtraChildAmount = $ExtraChildAmount;
      $this->CribAmount = $CribAmount;
      $this->AdultRollawayCharge = $AdultRollawayCharge;
      $this->ChildRollawayCharge = $ChildRollawayCharge;
    }

    /**
     * @return typeMoney
     */
    public function getExtraAdultAmount()
    {
      return $this->ExtraAdultAmount;
    }

    /**
     * @param typeMoney $ExtraAdultAmount
     * @return \FilippoToso\Travelport\Hotel\ExtraCharges
     */
    public function setExtraAdultAmount($ExtraAdultAmount)
    {
      $this->ExtraAdultAmount = $ExtraAdultAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getExtraChildAmount()
    {
      return $this->ExtraChildAmount;
    }

    /**
     * @param typeMoney $ExtraChildAmount
     * @return \FilippoToso\Travelport\Hotel\ExtraCharges
     */
    public function setExtraChildAmount($ExtraChildAmount)
    {
      $this->ExtraChildAmount = $ExtraChildAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCribAmount()
    {
      return $this->CribAmount;
    }

    /**
     * @param typeMoney $CribAmount
     * @return \FilippoToso\Travelport\Hotel\ExtraCharges
     */
    public function setCribAmount($CribAmount)
    {
      $this->CribAmount = $CribAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAdultRollawayCharge()
    {
      return $this->AdultRollawayCharge;
    }

    /**
     * @param typeMoney $AdultRollawayCharge
     * @return \FilippoToso\Travelport\Hotel\ExtraCharges
     */
    public function setAdultRollawayCharge($AdultRollawayCharge)
    {
      $this->AdultRollawayCharge = $AdultRollawayCharge;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getChildRollawayCharge()
    {
      return $this->ChildRollawayCharge;
    }

    /**
     * @param typeMoney $ChildRollawayCharge
     * @return \FilippoToso\Travelport\Hotel\ExtraCharges
     */
    public function setChildRollawayCharge($ChildRollawayCharge)
    {
      $this->ChildRollawayCharge = $ChildRollawayCharge;
      return $this;
    }

}
