<?php

namespace FilippoToso\Travelport\Air;

class BookingInfo
{

    /**
     * @var string $BookingCode
     */
    public $BookingCode = null;

    /**
     * @var string $BookingCount
     */
    public $BookingCount = null;

    /**
     * @var string $CabinClass
     */
    public $CabinClass = null;

    /**
     * @var typeRef $FareInfoRef
     */
    public $FareInfoRef = null;

    /**
     * @var typeRef $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @var typeRef $CouponRef
     */
    public $CouponRef = null;

    /**
     * @var typeRef $AirItinerarySolutionRef
     */
    public $AirItinerarySolutionRef = null;

    /**
     * @var typeRef $HostTokenRef
     */
    public $HostTokenRef = null;

    /**
     * @param string $BookingCode
     * @param string $BookingCount
     * @param string $CabinClass
     * @param typeRef $FareInfoRef
     * @param typeRef $SegmentRef
     * @param typeRef $CouponRef
     * @param typeRef $AirItinerarySolutionRef
     * @param typeRef $HostTokenRef
     */
    public function __construct($BookingCode = null, $BookingCount = null, $CabinClass = null, $FareInfoRef = null, $SegmentRef = null, $CouponRef = null, $AirItinerarySolutionRef = null, $HostTokenRef = null)
    {
      $this->BookingCode = $BookingCode;
      $this->BookingCount = $BookingCount;
      $this->CabinClass = $CabinClass;
      $this->FareInfoRef = $FareInfoRef;
      $this->SegmentRef = $SegmentRef;
      $this->CouponRef = $CouponRef;
      $this->AirItinerarySolutionRef = $AirItinerarySolutionRef;
      $this->HostTokenRef = $HostTokenRef;
    }

    /**
     * @return string
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param string $BookingCode
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCount()
    {
      return $this->BookingCount;
    }

    /**
     * @param string $BookingCount
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setBookingCount($BookingCount)
    {
      $this->BookingCount = $BookingCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getCouponRef()
    {
      return $this->CouponRef;
    }

    /**
     * @param typeRef $CouponRef
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setCouponRef($CouponRef)
    {
      $this->CouponRef = $CouponRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirItinerarySolutionRef()
    {
      return $this->AirItinerarySolutionRef;
    }

    /**
     * @param typeRef $AirItinerarySolutionRef
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setAirItinerarySolutionRef($AirItinerarySolutionRef)
    {
      $this->AirItinerarySolutionRef = $AirItinerarySolutionRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getHostTokenRef()
    {
      return $this->HostTokenRef;
    }

    /**
     * @param typeRef $HostTokenRef
     * @return \FilippoToso\Travelport\Air\BookingInfo
     */
    public function setHostTokenRef($HostTokenRef)
    {
      $this->HostTokenRef = $HostTokenRef;
      return $this;
    }

}
