<?php

namespace FilippoToso\Travelport\Air;

class PrePayAccount
{

    /**
     * @var CreditSummary $CreditSummary
     */
    public $CreditSummary = null;

    /**
     * @var PrePayPriceInfo $PrePayPriceInfo
     */
    public $PrePayPriceInfo = null;

    /**
     * @var string $ProgramTitle
     */
    public $ProgramTitle = null;

    /**
     * @var string $CertificateNumber
     */
    public $CertificateNumber = null;

    /**
     * @var string $ProgramName
     */
    public $ProgramName = null;

    /**
     * @var date $EffectiveDate
     */
    public $EffectiveDate = null;

    /**
     * @var date $ExpireDate
     */
    public $ExpireDate = null;

    /**
     * @param CreditSummary $CreditSummary
     * @param PrePayPriceInfo $PrePayPriceInfo
     * @param string $ProgramTitle
     * @param string $CertificateNumber
     * @param string $ProgramName
     * @param date $EffectiveDate
     * @param date $ExpireDate
     */
    public function __construct($CreditSummary = null, $PrePayPriceInfo = null, $ProgramTitle = null, $CertificateNumber = null, $ProgramName = null, $EffectiveDate = null, $ExpireDate = null)
    {
      $this->CreditSummary = $CreditSummary;
      $this->PrePayPriceInfo = $PrePayPriceInfo;
      $this->ProgramTitle = $ProgramTitle;
      $this->CertificateNumber = $CertificateNumber;
      $this->ProgramName = $ProgramName;
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpireDate = $ExpireDate;
    }

    /**
     * @return CreditSummary
     */
    public function getCreditSummary()
    {
      return $this->CreditSummary;
    }

    /**
     * @param CreditSummary $CreditSummary
     * @return \FilippoToso\Travelport\Air\PrePayAccount
     */
    public function setCreditSummary($CreditSummary)
    {
      $this->CreditSummary = $CreditSummary;
      return $this;
    }

    /**
     * @return PrePayPriceInfo
     */
    public function getPrePayPriceInfo()
    {
      return $this->PrePayPriceInfo;
    }

    /**
     * @param PrePayPriceInfo $PrePayPriceInfo
     * @return \FilippoToso\Travelport\Air\PrePayAccount
     */
    public function setPrePayPriceInfo($PrePayPriceInfo)
    {
      $this->PrePayPriceInfo = $PrePayPriceInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgramTitle()
    {
      return $this->ProgramTitle;
    }

    /**
     * @param string $ProgramTitle
     * @return \FilippoToso\Travelport\Air\PrePayAccount
     */
    public function setProgramTitle($ProgramTitle)
    {
      $this->ProgramTitle = $ProgramTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getCertificateNumber()
    {
      return $this->CertificateNumber;
    }

    /**
     * @param string $CertificateNumber
     * @return \FilippoToso\Travelport\Air\PrePayAccount
     */
    public function setCertificateNumber($CertificateNumber)
    {
      $this->CertificateNumber = $CertificateNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
      return $this->ProgramName;
    }

    /**
     * @param string $ProgramName
     * @return \FilippoToso\Travelport\Air\PrePayAccount
     */
    public function setProgramName($ProgramName)
    {
      $this->ProgramName = $ProgramName;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \FilippoToso\Travelport\Air\PrePayAccount
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpireDate()
    {
      return $this->ExpireDate;
    }

    /**
     * @param date $ExpireDate
     * @return \FilippoToso\Travelport\Air\PrePayAccount
     */
    public function setExpireDate($ExpireDate)
    {
      $this->ExpireDate = $ExpireDate;
      return $this;
    }

}
