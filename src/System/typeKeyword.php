<?php

namespace FilippoToso\Travelport\System;

class typeKeyword
{

    /**
     * @var typeSubKey[] $SubKey
     */
    public $SubKey = null;

    /**
     * @var anonymous391 $Name
     */
    public $Name = null;

    /**
     * @var UNKNOWN $Number
     */
    public $Number = null;

    /**
     * @var UNKNOWN $Description
     */
    public $Description = null;

    /**
     * @param anonymous391 $Name
     * @param UNKNOWN $Number
     * @param UNKNOWN $Description
     */
    public function __construct($Name = null, $Number = null, $Description = null)
    {
      $this->Name = $Name;
      $this->Number = $Number;
      $this->Description = $Description;
    }

    /**
     * @return typeSubKey[]
     */
    public function getSubKey()
    {
      return $this->SubKey;
    }

    /**
     * @param typeSubKey[] $SubKey
     * @return \FilippoToso\Travelport\System\typeKeyword
     */
    public function setSubKey(array $SubKey = null)
    {
      $this->SubKey = $SubKey;
      return $this;
    }

    /**
     * @return anonymous391
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous391 $Name
     * @return \FilippoToso\Travelport\System\typeKeyword
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param UNKNOWN $Number
     * @return \FilippoToso\Travelport\System\typeKeyword
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param UNKNOWN $Description
     * @return \FilippoToso\Travelport\System\typeKeyword
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
