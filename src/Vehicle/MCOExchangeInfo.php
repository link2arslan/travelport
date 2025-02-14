<?php

namespace FilippoToso\Travelport\Vehicle;

class MCOExchangeInfo
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var ExchangedCoupon $ExchangedCoupon
     */
    public $ExchangedCoupon = null;

    /**
     * @var typeTicketNumber $OriginalTicketNumber
     */
    public $OriginalTicketNumber = null;

    /**
     * @var typeCity $OriginalCityCode
     */
    public $OriginalCityCode = null;

    /**
     * @var typeDate $OriginalTicketDate
     */
    public $OriginalTicketDate = null;

    /**
     * @var typeIATA $IATACode
     */
    public $IATACode = null;

    /**
     * @param FormOfPayment $FormOfPayment
     * @param ExchangedCoupon $ExchangedCoupon
     * @param typeTicketNumber $OriginalTicketNumber
     * @param typeCity $OriginalCityCode
     * @param typeDate $OriginalTicketDate
     * @param typeIATA $IATACode
     */
    public function __construct($FormOfPayment = null, $ExchangedCoupon = null, $OriginalTicketNumber = null, $OriginalCityCode = null, $OriginalTicketDate = null, $IATACode = null)
    {
      $this->FormOfPayment = $FormOfPayment;
      $this->ExchangedCoupon = $ExchangedCoupon;
      $this->OriginalTicketNumber = $OriginalTicketNumber;
      $this->OriginalCityCode = $OriginalCityCode;
      $this->OriginalTicketDate = $OriginalTicketDate;
      $this->IATACode = $IATACode;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Vehicle\MCOExchangeInfo
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return ExchangedCoupon
     */
    public function getExchangedCoupon()
    {
      return $this->ExchangedCoupon;
    }

    /**
     * @param ExchangedCoupon $ExchangedCoupon
     * @return \FilippoToso\Travelport\Vehicle\MCOExchangeInfo
     */
    public function setExchangedCoupon($ExchangedCoupon)
    {
      $this->ExchangedCoupon = $ExchangedCoupon;
      return $this;
    }

    /**
     * @return typeTicketNumber
     */
    public function getOriginalTicketNumber()
    {
      return $this->OriginalTicketNumber;
    }

    /**
     * @param typeTicketNumber $OriginalTicketNumber
     * @return \FilippoToso\Travelport\Vehicle\MCOExchangeInfo
     */
    public function setOriginalTicketNumber($OriginalTicketNumber)
    {
      $this->OriginalTicketNumber = $OriginalTicketNumber;
      return $this;
    }

    /**
     * @return typeCity
     */
    public function getOriginalCityCode()
    {
      return $this->OriginalCityCode;
    }

    /**
     * @param typeCity $OriginalCityCode
     * @return \FilippoToso\Travelport\Vehicle\MCOExchangeInfo
     */
    public function setOriginalCityCode($OriginalCityCode)
    {
      $this->OriginalCityCode = $OriginalCityCode;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getOriginalTicketDate()
    {
      return $this->OriginalTicketDate;
    }

    /**
     * @param typeDate $OriginalTicketDate
     * @return \FilippoToso\Travelport\Vehicle\MCOExchangeInfo
     */
    public function setOriginalTicketDate($OriginalTicketDate)
    {
      $this->OriginalTicketDate = $OriginalTicketDate;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getIATACode()
    {
      return $this->IATACode;
    }

    /**
     * @param typeIATA $IATACode
     * @return \FilippoToso\Travelport\Vehicle\MCOExchangeInfo
     */
    public function setIATACode($IATACode)
    {
      $this->IATACode = $IATACode;
      return $this;
    }

}
