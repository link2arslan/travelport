<?php

namespace FilippoToso\Travelport\GDSQueue;

class HotelReservation extends BaseReservation
{

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var ReservationName $ReservationName
     */
    public $ReservationName = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    public $ThirdPartyInformation = null;

    /**
     * @var HotelProperty $HotelProperty
     */
    public $HotelProperty = null;

    /**
     * @var HotelRateDetail $HotelRateDetail
     */
    public $HotelRateDetail = null;

    /**
     * @var HotelStay $HotelStay
     */
    public $HotelStay = null;

    /**
     * @var typeGeneralText $HotelSpecialRequest
     */
    public $HotelSpecialRequest = null;

    /**
     * @var Guarantee $Guarantee
     */
    public $Guarantee = null;

    /**
     * @var PromotionCode $PromotionCode
     */
    public $PromotionCode = null;

    /**
     * @var BookingSource $BookingSource
     */
    public $BookingSource = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    public $HotelBedding = null;

    /**
     * @var GuestInformation $GuestInformation
     */
    public $GuestInformation = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    public $AssociatedRemark = null;

    /**
     * @var string $SellMessage
     */
    public $SellMessage = null;

    /**
     * @var string $HotelCommission
     */
    public $HotelCommission = null;

    /**
     * @var BookingGuestInformation $BookingGuestInformation
     */
    public $BookingGuestInformation = null;

    /**
     * @var RoomConfirmationCodes $RoomConfirmationCodes
     */
    public $RoomConfirmationCodes = null;

    /**
     * @var CancelInfo $CancelInfo
     */
    public $CancelInfo = null;

    /**
     * @var TotalReservationPrice $TotalReservationPrice
     */
    public $TotalReservationPrice = null;

    /**
     * @var HotelDetailItem $HotelDetailItem
     */
    public $HotelDetailItem = null;

    /**
     * @var AdaptedRoomGuestAllocation $AdaptedRoomGuestAllocation
     */
    public $AdaptedRoomGuestAllocation = null;

    /**
     * @var string $Status
     */
    public $Status = null;

    /**
     * @var string $AggregatorBookingStatus
     */
    public $AggregatorBookingStatus = null;

    /**
     * @var string $BookingConfirmation
     */
    public $BookingConfirmation = null;

    /**
     * @var string $CancelConfirmation
     */
    public $CancelConfirmation = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var int $TravelOrder
     */
    public $TravelOrder = null;

    /**
     * @var anonymous1154 $ProviderSegmentOrder
     */
    public $ProviderSegmentOrder = null;

    /**
     * @var typeRef $PassiveProviderReservationInfoRef
     */
    public $PassiveProviderReservationInfoRef = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     * @param BookingTravelerRef $BookingTravelerRef
     * @param ReservationName $ReservationName
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param HotelProperty $HotelProperty
     * @param HotelRateDetail $HotelRateDetail
     * @param HotelStay $HotelStay
     * @param typeGeneralText $HotelSpecialRequest
     * @param Guarantee $Guarantee
     * @param PromotionCode $PromotionCode
     * @param BookingSource $BookingSource
     * @param HotelBedding $HotelBedding
     * @param GuestInformation $GuestInformation
     * @param AssociatedRemark $AssociatedRemark
     * @param string $SellMessage
     * @param string $HotelCommission
     * @param BookingGuestInformation $BookingGuestInformation
     * @param RoomConfirmationCodes $RoomConfirmationCodes
     * @param CancelInfo $CancelInfo
     * @param TotalReservationPrice $TotalReservationPrice
     * @param HotelDetailItem $HotelDetailItem
     * @param AdaptedRoomGuestAllocation $AdaptedRoomGuestAllocation
     * @param string $Status
     * @param string $AggregatorBookingStatus
     * @param string $BookingConfirmation
     * @param string $CancelConfirmation
     * @param typeRef $ProviderReservationInfoRef
     * @param int $TravelOrder
     * @param anonymous1154 $ProviderSegmentOrder
     * @param typeRef $PassiveProviderReservationInfoRef
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null, $BookingTravelerRef = null, $ReservationName = null, $ThirdPartyInformation = null, $HotelProperty = null, $HotelRateDetail = null, $HotelStay = null, $HotelSpecialRequest = null, $Guarantee = null, $PromotionCode = null, $BookingSource = null, $HotelBedding = null, $GuestInformation = null, $AssociatedRemark = null, $SellMessage = null, $HotelCommission = null, $BookingGuestInformation = null, $RoomConfirmationCodes = null, $CancelInfo = null, $TotalReservationPrice = null, $HotelDetailItem = null, $AdaptedRoomGuestAllocation = null, $Status = null, $AggregatorBookingStatus = null, $BookingConfirmation = null, $CancelConfirmation = null, $ProviderReservationInfoRef = null, $TravelOrder = null, $ProviderSegmentOrder = null, $PassiveProviderReservationInfoRef = null)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber);
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->ReservationName = $ReservationName;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->HotelProperty = $HotelProperty;
      $this->HotelRateDetail = $HotelRateDetail;
      $this->HotelStay = $HotelStay;
      $this->HotelSpecialRequest = $HotelSpecialRequest;
      $this->Guarantee = $Guarantee;
      $this->PromotionCode = $PromotionCode;
      $this->BookingSource = $BookingSource;
      $this->HotelBedding = $HotelBedding;
      $this->GuestInformation = $GuestInformation;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->SellMessage = $SellMessage;
      $this->HotelCommission = $HotelCommission;
      $this->BookingGuestInformation = $BookingGuestInformation;
      $this->RoomConfirmationCodes = $RoomConfirmationCodes;
      $this->CancelInfo = $CancelInfo;
      $this->TotalReservationPrice = $TotalReservationPrice;
      $this->HotelDetailItem = $HotelDetailItem;
      $this->AdaptedRoomGuestAllocation = $AdaptedRoomGuestAllocation;
      $this->Status = $Status;
      $this->AggregatorBookingStatus = $AggregatorBookingStatus;
      $this->BookingConfirmation = $BookingConfirmation;
      $this->CancelConfirmation = $CancelConfirmation;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->TravelOrder = $TravelOrder;
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return ReservationName
     */
    public function getReservationName()
    {
      return $this->ReservationName;
    }

    /**
     * @param ReservationName $ReservationName
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setReservationName($ReservationName)
    {
      $this->ReservationName = $ReservationName;
      return $this;
    }

    /**
     * @return ThirdPartyInformation
     */
    public function getThirdPartyInformation()
    {
      return $this->ThirdPartyInformation;
    }

    /**
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

    /**
     * @return HotelStay
     */
    public function getHotelStay()
    {
      return $this->HotelStay;
    }

    /**
     * @param HotelStay $HotelStay
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
      return $this;
    }

    /**
     * @return typeGeneralText
     */
    public function getHotelSpecialRequest()
    {
      return $this->HotelSpecialRequest;
    }

    /**
     * @param typeGeneralText $HotelSpecialRequest
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setHotelSpecialRequest($HotelSpecialRequest)
    {
      $this->HotelSpecialRequest = $HotelSpecialRequest;
      return $this;
    }

    /**
     * @return Guarantee
     */
    public function getGuarantee()
    {
      return $this->Guarantee;
    }

    /**
     * @param Guarantee $Guarantee
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
      return $this;
    }

    /**
     * @return PromotionCode
     */
    public function getPromotionCode()
    {
      return $this->PromotionCode;
    }

    /**
     * @param PromotionCode $PromotionCode
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setPromotionCode($PromotionCode)
    {
      $this->PromotionCode = $PromotionCode;
      return $this;
    }

    /**
     * @return BookingSource
     */
    public function getBookingSource()
    {
      return $this->BookingSource;
    }

    /**
     * @param BookingSource $BookingSource
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
      return $this;
    }

    /**
     * @return HotelBedding
     */
    public function getHotelBedding()
    {
      return $this->HotelBedding;
    }

    /**
     * @param HotelBedding $HotelBedding
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return GuestInformation
     */
    public function getGuestInformation()
    {
      return $this->GuestInformation;
    }

    /**
     * @param GuestInformation $GuestInformation
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setGuestInformation($GuestInformation)
    {
      $this->GuestInformation = $GuestInformation;
      return $this;
    }

    /**
     * @return AssociatedRemark
     */
    public function getAssociatedRemark()
    {
      return $this->AssociatedRemark;
    }

    /**
     * @param AssociatedRemark $AssociatedRemark
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellMessage()
    {
      return $this->SellMessage;
    }

    /**
     * @param string $SellMessage
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setSellMessage($SellMessage)
    {
      $this->SellMessage = $SellMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getHotelCommission()
    {
      return $this->HotelCommission;
    }

    /**
     * @param string $HotelCommission
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setHotelCommission($HotelCommission)
    {
      $this->HotelCommission = $HotelCommission;
      return $this;
    }

    /**
     * @return BookingGuestInformation
     */
    public function getBookingGuestInformation()
    {
      return $this->BookingGuestInformation;
    }

    /**
     * @param BookingGuestInformation $BookingGuestInformation
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setBookingGuestInformation($BookingGuestInformation)
    {
      $this->BookingGuestInformation = $BookingGuestInformation;
      return $this;
    }

    /**
     * @return RoomConfirmationCodes
     */
    public function getRoomConfirmationCodes()
    {
      return $this->RoomConfirmationCodes;
    }

    /**
     * @param RoomConfirmationCodes $RoomConfirmationCodes
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setRoomConfirmationCodes($RoomConfirmationCodes)
    {
      $this->RoomConfirmationCodes = $RoomConfirmationCodes;
      return $this;
    }

    /**
     * @return CancelInfo
     */
    public function getCancelInfo()
    {
      return $this->CancelInfo;
    }

    /**
     * @param CancelInfo $CancelInfo
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setCancelInfo($CancelInfo)
    {
      $this->CancelInfo = $CancelInfo;
      return $this;
    }

    /**
     * @return TotalReservationPrice
     */
    public function getTotalReservationPrice()
    {
      return $this->TotalReservationPrice;
    }

    /**
     * @param TotalReservationPrice $TotalReservationPrice
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setTotalReservationPrice($TotalReservationPrice)
    {
      $this->TotalReservationPrice = $TotalReservationPrice;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setHotelDetailItem($HotelDetailItem)
    {
      $this->HotelDetailItem = $HotelDetailItem;
      return $this;
    }

    /**
     * @return AdaptedRoomGuestAllocation
     */
    public function getAdaptedRoomGuestAllocation()
    {
      return $this->AdaptedRoomGuestAllocation;
    }

    /**
     * @param AdaptedRoomGuestAllocation $AdaptedRoomGuestAllocation
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setAdaptedRoomGuestAllocation($AdaptedRoomGuestAllocation)
    {
      $this->AdaptedRoomGuestAllocation = $AdaptedRoomGuestAllocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getAggregatorBookingStatus()
    {
      return $this->AggregatorBookingStatus;
    }

    /**
     * @param string $AggregatorBookingStatus
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setAggregatorBookingStatus($AggregatorBookingStatus)
    {
      $this->AggregatorBookingStatus = $AggregatorBookingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingConfirmation()
    {
      return $this->BookingConfirmation;
    }

    /**
     * @param string $BookingConfirmation
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setBookingConfirmation($BookingConfirmation)
    {
      $this->BookingConfirmation = $BookingConfirmation;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelConfirmation()
    {
      return $this->CancelConfirmation;
    }

    /**
     * @param string $CancelConfirmation
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setCancelConfirmation($CancelConfirmation)
    {
      $this->CancelConfirmation = $CancelConfirmation;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
      return $this;
    }

    /**
     * @return anonymous1154
     */
    public function getProviderSegmentOrder()
    {
      return $this->ProviderSegmentOrder;
    }

    /**
     * @param anonymous1154 $ProviderSegmentOrder
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setProviderSegmentOrder($ProviderSegmentOrder)
    {
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassiveProviderReservationInfoRef()
    {
      return $this->PassiveProviderReservationInfoRef;
    }

    /**
     * @param typeRef $PassiveProviderReservationInfoRef
     * @return \FilippoToso\Travelport\GDSQueue\HotelReservation
     */
    public function setPassiveProviderReservationInfoRef($PassiveProviderReservationInfoRef)
    {
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      return $this;
    }

}
