<?php

namespace FilippoToso\Travelport\Util;

class typeProviderReservationDetail
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    public $ProviderLocatorCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($ProviderCode = null, $ProviderLocatorCode = null, $SupplierCode = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->SupplierCode = $SupplierCode;
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
     * @return \FilippoToso\Travelport\Util\typeProviderReservationDetail
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
     * @return \FilippoToso\Travelport\Util\typeProviderReservationDetail
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Util\typeProviderReservationDetail
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
