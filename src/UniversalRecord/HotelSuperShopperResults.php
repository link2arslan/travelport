<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelSuperShopperResults
{

    /**
     * @var HotelProperty $HotelProperty
     */
    public $HotelProperty = null;

    /**
     * @var HotelDetailItem $HotelDetailItem
     */
    public $HotelDetailItem = null;

    /**
     * @var HotelRateDetail $HotelRateDetail
     */
    public $HotelRateDetail = null;

    /**
     * @var typeResultMessage[] $HotelResultsError
     */
    public $HotelResultsError = null;

    /**
     * @param HotelProperty $HotelProperty
     * @param HotelDetailItem $HotelDetailItem
     * @param HotelRateDetail $HotelRateDetail
     */
    public function __construct($HotelProperty = null, $HotelDetailItem = null, $HotelRateDetail = null)
    {
      $this->HotelProperty = $HotelProperty;
      $this->HotelDetailItem = $HotelDetailItem;
      $this->HotelRateDetail = $HotelRateDetail;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSuperShopperResults
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelDetailItem
     */
    public function getHotelDetailItem()
    {
      return $this->HotelDetailItem;
    }

    /**
     * @param HotelDetailItem $HotelDetailItem
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSuperShopperResults
     */
    public function setHotelDetailItem($HotelDetailItem)
    {
      $this->HotelDetailItem = $HotelDetailItem;
      return $this;
    }

    /**
     * @return HotelRateDetail
     */
    public function getHotelRateDetail()
    {
      return $this->HotelRateDetail;
    }

    /**
     * @param HotelRateDetail $HotelRateDetail
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSuperShopperResults
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

    /**
     * @return typeResultMessage[]
     */
    public function getHotelResultsError()
    {
      return $this->HotelResultsError;
    }

    /**
     * @param typeResultMessage[] $HotelResultsError
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSuperShopperResults
     */
    public function setHotelResultsError(array $HotelResultsError = null)
    {
      $this->HotelResultsError = $HotelResultsError;
      return $this;
    }

}
