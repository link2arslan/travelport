<?php

namespace FilippoToso\Travelport\Util;

class TCRExchangeBundle
{

    /**
     * @var AirExchangeInfo $AirExchangeInfo
     */
    public $AirExchangeInfo = null;

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    public $AirPricingInfoRef = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    public $FeeInfo = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    public $TaxInfo = null;

    /**
     * @var Penalty $Penalty
     */
    public $Penalty = null;

    /**
     * @var typeTCRNumber $TCRNumber
     */
    public $TCRNumber = null;

    /**
     * @param AirExchangeInfo $AirExchangeInfo
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param typeFeeInfo $FeeInfo
     * @param typeTaxInfo $TaxInfo
     * @param Penalty $Penalty
     * @param typeTCRNumber $TCRNumber
     */
    public function __construct($AirExchangeInfo = null, $AirPricingInfoRef = null, $FeeInfo = null, $TaxInfo = null, $Penalty = null, $TCRNumber = null)
    {
      $this->AirExchangeInfo = $AirExchangeInfo;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->FeeInfo = $FeeInfo;
      $this->TaxInfo = $TaxInfo;
      $this->Penalty = $Penalty;
      $this->TCRNumber = $TCRNumber;
    }

    /**
     * @return AirExchangeInfo
     */
    public function getAirExchangeInfo()
    {
      return $this->AirExchangeInfo;
    }

    /**
     * @param AirExchangeInfo $AirExchangeInfo
     * @return \FilippoToso\Travelport\Util\TCRExchangeBundle
     */
    public function setAirExchangeInfo($AirExchangeInfo)
    {
      $this->AirExchangeInfo = $AirExchangeInfo;
      return $this;
    }

    /**
     * @return AirPricingInfoRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\Util\TCRExchangeBundle
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return typeFeeInfo
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo $FeeInfo
     * @return \FilippoToso\Travelport\Util\TCRExchangeBundle
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return typeTaxInfo
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo $TaxInfo
     * @return \FilippoToso\Travelport\Util\TCRExchangeBundle
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return Penalty
     */
    public function getPenalty()
    {
      return $this->Penalty;
    }

    /**
     * @param Penalty $Penalty
     * @return \FilippoToso\Travelport\Util\TCRExchangeBundle
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
      return $this;
    }

    /**
     * @return typeTCRNumber
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber $TCRNumber
     * @return \FilippoToso\Travelport\Util\TCRExchangeBundle
     */
    public function setTCRNumber($TCRNumber)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
    }

}
