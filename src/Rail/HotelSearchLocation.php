<?php

namespace FilippoToso\Travelport\Rail;

class HotelSearchLocation
{

    /**
     * @var HotelLocation $HotelLocation
     */
    public $HotelLocation = null;

    /**
     * @var ProviderLocation $ProviderLocation
     */
    public $ProviderLocation = null;

    /**
     * @var VendorLocation $VendorLocation
     */
    public $VendorLocation = null;

    /**
     * @var typeStructuredAddress $HotelAddress
     */
    public $HotelAddress = null;

    /**
     * @var typeHotelReferencePoint $ReferencePoint
     */
    public $ReferencePoint = null;

    /**
     * @var CoordinateLocation $CoordinateLocation
     */
    public $CoordinateLocation = null;

    /**
     * @var Distance $Distance
     */
    public $Distance = null;

    /**
     * @param HotelLocation $HotelLocation
     * @param ProviderLocation $ProviderLocation
     * @param VendorLocation $VendorLocation
     * @param CoordinateLocation $CoordinateLocation
     * @param Distance $Distance
     */
    public function __construct($HotelLocation = null, $ProviderLocation = null, $VendorLocation = null, $CoordinateLocation = null, $Distance = null)
    {
      $this->HotelLocation = $HotelLocation;
      $this->ProviderLocation = $ProviderLocation;
      $this->VendorLocation = $VendorLocation;
      $this->CoordinateLocation = $CoordinateLocation;
      $this->Distance = $Distance;
    }

    /**
     * @return HotelLocation
     */
    public function getHotelLocation()
    {
      return $this->HotelLocation;
    }

    /**
     * @param HotelLocation $HotelLocation
     * @return \FilippoToso\Travelport\Rail\HotelSearchLocation
     */
    public function setHotelLocation($HotelLocation)
    {
      $this->HotelLocation = $HotelLocation;
      return $this;
    }

    /**
     * @return ProviderLocation
     */
    public function getProviderLocation()
    {
      return $this->ProviderLocation;
    }

    /**
     * @param ProviderLocation $ProviderLocation
     * @return \FilippoToso\Travelport\Rail\HotelSearchLocation
     */
    public function setProviderLocation($ProviderLocation)
    {
      $this->ProviderLocation = $ProviderLocation;
      return $this;
    }

    /**
     * @return VendorLocation
     */
    public function getVendorLocation()
    {
      return $this->VendorLocation;
    }

    /**
     * @param VendorLocation $VendorLocation
     * @return \FilippoToso\Travelport\Rail\HotelSearchLocation
     */
    public function setVendorLocation($VendorLocation)
    {
      $this->VendorLocation = $VendorLocation;
      return $this;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getHotelAddress()
    {
      return $this->HotelAddress;
    }

    /**
     * @param typeStructuredAddress $HotelAddress
     * @return \FilippoToso\Travelport\Rail\HotelSearchLocation
     */
    public function setHotelAddress($HotelAddress)
    {
      $this->HotelAddress = $HotelAddress;
      return $this;
    }

    /**
     * @return typeHotelReferencePoint
     */
    public function getReferencePoint()
    {
      return $this->ReferencePoint;
    }

    /**
     * @param typeHotelReferencePoint $ReferencePoint
     * @return \FilippoToso\Travelport\Rail\HotelSearchLocation
     */
    public function setReferencePoint($ReferencePoint)
    {
      $this->ReferencePoint = $ReferencePoint;
      return $this;
    }

    /**
     * @return CoordinateLocation
     */
    public function getCoordinateLocation()
    {
      return $this->CoordinateLocation;
    }

    /**
     * @param CoordinateLocation $CoordinateLocation
     * @return \FilippoToso\Travelport\Rail\HotelSearchLocation
     */
    public function setCoordinateLocation($CoordinateLocation)
    {
      $this->CoordinateLocation = $CoordinateLocation;
      return $this;
    }

    /**
     * @return Distance
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param Distance $Distance
     * @return \FilippoToso\Travelport\Rail\HotelSearchLocation
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

}
