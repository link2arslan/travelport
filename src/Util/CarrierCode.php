<?php

namespace FilippoToso\Travelport\Util;

class CarrierCode
{

    /**
     * @var typeCarrier $_
     */
    public $_ = null;

    /**
     * @param typeCarrier $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeCarrier
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeCarrier $_
     * @return \FilippoToso\Travelport\Util\CarrierCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
