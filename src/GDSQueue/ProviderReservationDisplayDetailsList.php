<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProviderReservationDisplayDetailsList
{

    /**
     * @var DisplayDetails $DisplayDetails
     */
    public $DisplayDetails = null;

    /**
     * @var TravelerNameNum $TravelerNameNum
     */
    public $TravelerNameNum = null;

    /**
     * @param DisplayDetails $DisplayDetails
     * @param TravelerNameNum $TravelerNameNum
     */
    public function __construct($DisplayDetails = null, $TravelerNameNum = null)
    {
      $this->DisplayDetails = $DisplayDetails;
      $this->TravelerNameNum = $TravelerNameNum;
    }

    /**
     * @return DisplayDetails
     */
    public function getDisplayDetails()
    {
      return $this->DisplayDetails;
    }

    /**
     * @param DisplayDetails $DisplayDetails
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDisplayDetailsList
     */
    public function setDisplayDetails($DisplayDetails)
    {
      $this->DisplayDetails = $DisplayDetails;
      return $this;
    }

    /**
     * @return TravelerNameNum
     */
    public function getTravelerNameNum()
    {
      return $this->TravelerNameNum;
    }

    /**
     * @param TravelerNameNum $TravelerNameNum
     * @return \FilippoToso\Travelport\GDSQueue\ProviderReservationDisplayDetailsList
     */
    public function setTravelerNameNum($TravelerNameNum)
    {
      $this->TravelerNameNum = $TravelerNameNum;
      return $this;
    }

}
