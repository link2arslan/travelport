<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CustomizedNameData
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @param string $_
     * @param typeRef $Key
     * @param typeRef $ProviderReservationInfoRef
     */
    public function __construct($_ = null, $Key = null, $ProviderReservationInfoRef = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\UniversalRecord\CustomizedNameData
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\UniversalRecord\CustomizedNameData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\UniversalRecord\CustomizedNameData
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

}
