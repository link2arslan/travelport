<?php

namespace FilippoToso\Travelport\Air;

class typeVoucherInformation
{

    /**
     * @var typeVoucherType $VoucherType
     */
    public $VoucherType = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var string $ConfirmationNumber
     */
    public $ConfirmationNumber = null;

    /**
     * @var string $AccountName
     */
    public $AccountName = null;

    /**
     * @var StringLength1to16 $Number
     */
    public $Number = null;

    /**
     * @param typeVoucherType $VoucherType
     * @param typeMoney $Amount
     * @param string $ConfirmationNumber
     * @param string $AccountName
     * @param StringLength1to16 $Number
     */
    public function __construct($VoucherType = null, $Amount = null, $ConfirmationNumber = null, $AccountName = null, $Number = null)
    {
      $this->VoucherType = $VoucherType;
      $this->Amount = $Amount;
      $this->ConfirmationNumber = $ConfirmationNumber;
      $this->AccountName = $AccountName;
      $this->Number = $Number;
    }

    /**
     * @return typeVoucherType
     */
    public function getVoucherType()
    {
      return $this->VoucherType;
    }

    /**
     * @param typeVoucherType $VoucherType
     * @return \FilippoToso\Travelport\Air\typeVoucherInformation
     */
    public function setVoucherType($VoucherType)
    {
      $this->VoucherType = $VoucherType;
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
     * @return \FilippoToso\Travelport\Air\typeVoucherInformation
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
      return $this->ConfirmationNumber;
    }

    /**
     * @param string $ConfirmationNumber
     * @return \FilippoToso\Travelport\Air\typeVoucherInformation
     */
    public function setConfirmationNumber($ConfirmationNumber)
    {
      $this->ConfirmationNumber = $ConfirmationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \FilippoToso\Travelport\Air\typeVoucherInformation
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to16 $Number
     * @return \FilippoToso\Travelport\Air\typeVoucherInformation
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
