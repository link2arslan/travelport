<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeRateHostIndicator
{

    /**
     * @var string $InventoryToken
     */
    public $InventoryToken = null;

    /**
     * @var string $RateToken
     */
    public $RateToken = null;

    /**
     * @param string $InventoryToken
     * @param string $RateToken
     */
    public function __construct($InventoryToken = null, $RateToken = null)
    {
      $this->InventoryToken = $InventoryToken;
      $this->RateToken = $RateToken;
    }

    /**
     * @return string
     */
    public function getInventoryToken()
    {
      return $this->InventoryToken;
    }

    /**
     * @param string $InventoryToken
     * @return \FilippoToso\Travelport\GDSQueue\typeRateHostIndicator
     */
    public function setInventoryToken($InventoryToken)
    {
      $this->InventoryToken = $InventoryToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateToken()
    {
      return $this->RateToken;
    }

    /**
     * @param string $RateToken
     * @return \FilippoToso\Travelport\GDSQueue\typeRateHostIndicator
     */
    public function setRateToken($RateToken)
    {
      $this->RateToken = $RateToken;
      return $this;
    }

}
