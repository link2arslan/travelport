<?php

namespace FilippoToso\Travelport\Terminal;

class MCOPriceData
{

    /**
     * @var typeTaxInfo[] $TaxInfo
     */
    public $TaxInfo = null;

    /**
     * @var Commission $Commission
     */
    public $Commission = null;

    /**
     * @var typeMoney $MCOAmount
     */
    public $MCOAmount = null;

    /**
     * @var typeMoney $MCOEquivalentFare
     */
    public $MCOEquivalentFare = null;

    /**
     * @var typeMoney $MCOTotalAmount
     */
    public $MCOTotalAmount = null;

    /**
     * @param typeMoney $MCOAmount
     * @param typeMoney $MCOEquivalentFare
     * @param typeMoney $MCOTotalAmount
     */
    public function __construct($MCOAmount = null, $MCOEquivalentFare = null, $MCOTotalAmount = null)
    {
      $this->MCOAmount = $MCOAmount;
      $this->MCOEquivalentFare = $MCOEquivalentFare;
      $this->MCOTotalAmount = $MCOTotalAmount;
    }

    /**
     * @return typeTaxInfo[]
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo[] $TaxInfo
     * @return \FilippoToso\Travelport\Terminal\MCOPriceData
     */
    public function setTaxInfo(array $TaxInfo = null)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\Terminal\MCOPriceData
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMCOAmount()
    {
      return $this->MCOAmount;
    }

    /**
     * @param typeMoney $MCOAmount
     * @return \FilippoToso\Travelport\Terminal\MCOPriceData
     */
    public function setMCOAmount($MCOAmount)
    {
      $this->MCOAmount = $MCOAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMCOEquivalentFare()
    {
      return $this->MCOEquivalentFare;
    }

    /**
     * @param typeMoney $MCOEquivalentFare
     * @return \FilippoToso\Travelport\Terminal\MCOPriceData
     */
    public function setMCOEquivalentFare($MCOEquivalentFare)
    {
      $this->MCOEquivalentFare = $MCOEquivalentFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMCOTotalAmount()
    {
      return $this->MCOTotalAmount;
    }

    /**
     * @param typeMoney $MCOTotalAmount
     * @return \FilippoToso\Travelport\Terminal\MCOPriceData
     */
    public function setMCOTotalAmount($MCOTotalAmount)
    {
      $this->MCOTotalAmount = $MCOTotalAmount;
      return $this;
    }

}
