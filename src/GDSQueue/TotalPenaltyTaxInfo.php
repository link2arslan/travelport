<?php

namespace FilippoToso\Travelport\GDSQueue;

class TotalPenaltyTaxInfo
{

    /**
     * @var typeTax[] $PenaltyTaxInfo
     */
    public $PenaltyTaxInfo = null;

    /**
     * @var typeMoney $TotalPenaltyTax
     */
    public $TotalPenaltyTax = null;

    /**
     * @param typeMoney $TotalPenaltyTax
     */
    public function __construct($TotalPenaltyTax = null)
    {
      $this->TotalPenaltyTax = $TotalPenaltyTax;
    }

    /**
     * @return typeTax[]
     */
    public function getPenaltyTaxInfo()
    {
      return $this->PenaltyTaxInfo;
    }

    /**
     * @param typeTax[] $PenaltyTaxInfo
     * @return \FilippoToso\Travelport\GDSQueue\TotalPenaltyTaxInfo
     */
    public function setPenaltyTaxInfo(array $PenaltyTaxInfo = null)
    {
      $this->PenaltyTaxInfo = $PenaltyTaxInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPenaltyTax()
    {
      return $this->TotalPenaltyTax;
    }

    /**
     * @param typeMoney $TotalPenaltyTax
     * @return \FilippoToso\Travelport\GDSQueue\TotalPenaltyTaxInfo
     */
    public function setTotalPenaltyTax($TotalPenaltyTax)
    {
      $this->TotalPenaltyTax = $TotalPenaltyTax;
      return $this;
    }

}
