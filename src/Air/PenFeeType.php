<?php

namespace FilippoToso\Travelport\Air;

class PenFeeType
{

    /**
     * @var boolean $DepRequired
     */
    public $DepRequired = null;

    /**
     * @var boolean $DepNonRef
     */
    public $DepNonRef = null;

    /**
     * @var boolean $TkNonRef
     */
    public $TkNonRef = null;

    /**
     * @var boolean $AirVFee
     */
    public $AirVFee = null;

    /**
     * @var boolean $Cancellation
     */
    public $Cancellation = null;

    /**
     * @var boolean $FailConfirmSpace
     */
    public $FailConfirmSpace = null;

    /**
     * @var boolean $ItinChg
     */
    public $ItinChg = null;

    /**
     * @var boolean $ReplaceTk
     */
    public $ReplaceTk = null;

    /**
     * @var boolean $Applicable
     */
    public $Applicable = null;

    /**
     * @var boolean $ApplicableTo
     */
    public $ApplicableTo = null;

    /**
     * @var float $Amt
     */
    public $Amt = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var string $Currency
     */
    public $Currency = null;

    /**
     * @param boolean $DepRequired
     * @param boolean $DepNonRef
     * @param boolean $TkNonRef
     * @param boolean $AirVFee
     * @param boolean $Cancellation
     * @param boolean $FailConfirmSpace
     * @param boolean $ItinChg
     * @param boolean $ReplaceTk
     * @param boolean $Applicable
     * @param boolean $ApplicableTo
     * @param float $Amt
     * @param string $Type
     * @param string $Currency
     */
    public function __construct($DepRequired = null, $DepNonRef = null, $TkNonRef = null, $AirVFee = null, $Cancellation = null, $FailConfirmSpace = null, $ItinChg = null, $ReplaceTk = null, $Applicable = null, $ApplicableTo = null, $Amt = null, $Type = null, $Currency = null)
    {
      $this->DepRequired = $DepRequired;
      $this->DepNonRef = $DepNonRef;
      $this->TkNonRef = $TkNonRef;
      $this->AirVFee = $AirVFee;
      $this->Cancellation = $Cancellation;
      $this->FailConfirmSpace = $FailConfirmSpace;
      $this->ItinChg = $ItinChg;
      $this->ReplaceTk = $ReplaceTk;
      $this->Applicable = $Applicable;
      $this->ApplicableTo = $ApplicableTo;
      $this->Amt = $Amt;
      $this->Type = $Type;
      $this->Currency = $Currency;
    }

    /**
     * @return boolean
     */
    public function getDepRequired()
    {
      return $this->DepRequired;
    }

    /**
     * @param boolean $DepRequired
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setDepRequired($DepRequired)
    {
      $this->DepRequired = $DepRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDepNonRef()
    {
      return $this->DepNonRef;
    }

    /**
     * @param boolean $DepNonRef
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setDepNonRef($DepNonRef)
    {
      $this->DepNonRef = $DepNonRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTkNonRef()
    {
      return $this->TkNonRef;
    }

    /**
     * @param boolean $TkNonRef
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setTkNonRef($TkNonRef)
    {
      $this->TkNonRef = $TkNonRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAirVFee()
    {
      return $this->AirVFee;
    }

    /**
     * @param boolean $AirVFee
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setAirVFee($AirVFee)
    {
      $this->AirVFee = $AirVFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCancellation()
    {
      return $this->Cancellation;
    }

    /**
     * @param boolean $Cancellation
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setCancellation($Cancellation)
    {
      $this->Cancellation = $Cancellation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFailConfirmSpace()
    {
      return $this->FailConfirmSpace;
    }

    /**
     * @param boolean $FailConfirmSpace
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setFailConfirmSpace($FailConfirmSpace)
    {
      $this->FailConfirmSpace = $FailConfirmSpace;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getItinChg()
    {
      return $this->ItinChg;
    }

    /**
     * @param boolean $ItinChg
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setItinChg($ItinChg)
    {
      $this->ItinChg = $ItinChg;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceTk()
    {
      return $this->ReplaceTk;
    }

    /**
     * @param boolean $ReplaceTk
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setReplaceTk($ReplaceTk)
    {
      $this->ReplaceTk = $ReplaceTk;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplicable()
    {
      return $this->Applicable;
    }

    /**
     * @param boolean $Applicable
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setApplicable($Applicable)
    {
      $this->Applicable = $Applicable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplicableTo()
    {
      return $this->ApplicableTo;
    }

    /**
     * @param boolean $ApplicableTo
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setApplicableTo($ApplicableTo)
    {
      $this->ApplicableTo = $ApplicableTo;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmt()
    {
      return $this->Amt;
    }

    /**
     * @param float $Amt
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setAmt($Amt)
    {
      $this->Amt = $Amt;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \FilippoToso\Travelport\Air\PenFeeType
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

}
