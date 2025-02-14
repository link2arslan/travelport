<?php

namespace FilippoToso\Travelport\Rail;

class HotelSearchResult extends typeResultMessage
{

    /**
     * @var VendorLocation $VendorLocation
     */
    public $VendorLocation = null;

    /**
     * @var HotelProperty $HotelProperty
     */
    public $HotelProperty = null;

    /**
     * @var HotelSearchError[] $HotelSearchError
     */
    public $HotelSearchError = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    public $CorporateDiscountID = null;

    /**
     * @var RateInfo $RateInfo
     */
    public $RateInfo = null;

    /**
     * @var MediaItem $MediaItem
     */
    public $MediaItem = null;

    /**
     * @var HotelType $HotelType
     */
    public $HotelType = null;

    /**
     * @var PropertyDescription $PropertyDescription
     */
    public $PropertyDescription = null;

    /**
     * @param string $_
     * @param int $Code
     * @param anonymous229 $Type
     * @param VendorLocation $VendorLocation
     * @param HotelProperty $HotelProperty
     * @param CorporateDiscountID $CorporateDiscountID
     * @param RateInfo $RateInfo
     * @param MediaItem $MediaItem
     * @param HotelType $HotelType
     * @param PropertyDescription $PropertyDescription
     */
    public function __construct($_ = null, $Code = null, $Type = null, $VendorLocation = null, $HotelProperty = null, $CorporateDiscountID = null, $RateInfo = null, $MediaItem = null, $HotelType = null, $PropertyDescription = null)
    {
      parent::__construct($_, $Code, $Type);
      $this->VendorLocation = $VendorLocation;
      $this->HotelProperty = $HotelProperty;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->RateInfo = $RateInfo;
      $this->MediaItem = $MediaItem;
      $this->HotelType = $HotelType;
      $this->PropertyDescription = $PropertyDescription;
    }

    /**
     * @return VendorLocation
     */
    public function getVendorLocation()
    {
      return $this->VendorLocation;
    }

    /**
     * @param VendorLocation $VendorLocation
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setVendorLocation($VendorLocation)
    {
      $this->VendorLocation = $VendorLocation;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelSearchError[]
     */
    public function getHotelSearchError()
    {
      return $this->HotelSearchError;
    }

    /**
     * @param HotelSearchError[] $HotelSearchError
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setHotelSearchError(array $HotelSearchError = null)
    {
      $this->HotelSearchError = $HotelSearchError;
      return $this;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return RateInfo
     */
    public function getRateInfo()
    {
      return $this->RateInfo;
    }

    /**
     * @param RateInfo $RateInfo
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setRateInfo($RateInfo)
    {
      $this->RateInfo = $RateInfo;
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
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setMediaItem($MediaItem)
    {
      $this->MediaItem = $MediaItem;
      return $this;
    }

    /**
     * @return HotelType
     */
    public function getHotelType()
    {
      return $this->HotelType;
    }

    /**
     * @param HotelType $HotelType
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setHotelType($HotelType)
    {
      $this->HotelType = $HotelType;
      return $this;
    }

    /**
     * @return PropertyDescription
     */
    public function getPropertyDescription()
    {
      return $this->PropertyDescription;
    }

    /**
     * @param PropertyDescription $PropertyDescription
     * @return \FilippoToso\Travelport\Rail\HotelSearchResult
     */
    public function setPropertyDescription($PropertyDescription)
    {
      $this->PropertyDescription = $PropertyDescription;
      return $this;
    }

}
