<?php

namespace FilippoToso\Travelport\System;

class typeTransactionsAllowed extends typeBookingTransactionsAllowed
{

    /**
     * @var boolean $ShoppingEnabled
     */
    public $ShoppingEnabled = null;

    /**
     * @var boolean $PricingEnabled
     */
    public $PricingEnabled = null;

    /**
     * @param boolean $BookingEnabled
     * @param boolean $ShoppingEnabled
     * @param boolean $PricingEnabled
     */
    public function __construct($BookingEnabled = null, $ShoppingEnabled = null, $PricingEnabled = null)
    {
      parent::__construct($BookingEnabled);
      $this->ShoppingEnabled = $ShoppingEnabled;
      $this->PricingEnabled = $PricingEnabled;
    }

    /**
     * @return boolean
     */
    public function getShoppingEnabled()
    {
      return $this->ShoppingEnabled;
    }

    /**
     * @param boolean $ShoppingEnabled
     * @return \FilippoToso\Travelport\System\typeTransactionsAllowed
     */
    public function setShoppingEnabled($ShoppingEnabled)
    {
      $this->ShoppingEnabled = $ShoppingEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPricingEnabled()
    {
      return $this->PricingEnabled;
    }

    /**
     * @param boolean $PricingEnabled
     * @return \FilippoToso\Travelport\System\typeTransactionsAllowed
     */
    public function setPricingEnabled($PricingEnabled)
    {
      $this->PricingEnabled = $PricingEnabled;
      return $this;
    }

}
