<?php

namespace FilippoToso\Travelport\Hotel;

class RateInfo
{

    /**
     * @var typeRoomDispatch $RoomDispatch
     */
    public $RoomDispatch = null;

    /**
     * @var typePolicyCodesList $PolicyCodesList
     */
    public $PolicyCodesList = null;

    /**
     * @var typeMoney $MinimumAmount
     */
    public $MinimumAmount = null;

    /**
     * @var typeMoney $ApproximateMinimumAmount
     */
    public $ApproximateMinimumAmount = null;

    /**
     * @var boolean $MinAmountRateChanged
     */
    public $MinAmountRateChanged = null;

    /**
     * @var typeMoney $MaximumAmount
     */
    public $MaximumAmount = null;

    /**
     * @var typeMoney $ApproximateMaximumAmount
     */
    public $ApproximateMaximumAmount = null;

    /**
     * @var boolean $MaxAmountRateChanged
     */
    public $MaxAmountRateChanged = null;

    /**
     * @var typeMoney $MinimumStayAmount
     */
    public $MinimumStayAmount = null;

    /**
     * @var typeMoney $ApproximateMinimumStayAmount
     */
    public $ApproximateMinimumStayAmount = null;

    /**
     * @var string $Commission
     */
    public $Commission = null;

    /**
     * @var typeThirdPartySupplier $RateSupplier
     */
    public $RateSupplier = null;

    /**
     * @var anyURI $RateSupplierLogo
     */
    public $RateSupplierLogo = null;

    /**
     * @var typeHotelPaymentType $PaymentType
     */
    public $PaymentType = null;

    /**
     * @var typeMoney $ApproxAvgNightlyAmt
     */
    public $ApproxAvgNightlyAmt = null;

    /**
     * @var boolean $TaxesIncluded
     */
    public $TaxesIncluded = null;

    /**
     * @var boolean $AmountConverted
     */
    public $AmountConverted = null;

    /**
     * @var string $MultipleRoom
     */
    public $MultipleRoom = null;

    /**
     * @var string $PackageOffer
     */
    public $PackageOffer = null;

    /**
     * @var boolean $MinInPolicy
     */
    public $MinInPolicy = null;

    /**
     * @var boolean $MaxInPolicy
     */
    public $MaxInPolicy = null;

    /**
     * @param typeMoney $MinimumAmount
     * @param typeMoney $ApproximateMinimumAmount
     * @param boolean $MinAmountRateChanged
     * @param typeMoney $MaximumAmount
     * @param typeMoney $ApproximateMaximumAmount
     * @param boolean $MaxAmountRateChanged
     * @param typeMoney $MinimumStayAmount
     * @param typeMoney $ApproximateMinimumStayAmount
     * @param string $Commission
     * @param typeThirdPartySupplier $RateSupplier
     * @param anyURI $RateSupplierLogo
     * @param typeHotelPaymentType $PaymentType
     * @param typeMoney $ApproxAvgNightlyAmt
     * @param boolean $TaxesIncluded
     * @param boolean $AmountConverted
     * @param string $MultipleRoom
     * @param string $PackageOffer
     * @param boolean $MinInPolicy
     * @param boolean $MaxInPolicy
     */
    public function __construct($MinimumAmount = null, $ApproximateMinimumAmount = null, $MinAmountRateChanged = null, $MaximumAmount = null, $ApproximateMaximumAmount = null, $MaxAmountRateChanged = null, $MinimumStayAmount = null, $ApproximateMinimumStayAmount = null, $Commission = null, $RateSupplier = null, $RateSupplierLogo = null, $PaymentType = null, $ApproxAvgNightlyAmt = null, $TaxesIncluded = null, $AmountConverted = null, $MultipleRoom = null, $PackageOffer = null, $MinInPolicy = null, $MaxInPolicy = null)
    {
      $this->MinimumAmount = $MinimumAmount;
      $this->ApproximateMinimumAmount = $ApproximateMinimumAmount;
      $this->MinAmountRateChanged = $MinAmountRateChanged;
      $this->MaximumAmount = $MaximumAmount;
      $this->ApproximateMaximumAmount = $ApproximateMaximumAmount;
      $this->MaxAmountRateChanged = $MaxAmountRateChanged;
      $this->MinimumStayAmount = $MinimumStayAmount;
      $this->ApproximateMinimumStayAmount = $ApproximateMinimumStayAmount;
      $this->Commission = $Commission;
      $this->RateSupplier = $RateSupplier;
      $this->RateSupplierLogo = $RateSupplierLogo;
      $this->PaymentType = $PaymentType;
      $this->ApproxAvgNightlyAmt = $ApproxAvgNightlyAmt;
      $this->TaxesIncluded = $TaxesIncluded;
      $this->AmountConverted = $AmountConverted;
      $this->MultipleRoom = $MultipleRoom;
      $this->PackageOffer = $PackageOffer;
      $this->MinInPolicy = $MinInPolicy;
      $this->MaxInPolicy = $MaxInPolicy;
    }

    /**
     * @return typeRoomDispatch
     */
    public function getRoomDispatch()
    {
      return $this->RoomDispatch;
    }

    /**
     * @param typeRoomDispatch $RoomDispatch
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setRoomDispatch($RoomDispatch)
    {
      $this->RoomDispatch = $RoomDispatch;
      return $this;
    }

    /**
     * @return typePolicyCodesList
     */
    public function getPolicyCodesList()
    {
      return $this->PolicyCodesList;
    }

    /**
     * @param typePolicyCodesList $PolicyCodesList
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setPolicyCodesList($PolicyCodesList)
    {
      $this->PolicyCodesList = $PolicyCodesList;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMinimumAmount()
    {
      return $this->MinimumAmount;
    }

    /**
     * @param typeMoney $MinimumAmount
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMinimumAmount($MinimumAmount)
    {
      $this->MinimumAmount = $MinimumAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateMinimumAmount()
    {
      return $this->ApproximateMinimumAmount;
    }

    /**
     * @param typeMoney $ApproximateMinimumAmount
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setApproximateMinimumAmount($ApproximateMinimumAmount)
    {
      $this->ApproximateMinimumAmount = $ApproximateMinimumAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMinAmountRateChanged()
    {
      return $this->MinAmountRateChanged;
    }

    /**
     * @param boolean $MinAmountRateChanged
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMinAmountRateChanged($MinAmountRateChanged)
    {
      $this->MinAmountRateChanged = $MinAmountRateChanged;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaximumAmount()
    {
      return $this->MaximumAmount;
    }

    /**
     * @param typeMoney $MaximumAmount
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMaximumAmount($MaximumAmount)
    {
      $this->MaximumAmount = $MaximumAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateMaximumAmount()
    {
      return $this->ApproximateMaximumAmount;
    }

    /**
     * @param typeMoney $ApproximateMaximumAmount
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setApproximateMaximumAmount($ApproximateMaximumAmount)
    {
      $this->ApproximateMaximumAmount = $ApproximateMaximumAmount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMaxAmountRateChanged()
    {
      return $this->MaxAmountRateChanged;
    }

    /**
     * @param boolean $MaxAmountRateChanged
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMaxAmountRateChanged($MaxAmountRateChanged)
    {
      $this->MaxAmountRateChanged = $MaxAmountRateChanged;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMinimumStayAmount()
    {
      return $this->MinimumStayAmount;
    }

    /**
     * @param typeMoney $MinimumStayAmount
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMinimumStayAmount($MinimumStayAmount)
    {
      $this->MinimumStayAmount = $MinimumStayAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateMinimumStayAmount()
    {
      return $this->ApproximateMinimumStayAmount;
    }

    /**
     * @param typeMoney $ApproximateMinimumStayAmount
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setApproximateMinimumStayAmount($ApproximateMinimumStayAmount)
    {
      $this->ApproximateMinimumStayAmount = $ApproximateMinimumStayAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param string $Commission
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return typeThirdPartySupplier
     */
    public function getRateSupplier()
    {
      return $this->RateSupplier;
    }

    /**
     * @param typeThirdPartySupplier $RateSupplier
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setRateSupplier($RateSupplier)
    {
      $this->RateSupplier = $RateSupplier;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getRateSupplierLogo()
    {
      return $this->RateSupplierLogo;
    }

    /**
     * @param anyURI $RateSupplierLogo
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setRateSupplierLogo($RateSupplierLogo)
    {
      $this->RateSupplierLogo = $RateSupplierLogo;
      return $this;
    }

    /**
     * @return typeHotelPaymentType
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param typeHotelPaymentType $PaymentType
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproxAvgNightlyAmt()
    {
      return $this->ApproxAvgNightlyAmt;
    }

    /**
     * @param typeMoney $ApproxAvgNightlyAmt
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setApproxAvgNightlyAmt($ApproxAvgNightlyAmt)
    {
      $this->ApproxAvgNightlyAmt = $ApproxAvgNightlyAmt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxesIncluded()
    {
      return $this->TaxesIncluded;
    }

    /**
     * @param boolean $TaxesIncluded
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setTaxesIncluded($TaxesIncluded)
    {
      $this->TaxesIncluded = $TaxesIncluded;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAmountConverted()
    {
      return $this->AmountConverted;
    }

    /**
     * @param boolean $AmountConverted
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setAmountConverted($AmountConverted)
    {
      $this->AmountConverted = $AmountConverted;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultipleRoom()
    {
      return $this->MultipleRoom;
    }

    /**
     * @param string $MultipleRoom
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMultipleRoom($MultipleRoom)
    {
      $this->MultipleRoom = $MultipleRoom;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageOffer()
    {
      return $this->PackageOffer;
    }

    /**
     * @param string $PackageOffer
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setPackageOffer($PackageOffer)
    {
      $this->PackageOffer = $PackageOffer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMinInPolicy()
    {
      return $this->MinInPolicy;
    }

    /**
     * @param boolean $MinInPolicy
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMinInPolicy($MinInPolicy)
    {
      $this->MinInPolicy = $MinInPolicy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMaxInPolicy()
    {
      return $this->MaxInPolicy;
    }

    /**
     * @param boolean $MaxInPolicy
     * @return \FilippoToso\Travelport\Hotel\RateInfo
     */
    public function setMaxInPolicy($MaxInPolicy)
    {
      $this->MaxInPolicy = $MaxInPolicy;
      return $this;
    }

}
