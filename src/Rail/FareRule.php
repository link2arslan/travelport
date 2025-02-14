<?php

namespace FilippoToso\Travelport\Rail;

class FareRule
{

    /**
     * @var FareRuleLong $FareRuleLong
     */
    public $FareRuleLong = null;

    /**
     * @var FareRuleShort $FareRuleShort
     */
    public $FareRuleShort = null;

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
     * @var typeResultMessage[] $FareRuleResultMessage
     */
    public $FareRuleResultMessage = null;

    /**
     * @var StructuredFareRulesType $StructuredFareRules
     */
    public $StructuredFareRules = null;

    /**
     * @var string $FareInfoRef
     */
    public $FareInfoRef = null;

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
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @param FareRuleLong $FareRuleLong
     * @param FareRuleShort $FareRuleShort
     * @param RuleAdvancedPurchase $RuleAdvancedPurchase
     * @param RuleLengthOfStay $RuleLengthOfStay
     * @param RuleCharges $RuleCharges
     * @param string $FareInfoRef
     * @param string $RuleNumber
     * @param string $Source
     * @param string $TariffNumber
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($FareRuleLong = null, $FareRuleShort = null, $RuleAdvancedPurchase = null, $RuleLengthOfStay = null, $RuleCharges = null, $FareInfoRef = null, $RuleNumber = null, $Source = null, $TariffNumber = null, $ProviderCode = null, $SupplierCode = null)
    {
      $this->FareRuleLong = $FareRuleLong;
      $this->FareRuleShort = $FareRuleShort;
      $this->RuleAdvancedPurchase = $RuleAdvancedPurchase;
      $this->RuleLengthOfStay = $RuleLengthOfStay;
      $this->RuleCharges = $RuleCharges;
      $this->FareInfoRef = $FareInfoRef;
      $this->RuleNumber = $RuleNumber;
      $this->Source = $Source;
      $this->TariffNumber = $TariffNumber;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
    }

    /**
     * @return FareRuleLong
     */
    public function getFareRuleLong()
    {
      return $this->FareRuleLong;
    }

    /**
     * @param FareRuleLong $FareRuleLong
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setFareRuleLong($FareRuleLong)
    {
      $this->FareRuleLong = $FareRuleLong;
      return $this;
    }

    /**
     * @return FareRuleShort
     */
    public function getFareRuleShort()
    {
      return $this->FareRuleShort;
    }

    /**
     * @param FareRuleShort $FareRuleShort
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setFareRuleShort($FareRuleShort)
    {
      $this->FareRuleShort = $FareRuleShort;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\FareRule
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
     * @return \FilippoToso\Travelport\Rail\FareRule
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
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setRuleCharges($RuleCharges)
    {
      $this->RuleCharges = $RuleCharges;
      return $this;
    }

    /**
     * @return typeResultMessage[]
     */
    public function getFareRuleResultMessage()
    {
      return $this->FareRuleResultMessage;
    }

    /**
     * @param typeResultMessage[] $FareRuleResultMessage
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setFareRuleResultMessage(array $FareRuleResultMessage = null)
    {
      $this->FareRuleResultMessage = $FareRuleResultMessage;
      return $this;
    }

    /**
     * @return StructuredFareRulesType
     */
    public function getStructuredFareRules()
    {
      return $this->StructuredFareRules;
    }

    /**
     * @param StructuredFareRulesType $StructuredFareRules
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setStructuredFareRules($StructuredFareRules)
    {
      $this->StructuredFareRules = $StructuredFareRules;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param string $FareInfoRef
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
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
     * @return \FilippoToso\Travelport\Rail\FareRule
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
     * @return \FilippoToso\Travelport\Rail\FareRule
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
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setTariffNumber($TariffNumber)
    {
      $this->TariffNumber = $TariffNumber;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Rail\FareRule
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
