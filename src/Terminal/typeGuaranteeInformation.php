<?php

namespace FilippoToso\Travelport\Terminal;

class typeGuaranteeInformation
{

    /**
     * @var anonymous113 $Type
     */
    public $Type = null;

    /**
     * @var anonymous114 $AgencyType
     */
    public $AgencyType = null;

    /**
     * @var StringLength1to128 $IATANumber
     */
    public $IATANumber = null;

    /**
     * @param anonymous113 $Type
     * @param anonymous114 $AgencyType
     * @param StringLength1to128 $IATANumber
     */
    public function __construct($Type = null, $AgencyType = null, $IATANumber = null)
    {
      $this->Type = $Type;
      $this->AgencyType = $AgencyType;
      $this->IATANumber = $IATANumber;
    }

    /**
     * @return anonymous113
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous113 $Type
     * @return \FilippoToso\Travelport\Terminal\typeGuaranteeInformation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return anonymous114
     */
    public function getAgencyType()
    {
      return $this->AgencyType;
    }

    /**
     * @param anonymous114 $AgencyType
     * @return \FilippoToso\Travelport\Terminal\typeGuaranteeInformation
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
     * @return \FilippoToso\Travelport\Terminal\typeGuaranteeInformation
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

}
