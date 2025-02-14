<?php

namespace FilippoToso\Travelport\Hotel;

class typeGuaranteeInformation
{

    /**
     * @var anonymous122 $Type
     */
    public $Type = null;

    /**
     * @var anonymous123 $AgencyType
     */
    public $AgencyType = null;

    /**
     * @var StringLength1to128 $IATANumber
     */
    public $IATANumber = null;

    /**
     * @param anonymous122 $Type
     * @param anonymous123 $AgencyType
     * @param StringLength1to128 $IATANumber
     */
    public function __construct($Type = null, $AgencyType = null, $IATANumber = null)
    {
      $this->Type = $Type;
      $this->AgencyType = $AgencyType;
      $this->IATANumber = $IATANumber;
    }

    /**
     * @return anonymous122
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous122 $Type
     * @return \FilippoToso\Travelport\Hotel\typeGuaranteeInformation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous123
     */
    public function getAgencyType()
    {
      return $this->AgencyType;
    }

    /**
     * @param anonymous123 $AgencyType
     * @return \FilippoToso\Travelport\Hotel\typeGuaranteeInformation
     */
    public function setAgencyType($AgencyType)
    {
      $this->AgencyType = $AgencyType;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param StringLength1to128 $IATANumber
     * @return \FilippoToso\Travelport\Hotel\typeGuaranteeInformation
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

}
