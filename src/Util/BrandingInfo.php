<?php

namespace FilippoToso\Travelport\Util;

class BrandingInfo
{

    /**
     * @var PriceRange $PriceRange
     */
    public $PriceRange = null;

    /**
     * @var typeTextElement $Text
     */
    public $Text = null;

    /**
     * @var typeTextElement $Title
     */
    public $Title = null;

    /**
     * @var ImageLocation $ImageLocation
     */
    public $ImageLocation = null;

    /**
     * @var ServiceGroup $ServiceGroup
     */
    public $ServiceGroup = null;

    /**
     * @var typeSegmentRef[] $AirSegmentRef
     */
    public $AirSegmentRef = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var string $ServiceSubCode
     */
    public $ServiceSubCode = null;

    /**
     * @var string $ExternalServiceName
     */
    public $ExternalServiceName = null;

    /**
     * @var string $ServiceType
     */
    public $ServiceType = null;

    /**
     * @var string $CommercialName
     */
    public $CommercialName = null;

    /**
     * @var string $Chargeable
     */
    public $Chargeable = null;

    /**
     * @param PriceRange $PriceRange
     * @param typeTextElement $Text
     * @param typeTextElement $Title
     * @param ImageLocation $ImageLocation
     * @param ServiceGroup $ServiceGroup
     * @param typeSegmentRef[] $AirSegmentRef
     * @param typeRef $Key
     * @param string $ServiceSubCode
     * @param string $ExternalServiceName
     * @param string $ServiceType
     * @param string $CommercialName
     * @param string $Chargeable
     */
    public function __construct($PriceRange = null, $Text = null, $Title = null, $ImageLocation = null, $ServiceGroup = null, array $AirSegmentRef = null, $Key = null, $ServiceSubCode = null, $ExternalServiceName = null, $ServiceType = null, $CommercialName = null, $Chargeable = null)
    {
      $this->PriceRange = $PriceRange;
      $this->Text = $Text;
      $this->Title = $Title;
      $this->ImageLocation = $ImageLocation;
      $this->ServiceGroup = $ServiceGroup;
      $this->AirSegmentRef = $AirSegmentRef;
      $this->Key = $Key;
      $this->ServiceSubCode = $ServiceSubCode;
      $this->ExternalServiceName = $ExternalServiceName;
      $this->ServiceType = $ServiceType;
      $this->CommercialName = $CommercialName;
      $this->Chargeable = $Chargeable;
    }

    /**
     * @return PriceRange
     */
    public function getPriceRange()
    {
      return $this->PriceRange;
    }

    /**
     * @param PriceRange $PriceRange
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setPriceRange($PriceRange)
    {
      $this->PriceRange = $PriceRange;
      return $this;
    }

    /**
     * @return typeTextElement
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param typeTextElement $Text
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return typeTextElement
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param typeTextElement $Title
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return ImageLocation
     */
    public function getImageLocation()
    {
      return $this->ImageLocation;
    }

    /**
     * @param ImageLocation $ImageLocation
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setImageLocation($ImageLocation)
    {
      $this->ImageLocation = $ImageLocation;
      return $this;
    }

    /**
     * @return ServiceGroup
     */
    public function getServiceGroup()
    {
      return $this->ServiceGroup;
    }

    /**
     * @param ServiceGroup $ServiceGroup
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setServiceGroup($ServiceGroup)
    {
      $this->ServiceGroup = $ServiceGroup;
      return $this;
    }

    /**
     * @return typeSegmentRef[]
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeSegmentRef[] $AirSegmentRef
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setAirSegmentRef(array $AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceSubCode()
    {
      return $this->ServiceSubCode;
    }

    /**
     * @param string $ServiceSubCode
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setServiceSubCode($ServiceSubCode)
    {
      $this->ServiceSubCode = $ServiceSubCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalServiceName()
    {
      return $this->ExternalServiceName;
    }

    /**
     * @param string $ExternalServiceName
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setExternalServiceName($ExternalServiceName)
    {
      $this->ExternalServiceName = $ExternalServiceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommercialName()
    {
      return $this->CommercialName;
    }

    /**
     * @param string $CommercialName
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setCommercialName($CommercialName)
    {
      $this->CommercialName = $CommercialName;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeable()
    {
      return $this->Chargeable;
    }

    /**
     * @param string $Chargeable
     * @return \FilippoToso\Travelport\Util\BrandingInfo
     */
    public function setChargeable($Chargeable)
    {
      $this->Chargeable = $Chargeable;
      return $this;
    }

}
