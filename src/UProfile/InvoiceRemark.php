<?php

namespace FilippoToso\Travelport\UProfile;

class InvoiceRemark extends typeAssociatedRemark
{

    /**
     * @var typeSegmentRef $AirSegmentRef
     */
    public $AirSegmentRef = null;

    /**
     * @var typeNonAirReservationRef $HotelReservationRef
     */
    public $HotelReservationRef = null;

    /**
     * @var typeNonAirReservationRef $VehicleReservationRef
     */
    public $VehicleReservationRef = null;

    /**
     * @var typeSegmentRef $PassiveSegmentRef
     */
    public $PassiveSegmentRef = null;

    /**
     * @param string $RemarkData
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($RemarkData = null, $ProviderReservationInfoRef = null, $ProviderCode = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      parent::__construct($RemarkData, $ProviderReservationInfoRef, $ProviderCode, $Key, $ElStat, $KeyOverride);
    }

    /**
     * @return typeSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\UProfile\InvoiceRemark
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeNonAirReservationRef
     */
    public function getHotelReservationRef()
    {
      return $this->HotelReservationRef;
    }

    /**
     * @param typeNonAirReservationRef $HotelReservationRef
     * @return \FilippoToso\Travelport\UProfile\InvoiceRemark
     */
    public function setHotelReservationRef($HotelReservationRef)
    {
      $this->HotelReservationRef = $HotelReservationRef;
      return $this;
    }

    /**
     * @return typeNonAirReservationRef
     */
    public function getVehicleReservationRef()
    {
      return $this->VehicleReservationRef;
    }

    /**
     * @param typeNonAirReservationRef $VehicleReservationRef
     * @return \FilippoToso\Travelport\UProfile\InvoiceRemark
     */
    public function setVehicleReservationRef($VehicleReservationRef)
    {
      $this->VehicleReservationRef = $VehicleReservationRef;
      return $this;
    }

    /**
     * @return typeSegmentRef
     */
    public function getPassiveSegmentRef()
    {
      return $this->PassiveSegmentRef;
    }

    /**
     * @param typeSegmentRef $PassiveSegmentRef
     * @return \FilippoToso\Travelport\UProfile\InvoiceRemark
     */
    public function setPassiveSegmentRef($PassiveSegmentRef)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

}
