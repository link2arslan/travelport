<?php

namespace FilippoToso\Travelport\Rail;

class typeRestrictionData
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
     * @var UNKNOWN $Name
     */
    public $Name = null;

    /**
     * @var UNKNOWN $Value
     */
    public $Value = null;

    /**
     * @param UNKNOWN $Name
     * @param UNKNOWN $Value
     */
    public function __construct($Name = null, $Value = null)
    {
      $this->Name = $Name;
      $this->Value = $Value;
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
     * @return \FilippoToso\Travelport\Rail\typeRestrictionData
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
     * @return \FilippoToso\Travelport\Rail\typeRestrictionData
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param UNKNOWN $Name
     * @return \FilippoToso\Travelport\Rail\typeRestrictionData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param UNKNOWN $Value
     * @return \FilippoToso\Travelport\Rail\typeRestrictionData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
