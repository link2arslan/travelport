<?php

namespace FilippoToso\Travelport\Hotel;

class GuaranteeInfo
{

    /**
     * @var DepositAmount $DepositAmount
     */
    public $DepositAmount = null;

    /**
     * @var int $DepositNights
     */
    public $DepositNights = null;

    /**
     * @var int $DepositPercent
     */
    public $DepositPercent = null;

    /**
     * @var GuaranteePaymentType $GuaranteePaymentType
     */
    public $GuaranteePaymentType = null;

    /**
     * @var \DateTime $AbsoluteDeadline
     */
    public $AbsoluteDeadline = null;

    /**
     * @var boolean $CredentialsRequired
     */
    public $CredentialsRequired = null;

    /**
     * @var string $HoldTime
     */
    public $HoldTime = null;

    /**
     * @var anonymous629 $GuaranteeType
     */
    public $GuaranteeType = null;

    /**
     * @var StringLength1to16 $OffsetTimeUnit
     */
    public $OffsetTimeUnit = null;

    /**
     * @var Numeric0to999 $OffsetUnitMultiplier
     */
    public $OffsetUnitMultiplier = null;

    /**
     * @var StringLength1to20 $OffsetDropTime
     */
    public $OffsetDropTime = null;

    /**
     * @param DepositAmount $DepositAmount
     * @param int $DepositNights
     * @param int $DepositPercent
     * @param GuaranteePaymentType $GuaranteePaymentType
     * @param \DateTime $AbsoluteDeadline
     * @param boolean $CredentialsRequired
     * @param string $HoldTime
     * @param anonymous629 $GuaranteeType
     * @param StringLength1to16 $OffsetTimeUnit
     * @param Numeric0to999 $OffsetUnitMultiplier
     * @param StringLength1to20 $OffsetDropTime
     */
    public function __construct($DepositAmount = null, $DepositNights = null, $DepositPercent = null, $GuaranteePaymentType = null, \DateTime $AbsoluteDeadline = null, $CredentialsRequired = null, $HoldTime = null, $GuaranteeType = null, $OffsetTimeUnit = null, $OffsetUnitMultiplier = null, $OffsetDropTime = null)
    {
      $this->DepositAmount = $DepositAmount;
      $this->DepositNights = $DepositNights;
      $this->DepositPercent = $DepositPercent;
      $this->GuaranteePaymentType = $GuaranteePaymentType;
      $this->AbsoluteDeadline = $AbsoluteDeadline ? $AbsoluteDeadline->format(\DateTime::ATOM) : null;
      $this->CredentialsRequired = $CredentialsRequired;
      $this->HoldTime = $HoldTime;
      $this->GuaranteeType = $GuaranteeType;
      $this->OffsetTimeUnit = $OffsetTimeUnit;
      $this->OffsetUnitMultiplier = $OffsetUnitMultiplier;
      $this->OffsetDropTime = $OffsetDropTime;
    }

    /**
     * @return DepositAmount
     */
    public function getDepositAmount()
    {
      return $this->DepositAmount;
    }

    /**
     * @param DepositAmount $DepositAmount
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setDepositAmount($DepositAmount)
    {
      $this->DepositAmount = $DepositAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getDepositNights()
    {
      return $this->DepositNights;
    }

    /**
     * @param int $DepositNights
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setDepositNights($DepositNights)
    {
      $this->DepositNights = $DepositNights;
      return $this;
    }

    /**
     * @return int
     */
    public function getDepositPercent()
    {
      return $this->DepositPercent;
    }

    /**
     * @param int $DepositPercent
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setDepositPercent($DepositPercent)
    {
      $this->DepositPercent = $DepositPercent;
      return $this;
    }

    /**
     * @return GuaranteePaymentType
     */
    public function getGuaranteePaymentType()
    {
      return $this->GuaranteePaymentType;
    }

    /**
     * @param GuaranteePaymentType $GuaranteePaymentType
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setGuaranteePaymentType($GuaranteePaymentType)
    {
      $this->GuaranteePaymentType = $GuaranteePaymentType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAbsoluteDeadline()
    {
      if ($this->AbsoluteDeadline == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AbsoluteDeadline);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AbsoluteDeadline
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setAbsoluteDeadline(\DateTime $AbsoluteDeadline)
    {
      $this->AbsoluteDeadline = $AbsoluteDeadline->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCredentialsRequired()
    {
      return $this->CredentialsRequired;
    }

    /**
     * @param boolean $CredentialsRequired
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setCredentialsRequired($CredentialsRequired)
    {
      $this->CredentialsRequired = $CredentialsRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getHoldTime()
    {
      return $this->HoldTime;
    }

    /**
     * @param string $HoldTime
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setHoldTime($HoldTime)
    {
      $this->HoldTime = $HoldTime;
      return $this;
    }

    /**
     * @return anonymous629
     */
    public function getGuaranteeType()
    {
      return $this->GuaranteeType;
    }

    /**
     * @param anonymous629 $GuaranteeType
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setGuaranteeType($GuaranteeType)
    {
      $this->GuaranteeType = $GuaranteeType;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getOffsetTimeUnit()
    {
      return $this->OffsetTimeUnit;
    }

    /**
     * @param StringLength1to16 $OffsetTimeUnit
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setOffsetTimeUnit($OffsetTimeUnit)
    {
      $this->OffsetTimeUnit = $OffsetTimeUnit;
      return $this;
    }

    /**
     * @return Numeric0to999
     */
    public function getOffsetUnitMultiplier()
    {
      return $this->OffsetUnitMultiplier;
    }

    /**
     * @param Numeric0to999 $OffsetUnitMultiplier
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setOffsetUnitMultiplier($OffsetUnitMultiplier)
    {
      $this->OffsetUnitMultiplier = $OffsetUnitMultiplier;
      return $this;
    }

    /**
     * @return StringLength1to20
     */
    public function getOffsetDropTime()
    {
      return $this->OffsetDropTime;
    }

    /**
     * @param StringLength1to20 $OffsetDropTime
     * @return \FilippoToso\Travelport\Hotel\GuaranteeInfo
     */
    public function setOffsetDropTime($OffsetDropTime)
    {
      $this->OffsetDropTime = $OffsetDropTime;
      return $this;
    }

}
