<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HostReservation
{

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @var typeLocatorCode $CarrierLocatorCode
     */
    public $CarrierLocatorCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    public $ProviderLocatorCode = null;

    /**
     * @var typeLocatorCode $UniversalLocatorCode
     */
    public $UniversalLocatorCode = null;

    /**
     * @var boolean $ETicket
     */
    public $ETicket = null;

    /**
     * @param typeCarrier $Carrier
     * @param typeLocatorCode $CarrierLocatorCode
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typeLocatorCode $UniversalLocatorCode
     * @param boolean $ETicket
     */
    public function __construct($Carrier = null, $CarrierLocatorCode = null, $ProviderCode = null, $ProviderLocatorCode = null, $UniversalLocatorCode = null, $ETicket = null)
    {
      $this->Carrier = $Carrier;
      $this->CarrierLocatorCode = $CarrierLocatorCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->UniversalLocatorCode = $UniversalLocatorCode;
      $this->ETicket = $ETicket;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\UniversalRecord\HostReservation
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getCarrierLocatorCode()
    {
      return $this->CarrierLocatorCode;
    }

    /**
     * @param typeLocatorCode $CarrierLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\HostReservation
     */
    public function setCarrierLocatorCode($CarrierLocatorCode)
    {
      $this->CarrierLocatorCode = $CarrierLocatorCode;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\HostReservation
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\HostReservation
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalLocatorCode()
    {
      return $this->UniversalLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\HostReservation
     */
    public function setUniversalLocatorCode($UniversalLocatorCode)
    {
      $this->UniversalLocatorCode = $UniversalLocatorCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getETicket()
    {
      return $this->ETicket;
    }

    /**
     * @param boolean $ETicket
     * @return \FilippoToso\Travelport\UniversalRecord\HostReservation
     */
    public function setETicket($ETicket)
    {
      $this->ETicket = $ETicket;
      return $this;
    }

}
