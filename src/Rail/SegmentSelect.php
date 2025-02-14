<?php

namespace FilippoToso\Travelport\Rail;

class SegmentSelect
{

    /**
     * @var typeSegmentRef[] $AirSegmentRef
     */
    public $AirSegmentRef = null;

    /**
     * @var typeNonAirReservationRef[] $HotelReservationRef
     */
    public $HotelReservationRef = null;

    /**
     * @var typeNonAirReservationRef[] $VehicleReservationRef
     */
    public $VehicleReservationRef = null;

    /**
     * @var typeSegmentRef[] $PassiveSegmentRef
     */
    public $PassiveSegmentRef = null;

    /**
     * @var boolean $AllConfirmedAir
     */
    public $AllConfirmedAir = null;

    /**
     * @var boolean $AllWaitlistedAir
     */
    public $AllWaitlistedAir = null;

    /**
     * @var boolean $AllHotel
     */
    public $AllHotel = null;

    /**
     * @var boolean $AllVehicle
     */
    public $AllVehicle = null;

    /**
     * @var boolean $AllPassive
     */
    public $AllPassive = null;

    /**
     * @param boolean $AllConfirmedAir
     * @param boolean $AllWaitlistedAir
     * @param boolean $AllHotel
     * @param boolean $AllVehicle
     * @param boolean $AllPassive
     */
    public function __construct($AllConfirmedAir = null, $AllWaitlistedAir = null, $AllHotel = null, $AllVehicle = null, $AllPassive = null)
    {
      $this->AllConfirmedAir = $AllConfirmedAir;
      $this->AllWaitlistedAir = $AllWaitlistedAir;
      $this->AllHotel = $AllHotel;
      $this->AllVehicle = $AllVehicle;
      $this->AllPassive = $AllPassive;
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
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setAirSegmentRef(array $AirSegmentRef = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeNonAirReservationRef[]
     */
    public function getHotelReservationRef()
    {
      return $this->HotelReservationRef;
    }

    /**
     * @param typeNonAirReservationRef[] $HotelReservationRef
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setHotelReservationRef(array $HotelReservationRef = null)
    {
      $this->HotelReservationRef = $HotelReservationRef;
      return $this;
    }

    /**
     * @return typeNonAirReservationRef[]
     */
    public function getVehicleReservationRef()
    {
      return $this->VehicleReservationRef;
    }

    /**
     * @param typeNonAirReservationRef[] $VehicleReservationRef
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setVehicleReservationRef(array $VehicleReservationRef = null)
    {
      $this->VehicleReservationRef = $VehicleReservationRef;
      return $this;
    }

    /**
     * @return typeSegmentRef[]
     */
    public function getPassiveSegmentRef()
    {
      return $this->PassiveSegmentRef;
    }

    /**
     * @param typeSegmentRef[] $PassiveSegmentRef
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setPassiveSegmentRef(array $PassiveSegmentRef = null)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllConfirmedAir()
    {
      return $this->AllConfirmedAir;
    }

    /**
     * @param boolean $AllConfirmedAir
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setAllConfirmedAir($AllConfirmedAir)
    {
      $this->AllConfirmedAir = $AllConfirmedAir;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllWaitlistedAir()
    {
      return $this->AllWaitlistedAir;
    }

    /**
     * @param boolean $AllWaitlistedAir
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setAllWaitlistedAir($AllWaitlistedAir)
    {
      $this->AllWaitlistedAir = $AllWaitlistedAir;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllHotel()
    {
      return $this->AllHotel;
    }

    /**
     * @param boolean $AllHotel
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setAllHotel($AllHotel)
    {
      $this->AllHotel = $AllHotel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllVehicle()
    {
      return $this->AllVehicle;
    }

    /**
     * @param boolean $AllVehicle
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setAllVehicle($AllVehicle)
    {
      $this->AllVehicle = $AllVehicle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllPassive()
    {
      return $this->AllPassive;
    }

    /**
     * @param boolean $AllPassive
     * @return \FilippoToso\Travelport\Rail\SegmentSelect
     */
    public function setAllPassive($AllPassive)
    {
      $this->AllPassive = $AllPassive;
      return $this;
    }

}
