<?php

namespace FilippoToso\Travelport\GDSQueue;

class Coach
{

    /**
     * @var Characteristic $Characteristic
     */
    public $Characteristic = null;

    /**
     * @var Remark $Remark
     */
    public $Remark = null;

    /**
     * @var string $CoachNumber
     */
    public $CoachNumber = null;

    /**
     * @param Characteristic $Characteristic
     * @param Remark $Remark
     * @param string $CoachNumber
     */
    public function __construct($Characteristic = null, $Remark = null, $CoachNumber = null)
    {
      $this->Characteristic = $Characteristic;
      $this->Remark = $Remark;
      $this->CoachNumber = $CoachNumber;
    }

    /**
     * @return Characteristic
     */
    public function getCharacteristic()
    {
      return $this->Characteristic;
    }

    /**
     * @param Characteristic $Characteristic
     * @return \FilippoToso\Travelport\GDSQueue\Coach
     */
    public function setCharacteristic($Characteristic)
    {
      $this->Characteristic = $Characteristic;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\GDSQueue\Coach
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoachNumber()
    {
      return $this->CoachNumber;
    }

    /**
     * @param string $CoachNumber
     * @return \FilippoToso\Travelport\GDSQueue\Coach
     */
    public function setCoachNumber($CoachNumber)
    {
      $this->CoachNumber = $CoachNumber;
      return $this;
    }

}
