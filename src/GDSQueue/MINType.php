<?php

namespace FilippoToso\Travelport\GDSQueue;

class MINType
{

    /**
     * @var boolean $HoursMin
     */
    public $HoursMin = null;

    /**
     * @var boolean $DaysMin
     */
    public $DaysMin = null;

    /**
     * @var boolean $MonthsMin
     */
    public $MonthsMin = null;

    /**
     * @var boolean $OccurIndMin
     */
    public $OccurIndMin = null;

    /**
     * @var boolean $SameDayMin
     */
    public $SameDayMin = null;

    /**
     * @var int $TmDOWMin
     */
    public $TmDOWMin = null;

    /**
     * @var int $FareComponent
     */
    public $FareComponent = null;

    /**
     * @var int $NumOccurMin
     */
    public $NumOccurMin = null;

    /**
     * @param boolean $HoursMin
     * @param boolean $DaysMin
     * @param boolean $MonthsMin
     * @param boolean $OccurIndMin
     * @param boolean $SameDayMin
     * @param int $TmDOWMin
     * @param int $FareComponent
     * @param int $NumOccurMin
     */
    public function __construct($HoursMin = null, $DaysMin = null, $MonthsMin = null, $OccurIndMin = null, $SameDayMin = null, $TmDOWMin = null, $FareComponent = null, $NumOccurMin = null)
    {
      $this->HoursMin = $HoursMin;
      $this->DaysMin = $DaysMin;
      $this->MonthsMin = $MonthsMin;
      $this->OccurIndMin = $OccurIndMin;
      $this->SameDayMin = $SameDayMin;
      $this->TmDOWMin = $TmDOWMin;
      $this->FareComponent = $FareComponent;
      $this->NumOccurMin = $NumOccurMin;
    }

    /**
     * @return boolean
     */
    public function getHoursMin()
    {
      return $this->HoursMin;
    }

    /**
     * @param boolean $HoursMin
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setHoursMin($HoursMin)
    {
      $this->HoursMin = $HoursMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaysMin()
    {
      return $this->DaysMin;
    }

    /**
     * @param boolean $DaysMin
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setDaysMin($DaysMin)
    {
      $this->DaysMin = $DaysMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMonthsMin()
    {
      return $this->MonthsMin;
    }

    /**
     * @param boolean $MonthsMin
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setMonthsMin($MonthsMin)
    {
      $this->MonthsMin = $MonthsMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOccurIndMin()
    {
      return $this->OccurIndMin;
    }

    /**
     * @param boolean $OccurIndMin
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setOccurIndMin($OccurIndMin)
    {
      $this->OccurIndMin = $OccurIndMin;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSameDayMin()
    {
      return $this->SameDayMin;
    }

    /**
     * @param boolean $SameDayMin
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setSameDayMin($SameDayMin)
    {
      $this->SameDayMin = $SameDayMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getTmDOWMin()
    {
      return $this->TmDOWMin;
    }

    /**
     * @param int $TmDOWMin
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setTmDOWMin($TmDOWMin)
    {
      $this->TmDOWMin = $TmDOWMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getFareComponent()
    {
      return $this->FareComponent;
    }

    /**
     * @param int $FareComponent
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setFareComponent($FareComponent)
    {
      $this->FareComponent = $FareComponent;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOccurMin()
    {
      return $this->NumOccurMin;
    }

    /**
     * @param int $NumOccurMin
     * @return \FilippoToso\Travelport\GDSQueue\MINType
     */
    public function setNumOccurMin($NumOccurMin)
    {
      $this->NumOccurMin = $NumOccurMin;
      return $this;
    }

}
