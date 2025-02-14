<?php

namespace FilippoToso\Travelport\Util;

class MAXType
{

    /**
     * @var boolean $HoursMax
     */
    public $HoursMax = null;

    /**
     * @var boolean $DaysMax
     */
    public $DaysMax = null;

    /**
     * @var boolean $MonthsMax
     */
    public $MonthsMax = null;

    /**
     * @var boolean $OccurIndMax
     */
    public $OccurIndMax = null;

    /**
     * @var boolean $SameDayMax
     */
    public $SameDayMax = null;

    /**
     * @var boolean $StartIndMax
     */
    public $StartIndMax = null;

    /**
     * @var boolean $CompletionInd
     */
    public $CompletionInd = null;

    /**
     * @var int $TmDOWMax
     */
    public $TmDOWMax = null;

    /**
     * @var int $NumOccurMax
     */
    public $NumOccurMax = null;

    /**
     * @param boolean $HoursMax
     * @param boolean $DaysMax
     * @param boolean $MonthsMax
     * @param boolean $OccurIndMax
     * @param boolean $SameDayMax
     * @param boolean $StartIndMax
     * @param boolean $CompletionInd
     * @param int $TmDOWMax
     * @param int $NumOccurMax
     */
    public function __construct($HoursMax = null, $DaysMax = null, $MonthsMax = null, $OccurIndMax = null, $SameDayMax = null, $StartIndMax = null, $CompletionInd = null, $TmDOWMax = null, $NumOccurMax = null)
    {
      $this->HoursMax = $HoursMax;
      $this->DaysMax = $DaysMax;
      $this->MonthsMax = $MonthsMax;
      $this->OccurIndMax = $OccurIndMax;
      $this->SameDayMax = $SameDayMax;
      $this->StartIndMax = $StartIndMax;
      $this->CompletionInd = $CompletionInd;
      $this->TmDOWMax = $TmDOWMax;
      $this->NumOccurMax = $NumOccurMax;
    }

    /**
     * @return boolean
     */
    public function getHoursMax()
    {
      return $this->HoursMax;
    }

    /**
     * @param boolean $HoursMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setHoursMax($HoursMax)
    {
      $this->HoursMax = $HoursMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaysMax()
    {
      return $this->DaysMax;
    }

    /**
     * @param boolean $DaysMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setDaysMax($DaysMax)
    {
      $this->DaysMax = $DaysMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMonthsMax()
    {
      return $this->MonthsMax;
    }

    /**
     * @param boolean $MonthsMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setMonthsMax($MonthsMax)
    {
      $this->MonthsMax = $MonthsMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOccurIndMax()
    {
      return $this->OccurIndMax;
    }

    /**
     * @param boolean $OccurIndMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setOccurIndMax($OccurIndMax)
    {
      $this->OccurIndMax = $OccurIndMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSameDayMax()
    {
      return $this->SameDayMax;
    }

    /**
     * @param boolean $SameDayMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setSameDayMax($SameDayMax)
    {
      $this->SameDayMax = $SameDayMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStartIndMax()
    {
      return $this->StartIndMax;
    }

    /**
     * @param boolean $StartIndMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setStartIndMax($StartIndMax)
    {
      $this->StartIndMax = $StartIndMax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCompletionInd()
    {
      return $this->CompletionInd;
    }

    /**
     * @param boolean $CompletionInd
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setCompletionInd($CompletionInd)
    {
      $this->CompletionInd = $CompletionInd;
      return $this;
    }

    /**
     * @return int
     */
    public function getTmDOWMax()
    {
      return $this->TmDOWMax;
    }

    /**
     * @param int $TmDOWMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setTmDOWMax($TmDOWMax)
    {
      $this->TmDOWMax = $TmDOWMax;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOccurMax()
    {
      return $this->NumOccurMax;
    }

    /**
     * @param int $NumOccurMax
     * @return \FilippoToso\Travelport\Util\MAXType
     */
    public function setNumOccurMax($NumOccurMax)
    {
      $this->NumOccurMax = $NumOccurMax;
      return $this;
    }

}
