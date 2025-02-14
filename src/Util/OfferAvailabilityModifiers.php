<?php

namespace FilippoToso\Travelport\Util;

class OfferAvailabilityModifiers
{

    /**
     * @var typeMerchandisingService[] $ServiceType
     */
    public $ServiceType = null;

    /**
     * @var typeCarrier[] $Carrier
     */
    public $Carrier = null;

    /**
     * @var typeCurrency $CurrencyType
     */
    public $CurrencyType = null;

    /**
     * @param typeCurrency $CurrencyType
     */
    public function __construct($CurrencyType = null)
    {
      $this->CurrencyType = $CurrencyType;
    }

    /**
     * @return typeMerchandisingService[]
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param typeMerchandisingService[] $ServiceType
     * @return \FilippoToso\Travelport\Util\OfferAvailabilityModifiers
     */
    public function setServiceType(array $ServiceType = null)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return typeCarrier[]
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier[] $Carrier
     * @return \FilippoToso\Travelport\Util\OfferAvailabilityModifiers
     */
    public function setCarrier(array $Carrier = null)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyType()
    {
      return $this->CurrencyType;
    }

    /**
     * @param typeCurrency $CurrencyType
     * @return \FilippoToso\Travelport\Util\OfferAvailabilityModifiers
     */
    public function setCurrencyType($CurrencyType)
    {
      $this->CurrencyType = $CurrencyType;
      return $this;
    }

}
