<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VendorInfo
{

    /**
     * @var typeSupplierCode $Code
     */
    public $Code = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @param typeSupplierCode $Code
     * @param string $Name
     */
    public function __construct($Code = null, $Name = null)
    {
      $this->Code = $Code;
      $this->Name = $Name;
    }

    /**
     * @return typeSupplierCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeSupplierCode $Code
     * @return \FilippoToso\Travelport\UniversalRecord\VendorInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\UniversalRecord\VendorInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
