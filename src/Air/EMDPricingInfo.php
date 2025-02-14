<?php

namespace FilippoToso\Travelport\Air;

class EMDPricingInfo
{

    /**
     * @var typeTaxInfo $TaxInfo
     */
    public $TaxInfo = null;

    /**
     * @var typeMoney $BaseFare
     */
    public $BaseFare = null;

    /**
     * @var typeMoney $TotalFare
     */
    public $TotalFare = null;

    /**
     * @var typeMoney $TotalTax
     */
    public $TotalTax = null;

    /**
     * @var typeMoney $EquivFare
     */
    public $EquivFare = null;

    /**
     * @param typeTaxInfo $TaxInfo
     * @param typeMoney $BaseFare
     * @param typeMoney $TotalFare
     * @param typeMoney $TotalTax
     * @param typeMoney $EquivFare
     */
    public function __construct($TaxInfo = null, $BaseFare = null, $TotalFare = null, $TotalTax = null, $EquivFare = null)
    {
      $this->TaxInfo = $TaxInfo;
      $this->BaseFare = $BaseFare;
      $this->TotalFare = $TotalFare;
      $this->TotalTax = $TotalTax;
      $this->EquivFare = $EquivFare;
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
     * @return \FilippoToso\Travelport\Air\EMDPricingInfo
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseFare()
    {
      return $this->BaseFare;
    }

    /**
     * @param typeMoney $BaseFare
     * @return \FilippoToso\Travelport\Air\EMDPricingInfo
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalFare()
    {
      return $this->TotalFare;
    }

    /**
     * @param typeMoney $TotalFare
     * @return \FilippoToso\Travelport\Air\EMDPricingInfo
     */
    public function setTotalFare($TotalFare)
    {
      $this->TotalFare = $TotalFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param typeMoney $TotalTax
     * @return \FilippoToso\Travelport\Air\EMDPricingInfo
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivFare()
    {
      return $this->EquivFare;
    }

    /**
     * @param typeMoney $EquivFare
     * @return \FilippoToso\Travelport\Air\EMDPricingInfo
     */
    public function setEquivFare($EquivFare)
    {
      $this->EquivFare = $EquivFare;
      return $this;
    }

}
