<?php

namespace FilippoToso\Travelport\Air;

class RailFareIDRef
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
     * @return \FilippoToso\Travelport\Air\RailFareIDRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
