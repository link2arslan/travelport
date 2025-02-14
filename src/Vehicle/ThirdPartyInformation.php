<?php

namespace FilippoToso\Travelport\Vehicle;

class ThirdPartyInformation
{

    /**
     * @var typeGeneralReference[] $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @var anonymous439 $ThirdPartyCode
     */
    public $ThirdPartyCode = null;

    /**
     * @var anonymous440 $ThirdPartyLocatorCode
     */
    public $ThirdPartyLocatorCode = null;

    /**
     * @var typeThirdPartySupplier $ThirdPartyName
     */
    public $ThirdPartyName = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param anonymous439 $ThirdPartyCode
     * @param anonymous440 $ThirdPartyLocatorCode
     * @param typeThirdPartySupplier $ThirdPartyName
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($ThirdPartyCode = null, $ThirdPartyLocatorCode = null, $ThirdPartyName = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->ThirdPartyCode = $ThirdPartyCode;
      $this->ThirdPartyLocatorCode = $ThirdPartyLocatorCode;
      $this->ThirdPartyName = $ThirdPartyName;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeGeneralReference[]
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeGeneralReference[] $SegmentRef
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setSegmentRef(array $SegmentRef = null)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return anonymous439
     */
    public function getThirdPartyCode()
    {
      return $this->ThirdPartyCode;
    }

    /**
     * @param anonymous439 $ThirdPartyCode
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setThirdPartyCode($ThirdPartyCode)
    {
      $this->ThirdPartyCode = $ThirdPartyCode;
      return $this;
    }

    /**
     * @return anonymous440
     */
    public function getThirdPartyLocatorCode()
    {
      return $this->ThirdPartyLocatorCode;
    }

    /**
     * @param anonymous440 $ThirdPartyLocatorCode
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setThirdPartyLocatorCode($ThirdPartyLocatorCode)
    {
      $this->ThirdPartyLocatorCode = $ThirdPartyLocatorCode;
      return $this;
    }

    /**
     * @return typeThirdPartySupplier
     */
    public function getThirdPartyName()
    {
      return $this->ThirdPartyName;
    }

    /**
     * @param typeThirdPartySupplier $ThirdPartyName
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setThirdPartyName($ThirdPartyName)
    {
      $this->ThirdPartyName = $ThirdPartyName;
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
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Vehicle\ThirdPartyInformation
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
