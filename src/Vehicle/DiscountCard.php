<?php

namespace FilippoToso\Travelport\Vehicle;

class DiscountCard
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var StringLength1to8 $Code
     */
    public $Code = null;

    /**
     * @var StringLength1to255 $Description
     */
    public $Description = null;

    /**
     * @var typeCardNumber $Number
     */
    public $Number = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param StringLength1to8 $Code
     * @param StringLength1to255 $Description
     * @param typeCardNumber $Number
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $Code = null, $Description = null, $Number = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->Code = $Code;
      $this->Description = $Description;
      $this->Number = $Number;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Vehicle\DiscountCard
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return StringLength1to8
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param StringLength1to8 $Code
     * @return \FilippoToso\Travelport\Vehicle\DiscountCard
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\Vehicle\DiscountCard
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeCardNumber
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param typeCardNumber $Number
     * @return \FilippoToso\Travelport\Vehicle\DiscountCard
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \FilippoToso\Travelport\Vehicle\DiscountCard
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
     * @return \FilippoToso\Travelport\Vehicle\DiscountCard
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
