<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeFarePenalty
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
     * @var anonymous809 $PenaltyApplies
     */
    public $PenaltyApplies = null;

    /**
     * @var boolean $NoShow
     */
    public $NoShow = null;

    /**
     * @param anonymous809 $PenaltyApplies
     * @param boolean $NoShow
     */
    public function __construct($PenaltyApplies = null, $NoShow = null)
    {
      $this->PenaltyApplies = $PenaltyApplies;
      $this->NoShow = $NoShow;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeFarePenalty
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeFarePenalty
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return anonymous809
     */
    public function getPenaltyApplies()
    {
      return $this->PenaltyApplies;
    }

    /**
     * @param anonymous809 $PenaltyApplies
     * @return \FilippoToso\Travelport\UniversalRecord\typeFarePenalty
     */
    public function setPenaltyApplies($PenaltyApplies)
    {
      $this->PenaltyApplies = $PenaltyApplies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoShow()
    {
      return $this->NoShow;
    }

    /**
     * @param boolean $NoShow
     * @return \FilippoToso\Travelport\UniversalRecord\typeFarePenalty
     */
    public function setNoShow($NoShow)
    {
      $this->NoShow = $NoShow;
      return $this;
    }

}
