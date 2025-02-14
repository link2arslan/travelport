<?php

namespace FilippoToso\Travelport\Rail;

class VehicleSpecialRequest
{

    /**
     * @var typeGeneralText $_
     */
    public $_ = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param typeGeneralText $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return typeGeneralText
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeGeneralText $_
     * @return \FilippoToso\Travelport\Rail\VehicleSpecialRequest
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\VehicleSpecialRequest
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
