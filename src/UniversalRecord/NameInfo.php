<?php

namespace FilippoToso\Travelport\UniversalRecord;

class NameInfo
{

    /**
     * @var anonymous88 $Prefix
     */
    public $Prefix = null;

    /**
     * @var anonymous89 $First
     */
    public $First = null;

    /**
     * @var anonymous90 $Middle
     */
    public $Middle = null;

    /**
     * @var typeTravelerLastName $Last
     */
    public $Last = null;

    /**
     * @var anonymous91 $Suffix
     */
    public $Suffix = null;

    /**
     * @param anonymous88 $Prefix
     * @param anonymous89 $First
     * @param anonymous90 $Middle
     * @param typeTravelerLastName $Last
     * @param anonymous91 $Suffix
     */
    public function __construct($Prefix = null, $First = null, $Middle = null, $Last = null, $Suffix = null)
    {
      $this->Prefix = $Prefix;
      $this->First = $First;
      $this->Middle = $Middle;
      $this->Last = $Last;
      $this->Suffix = $Suffix;
    }

    /**
     * @return anonymous88
     */
    public function getPrefix()
    {
      return $this->Prefix;
    }

    /**
     * @param anonymous88 $Prefix
     * @return \FilippoToso\Travelport\UniversalRecord\NameInfo
     */
    public function setPrefix($Prefix)
    {
      $this->Prefix = $Prefix;
      return $this;
    }

    /**
     * @return anonymous89
     */
    public function getFirst()
    {
      return $this->First;
    }

    /**
     * @param anonymous89 $First
     * @return \FilippoToso\Travelport\UniversalRecord\NameInfo
     */
    public function setFirst($First)
    {
      $this->First = $First;
      return $this;
    }

    /**
     * @return anonymous90
     */
    public function getMiddle()
    {
      return $this->Middle;
    }

    /**
     * @param anonymous90 $Middle
     * @return \FilippoToso\Travelport\UniversalRecord\NameInfo
     */
    public function setMiddle($Middle)
    {
      $this->Middle = $Middle;
      return $this;
    }

    /**
     * @return typeTravelerLastName
     */
    public function getLast()
    {
      return $this->Last;
    }

    /**
     * @param typeTravelerLastName $Last
     * @return \FilippoToso\Travelport\UniversalRecord\NameInfo
     */
    public function setLast($Last)
    {
      $this->Last = $Last;
      return $this;
    }

    /**
     * @return anonymous91
     */
    public function getSuffix()
    {
      return $this->Suffix;
    }

    /**
     * @param anonymous91 $Suffix
     * @return \FilippoToso\Travelport\UniversalRecord\NameInfo
     */
    public function setSuffix($Suffix)
    {
      $this->Suffix = $Suffix;
      return $this;
    }

}
