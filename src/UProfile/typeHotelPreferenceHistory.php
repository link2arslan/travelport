<?php

namespace FilippoToso\Travelport\UProfile;

class typeHotelPreferenceHistory extends typeBasePreferenceHistory
{

    /**
     * @var date $CheckInStartDate
     */
    public $CheckInStartDate = null;

    /**
     * @var date $CheckInEndDate
     */
    public $CheckInEndDate = null;

    /**
     * @var anonymous686 $CorporateDiscountNumber
     */
    public $CorporateDiscountNumber = null;

    /**
     * @var typeMoney $MaxRoomRateAmount
     */
    public $MaxRoomRateAmount = null;

    /**
     * @var anonymous687 $MultiLevelRateCode
     */
    public $MultiLevelRateCode = null;

    /**
     * @var anonymous688 $PropertyID
     */
    public $PropertyID = null;

    /**
     * @var anonymous689 $RateCode
     */
    public $RateCode = null;

    /**
     * @var boolean $SmokingRoom
     */
    public $SmokingRoom = null;

    /**
     * @var anonymous871 $BedTypeMiscTravel
     */
    public $BedTypeMiscTravel = null;

    /**
     * @var anonymous872 $BedTypeRefCategory
     */
    public $BedTypeRefCategory = null;

    /**
     * @var anonymous873 $SpecialRequestMiscTravel
     */
    public $SpecialRequestMiscTravel = null;

    /**
     * @var anonymous874 $SpecialRequestRefCategory
     */
    public $SpecialRequestRefCategory = null;

    /**
     * @param typeRef $Key
     * @param date $BookingStartDate
     * @param date $BookingEndDate
     * @param typeCurrency $Currency
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @param boolean $Emphasis
     * @param StringLength1to255 $GeneralPreference
     * @param boolean $Inclusive
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @param anonymous672 $OtherLoyaltyProgramNumber
     * @param typeRef $PaymentDetailsRef
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @param typePreferencePurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param typeSupplier $Supplier
     * @param boolean $TripApproval
     * @param date $CheckInStartDate
     * @param date $CheckInEndDate
     * @param anonymous686 $CorporateDiscountNumber
     * @param typeMoney $MaxRoomRateAmount
     * @param anonymous687 $MultiLevelRateCode
     * @param anonymous688 $PropertyID
     * @param anonymous689 $RateCode
     * @param boolean $SmokingRoom
     * @param anonymous871 $BedTypeMiscTravel
     * @param anonymous872 $BedTypeRefCategory
     * @param anonymous873 $SpecialRequestMiscTravel
     * @param anonymous874 $SpecialRequestRefCategory
     */
    public function __construct($Key = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null, $CheckInStartDate = null, $CheckInEndDate = null, $CorporateDiscountNumber = null, $MaxRoomRateAmount = null, $MultiLevelRateCode = null, $PropertyID = null, $RateCode = null, $SmokingRoom = null, $BedTypeMiscTravel = null, $BedTypeRefCategory = null, $SpecialRequestMiscTravel = null, $SpecialRequestRefCategory = null)
    {
      parent::__construct($Key, $BookingStartDate, $BookingEndDate, $Currency, $DepartureGeoPoliticalAreaType, $DepartureGeoPoliticalAreaCode, $Emphasis, $GeneralPreference, $Inclusive, $LoyaltyProgramEnrollmentRef, $OtherLoyaltyProgramNumber, $PaymentDetailsRef, $PreferencePaymentMethod, $Purpose, $PriorityOrder, $Supplier, $TripApproval);
      $this->CheckInStartDate = $CheckInStartDate;
      $this->CheckInEndDate = $CheckInEndDate;
      $this->CorporateDiscountNumber = $CorporateDiscountNumber;
      $this->MaxRoomRateAmount = $MaxRoomRateAmount;
      $this->MultiLevelRateCode = $MultiLevelRateCode;
      $this->PropertyID = $PropertyID;
      $this->RateCode = $RateCode;
      $this->SmokingRoom = $SmokingRoom;
      $this->BedTypeMiscTravel = $BedTypeMiscTravel;
      $this->BedTypeRefCategory = $BedTypeRefCategory;
      $this->SpecialRequestMiscTravel = $SpecialRequestMiscTravel;
      $this->SpecialRequestRefCategory = $SpecialRequestRefCategory;
    }

    /**
     * @return date
     */
    public function getCheckInStartDate()
    {
      return $this->CheckInStartDate;
    }

    /**
     * @param date $CheckInStartDate
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setCheckInStartDate($CheckInStartDate)
    {
      $this->CheckInStartDate = $CheckInStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getCheckInEndDate()
    {
      return $this->CheckInEndDate;
    }

    /**
     * @param date $CheckInEndDate
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setCheckInEndDate($CheckInEndDate)
    {
      $this->CheckInEndDate = $CheckInEndDate;
      return $this;
    }

    /**
     * @return anonymous686
     */
    public function getCorporateDiscountNumber()
    {
      return $this->CorporateDiscountNumber;
    }

    /**
     * @param anonymous686 $CorporateDiscountNumber
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setCorporateDiscountNumber($CorporateDiscountNumber)
    {
      $this->CorporateDiscountNumber = $CorporateDiscountNumber;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaxRoomRateAmount()
    {
      return $this->MaxRoomRateAmount;
    }

    /**
     * @param typeMoney $MaxRoomRateAmount
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setMaxRoomRateAmount($MaxRoomRateAmount)
    {
      $this->MaxRoomRateAmount = $MaxRoomRateAmount;
      return $this;
    }

    /**
     * @return anonymous687
     */
    public function getMultiLevelRateCode()
    {
      return $this->MultiLevelRateCode;
    }

    /**
     * @param anonymous687 $MultiLevelRateCode
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setMultiLevelRateCode($MultiLevelRateCode)
    {
      $this->MultiLevelRateCode = $MultiLevelRateCode;
      return $this;
    }

    /**
     * @return anonymous688
     */
    public function getPropertyID()
    {
      return $this->PropertyID;
    }

    /**
     * @param anonymous688 $PropertyID
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setPropertyID($PropertyID)
    {
      $this->PropertyID = $PropertyID;
      return $this;
    }

    /**
     * @return anonymous689
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param anonymous689 $RateCode
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSmokingRoom()
    {
      return $this->SmokingRoom;
    }

    /**
     * @param boolean $SmokingRoom
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setSmokingRoom($SmokingRoom)
    {
      $this->SmokingRoom = $SmokingRoom;
      return $this;
    }

    /**
     * @return anonymous871
     */
    public function getBedTypeMiscTravel()
    {
      return $this->BedTypeMiscTravel;
    }

    /**
     * @param anonymous871 $BedTypeMiscTravel
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setBedTypeMiscTravel($BedTypeMiscTravel)
    {
      $this->BedTypeMiscTravel = $BedTypeMiscTravel;
      return $this;
    }

    /**
     * @return anonymous872
     */
    public function getBedTypeRefCategory()
    {
      return $this->BedTypeRefCategory;
    }

    /**
     * @param anonymous872 $BedTypeRefCategory
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setBedTypeRefCategory($BedTypeRefCategory)
    {
      $this->BedTypeRefCategory = $BedTypeRefCategory;
      return $this;
    }

    /**
     * @return anonymous873
     */
    public function getSpecialRequestMiscTravel()
    {
      return $this->SpecialRequestMiscTravel;
    }

    /**
     * @param anonymous873 $SpecialRequestMiscTravel
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setSpecialRequestMiscTravel($SpecialRequestMiscTravel)
    {
      $this->SpecialRequestMiscTravel = $SpecialRequestMiscTravel;
      return $this;
    }

    /**
     * @return anonymous874
     */
    public function getSpecialRequestRefCategory()
    {
      return $this->SpecialRequestRefCategory;
    }

    /**
     * @param anonymous874 $SpecialRequestRefCategory
     * @return \FilippoToso\Travelport\UProfile\typeHotelPreferenceHistory
     */
    public function setSpecialRequestRefCategory($SpecialRequestRefCategory)
    {
      $this->SpecialRequestRefCategory = $SpecialRequestRefCategory;
      return $this;
    }

}
