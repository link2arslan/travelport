<?php

namespace FilippoToso\Travelport\GDSQueue;

class BaseReservation
{

    /**
     * @var AccountingRemark $AccountingRemark
     */
    public $AccountingRemark = null;

    /**
     * @var GeneralRemark $GeneralRemark
     */
    public $GeneralRemark = null;

    /**
     * @var Restriction $Restriction
     */
    public $Restriction = null;

    /**
     * @var PassiveInfo $PassiveInfo
     */
    public $PassiveInfo = null;

    /**
     * @var typeLocatorCode $LocatorCode
     */
    public $LocatorCode = null;

    /**
     * @var string $CreateDate
     */
    public $CreateDate = null;

    /**
     * @var string $ModifiedDate
     */
    public $ModifiedDate = null;

    /**
     * @var string $CustomerNumber
     */
    public $CustomerNumber = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null)
    {
      $this->AccountingRemark = $AccountingRemark;
      $this->GeneralRemark = $GeneralRemark;
      $this->Restriction = $Restriction;
      $this->PassiveInfo = $PassiveInfo;
      $this->LocatorCode = $LocatorCode;
      $this->CreateDate = $CreateDate;
      $this->ModifiedDate = $ModifiedDate;
      $this->CustomerNumber = $CustomerNumber;
    }

    /**
     * @return AccountingRemark
     */
    public function getAccountingRemark()
    {
      return $this->AccountingRemark;
    }

    /**
     * @param AccountingRemark $AccountingRemark
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setAccountingRemark($AccountingRemark)
    {
      $this->AccountingRemark = $AccountingRemark;
      return $this;
    }

    /**
     * @return GeneralRemark
     */
    public function getGeneralRemark()
    {
      return $this->GeneralRemark;
    }

    /**
     * @param GeneralRemark $GeneralRemark
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setGeneralRemark($GeneralRemark)
    {
      $this->GeneralRemark = $GeneralRemark;
      return $this;
    }

    /**
     * @return Restriction
     */
    public function getRestriction()
    {
      return $this->Restriction;
    }

    /**
     * @param Restriction $Restriction
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setRestriction($Restriction)
    {
      $this->Restriction = $Restriction;
      return $this;
    }

    /**
     * @return PassiveInfo
     */
    public function getPassiveInfo()
    {
      return $this->PassiveInfo;
    }

    /**
     * @param PassiveInfo $PassiveInfo
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setPassiveInfo($PassiveInfo)
    {
      $this->PassiveInfo = $PassiveInfo;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreateDate()
    {
      return $this->CreateDate;
    }

    /**
     * @param string $CreateDate
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setCreateDate($CreateDate)
    {
      $this->CreateDate = $CreateDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param string $ModifiedDate
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
      return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return \FilippoToso\Travelport\GDSQueue\BaseReservation
     */
    public function setCustomerNumber($CustomerNumber)
    {
      $this->CustomerNumber = $CustomerNumber;
      return $this;
    }

}
