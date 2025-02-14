<?php

namespace FilippoToso\Travelport\Terminal;

class Requisition
{

    /**
     * @var string $Number
     */
    public $Number = null;

    /**
     * @var anonymous30 $Category
     */
    public $Category = null;

    /**
     * @var anonymous31 $Type
     */
    public $Type = null;

    /**
     * @param string $Number
     * @param anonymous30 $Category
     * @param anonymous31 $Type
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
     * @return \FilippoToso\Travelport\Terminal\Requisition
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous30
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous30 $Category
     * @return \FilippoToso\Travelport\Terminal\Requisition
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return anonymous31
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous31 $Type
     * @return \FilippoToso\Travelport\Terminal\Requisition
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
