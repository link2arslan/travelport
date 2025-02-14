<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellRule
{

    /**
     * @var VehicleUpsellQualify $VehicleUpsellQualify
     */
    public $VehicleUpsellQualify = null;

    /**
     * @var VehicleUpsellOffer $VehicleUpsellOffer
     */
    public $VehicleUpsellOffer = null;

    /**
     * @param VehicleUpsellQualify $VehicleUpsellQualify
     * @param VehicleUpsellOffer $VehicleUpsellOffer
     */
    public function __construct($VehicleUpsellQualify = null, $VehicleUpsellOffer = null)
    {
      $this->VehicleUpsellQualify = $VehicleUpsellQualify;
      $this->VehicleUpsellOffer = $VehicleUpsellOffer;
    }

    /**
     * @return VehicleUpsellQualify
     */
    public function getVehicleUpsellQualify()
    {
      return $this->VehicleUpsellQualify;
    }

    /**
     * @param VehicleUpsellQualify $VehicleUpsellQualify
     * @return \FilippoToso\Travelport\Util\VehicleUpsellRule
     */
    public function setVehicleUpsellQualify($VehicleUpsellQualify)
    {
      $this->VehicleUpsellQualify = $VehicleUpsellQualify;
      return $this;
    }

    /**
     * @return VehicleUpsellOffer
     */
    public function getVehicleUpsellOffer()
    {
      return $this->VehicleUpsellOffer;
    }

    /**
     * @param VehicleUpsellOffer $VehicleUpsellOffer
     * @return \FilippoToso\Travelport\Util\VehicleUpsellRule
     */
    public function setVehicleUpsellOffer($VehicleUpsellOffer)
    {
      $this->VehicleUpsellOffer = $VehicleUpsellOffer;
      return $this;
    }

}
