<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirFareRuleCategory
{

    /**
     * @var typeFareRuleCategoryCode[] $CategoryCode
     */
    public $CategoryCode = null;

    /**
     * @var typeRef $FareInfoRef
     */
    public $FareInfoRef = null;

    /**
     * @param typeFareRuleCategoryCode[] $CategoryCode
     * @param typeRef $FareInfoRef
     */
    public function __construct(array $CategoryCode = null, $FareInfoRef = null)
    {
      $this->CategoryCode = $CategoryCode;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return typeFareRuleCategoryCode[]
     */
    public function getCategoryCode()
    {
      return $this->CategoryCode;
    }

    /**
     * @param typeFareRuleCategoryCode[] $CategoryCode
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareRuleCategory
     */
    public function setCategoryCode(array $CategoryCode)
    {
      $this->CategoryCode = $CategoryCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirFareRuleCategory
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
