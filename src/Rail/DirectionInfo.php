<?php

namespace FilippoToso\Travelport\Rail;

class DirectionInfo
{

    /**
     * @var typeIATACode $LocationCode
     */
    public $LocationCode = null;

    /**
     * @var anonymous1047 $Direction
     */
    public $Direction = null;

    /**
     * @param typeIATACode $LocationCode
     * @param anonymous1047 $Direction
     */
    public function __construct($LocationCode = null, $Direction = null)
    {
      $this->LocationCode = $LocationCode;
      $this->Direction = $Direction;
    }

    /**
     * @return typeIATACode
     */
    public function getLocationCode()
    {
      return $this->LocationCode;
    }

    /**
     * @param typeIATACode $LocationCode
     * @return \FilippoToso\Travelport\Rail\DirectionInfo
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous1047
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous1047 $Direction
     * @return \FilippoToso\Travelport\Rail\DirectionInfo
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
