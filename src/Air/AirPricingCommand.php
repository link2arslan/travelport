<?php

namespace FilippoToso\Travelport\Air;

class AirPricingCommand
{

    /**
     * @var AirPricingModifiers $AirPricingModifiers
     */
    public $AirPricingModifiers = null;

    /**
     * @var AirSegmentPricingModifiers $AirSegmentPricingModifiers
     */
    public $AirSegmentPricingModifiers = null;

    /**
     * @var anonymous623 $CommandKey
     */
    public $CommandKey = null;

    /**
     * @var string $CabinClass
     */
    public $CabinClass = null;

    /**
     * @param AirPricingModifiers $AirPricingModifiers
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @param anonymous623 $CommandKey
     * @param string $CabinClass
     */
    public function __construct($AirPricingModifiers = null, $AirSegmentPricingModifiers = null, $CommandKey = null, $CabinClass = null)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      $this->CommandKey = $CommandKey;
      $this->CabinClass = $CabinClass;
    }

    /**
     * @return AirPricingModifiers
     */
    public function getAirPricingModifiers()
    {
      return $this->AirPricingModifiers;
    }

    /**
     * @param AirPricingModifiers $AirPricingModifiers
     * @return \FilippoToso\Travelport\Air\AirPricingCommand
     */
    public function setAirPricingModifiers($AirPricingModifiers)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      return $this;
    }

    /**
     * @return AirSegmentPricingModifiers
     */
    public function getAirSegmentPricingModifiers()
    {
      return $this->AirSegmentPricingModifiers;
    }

    /**
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @return \FilippoToso\Travelport\Air\AirPricingCommand
     */
    public function setAirSegmentPricingModifiers($AirSegmentPricingModifiers)
    {
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      return $this;
    }

    /**
     * @return anonymous623
     */
    public function getCommandKey()
    {
      return $this->CommandKey;
    }

    /**
     * @param anonymous623 $CommandKey
     * @return \FilippoToso\Travelport\Air\AirPricingCommand
     */
    public function setCommandKey($CommandKey)
    {
      $this->CommandKey = $CommandKey;
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
     * @return \FilippoToso\Travelport\Air\AirPricingCommand
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

}
