<?php

namespace FilippoToso\Travelport\Vehicle;

class MetaData
{

    /**
     * @var anonymous188 $Key
     */
    public $Key = null;

    /**
     * @var anonymous189 $Value
     */
    public $Value = null;

    /**
     * @param anonymous188 $Key
     * @param anonymous189 $Value
     */
    public function __construct($Key = null, $Value = null)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return anonymous188
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param anonymous188 $Key
     * @return \FilippoToso\Travelport\Vehicle\MetaData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous189
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous189 $Value
     * @return \FilippoToso\Travelport\Vehicle\MetaData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
