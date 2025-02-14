<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BaggageAllowanceInfo extends BaseBaggageAllowanceInfo
{

    /**
     * @var BagDetails $BagDetails
     */
    public $BagDetails = null;

    /**
     * @var typePTC $TravelerType
     */
    public $TravelerType = null;

    /**
     * @var typeRef $FareInfoRef
     */
    public $FareInfoRef = null;

    /**
     * @param URLInfo $URLInfo
     * @param TextInfo $TextInfo
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeCarrier $Carrier
     * @param BagDetails $BagDetails
     * @param typePTC $TravelerType
     * @param typeRef $FareInfoRef
     */
    public function __construct($URLInfo = null, $TextInfo = null, $Origin = null, $Destination = null, $Carrier = null, $BagDetails = null, $TravelerType = null, $FareInfoRef = null)
    {
      parent::__construct($URLInfo, $TextInfo, $Origin, $Destination, $Carrier);
      $this->BagDetails = $BagDetails;
      $this->TravelerType = $TravelerType;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return BagDetails
     */
    public function getBagDetails()
    {
      return $this->BagDetails;
    }

    /**
     * @param BagDetails $BagDetails
     * @return \FilippoToso\Travelport\UniversalRecord\BaggageAllowanceInfo
     */
    public function setBagDetails($BagDetails)
    {
      $this->BagDetails = $BagDetails;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getTravelerType()
    {
      return $this->TravelerType;
    }

    /**
     * @param typePTC $TravelerType
     * @return \FilippoToso\Travelport\UniversalRecord\BaggageAllowanceInfo
     */
    public function setTravelerType($TravelerType)
    {
      $this->TravelerType = $TravelerType;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \FilippoToso\Travelport\UniversalRecord\BaggageAllowanceInfo
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
