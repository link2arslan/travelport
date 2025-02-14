<?php

namespace FilippoToso\Travelport\UProfile;

class BillingPointOfSaleInfo
{

    /**
     * @var string $OriginApplication
     */
    public $OriginApplication = null;

    /**
     * @var anonymous386 $CIDBNumber
     */
    public $CIDBNumber = null;

    /**
     * @param string $OriginApplication
     * @param anonymous386 $CIDBNumber
     */
    public function __construct($OriginApplication = null, $CIDBNumber = null)
    {
      $this->OriginApplication = $OriginApplication;
      $this->CIDBNumber = $CIDBNumber;
    }

    /**
     * @return string
     */
    public function getOriginApplication()
    {
      return $this->OriginApplication;
    }

    /**
     * @param string $OriginApplication
     * @return \FilippoToso\Travelport\UProfile\BillingPointOfSaleInfo
     */
    public function setOriginApplication($OriginApplication)
    {
      $this->OriginApplication = $OriginApplication;
      return $this;
    }

    /**
     * @return anonymous386
     */
    public function getCIDBNumber()
    {
      return $this->CIDBNumber;
    }

    /**
     * @param anonymous386 $CIDBNumber
     * @return \FilippoToso\Travelport\UProfile\BillingPointOfSaleInfo
     */
    public function setCIDBNumber($CIDBNumber)
    {
      $this->CIDBNumber = $CIDBNumber;
      return $this;
    }

}
