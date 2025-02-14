<?php

namespace FilippoToso\Travelport\Util;

class typeStructuredAddress
{

    /**
     * @var AddressName $AddressName
     */
    public $AddressName = null;

    /**
     * @var Street[] $Street
     */
    public $Street = null;

    /**
     * @var City $City
     */
    public $City = null;

    /**
     * @var State $State
     */
    public $State = null;

    /**
     * @var PostalCode $PostalCode
     */
    public $PostalCode = null;

    /**
     * @var Country $Country
     */
    public $Country = null;

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
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
     * @param State $State
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($State = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->State = $State;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return AddressName
     */
    public function getAddressName()
    {
      return $this->AddressName;
    }

    /**
     * @param AddressName $AddressName
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
     */
    public function setAddressName($AddressName)
    {
      $this->AddressName = $AddressName;
      return $this;
    }

    /**
     * @return Street[]
     */
    public function getStreet()
    {
      return $this->Street;
    }

    /**
     * @param Street[] $Street
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
     */
    public function setStreet(array $Street = null)
    {
      $this->Street = $Street;
      return $this;
    }

    /**
     * @return City
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City $City
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return State
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param State $State
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return PostalCode
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param PostalCode $PostalCode
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param Country $Country
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return ProviderReservationInfoRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
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
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
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
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
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
     * @return \FilippoToso\Travelport\Util\typeStructuredAddress
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
