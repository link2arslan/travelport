<?php

namespace FilippoToso\Travelport\GDSQueue;

class PenaltyFareInformation
{

    /**
     * @var typeFarePenalty $PenaltyInfo
     */
    public $PenaltyInfo = null;

    /**
     * @var boolean $ProhibitPenaltyFares
     */
    public $ProhibitPenaltyFares = null;

    /**
     * @param boolean $ProhibitPenaltyFares
     */
    public function __construct($ProhibitPenaltyFares = null)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
    }

    /**
     * @return typeFarePenalty
     */
    public function getPenaltyInfo()
    {
      return $this->PenaltyInfo;
    }

    /**
     * @param typeFarePenalty $PenaltyInfo
     * @return \FilippoToso\Travelport\GDSQueue\PenaltyFareInformation
     */
    public function setPenaltyInfo($PenaltyInfo)
    {
      $this->PenaltyInfo = $PenaltyInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitPenaltyFares()
    {
      return $this->ProhibitPenaltyFares;
    }

    /**
     * @param boolean $ProhibitPenaltyFares
     * @return \FilippoToso\Travelport\GDSQueue\PenaltyFareInformation
     */
    public function setProhibitPenaltyFares($ProhibitPenaltyFares)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
      return $this;
    }

}
