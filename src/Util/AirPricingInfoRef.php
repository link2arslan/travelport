<?php

namespace FilippoToso\Travelport\Util;

class AirPricingInfoRef
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Util\AirPricingInfoRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
