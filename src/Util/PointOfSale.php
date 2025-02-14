<?php

namespace FilippoToso\Travelport\Util;

class PointOfSale
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
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeIATA $IATA
     */
    public $IATA = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typePCC $PseudoCityCode
     * @param typeRef $Key
     * @param typeIATA $IATA
     */
    public function __construct($ProviderCode = null, $PseudoCityCode = null, $Key = null, $IATA = null)
    {
      $this->ProviderCode = $ProviderCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->Key = $Key;
      $this->IATA = $IATA;
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
     * @return \FilippoToso\Travelport\Util\PointOfSale
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
     * @return \FilippoToso\Travelport\Util\PointOfSale
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
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
     * @return \FilippoToso\Travelport\Util\PointOfSale
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getIATA()
    {
      return $this->IATA;
    }

    /**
     * @param typeIATA $IATA
     * @return \FilippoToso\Travelport\Util\PointOfSale
     */
    public function setIATA($IATA)
    {
      $this->IATA = $IATA;
      return $this;
    }

}
