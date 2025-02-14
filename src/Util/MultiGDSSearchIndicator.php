<?php

namespace FilippoToso\Travelport\Util;

class MultiGDSSearchIndicator
{

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var boolean $DefaultProvider
     */
    public $DefaultProvider = null;

    /**
     * @var string $PrivateFareCode
     */
    public $PrivateFareCode = null;

    /**
     * @var boolean $PrivateFareCodeOnly
     */
    public $PrivateFareCodeOnly = null;

    /**
     * @param string $Type
     * @param typeProviderCode $ProviderCode
     * @param boolean $DefaultProvider
     * @param string $PrivateFareCode
     * @param boolean $PrivateFareCodeOnly
     */
    public function __construct($Type = null, $ProviderCode = null, $DefaultProvider = null, $PrivateFareCode = null, $PrivateFareCodeOnly = null)
    {
      $this->Type = $Type;
      $this->ProviderCode = $ProviderCode;
      $this->DefaultProvider = $DefaultProvider;
      $this->PrivateFareCode = $PrivateFareCode;
      $this->PrivateFareCodeOnly = $PrivateFareCodeOnly;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Util\MultiGDSSearchIndicator
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Util\MultiGDSSearchIndicator
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultProvider()
    {
      return $this->DefaultProvider;
    }

    /**
     * @param boolean $DefaultProvider
     * @return \FilippoToso\Travelport\Util\MultiGDSSearchIndicator
     */
    public function setDefaultProvider($DefaultProvider)
    {
      $this->DefaultProvider = $DefaultProvider;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrivateFareCode()
    {
      return $this->PrivateFareCode;
    }

    /**
     * @param string $PrivateFareCode
     * @return \FilippoToso\Travelport\Util\MultiGDSSearchIndicator
     */
    public function setPrivateFareCode($PrivateFareCode)
    {
      $this->PrivateFareCode = $PrivateFareCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivateFareCodeOnly()
    {
      return $this->PrivateFareCodeOnly;
    }

    /**
     * @param boolean $PrivateFareCodeOnly
     * @return \FilippoToso\Travelport\Util\MultiGDSSearchIndicator
     */
    public function setPrivateFareCodeOnly($PrivateFareCodeOnly)
    {
      $this->PrivateFareCodeOnly = $PrivateFareCodeOnly;
      return $this;
    }

}
