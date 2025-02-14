<?php

namespace FilippoToso\Travelport\Air;

class typeTicketModifierAmountType
{

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @param typeMoney $Amount
     */
    public function __construct($Amount = null)
    {
      $this->Amount = $Amount;
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
     * @return \FilippoToso\Travelport\Air\typeTicketModifierAmountType
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
