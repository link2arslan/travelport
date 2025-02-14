<?php

namespace FilippoToso\Travelport\Util;

class FareNote
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var int $Precedence
     */
    public $Precedence = null;

    /**
     * @var string $NoteName
     */
    public $NoteName = null;

    /**
     * @var typeRef $FareInfoMessageRef
     */
    public $FareInfoMessageRef = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param string $_
     * @param typeRef $Key
     * @param int $Precedence
     * @param string $NoteName
     * @param typeRef $FareInfoMessageRef
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($_ = null, $Key = null, $Precedence = null, $NoteName = null, $FareInfoMessageRef = null, $ElStat = null, $KeyOverride = null)
    {
      $this->_ = $_;
      $this->Key = $Key;
      $this->Precedence = $Precedence;
      $this->NoteName = $NoteName;
      $this->FareInfoMessageRef = $FareInfoMessageRef;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Util\FareNote
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
     * @return \FilippoToso\Travelport\Util\FareNote
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrecedence()
    {
      return $this->Precedence;
    }

    /**
     * @param int $Precedence
     * @return \FilippoToso\Travelport\Util\FareNote
     */
    public function setPrecedence($Precedence)
    {
      $this->Precedence = $Precedence;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoteName()
    {
      return $this->NoteName;
    }

    /**
     * @param string $NoteName
     * @return \FilippoToso\Travelport\Util\FareNote
     */
    public function setNoteName($NoteName)
    {
      $this->NoteName = $NoteName;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoMessageRef()
    {
      return $this->FareInfoMessageRef;
    }

    /**
     * @param typeRef $FareInfoMessageRef
     * @return \FilippoToso\Travelport\Util\FareNote
     */
    public function setFareInfoMessageRef($FareInfoMessageRef)
    {
      $this->FareInfoMessageRef = $FareInfoMessageRef;
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
     * @return \FilippoToso\Travelport\Util\FareNote
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
     * @return \FilippoToso\Travelport\Util\FareNote
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
