<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProhibitedChains
{

    /**
     * @var HotelChain $HotelChain
     */
    public $HotelChain = null;

    /**
     * @param HotelChain $HotelChain
     */
    public function __construct($HotelChain = null)
    {
      $this->HotelChain = $HotelChain;
    }

    /**
     * @return HotelChain
     */
    public function getHotelChain()
    {
      return $this->HotelChain;
    }

    /**
     * @param HotelChain $HotelChain
     * @return \FilippoToso\Travelport\GDSQueue\ProhibitedChains
     */
    public function setHotelChain($HotelChain)
    {
      $this->HotelChain = $HotelChain;
      return $this;
    }

}
