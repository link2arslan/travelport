<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelRateByDate
{

    /**
     * @var string $EffectiveDate
     */
    public $EffectiveDate = null;

    /**
     * @var string $ExpireDate
     */
    public $ExpireDate = null;

    /**
     * @var typeMoney $ApproximateBase
     */
    public $ApproximateBase = null;

    /**
     * @var typeMoney $ApproximateTotal
     */
    public $ApproximateTotal = null;

    /**
     * @var string $Contents
     */
    public $Contents = null;

    /**
     * @var typeMoney $Base
     */
    public $Base = null;

    /**
     * @var typeMoney $Tax
     */
    public $Tax = null;

    /**
     * @var typeMoney $Total
     */
    public $Total = null;

    /**
     * @var typeMoney $Surcharge
     */
    public $Surcharge = null;

    /**
     * @param string $EffectiveDate
     * @param string $ExpireDate
     * @param typeMoney $ApproximateBase
     * @param typeMoney $ApproximateTotal
     * @param string $Contents
     * @param typeMoney $Base
     * @param typeMoney $Tax
     * @param typeMoney $Total
     * @param typeMoney $Surcharge
     */
    public function __construct($EffectiveDate = null, $ExpireDate = null, $ApproximateBase = null, $ApproximateTotal = null, $Contents = null, $Base = null, $Tax = null, $Total = null, $Surcharge = null)
    {
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpireDate = $ExpireDate;
      $this->ApproximateBase = $ApproximateBase;
      $this->ApproximateTotal = $ApproximateTotal;
      $this->Contents = $Contents;
      $this->Base = $Base;
      $this->Tax = $Tax;
      $this->Total = $Total;
      $this->Surcharge = $Surcharge;
    }

    /**
     * @return string
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param string $EffectiveDate
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpireDate()
    {
      return $this->ExpireDate;
    }

    /**
     * @param string $ExpireDate
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setExpireDate($ExpireDate)
    {
      $this->ExpireDate = $ExpireDate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBase()
    {
      return $this->ApproximateBase;
    }

    /**
     * @param typeMoney $ApproximateBase
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setApproximateBase($ApproximateBase)
    {
      $this->ApproximateBase = $ApproximateBase;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotal()
    {
      return $this->ApproximateTotal;
    }

    /**
     * @param typeMoney $ApproximateTotal
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setApproximateTotal($ApproximateTotal)
    {
      $this->ApproximateTotal = $ApproximateTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getContents()
    {
      return $this->Contents;
    }

    /**
     * @param string $Contents
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setContents($Contents)
    {
      $this->Contents = $Contents;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param typeMoney $Base
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param typeMoney $Tax
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param typeMoney $Total
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getSurcharge()
    {
      return $this->Surcharge;
    }

    /**
     * @param typeMoney $Surcharge
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateByDate
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

}
