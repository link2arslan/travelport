<?php

namespace FilippoToso\Travelport\GDSQueue;

class HotelUpdate
{

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    public $LoyaltyCard = null;

    /**
     * @var Guarantee $Guarantee
     */
    public $Guarantee = null;

    /**
     * @var GuestInformation $GuestInformation
     */
    public $GuestInformation = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    public $AssociatedRemark = null;

    /**
     * @var BookingSource $BookingSource
     */
    public $BookingSource = null;

    /**
     * @var typeGeneralText $HotelSpecialRequest
     */
    public $HotelSpecialRequest = null;

    /**
     * @var HotelRateInfo $HotelRateInfo
     */
    public $HotelRateInfo = null;

    /**
     * @var HotelStay $HotelStay
     */
    public $HotelStay = null;

    /**
     * @var string $HotelCommission
     */
    public $HotelCommission = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    public $CorporateDiscountID = null;

    /**
     * @var ReservationName $ReservationName
     */
    public $ReservationName = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    public $ThirdPartyInformation = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    public $TravelComplianceData = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    public $HotelBedding = null;

    /**
     * @var BookingConfirmation $BookingConfirmation
     */
    public $BookingConfirmation = null;

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    public $ReservationLocatorCode = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @param Guarantee $Guarantee
     * @param GuestInformation $GuestInformation
     * @param AssociatedRemark $AssociatedRemark
     * @param BookingSource $BookingSource
     * @param typeGeneralText $HotelSpecialRequest
     * @param HotelRateInfo $HotelRateInfo
     * @param HotelStay $HotelStay
     * @param string $HotelCommission
     * @param CorporateDiscountID $CorporateDiscountID
     * @param ReservationName $ReservationName
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param TravelComplianceData $TravelComplianceData
     * @param HotelBedding $HotelBedding
     * @param BookingConfirmation $BookingConfirmation
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($LoyaltyCard = null, $Guarantee = null, $GuestInformation = null, $AssociatedRemark = null, $BookingSource = null, $HotelSpecialRequest = null, $HotelRateInfo = null, $HotelStay = null, $HotelCommission = null, $CorporateDiscountID = null, $ReservationName = null, $ThirdPartyInformation = null, $TravelComplianceData = null, $HotelBedding = null, $BookingConfirmation = null, $ReservationLocatorCode = null, $BookingTravelerRef = null)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      $this->Guarantee = $Guarantee;
      $this->GuestInformation = $GuestInformation;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->BookingSource = $BookingSource;
      $this->HotelSpecialRequest = $HotelSpecialRequest;
      $this->HotelRateInfo = $HotelRateInfo;
      $this->HotelStay = $HotelStay;
      $this->HotelCommission = $HotelCommission;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->ReservationName = $ReservationName;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->HotelBedding = $HotelBedding;
      $this->BookingConfirmation = $BookingConfirmation;
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setGuarantee($Guarantee)
    {
      $this->Guarantee = $Guarantee;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setHotelSpecialRequest($HotelSpecialRequest)
    {
      $this->HotelSpecialRequest = $HotelSpecialRequest;
      return $this;
    }

    /**
     * @return HotelRateInfo
     */
    public function getHotelRateInfo()
    {
      return $this->HotelRateInfo;
    }

    /**
     * @param HotelRateInfo $HotelRateInfo
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setHotelRateInfo($HotelRateInfo)
    {
      $this->HotelRateInfo = $HotelRateInfo;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setHotelStay($HotelStay)
    {
      $this->HotelStay = $HotelStay;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setHotelCommission($HotelCommission)
    {
      $this->HotelCommission = $HotelCommission;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return TravelComplianceData
     */
    public function getTravelComplianceData()
    {
      return $this->TravelComplianceData;
    }

    /**
     * @param TravelComplianceData $TravelComplianceData
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return BookingConfirmation
     */
    public function getBookingConfirmation()
    {
      return $this->BookingConfirmation;
    }

    /**
     * @param BookingConfirmation $BookingConfirmation
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setBookingConfirmation($BookingConfirmation)
    {
      $this->BookingConfirmation = $BookingConfirmation;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\HotelUpdate
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
