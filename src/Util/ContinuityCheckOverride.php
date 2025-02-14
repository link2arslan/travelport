<?php

namespace FilippoToso\Travelport\Util;

class ContinuityCheckOverride
{

    /**
     * @var typeNonBlanks $_
     */
    public $_ = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param typeNonBlanks $_
     * @param typeRef $Key
     */
    public function __construct($_ = null, $Key = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
    }

    /**
     * @return typeNonBlanks
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeNonBlanks $_
     * @return \FilippoToso\Travelport\Util\ContinuityCheckOverride
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
     * @return \FilippoToso\Travelport\Util\ContinuityCheckOverride
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
