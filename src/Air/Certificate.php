<?php

namespace FilippoToso\Travelport\Air;

class Certificate
{

    /**
     * @var string $Number
     */
    public $Number = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var typeMoney $DiscountAmount
     */
    public $DiscountAmount = null;

    /**
     * @var int $DiscountPercentage
     */
    public $DiscountPercentage = null;

    /**
     * @var date $NotValidBefore
     */
    public $NotValidBefore = null;

    /**
     * @var date $NotValidAfter
     */
    public $NotValidAfter = null;

    /**
     * @param string $Number
     * @param typeMoney $Amount
     * @param typeMoney $DiscountAmount
     * @param int $DiscountPercentage
     * @param date $NotValidBefore
     * @param date $NotValidAfter
     */
    public function __construct($Number = null, $Amount = null, $DiscountAmount = null, $DiscountPercentage = null, $NotValidBefore = null, $NotValidAfter = null)
    {
      $this->Number = $Number;
      $this->Amount = $Amount;
      $this->DiscountAmount = $DiscountAmount;
      $this->DiscountPercentage = $DiscountPercentage;
      $this->NotValidBefore = $NotValidBefore;
      $this->NotValidAfter = $NotValidAfter;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\Air\Certificate
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \FilippoToso\Travelport\Air\Certificate
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getDiscountAmount()
    {
      return $this->DiscountAmount;
    }

    /**
     * @param typeMoney $DiscountAmount
     * @return \FilippoToso\Travelport\Air\Certificate
     */
    public function setDiscountAmount($DiscountAmount)
    {
      $this->DiscountAmount = $DiscountAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDiscountPercentage()
    {
      return $this->DiscountPercentage;
    }

    /**
     * @param int $DiscountPercentage
     * @return \FilippoToso\Travelport\Air\Certificate
     */
    public function setDiscountPercentage($DiscountPercentage)
    {
      $this->DiscountPercentage = $DiscountPercentage;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidBefore()
    {
      return $this->NotValidBefore;
    }

    /**
     * @param date $NotValidBefore
     * @return \FilippoToso\Travelport\Air\Certificate
     */
    public function setNotValidBefore($NotValidBefore)
    {
      $this->NotValidBefore = $NotValidBefore;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidAfter()
    {
      return $this->NotValidAfter;
    }

    /**
     * @param date $NotValidAfter
     * @return \FilippoToso\Travelport\Air\Certificate
     */
    public function setNotValidAfter($NotValidAfter)
    {
      $this->NotValidAfter = $NotValidAfter;
      return $this;
    }

}
