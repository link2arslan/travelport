<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirPricingInfoList
{

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    public $AirPricingInfo = null;

    /**
     * @param AirPricingInfo $AirPricingInfo
     */
    public function __construct($AirPricingInfo = null)
    {
      $this->AirPricingInfo = $AirPricingInfo;
    }

    /**
     * @return AirPricingInfo
     */
    public function getAirPricingInfo()
    {
      return $this->AirPricingInfo;
    }

    /**
     * @param AirPricingInfo $AirPricingInfo
     * @return \FilippoToso\Travelport\GDSQueue\AirPricingInfoList
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
      return $this;
    }

}
