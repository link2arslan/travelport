<?php

namespace FilippoToso\Travelport\UProfile;

class ServiceFeeTaxInfo
{

    /**
     * @var string $Category
     */
    public $Category = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @param string $Category
     * @param typeMoney $Amount
     */
    public function __construct($Category = null, $Amount = null)
    {
      $this->Category = $Category;
      $this->Amount = $Amount;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FilippoToso\Travelport\UProfile\ServiceFeeTaxInfo
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\ServiceFeeTaxInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
