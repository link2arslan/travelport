<?php

namespace FilippoToso\Travelport\Util;

class FareRuleShort
{

    /**
     * @var FareRuleNameValue $FareRuleNameValue
     */
    public $FareRuleNameValue = null;

    /**
     * @var int $Category
     */
    public $Category = null;

    /**
     * @var string $TableNumber
     */
    public $TableNumber = null;

    /**
     * @param FareRuleNameValue $FareRuleNameValue
     * @param int $Category
     * @param string $TableNumber
     */
    public function __construct($FareRuleNameValue = null, $Category = null, $TableNumber = null)
    {
      $this->FareRuleNameValue = $FareRuleNameValue;
      $this->Category = $Category;
      $this->TableNumber = $TableNumber;
    }

    /**
     * @return FareRuleNameValue
     */
    public function getFareRuleNameValue()
    {
      return $this->FareRuleNameValue;
    }

    /**
     * @param FareRuleNameValue $FareRuleNameValue
     * @return \FilippoToso\Travelport\Util\FareRuleShort
     */
    public function setFareRuleNameValue($FareRuleNameValue)
    {
      $this->FareRuleNameValue = $FareRuleNameValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param int $Category
     * @return \FilippoToso\Travelport\Util\FareRuleShort
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getTableNumber()
    {
      return $this->TableNumber;
    }

    /**
     * @param string $TableNumber
     * @return \FilippoToso\Travelport\Util\FareRuleShort
     */
    public function setTableNumber($TableNumber)
    {
      $this->TableNumber = $TableNumber;
      return $this;
    }

}
