<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProhibitedVendors
{

    /**
     * @var Vendor $Vendor
     */
    public $Vendor = null;

    /**
     * @param Vendor $Vendor
     */
    public function __construct($Vendor = null)
    {
      $this->Vendor = $Vendor;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param Vendor $Vendor
     * @return \FilippoToso\Travelport\UniversalRecord\ProhibitedVendors
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

}
