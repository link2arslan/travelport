<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelSearchError extends typeResultMessage
{

    /**
     * @var typeResultMessage $_
     */
    public $_ = null;

    /**
     * @var typeThirdPartySupplier $RateSupplier
     */
    public $RateSupplier = null;

    /**
     * @param string $_
     * @param int $Code
     * @param anonymous232 $Type
     * @param typeResultMessage $_
     * @param typeThirdPartySupplier $RateSupplier
     */
    public function __construct($_ = null, $Code = null, $Type = null, $RateSupplier = null)
    {
      parent::__construct($_, $Code, $Type);
      $this->_ = $_;
      $this->RateSupplier = $RateSupplier;
    }

    /**
     * @return typeResultMessage
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeResultMessage $_
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchError
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeThirdPartySupplier
     */
    public function getRateSupplier()
    {
      return $this->RateSupplier;
    }

    /**
     * @param typeThirdPartySupplier $RateSupplier
     * @return \FilippoToso\Travelport\UniversalRecord\HotelSearchError
     */
    public function setRateSupplier($RateSupplier)
    {
      $this->RateSupplier = $RateSupplier;
      return $this;
    }

}
