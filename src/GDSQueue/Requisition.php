<?php

namespace FilippoToso\Travelport\GDSQueue;

class Requisition
{

    /**
     * @var string $Number
     */
    public $Number = null;

    /**
     * @var anonymous31 $Category
     */
    public $Category = null;

    /**
     * @var anonymous32 $Type
     */
    public $Type = null;

    /**
     * @param string $Number
     * @param anonymous31 $Category
     * @param anonymous32 $Type
     */
    public function __construct($Number = null, $Category = null, $Type = null)
    {
      $this->Number = $Number;
      $this->Category = $Category;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\GDSQueue\Requisition
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous31
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous31 $Category
     * @return \FilippoToso\Travelport\GDSQueue\Requisition
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return anonymous32
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous32 $Type
     * @return \FilippoToso\Travelport\GDSQueue\Requisition
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
