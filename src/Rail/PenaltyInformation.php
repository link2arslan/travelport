<?php

namespace FilippoToso\Travelport\Rail;

class PenaltyInformation
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @var string $FareBasis
     */
    public $FareBasis = null;

    /**
     * @var int $FareComponent
     */
    public $FareComponent = null;

    /**
     * @var int $PriceableUnit
     */
    public $PriceableUnit = null;

    /**
     * @var typeIATACode $BoardPoint
     */
    public $BoardPoint = null;

    /**
     * @var typeIATACode $OffPoint
     */
    public $OffPoint = null;

    /**
     * @var typeMoney $MinimumChangeFee
     */
    public $MinimumChangeFee = null;

    /**
     * @var typeMoney $MaximumChangeFee
     */
    public $MaximumChangeFee = null;

    /**
     * @var typeCurrency $FiledCurrency
     */
    public $FiledCurrency = null;

    /**
     * @var float $ConversionRate
     */
    public $ConversionRate = null;

    /**
     * @var boolean $Refundable
     */
    public $Refundable = null;

    /**
     * @var anonymous1144 $ChangeFeeApplicationCode
     */
    public $ChangeFeeApplicationCode = null;

    /**
     * @param string $_
     * @param typeCarrier $Carrier
     * @param string $FareBasis
     * @param int $FareComponent
     * @param int $PriceableUnit
     * @param typeIATACode $BoardPoint
     * @param typeIATACode $OffPoint
     * @param typeMoney $MinimumChangeFee
     * @param typeMoney $MaximumChangeFee
     * @param typeCurrency $FiledCurrency
     * @param float $ConversionRate
     * @param boolean $Refundable
     * @param anonymous1144 $ChangeFeeApplicationCode
     */
    public function __construct($_ = null, $Carrier = null, $FareBasis = null, $FareComponent = null, $PriceableUnit = null, $BoardPoint = null, $OffPoint = null, $MinimumChangeFee = null, $MaximumChangeFee = null, $FiledCurrency = null, $ConversionRate = null, $Refundable = null, $ChangeFeeApplicationCode = null)
    {
      $this->_ = $_;
      $this->Carrier = $Carrier;
      $this->FareBasis = $FareBasis;
      $this->FareComponent = $FareComponent;
      $this->PriceableUnit = $PriceableUnit;
      $this->BoardPoint = $BoardPoint;
      $this->OffPoint = $OffPoint;
      $this->MinimumChangeFee = $MinimumChangeFee;
      $this->MaximumChangeFee = $MaximumChangeFee;
      $this->FiledCurrency = $FiledCurrency;
      $this->ConversionRate = $ConversionRate;
      $this->Refundable = $Refundable;
      $this->ChangeFeeApplicationCode = $ChangeFeeApplicationCode;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return int
     */
    public function getFareComponent()
    {
      return $this->FareComponent;
    }

    /**
     * @param int $FareComponent
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setFareComponent($FareComponent)
    {
      $this->FareComponent = $FareComponent;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceableUnit()
    {
      return $this->PriceableUnit;
    }

    /**
     * @param int $PriceableUnit
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setPriceableUnit($PriceableUnit)
    {
      $this->PriceableUnit = $PriceableUnit;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getBoardPoint()
    {
      return $this->BoardPoint;
    }

    /**
     * @param typeIATACode $BoardPoint
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setBoardPoint($BoardPoint)
    {
      $this->BoardPoint = $BoardPoint;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOffPoint()
    {
      return $this->OffPoint;
    }

    /**
     * @param typeIATACode $OffPoint
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setOffPoint($OffPoint)
    {
      $this->OffPoint = $OffPoint;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMinimumChangeFee()
    {
      return $this->MinimumChangeFee;
    }

    /**
     * @param typeMoney $MinimumChangeFee
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setMinimumChangeFee($MinimumChangeFee)
    {
      $this->MinimumChangeFee = $MinimumChangeFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaximumChangeFee()
    {
      return $this->MaximumChangeFee;
    }

    /**
     * @param typeMoney $MaximumChangeFee
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setMaximumChangeFee($MaximumChangeFee)
    {
      $this->MaximumChangeFee = $MaximumChangeFee;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getFiledCurrency()
    {
      return $this->FiledCurrency;
    }

    /**
     * @param typeCurrency $FiledCurrency
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setFiledCurrency($FiledCurrency)
    {
      $this->FiledCurrency = $FiledCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
      return $this->ConversionRate;
    }

    /**
     * @param float $ConversionRate
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setConversionRate($ConversionRate)
    {
      $this->ConversionRate = $ConversionRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return anonymous1144
     */
    public function getChangeFeeApplicationCode()
    {
      return $this->ChangeFeeApplicationCode;
    }

    /**
     * @param anonymous1144 $ChangeFeeApplicationCode
     * @return \FilippoToso\Travelport\Rail\PenaltyInformation
     */
    public function setChangeFeeApplicationCode($ChangeFeeApplicationCode)
    {
      $this->ChangeFeeApplicationCode = $ChangeFeeApplicationCode;
      return $this;
    }

}
