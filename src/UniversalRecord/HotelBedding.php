<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelBedding
{

    /**
     * @var typeBedding $Type
     */
    public $Type = null;

    /**
     * @var int $NumberOfBeds
     */
    public $NumberOfBeds = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var string $Content
     */
    public $Content = null;

    /**
     * @param typeBedding $Type
     * @param int $NumberOfBeds
     * @param typeMoney $Amount
     * @param string $Content
     */
    public function __construct($Type = null, $NumberOfBeds = null, $Amount = null, $Content = null)
    {
      $this->Type = $Type;
      $this->NumberOfBeds = $NumberOfBeds;
      $this->Amount = $Amount;
      $this->Content = $Content;
    }

    /**
     * @return typeBedding
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeBedding $Type
     * @return \FilippoToso\Travelport\UniversalRecord\HotelBedding
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfBeds()
    {
      return $this->NumberOfBeds;
    }

    /**
     * @param int $NumberOfBeds
     * @return \FilippoToso\Travelport\UniversalRecord\HotelBedding
     */
    public function setNumberOfBeds($NumberOfBeds)
    {
      $this->NumberOfBeds = $NumberOfBeds;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelBedding
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \FilippoToso\Travelport\UniversalRecord\HotelBedding
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

}
