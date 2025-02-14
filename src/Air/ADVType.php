<?php

namespace FilippoToso\Travelport\Air;

class ADVType
{

    /**
     * @var boolean $AdvRsvnOnlyIfTk
     */
    public $AdvRsvnOnlyIfTk = null;

    /**
     * @var boolean $AdvRsvnAnyTm
     */
    public $AdvRsvnAnyTm = null;

    /**
     * @var boolean $AdvRsvnHrs
     */
    public $AdvRsvnHrs = null;

    /**
     * @var boolean $AdvRsvnDays
     */
    public $AdvRsvnDays = null;

    /**
     * @var boolean $AdvRsvnMonths
     */
    public $AdvRsvnMonths = null;

    /**
     * @var boolean $AdvRsvnEarliestTm
     */
    public $AdvRsvnEarliestTm = null;

    /**
     * @var boolean $AdvRsvnLatestTm
     */
    public $AdvRsvnLatestTm = null;

    /**
     * @var boolean $AdvRsvnWaived
     */
    public $AdvRsvnWaived = null;

    /**
     * @var boolean $AdvRsvnDataExists
     */
    public $AdvRsvnDataExists = null;

    /**
     * @var boolean $AdvRsvnEndItem
     */
    public $AdvRsvnEndItem = null;

    /**
     * @var boolean $AdvTkEarliestTm
     */
    public $AdvTkEarliestTm = null;

    /**
     * @var boolean $AdvTkLatestTm
     */
    public $AdvTkLatestTm = null;

    /**
     * @var boolean $AdvTkRsvnHrs
     */
    public $AdvTkRsvnHrs = null;

    /**
     * @var boolean $AdvTkRsvnDays
     */
    public $AdvTkRsvnDays = null;

    /**
     * @var boolean $AdvTkRsvnMonths
     */
    public $AdvTkRsvnMonths = null;

    /**
     * @var boolean $AdvTkStartHrs
     */
    public $AdvTkStartHrs = null;

    /**
     * @var boolean $AdvTkStartDays
     */
    public $AdvTkStartDays = null;

    /**
     * @var boolean $AdvTkStartMonths
     */
    public $AdvTkStartMonths = null;

    /**
     * @var boolean $AdvTkWaived
     */
    public $AdvTkWaived = null;

    /**
     * @var boolean $AdvTkAnyTm
     */
    public $AdvTkAnyTm = null;

    /**
     * @var boolean $AdvTkEndItem
     */
    public $AdvTkEndItem = null;

    /**
     * @var int $AdvRsvnTm
     */
    public $AdvRsvnTm = null;

    /**
     * @var int $AdvTkRsvnTm
     */
    public $AdvTkRsvnTm = null;

    /**
     * @var int $AdvTkStartTm
     */
    public $AdvTkStartTm = null;

    /**
     * @var boolean $EarliestRsvnDtPresent
     */
    public $EarliestRsvnDtPresent = null;

    /**
     * @var boolean $EarliestTkDtPresent
     */
    public $EarliestTkDtPresent = null;

    /**
     * @var boolean $LatestRsvnDtPresent
     */
    public $LatestRsvnDtPresent = null;

    /**
     * @var boolean $LatestTkDtPresent
     */
    public $LatestTkDtPresent = null;

    /**
     * @var date $EarliestRsvnDt
     */
    public $EarliestRsvnDt = null;

    /**
     * @var date $EarliestTkDt
     */
    public $EarliestTkDt = null;

    /**
     * @var date $LatestRsvnDt
     */
    public $LatestRsvnDt = null;

    /**
     * @var date $LatestTkDt
     */
    public $LatestTkDt = null;

    /**
     * @param boolean $AdvRsvnOnlyIfTk
     * @param boolean $AdvRsvnAnyTm
     * @param boolean $AdvRsvnHrs
     * @param boolean $AdvRsvnDays
     * @param boolean $AdvRsvnMonths
     * @param boolean $AdvRsvnEarliestTm
     * @param boolean $AdvRsvnLatestTm
     * @param boolean $AdvRsvnWaived
     * @param boolean $AdvRsvnDataExists
     * @param boolean $AdvRsvnEndItem
     * @param boolean $AdvTkEarliestTm
     * @param boolean $AdvTkLatestTm
     * @param boolean $AdvTkRsvnHrs
     * @param boolean $AdvTkRsvnDays
     * @param boolean $AdvTkRsvnMonths
     * @param boolean $AdvTkStartHrs
     * @param boolean $AdvTkStartDays
     * @param boolean $AdvTkStartMonths
     * @param boolean $AdvTkWaived
     * @param boolean $AdvTkAnyTm
     * @param boolean $AdvTkEndItem
     * @param int $AdvRsvnTm
     * @param int $AdvTkRsvnTm
     * @param int $AdvTkStartTm
     * @param boolean $EarliestRsvnDtPresent
     * @param boolean $EarliestTkDtPresent
     * @param boolean $LatestRsvnDtPresent
     * @param boolean $LatestTkDtPresent
     * @param date $EarliestRsvnDt
     * @param date $EarliestTkDt
     * @param date $LatestRsvnDt
     * @param date $LatestTkDt
     */
    public function __construct($AdvRsvnOnlyIfTk = null, $AdvRsvnAnyTm = null, $AdvRsvnHrs = null, $AdvRsvnDays = null, $AdvRsvnMonths = null, $AdvRsvnEarliestTm = null, $AdvRsvnLatestTm = null, $AdvRsvnWaived = null, $AdvRsvnDataExists = null, $AdvRsvnEndItem = null, $AdvTkEarliestTm = null, $AdvTkLatestTm = null, $AdvTkRsvnHrs = null, $AdvTkRsvnDays = null, $AdvTkRsvnMonths = null, $AdvTkStartHrs = null, $AdvTkStartDays = null, $AdvTkStartMonths = null, $AdvTkWaived = null, $AdvTkAnyTm = null, $AdvTkEndItem = null, $AdvRsvnTm = null, $AdvTkRsvnTm = null, $AdvTkStartTm = null, $EarliestRsvnDtPresent = null, $EarliestTkDtPresent = null, $LatestRsvnDtPresent = null, $LatestTkDtPresent = null, $EarliestRsvnDt = null, $EarliestTkDt = null, $LatestRsvnDt = null, $LatestTkDt = null)
    {
      $this->AdvRsvnOnlyIfTk = $AdvRsvnOnlyIfTk;
      $this->AdvRsvnAnyTm = $AdvRsvnAnyTm;
      $this->AdvRsvnHrs = $AdvRsvnHrs;
      $this->AdvRsvnDays = $AdvRsvnDays;
      $this->AdvRsvnMonths = $AdvRsvnMonths;
      $this->AdvRsvnEarliestTm = $AdvRsvnEarliestTm;
      $this->AdvRsvnLatestTm = $AdvRsvnLatestTm;
      $this->AdvRsvnWaived = $AdvRsvnWaived;
      $this->AdvRsvnDataExists = $AdvRsvnDataExists;
      $this->AdvRsvnEndItem = $AdvRsvnEndItem;
      $this->AdvTkEarliestTm = $AdvTkEarliestTm;
      $this->AdvTkLatestTm = $AdvTkLatestTm;
      $this->AdvTkRsvnHrs = $AdvTkRsvnHrs;
      $this->AdvTkRsvnDays = $AdvTkRsvnDays;
      $this->AdvTkRsvnMonths = $AdvTkRsvnMonths;
      $this->AdvTkStartHrs = $AdvTkStartHrs;
      $this->AdvTkStartDays = $AdvTkStartDays;
      $this->AdvTkStartMonths = $AdvTkStartMonths;
      $this->AdvTkWaived = $AdvTkWaived;
      $this->AdvTkAnyTm = $AdvTkAnyTm;
      $this->AdvTkEndItem = $AdvTkEndItem;
      $this->AdvRsvnTm = $AdvRsvnTm;
      $this->AdvTkRsvnTm = $AdvTkRsvnTm;
      $this->AdvTkStartTm = $AdvTkStartTm;
      $this->EarliestRsvnDtPresent = $EarliestRsvnDtPresent;
      $this->EarliestTkDtPresent = $EarliestTkDtPresent;
      $this->LatestRsvnDtPresent = $LatestRsvnDtPresent;
      $this->LatestTkDtPresent = $LatestTkDtPresent;
      $this->EarliestRsvnDt = $EarliestRsvnDt;
      $this->EarliestTkDt = $EarliestTkDt;
      $this->LatestRsvnDt = $LatestRsvnDt;
      $this->LatestTkDt = $LatestTkDt;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnOnlyIfTk()
    {
      return $this->AdvRsvnOnlyIfTk;
    }

    /**
     * @param boolean $AdvRsvnOnlyIfTk
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnOnlyIfTk($AdvRsvnOnlyIfTk)
    {
      $this->AdvRsvnOnlyIfTk = $AdvRsvnOnlyIfTk;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnAnyTm()
    {
      return $this->AdvRsvnAnyTm;
    }

    /**
     * @param boolean $AdvRsvnAnyTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnAnyTm($AdvRsvnAnyTm)
    {
      $this->AdvRsvnAnyTm = $AdvRsvnAnyTm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnHrs()
    {
      return $this->AdvRsvnHrs;
    }

    /**
     * @param boolean $AdvRsvnHrs
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnHrs($AdvRsvnHrs)
    {
      $this->AdvRsvnHrs = $AdvRsvnHrs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnDays()
    {
      return $this->AdvRsvnDays;
    }

    /**
     * @param boolean $AdvRsvnDays
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnDays($AdvRsvnDays)
    {
      $this->AdvRsvnDays = $AdvRsvnDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnMonths()
    {
      return $this->AdvRsvnMonths;
    }

    /**
     * @param boolean $AdvRsvnMonths
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnMonths($AdvRsvnMonths)
    {
      $this->AdvRsvnMonths = $AdvRsvnMonths;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnEarliestTm()
    {
      return $this->AdvRsvnEarliestTm;
    }

    /**
     * @param boolean $AdvRsvnEarliestTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnEarliestTm($AdvRsvnEarliestTm)
    {
      $this->AdvRsvnEarliestTm = $AdvRsvnEarliestTm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnLatestTm()
    {
      return $this->AdvRsvnLatestTm;
    }

    /**
     * @param boolean $AdvRsvnLatestTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnLatestTm($AdvRsvnLatestTm)
    {
      $this->AdvRsvnLatestTm = $AdvRsvnLatestTm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnWaived()
    {
      return $this->AdvRsvnWaived;
    }

    /**
     * @param boolean $AdvRsvnWaived
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnWaived($AdvRsvnWaived)
    {
      $this->AdvRsvnWaived = $AdvRsvnWaived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnDataExists()
    {
      return $this->AdvRsvnDataExists;
    }

    /**
     * @param boolean $AdvRsvnDataExists
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnDataExists($AdvRsvnDataExists)
    {
      $this->AdvRsvnDataExists = $AdvRsvnDataExists;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvRsvnEndItem()
    {
      return $this->AdvRsvnEndItem;
    }

    /**
     * @param boolean $AdvRsvnEndItem
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnEndItem($AdvRsvnEndItem)
    {
      $this->AdvRsvnEndItem = $AdvRsvnEndItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkEarliestTm()
    {
      return $this->AdvTkEarliestTm;
    }

    /**
     * @param boolean $AdvTkEarliestTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkEarliestTm($AdvTkEarliestTm)
    {
      $this->AdvTkEarliestTm = $AdvTkEarliestTm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkLatestTm()
    {
      return $this->AdvTkLatestTm;
    }

    /**
     * @param boolean $AdvTkLatestTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkLatestTm($AdvTkLatestTm)
    {
      $this->AdvTkLatestTm = $AdvTkLatestTm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkRsvnHrs()
    {
      return $this->AdvTkRsvnHrs;
    }

    /**
     * @param boolean $AdvTkRsvnHrs
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkRsvnHrs($AdvTkRsvnHrs)
    {
      $this->AdvTkRsvnHrs = $AdvTkRsvnHrs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkRsvnDays()
    {
      return $this->AdvTkRsvnDays;
    }

    /**
     * @param boolean $AdvTkRsvnDays
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkRsvnDays($AdvTkRsvnDays)
    {
      $this->AdvTkRsvnDays = $AdvTkRsvnDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkRsvnMonths()
    {
      return $this->AdvTkRsvnMonths;
    }

    /**
     * @param boolean $AdvTkRsvnMonths
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkRsvnMonths($AdvTkRsvnMonths)
    {
      $this->AdvTkRsvnMonths = $AdvTkRsvnMonths;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkStartHrs()
    {
      return $this->AdvTkStartHrs;
    }

    /**
     * @param boolean $AdvTkStartHrs
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkStartHrs($AdvTkStartHrs)
    {
      $this->AdvTkStartHrs = $AdvTkStartHrs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkStartDays()
    {
      return $this->AdvTkStartDays;
    }

    /**
     * @param boolean $AdvTkStartDays
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkStartDays($AdvTkStartDays)
    {
      $this->AdvTkStartDays = $AdvTkStartDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkStartMonths()
    {
      return $this->AdvTkStartMonths;
    }

    /**
     * @param boolean $AdvTkStartMonths
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkStartMonths($AdvTkStartMonths)
    {
      $this->AdvTkStartMonths = $AdvTkStartMonths;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkWaived()
    {
      return $this->AdvTkWaived;
    }

    /**
     * @param boolean $AdvTkWaived
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkWaived($AdvTkWaived)
    {
      $this->AdvTkWaived = $AdvTkWaived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkAnyTm()
    {
      return $this->AdvTkAnyTm;
    }

    /**
     * @param boolean $AdvTkAnyTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkAnyTm($AdvTkAnyTm)
    {
      $this->AdvTkAnyTm = $AdvTkAnyTm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvTkEndItem()
    {
      return $this->AdvTkEndItem;
    }

    /**
     * @param boolean $AdvTkEndItem
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkEndItem($AdvTkEndItem)
    {
      $this->AdvTkEndItem = $AdvTkEndItem;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvRsvnTm()
    {
      return $this->AdvRsvnTm;
    }

    /**
     * @param int $AdvRsvnTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvRsvnTm($AdvRsvnTm)
    {
      $this->AdvRsvnTm = $AdvRsvnTm;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvTkRsvnTm()
    {
      return $this->AdvTkRsvnTm;
    }

    /**
     * @param int $AdvTkRsvnTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkRsvnTm($AdvTkRsvnTm)
    {
      $this->AdvTkRsvnTm = $AdvTkRsvnTm;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvTkStartTm()
    {
      return $this->AdvTkStartTm;
    }

    /**
     * @param int $AdvTkStartTm
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setAdvTkStartTm($AdvTkStartTm)
    {
      $this->AdvTkStartTm = $AdvTkStartTm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEarliestRsvnDtPresent()
    {
      return $this->EarliestRsvnDtPresent;
    }

    /**
     * @param boolean $EarliestRsvnDtPresent
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setEarliestRsvnDtPresent($EarliestRsvnDtPresent)
    {
      $this->EarliestRsvnDtPresent = $EarliestRsvnDtPresent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEarliestTkDtPresent()
    {
      return $this->EarliestTkDtPresent;
    }

    /**
     * @param boolean $EarliestTkDtPresent
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setEarliestTkDtPresent($EarliestTkDtPresent)
    {
      $this->EarliestTkDtPresent = $EarliestTkDtPresent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLatestRsvnDtPresent()
    {
      return $this->LatestRsvnDtPresent;
    }

    /**
     * @param boolean $LatestRsvnDtPresent
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setLatestRsvnDtPresent($LatestRsvnDtPresent)
    {
      $this->LatestRsvnDtPresent = $LatestRsvnDtPresent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLatestTkDtPresent()
    {
      return $this->LatestTkDtPresent;
    }

    /**
     * @param boolean $LatestTkDtPresent
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setLatestTkDtPresent($LatestTkDtPresent)
    {
      $this->LatestTkDtPresent = $LatestTkDtPresent;
      return $this;
    }

    /**
     * @return date
     */
    public function getEarliestRsvnDt()
    {
      return $this->EarliestRsvnDt;
    }

    /**
     * @param date $EarliestRsvnDt
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setEarliestRsvnDt($EarliestRsvnDt)
    {
      $this->EarliestRsvnDt = $EarliestRsvnDt;
      return $this;
    }

    /**
     * @return date
     */
    public function getEarliestTkDt()
    {
      return $this->EarliestTkDt;
    }

    /**
     * @param date $EarliestTkDt
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setEarliestTkDt($EarliestTkDt)
    {
      $this->EarliestTkDt = $EarliestTkDt;
      return $this;
    }

    /**
     * @return date
     */
    public function getLatestRsvnDt()
    {
      return $this->LatestRsvnDt;
    }

    /**
     * @param date $LatestRsvnDt
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setLatestRsvnDt($LatestRsvnDt)
    {
      $this->LatestRsvnDt = $LatestRsvnDt;
      return $this;
    }

    /**
     * @return date
     */
    public function getLatestTkDt()
    {
      return $this->LatestTkDt;
    }

    /**
     * @param date $LatestTkDt
     * @return \FilippoToso\Travelport\Air\ADVType
     */
    public function setLatestTkDt($LatestTkDt)
    {
      $this->LatestTkDt = $LatestTkDt;
      return $this;
    }

}
