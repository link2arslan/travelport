<?php

namespace FilippoToso\Travelport\GDSQueue;

class CollectionAddress extends typeStructuredAddress
{

    /**
     * @var PhoneNumber $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @param State $State
     * @param ProviderReservationInfoRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param PhoneNumber $PhoneNumber
     */
    public function __construct($State = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null, $PhoneNumber = null)
    {
      parent::__construct($State, $ProviderReservationInfoRef, $Key, $ElStat, $KeyOverride);
      $this->PhoneNumber = $PhoneNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\CollectionAddress
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

}
