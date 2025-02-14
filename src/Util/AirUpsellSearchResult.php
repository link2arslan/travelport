<?php

namespace FilippoToso\Travelport\Util;

class AirUpsellSearchResult
{

    /**
     * @var AirUpsellQualify $AirUpsellQualify
     */
    public $AirUpsellQualify = null;

    /**
     * @var AirUpsellOffer $AirUpsellOffer
     */
    public $AirUpsellOffer = null;

    /**
     * @param AirUpsellQualify $AirUpsellQualify
     * @param AirUpsellOffer $AirUpsellOffer
     */
    public function __construct($AirUpsellQualify = null, $AirUpsellOffer = null)
    {
      $this->AirUpsellQualify = $AirUpsellQualify;
      $this->AirUpsellOffer = $AirUpsellOffer;
    }

    /**
     * @return AirUpsellQualify
     */
    public function getAirUpsellQualify()
    {
      return $this->AirUpsellQualify;
    }

    /**
     * @param AirUpsellQualify $AirUpsellQualify
     * @return \FilippoToso\Travelport\Util\AirUpsellSearchResult
     */
    public function setAirUpsellQualify($AirUpsellQualify)
    {
      $this->AirUpsellQualify = $AirUpsellQualify;
      return $this;
    }

    /**
     * @return AirUpsellOffer
     */
    public function getAirUpsellOffer()
    {
      return $this->AirUpsellOffer;
    }

    /**
     * @param AirUpsellOffer $AirUpsellOffer
     * @return \FilippoToso\Travelport\Util\AirUpsellSearchResult
     */
    public function setAirUpsellOffer($AirUpsellOffer)
    {
      $this->AirUpsellOffer = $AirUpsellOffer;
      return $this;
    }

}
