<?php

namespace FilippoToso\Travelport\Terminal;

class LinkedUniversalRecord
{

    /**
     * @var typeLocatorCode $LocatorCode
     */
    public $LocatorCode = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param typeLocatorCode $LocatorCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($LocatorCode = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->LocatorCode = $LocatorCode;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\Terminal\LinkedUniversalRecord
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
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
     * @return \FilippoToso\Travelport\Terminal\LinkedUniversalRecord
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Terminal\LinkedUniversalRecord
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Terminal\LinkedUniversalRecord
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
