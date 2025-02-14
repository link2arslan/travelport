<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeHotelDetails
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
     * @var MediaItem $MediaItem
     */
    public $MediaItem = null;

    /**
     * @param HotelProperty $HotelProperty
     * @param HotelDetailItem $HotelDetailItem
     * @param HotelRateDetail $HotelRateDetail
     * @param MediaItem $MediaItem
     */
    public function __construct($HotelProperty = null, $HotelDetailItem = null, $HotelRateDetail = null, $MediaItem = null)
    {
      $this->HotelProperty = $HotelProperty;
      $this->HotelDetailItem = $HotelDetailItem;
      $this->HotelRateDetail = $HotelRateDetail;
      $this->MediaItem = $MediaItem;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeHotelDetails
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeHotelDetails
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeHotelDetails
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

    /**
     * @return MediaItem
     */
    public function getMediaItem()
    {
      return $this->MediaItem;
    }

    /**
     * @param MediaItem $MediaItem
     * @return \FilippoToso\Travelport\UniversalRecord\typeHotelDetails
     */
    public function setMediaItem($MediaItem)
    {
      $this->MediaItem = $MediaItem;
      return $this;
    }

}
