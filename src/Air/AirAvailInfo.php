<?php

namespace FilippoToso\Travelport\Air;

class AirAvailInfo
{

    /**
     * @var BookingCodeInfo $BookingCodeInfo
     */
    public $BookingCodeInfo = null;

    /**
     * @var FareTokenInfo[] $FareTokenInfo
     */
    public $FareTokenInfo = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var string $HostTokenRef
     */
    public $HostTokenRef = null;

    /**
     * @param BookingCodeInfo $BookingCodeInfo
     * @param typeProviderCode $ProviderCode
     * @param string $HostTokenRef
     */
    public function __construct($BookingCodeInfo = null, $ProviderCode = null, $HostTokenRef = null)
    {
      $this->BookingCodeInfo = $BookingCodeInfo;
      $this->ProviderCode = $ProviderCode;
      $this->HostTokenRef = $HostTokenRef;
    }

    /**
     * @return BookingCodeInfo
     */
    public function getBookingCodeInfo()
    {
      return $this->BookingCodeInfo;
    }

    /**
     * @param BookingCodeInfo $BookingCodeInfo
     * @return \FilippoToso\Travelport\Air\AirAvailInfo
     */
    public function setBookingCodeInfo($BookingCodeInfo)
    {
      $this->BookingCodeInfo = $BookingCodeInfo;
      return $this;
    }

    /**
     * @return FareTokenInfo[]
     */
    public function getFareTokenInfo()
    {
      return $this->FareTokenInfo;
    }

    /**
     * @param FareTokenInfo[] $FareTokenInfo
     * @return \FilippoToso\Travelport\Air\AirAvailInfo
     */
    public function setFareTokenInfo(array $FareTokenInfo = null)
    {
      $this->FareTokenInfo = $FareTokenInfo;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Air\AirAvailInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostTokenRef()
    {
      return $this->HostTokenRef;
    }

    /**
     * @param string $HostTokenRef
     * @return \FilippoToso\Travelport\Air\AirAvailInfo
     */
    public function setHostTokenRef($HostTokenRef)
    {
      $this->HostTokenRef = $HostTokenRef;
      return $this;
    }

}
