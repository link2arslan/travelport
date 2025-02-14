<?php

namespace FilippoToso\Travelport\Util;

class BookingCodeInfo
{

    /**
     * @var string $CabinClass
     */
    public $CabinClass = null;

    /**
     * @var string $BookingCounts
     */
    public $BookingCounts = null;

    /**
     * @param string $CabinClass
     * @param string $BookingCounts
     */
    public function __construct($CabinClass = null, $BookingCounts = null)
    {
      $this->CabinClass = $CabinClass;
      $this->BookingCounts = $BookingCounts;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \FilippoToso\Travelport\Util\BookingCodeInfo
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCounts()
    {
      return $this->BookingCounts;
    }

    /**
     * @param string $BookingCounts
     * @return \FilippoToso\Travelport\Util\BookingCodeInfo
     */
    public function setBookingCounts($BookingCounts)
    {
      $this->BookingCounts = $BookingCounts;
      return $this;
    }

}
