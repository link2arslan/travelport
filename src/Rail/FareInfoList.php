<?php

namespace FilippoToso\Travelport\Rail;

class FareInfoList
{

    /**
     * @var FareInfo $FareInfo
     */
    public $FareInfo = null;

    /**
     * @param FareInfo $FareInfo
     */
    public function __construct($FareInfo = null)
    {
      $this->FareInfo = $FareInfo;
    }

    /**
     * @return FareInfo
     */
    public function getFareInfo()
    {
      return $this->FareInfo;
    }

    /**
     * @param FareInfo $FareInfo
     * @return \FilippoToso\Travelport\Rail\FareInfoList
     */
    public function setFareInfo($FareInfo)
    {
      $this->FareInfo = $FareInfo;
      return $this;
    }

}
