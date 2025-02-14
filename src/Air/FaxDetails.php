<?php

namespace FilippoToso\Travelport\Air;

class FaxDetails
{

    /**
     * @var PhoneNumber $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @var TermConditions $TermConditions
     */
    public $TermConditions = null;

    /**
     * @var Remark $Remark
     */
    public $Remark = null;

    /**
     * @var boolean $IncludeCoverSheet
     */
    public $IncludeCoverSheet = null;

    /**
     * @var string $To
     */
    public $To = null;

    /**
     * @var string $From
     */
    public $From = null;

    /**
     * @var string $DeptBillingCode
     */
    public $DeptBillingCode = null;

    /**
     * @var string $InvoiceNumber
     */
    public $InvoiceNumber = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param TermConditions $TermConditions
     * @param Remark $Remark
     * @param boolean $IncludeCoverSheet
     * @param string $To
     * @param string $From
     * @param string $DeptBillingCode
     * @param string $InvoiceNumber
     */
    public function __construct($PhoneNumber = null, $TermConditions = null, $Remark = null, $IncludeCoverSheet = null, $To = null, $From = null, $DeptBillingCode = null, $InvoiceNumber = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->TermConditions = $TermConditions;
      $this->Remark = $Remark;
      $this->IncludeCoverSheet = $IncludeCoverSheet;
      $this->To = $To;
      $this->From = $From;
      $this->DeptBillingCode = $DeptBillingCode;
      $this->InvoiceNumber = $InvoiceNumber;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return TermConditions
     */
    public function getTermConditions()
    {
      return $this->TermConditions;
    }

    /**
     * @param TermConditions $TermConditions
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setTermConditions($TermConditions)
    {
      $this->TermConditions = $TermConditions;
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
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCoverSheet()
    {
      return $this->IncludeCoverSheet;
    }

    /**
     * @param boolean $IncludeCoverSheet
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setIncludeCoverSheet($IncludeCoverSheet)
    {
      $this->IncludeCoverSheet = $IncludeCoverSheet;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param string $To
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param string $From
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeptBillingCode()
    {
      return $this->DeptBillingCode;
    }

    /**
     * @param string $DeptBillingCode
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setDeptBillingCode($DeptBillingCode)
    {
      $this->DeptBillingCode = $DeptBillingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \FilippoToso\Travelport\Air\FaxDetails
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

}
