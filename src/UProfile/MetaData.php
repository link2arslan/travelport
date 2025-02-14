<?php

namespace FilippoToso\Travelport\UProfile;

class MetaData
{

    /**
     * @var anonymous176 $Key
     */
    public $Key = null;

    /**
     * @var anonymous177 $Value
     */
    public $Value = null;

    /**
     * @param anonymous176 $Key
     * @param anonymous177 $Value
     */
    public function __construct($Key = null, $Value = null)
    {
      $this->Key = $Key;
      $this->Value = $Value;
    }

    /**
     * @return anonymous176
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param anonymous176 $Key
     * @return \FilippoToso\Travelport\UProfile\MetaData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous177
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param anonymous177 $Value
     * @return \FilippoToso\Travelport\UProfile\MetaData
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
