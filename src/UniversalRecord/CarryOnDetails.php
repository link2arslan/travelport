<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CarryOnDetails
{

    /**
     * @var BaggageRestriction $BaggageRestriction
     */
    public $BaggageRestriction = null;

    /**
     * @var string $ApplicableCarryOnBags
     */
    public $ApplicableCarryOnBags = null;

    /**
     * @var typeMoney $BasePrice
     */
    public $BasePrice = null;

    /**
     * @var typeMoney $ApproximateBasePrice
     */
    public $ApproximateBasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    public $Taxes = null;

    /**
     * @var typeMoney $TotalPrice
     */
    public $TotalPrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    public $ApproximateTotalPrice = null;

    /**
     * @param BaggageRestriction $BaggageRestriction
     * @param string $ApplicableCarryOnBags
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproximateTotalPrice
     */
    public function __construct($BaggageRestriction = null, $ApplicableCarryOnBags = null, $BasePrice = null, $ApproximateBasePrice = null, $Taxes = null, $TotalPrice = null, $ApproximateTotalPrice = null)
    {
      $this->BaggageRestriction = $BaggageRestriction;
      $this->ApplicableCarryOnBags = $ApplicableCarryOnBags;
      $this->BasePrice = $BasePrice;
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      $this->Taxes = $Taxes;
      $this->TotalPrice = $TotalPrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
    }

    /**
     * @return BaggageRestriction
     */
    public function getBaggageRestriction()
    {
      return $this->BaggageRestriction;
    }

    /**
     * @param BaggageRestriction $BaggageRestriction
     * @return \FilippoToso\Travelport\UniversalRecord\CarryOnDetails
     */
    public function setBaggageRestriction($BaggageRestriction)
    {
      $this->BaggageRestriction = $BaggageRestriction;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicableCarryOnBags()
    {
      return $this->ApplicableCarryOnBags;
    }

    /**
     * @param string $ApplicableCarryOnBags
     * @return \FilippoToso\Travelport\UniversalRecord\CarryOnDetails
     */
    public function setApplicableCarryOnBags($ApplicableCarryOnBags)
    {
      $this->ApplicableCarryOnBags = $ApplicableCarryOnBags;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\CarryOnDetails
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBasePrice()
    {
      return $this->ApproximateBasePrice;
    }

    /**
     * @param typeMoney $ApproximateBasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\CarryOnDetails
     */
    public function setApproximateBasePrice($ApproximateBasePrice)
    {
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\UniversalRecord\CarryOnDetails
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\CarryOnDetails
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\CarryOnDetails
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

}
