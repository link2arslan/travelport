<?php

namespace FilippoToso\Travelport\Util;

class DaysOfWeekRestriction
{

    /**
     * @var boolean $RestrictionExistsInd
     */
    public $RestrictionExistsInd = null;

    /**
     * @var string $Application
     */
    public $Application = null;

    /**
     * @var boolean $IncludeExcludeUseInd
     */
    public $IncludeExcludeUseInd = null;

    /**
     * @var boolean $Mon
     */
    public $Mon = null;

    /**
     * @var boolean $Tue
     */
    public $Tue = null;

    /**
     * @var boolean $Wed
     */
    public $Wed = null;

    /**
     * @var boolean $Thu
     */
    public $Thu = null;

    /**
     * @var boolean $Fri
     */
    public $Fri = null;

    /**
     * @var boolean $Sat
     */
    public $Sat = null;

    /**
     * @var boolean $Sun
     */
    public $Sun = null;

    /**
     * @param boolean $RestrictionExistsInd
     * @param string $Application
     * @param boolean $IncludeExcludeUseInd
     * @param boolean $Mon
     * @param boolean $Tue
     * @param boolean $Wed
     * @param boolean $Thu
     * @param boolean $Fri
     * @param boolean $Sat
     * @param boolean $Sun
     */
    public function __construct($RestrictionExistsInd = null, $Application = null, $IncludeExcludeUseInd = null, $Mon = null, $Tue = null, $Wed = null, $Thu = null, $Fri = null, $Sat = null, $Sun = null)
    {
      $this->RestrictionExistsInd = $RestrictionExistsInd;
      $this->Application = $Application;
      $this->IncludeExcludeUseInd = $IncludeExcludeUseInd;
      $this->Mon = $Mon;
      $this->Tue = $Tue;
      $this->Wed = $Wed;
      $this->Thu = $Thu;
      $this->Fri = $Fri;
      $this->Sat = $Sat;
      $this->Sun = $Sun;
    }

    /**
     * @return boolean
     */
    public function getRestrictionExistsInd()
    {
      return $this->RestrictionExistsInd;
    }

    /**
     * @param boolean $RestrictionExistsInd
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setRestrictionExistsInd($RestrictionExistsInd)
    {
      $this->RestrictionExistsInd = $RestrictionExistsInd;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
      return $this->Application;
    }

    /**
     * @param string $Application
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setApplication($Application)
    {
      $this->Application = $Application;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeExcludeUseInd()
    {
      return $this->IncludeExcludeUseInd;
    }

    /**
     * @param boolean $IncludeExcludeUseInd
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setIncludeExcludeUseInd($IncludeExcludeUseInd)
    {
      $this->IncludeExcludeUseInd = $IncludeExcludeUseInd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMon()
    {
      return $this->Mon;
    }

    /**
     * @param boolean $Mon
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setMon($Mon)
    {
      $this->Mon = $Mon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTue()
    {
      return $this->Tue;
    }

    /**
     * @param boolean $Tue
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setTue($Tue)
    {
      $this->Tue = $Tue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWed()
    {
      return $this->Wed;
    }

    /**
     * @param boolean $Wed
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setWed($Wed)
    {
      $this->Wed = $Wed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThu()
    {
      return $this->Thu;
    }

    /**
     * @param boolean $Thu
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setThu($Thu)
    {
      $this->Thu = $Thu;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFri()
    {
      return $this->Fri;
    }

    /**
     * @param boolean $Fri
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setFri($Fri)
    {
      $this->Fri = $Fri;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSat()
    {
      return $this->Sat;
    }

    /**
     * @param boolean $Sat
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setSat($Sat)
    {
      $this->Sat = $Sat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSun()
    {
      return $this->Sun;
    }

    /**
     * @param boolean $Sun
     * @return \FilippoToso\Travelport\Util\DaysOfWeekRestriction
     */
    public function setSun($Sun)
    {
      $this->Sun = $Sun;
      return $this;
    }

}
