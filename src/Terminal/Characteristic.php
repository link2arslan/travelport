<?php

namespace FilippoToso\Travelport\Terminal;

class Characteristic
{

    /**
     * @var anonymous137 $SeatType
     */
    public $SeatType = null;

    /**
     * @var anonymous138 $SeatDescription
     */
    public $SeatDescription = null;

    /**
     * @var anonymous139 $SeatValue
     */
    public $SeatValue = null;

    /**
     * @var anonymous140 $SeatValueDescription
     */
    public $SeatValueDescription = null;

    /**
     * @param anonymous137 $SeatType
     * @param anonymous138 $SeatDescription
     * @param anonymous139 $SeatValue
     * @param anonymous140 $SeatValueDescription
     */
    public function __construct($SeatType = null, $SeatDescription = null, $SeatValue = null, $SeatValueDescription = null)
    {
      $this->SeatType = $SeatType;
      $this->SeatDescription = $SeatDescription;
      $this->SeatValue = $SeatValue;
      $this->SeatValueDescription = $SeatValueDescription;
    }

    /**
     * @return anonymous137
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param anonymous137 $SeatType
     * @return \FilippoToso\Travelport\Terminal\Characteristic
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return anonymous138
     */
    public function getSeatDescription()
    {
      return $this->SeatDescription;
    }

    /**
     * @param anonymous138 $SeatDescription
     * @return \FilippoToso\Travelport\Terminal\Characteristic
     */
    public function setSeatDescription($SeatDescription)
    {
      $this->SeatDescription = $SeatDescription;
      return $this;
    }

    /**
     * @return anonymous139
     */
    public function getSeatValue()
    {
      return $this->SeatValue;
    }

    /**
     * @param anonymous139 $SeatValue
     * @return \FilippoToso\Travelport\Terminal\Characteristic
     */
    public function setSeatValue($SeatValue)
    {
      $this->SeatValue = $SeatValue;
      return $this;
    }

    /**
     * @return anonymous140
     */
    public function getSeatValueDescription()
    {
      return $this->SeatValueDescription;
    }

    /**
     * @param anonymous140 $SeatValueDescription
     * @return \FilippoToso\Travelport\Terminal\Characteristic
     */
    public function setSeatValueDescription($SeatValueDescription)
    {
      $this->SeatValueDescription = $SeatValueDescription;
      return $this;
    }

}
