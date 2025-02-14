<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeNativeSearchModifier
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @param string $_
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($_ = null, $ProviderCode = null)
    {
      $this->_ = $_;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\UniversalRecord\typeNativeSearchModifier
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\typeNativeSearchModifier
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
