<?php

namespace FilippoToso\Travelport\Util;

class Affiliations
{

    /**
     * @var TravelArranger $TravelArranger
     */
    public $TravelArranger = null;

    /**
     * @param TravelArranger $TravelArranger
     */
    public function __construct($TravelArranger = null)
    {
      $this->TravelArranger = $TravelArranger;
    }

    /**
     * @return TravelArranger
     */
    public function getTravelArranger()
    {
      return $this->TravelArranger;
    }

    /**
     * @param TravelArranger $TravelArranger
     * @return \FilippoToso\Travelport\Util\Affiliations
     */
    public function setTravelArranger($TravelArranger)
    {
      $this->TravelArranger = $TravelArranger;
      return $this;
    }

}
