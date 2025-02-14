<?php

namespace FilippoToso\Travelport\Terminal;

class OverridePCC
{

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typePCC $PseudoCityCode
     */
    public function __construct($ProviderCode = null, $PseudoCityCode = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\Terminal\OverridePCC
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Terminal\OverridePCC
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

}
