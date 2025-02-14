<?php

namespace FilippoToso\Travelport\Air;

class RailFareComponent
{

    /**
     * @var Discount[] $Discount
     */
    public $Discount = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var int $Age
     */
    public $Age = null;

    /**
     * @var typePTC $PassengerTypeCode
     */
    public $PassengerTypeCode = null;

    /**
     * @var string $SupplierPassengerType
     */
    public $SupplierPassengerType = null;

    /**
     * @var int $Quantity
     */
    public $Quantity = null;

    /**
     * @param typeRef $Key
     * @param typeMoney $Amount
     * @param int $Age
     * @param typePTC $PassengerTypeCode
     * @param string $SupplierPassengerType
     * @param int $Quantity
     */
    public function __construct($Key = null, $Amount = null, $Age = null, $PassengerTypeCode = null, $SupplierPassengerType = null, $Quantity = null)
    {
      $this->Key = $Key;
      $this->Amount = $Amount;
      $this->Age = $Age;
      $this->PassengerTypeCode = $PassengerTypeCode;
      $this->SupplierPassengerType = $SupplierPassengerType;
      $this->Quantity = $Quantity;
    }

    /**
     * @return Discount[]
     */
    public function getDiscount()
    {
      return $this->Discount;
    }

    /**
     * @param Discount[] $Discount
     * @return \FilippoToso\Travelport\Air\RailFareComponent
     */
    public function setDiscount(array $Discount = null)
    {
      $this->Discount = $Discount;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Air\RailFareComponent
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Air\RailFareComponent
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \FilippoToso\Travelport\Air\RailFareComponent
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param typePTC $PassengerTypeCode
     * @return \FilippoToso\Travelport\Air\RailFareComponent
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierPassengerType()
    {
      return $this->SupplierPassengerType;
    }

    /**
     * @param string $SupplierPassengerType
     * @return \FilippoToso\Travelport\Air\RailFareComponent
     */
    public function setSupplierPassengerType($SupplierPassengerType)
    {
      $this->SupplierPassengerType = $SupplierPassengerType;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FilippoToso\Travelport\Air\RailFareComponent
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
