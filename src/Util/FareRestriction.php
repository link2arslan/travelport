<?php

namespace FilippoToso\Travelport\Util;

class FareRestriction
{

    /**
     * @var FareRestrictionDaysOfWeek $FareRestrictionDaysOfWeek
     */
    public $FareRestrictionDaysOfWeek = null;

    /**
     * @var FareRestrictionDate $FareRestrictionDate
     */
    public $FareRestrictionDate = null;

    /**
     * @var FareRestrictionSaleDate $FareRestrictionSaleDate
     */
    public $FareRestrictionSaleDate = null;

    /**
     * @var FareRestrictionSeasonal $FareRestrictionSeasonal
     */
    public $FareRestrictionSeasonal = null;

    /**
     * @var typeFareRestrictionType $FareRestrictiontype
     */
    public $FareRestrictiontype = null;

    /**
     * @param FareRestrictionDaysOfWeek $FareRestrictionDaysOfWeek
     * @param FareRestrictionDate $FareRestrictionDate
     * @param FareRestrictionSaleDate $FareRestrictionSaleDate
     * @param FareRestrictionSeasonal $FareRestrictionSeasonal
     * @param typeFareRestrictionType $FareRestrictiontype
     */
    public function __construct($FareRestrictionDaysOfWeek = null, $FareRestrictionDate = null, $FareRestrictionSaleDate = null, $FareRestrictionSeasonal = null, $FareRestrictiontype = null)
    {
      $this->FareRestrictionDaysOfWeek = $FareRestrictionDaysOfWeek;
      $this->FareRestrictionDate = $FareRestrictionDate;
      $this->FareRestrictionSaleDate = $FareRestrictionSaleDate;
      $this->FareRestrictionSeasonal = $FareRestrictionSeasonal;
      $this->FareRestrictiontype = $FareRestrictiontype;
    }

    /**
     * @return FareRestrictionDaysOfWeek
     */
    public function getFareRestrictionDaysOfWeek()
    {
      return $this->FareRestrictionDaysOfWeek;
    }

    /**
     * @param FareRestrictionDaysOfWeek $FareRestrictionDaysOfWeek
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictionDaysOfWeek($FareRestrictionDaysOfWeek)
    {
      $this->FareRestrictionDaysOfWeek = $FareRestrictionDaysOfWeek;
      return $this;
    }

    /**
     * @return FareRestrictionDate
     */
    public function getFareRestrictionDate()
    {
      return $this->FareRestrictionDate;
    }

    /**
     * @param FareRestrictionDate $FareRestrictionDate
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictionDate($FareRestrictionDate)
    {
      $this->FareRestrictionDate = $FareRestrictionDate;
      return $this;
    }

    /**
     * @return FareRestrictionSaleDate
     */
    public function getFareRestrictionSaleDate()
    {
      return $this->FareRestrictionSaleDate;
    }

    /**
     * @param FareRestrictionSaleDate $FareRestrictionSaleDate
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictionSaleDate($FareRestrictionSaleDate)
    {
      $this->FareRestrictionSaleDate = $FareRestrictionSaleDate;
      return $this;
    }

    /**
     * @return FareRestrictionSeasonal
     */
    public function getFareRestrictionSeasonal()
    {
      return $this->FareRestrictionSeasonal;
    }

    /**
     * @param FareRestrictionSeasonal $FareRestrictionSeasonal
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictionSeasonal($FareRestrictionSeasonal)
    {
      $this->FareRestrictionSeasonal = $FareRestrictionSeasonal;
      return $this;
    }

    /**
     * @return typeFareRestrictionType
     */
    public function getFareRestrictiontype()
    {
      return $this->FareRestrictiontype;
    }

    /**
     * @param typeFareRestrictionType $FareRestrictiontype
     * @return \FilippoToso\Travelport\Util\FareRestriction
     */
    public function setFareRestrictiontype($FareRestrictiontype)
    {
      $this->FareRestrictiontype = $FareRestrictiontype;
      return $this;
    }

}
