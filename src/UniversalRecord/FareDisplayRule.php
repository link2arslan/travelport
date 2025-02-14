<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareDisplayRule
{

    /**
     * @var RuleAdvancedPurchase $RuleAdvancedPurchase
     */
    public $RuleAdvancedPurchase = null;

    /**
     * @var RuleLengthOfStay $RuleLengthOfStay
     */
    public $RuleLengthOfStay = null;

    /**
     * @var RuleCharges $RuleCharges
     */
    public $RuleCharges = null;

    /**
     * @var string $RuleNumber
     */
    public $RuleNumber = null;

    /**
     * @var string $Source
     */
    public $Source = null;

    /**
     * @var string $TariffNumber
     */
    public $TariffNumber = null;

    /**
     * @param RuleAdvancedPurchase $RuleAdvancedPurchase
     * @param RuleLengthOfStay $RuleLengthOfStay
     * @param RuleCharges $RuleCharges
     * @param string $RuleNumber
     * @param string $Source
     * @param string $TariffNumber
     */
    public function __construct($RuleAdvancedPurchase = null, $RuleLengthOfStay = null, $RuleCharges = null, $RuleNumber = null, $Source = null, $TariffNumber = null)
    {
      $this->RuleAdvancedPurchase = $RuleAdvancedPurchase;
      $this->RuleLengthOfStay = $RuleLengthOfStay;
      $this->RuleCharges = $RuleCharges;
      $this->RuleNumber = $RuleNumber;
      $this->Source = $Source;
      $this->TariffNumber = $TariffNumber;
    }

    /**
     * @return RuleAdvancedPurchase
     */
    public function getRuleAdvancedPurchase()
    {
      return $this->RuleAdvancedPurchase;
    }

    /**
     * @param RuleAdvancedPurchase $RuleAdvancedPurchase
     * @return \FilippoToso\Travelport\UniversalRecord\FareDisplayRule
     */
    public function setRuleAdvancedPurchase($RuleAdvancedPurchase)
    {
      $this->RuleAdvancedPurchase = $RuleAdvancedPurchase;
      return $this;
    }

    /**
     * @return RuleLengthOfStay
     */
    public function getRuleLengthOfStay()
    {
      return $this->RuleLengthOfStay;
    }

    /**
     * @param RuleLengthOfStay $RuleLengthOfStay
     * @return \FilippoToso\Travelport\UniversalRecord\FareDisplayRule
     */
    public function setRuleLengthOfStay($RuleLengthOfStay)
    {
      $this->RuleLengthOfStay = $RuleLengthOfStay;
      return $this;
    }

    /**
     * @return RuleCharges
     */
    public function getRuleCharges()
    {
      return $this->RuleCharges;
    }

    /**
     * @param RuleCharges $RuleCharges
     * @return \FilippoToso\Travelport\UniversalRecord\FareDisplayRule
     */
    public function setRuleCharges($RuleCharges)
    {
      $this->RuleCharges = $RuleCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleNumber()
    {
      return $this->RuleNumber;
    }

    /**
     * @param string $RuleNumber
     * @return \FilippoToso\Travelport\UniversalRecord\FareDisplayRule
     */
    public function setRuleNumber($RuleNumber)
    {
      $this->RuleNumber = $RuleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \FilippoToso\Travelport\UniversalRecord\FareDisplayRule
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffNumber()
    {
      return $this->TariffNumber;
    }

    /**
     * @param string $TariffNumber
     * @return \FilippoToso\Travelport\UniversalRecord\FareDisplayRule
     */
    public function setTariffNumber($TariffNumber)
    {
      $this->TariffNumber = $TariffNumber;
      return $this;
    }

}
