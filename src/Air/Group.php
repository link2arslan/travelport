<?php

namespace FilippoToso\Travelport\Air;

class Group
{

    /**
     * @var Name $Name
     */
    public $Name = null;

    /**
     * @var DeliveryInfo $DeliveryInfo
     */
    public $DeliveryInfo = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @var SSRRef[] $SSRRef
     */
    public $SSRRef = null;

    /**
     * @var typeStructuredAddress $Address
     */
    public $Address = null;

    /**
     * @var BookingTravelerRef[] $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typePTC $TravelerType
     */
    public $TravelerType = null;

    /**
     * @var int $GroupSize
     */
    public $GroupSize = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param Name $Name
     * @param DeliveryInfo $DeliveryInfo
     * @param PhoneNumber $PhoneNumber
     * @param typeRef $Key
     * @param typePTC $TravelerType
     * @param int $GroupSize
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Name = null, $DeliveryInfo = null, $PhoneNumber = null, $Key = null, $TravelerType = null, $GroupSize = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Name = $Name;
      $this->DeliveryInfo = $DeliveryInfo;
      $this->PhoneNumber = $PhoneNumber;
      $this->Key = $Key;
      $this->TravelerType = $TravelerType;
      $this->GroupSize = $GroupSize;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return DeliveryInfo
     */
    public function getDeliveryInfo()
    {
      return $this->DeliveryInfo;
    }

    /**
     * @param DeliveryInfo $DeliveryInfo
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setDeliveryInfo($DeliveryInfo)
    {
      $this->DeliveryInfo = $DeliveryInfo;
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
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return SSRRef[]
     */
    public function getSSRRef()
    {
      return $this->SSRRef;
    }

    /**
     * @param SSRRef[] $SSRRef
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setSSRRef(array $SSRRef = null)
    {
      $this->SSRRef = $SSRRef;
      return $this;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress $Address
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return BookingTravelerRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getTravelerType()
    {
      return $this->TravelerType;
    }

    /**
     * @param typePTC $TravelerType
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setTravelerType($TravelerType)
    {
      $this->TravelerType = $TravelerType;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroupSize()
    {
      return $this->GroupSize;
    }

    /**
     * @param int $GroupSize
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setGroupSize($GroupSize)
    {
      $this->GroupSize = $GroupSize;
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
     * @return \FilippoToso\Travelport\Air\Group
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
     * @return \FilippoToso\Travelport\Air\Group
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
