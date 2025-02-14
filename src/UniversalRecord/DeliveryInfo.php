<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DeliveryInfo extends typeStructuredAddress
{

    /**
     * @var ShippingAddress $ShippingAddress
     */
    public $ShippingAddress = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @var Email $Email
     */
    public $Email = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    public $GeneralRemark = null;

    /**
     * @var ProviderReservationInfoRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var anonymous134 $SignatureRequired
     */
    public $SignatureRequired = null;

    /**
     * @var string $TrackingNumber
     */
    public $TrackingNumber = null;

    /**
     * @param State $State
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param PhoneNumber $PhoneNumber
     * @param Email $Email
     * @param GeneralRemark $GeneralRemark
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param string $Type
     * @param anonymous134 $SignatureRequired
     * @param string $TrackingNumber
     */
    public function __construct($State = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null, $PhoneNumber = null, $Email = null, $GeneralRemark = null, $Type = null, $SignatureRequired = null, $TrackingNumber = null)
    {
      parent::__construct($State, $ProviderReservationInfoRef, $Key, $ElStat, $KeyOverride);
      $this->PhoneNumber = $PhoneNumber;
      $this->Email = $Email;
      $this->GeneralRemark = $GeneralRemark;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Type = $Type;
      $this->SignatureRequired = $SignatureRequired;
      $this->TrackingNumber = $TrackingNumber;
    }

    /**
     * @return ShippingAddress
     */
    public function getShippingAddress()
    {
      return $this->ShippingAddress;
    }

    /**
     * @param ShippingAddress $ShippingAddress
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setShippingAddress($ShippingAddress)
    {
      $this->ShippingAddress = $ShippingAddress;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return Email
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param Email $Email
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
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
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous134
     */
    public function getSignatureRequired()
    {
      return $this->SignatureRequired;
    }

    /**
     * @param anonymous134 $SignatureRequired
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setSignatureRequired($SignatureRequired)
    {
      $this->SignatureRequired = $SignatureRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
      return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return \FilippoToso\Travelport\UniversalRecord\DeliveryInfo
     */
    public function setTrackingNumber($TrackingNumber)
    {
      $this->TrackingNumber = $TrackingNumber;
      return $this;
    }

}
