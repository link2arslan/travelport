<?php

namespace FilippoToso\Travelport\Util;

class PricingDetails
{

    /**
     * @var string[] $AdvisoryMessage
     */
    public $AdvisoryMessage = null;

    /**
     * @var string[] $EndorsementText
     */
    public $EndorsementText = null;

    /**
     * @var string $WaiverText
     */
    public $WaiverText = null;

    /**
     * @var boolean $LowFarePricing
     */
    public $LowFarePricing = null;

    /**
     * @var boolean $LowFareFound
     */
    public $LowFareFound = null;

    /**
     * @var boolean $PenaltyApplies
     */
    public $PenaltyApplies = null;

    /**
     * @var boolean $DiscountApplies
     */
    public $DiscountApplies = null;

    /**
     * @var typeItineraryCode $ItineraryType
     */
    public $ItineraryType = null;

    /**
     * @var typeCarrier $ValidatingVendorCode
     */
    public $ValidatingVendorCode = null;

    /**
     * @var date $ForTicketingOnDate
     */
    public $ForTicketingOnDate = null;

    /**
     * @var date $LastDateToTicket
     */
    public $LastDateToTicket = null;

    /**
     * @var typeFormOfRefund $FormOfRefund
     */
    public $FormOfRefund = null;

    /**
     * @var string $AccountCode
     */
    public $AccountCode = null;

    /**
     * @var float $BankersSellingRate
     */
    public $BankersSellingRate = null;

    /**
     * @var typePricingType $PricingType
     */
    public $PricingType = null;

    /**
     * @var float $ConversionRate
     */
    public $ConversionRate = null;

    /**
     * @var float $RateOfExchange
     */
    public $RateOfExchange = null;

    /**
     * @var typeCurrency $OriginalTicketCurrency
     */
    public $OriginalTicketCurrency = null;

    /**
     * @param boolean $LowFarePricing
     * @param boolean $LowFareFound
     * @param boolean $PenaltyApplies
     * @param boolean $DiscountApplies
     * @param typeItineraryCode $ItineraryType
     * @param typeCarrier $ValidatingVendorCode
     * @param date $ForTicketingOnDate
     * @param date $LastDateToTicket
     * @param typeFormOfRefund $FormOfRefund
     * @param string $AccountCode
     * @param float $BankersSellingRate
     * @param typePricingType $PricingType
     * @param float $ConversionRate
     * @param float $RateOfExchange
     * @param typeCurrency $OriginalTicketCurrency
     */
    public function __construct($LowFarePricing = null, $LowFareFound = null, $PenaltyApplies = null, $DiscountApplies = null, $ItineraryType = null, $ValidatingVendorCode = null, $ForTicketingOnDate = null, $LastDateToTicket = null, $FormOfRefund = null, $AccountCode = null, $BankersSellingRate = null, $PricingType = null, $ConversionRate = null, $RateOfExchange = null, $OriginalTicketCurrency = null)
    {
      $this->LowFarePricing = $LowFarePricing;
      $this->LowFareFound = $LowFareFound;
      $this->PenaltyApplies = $PenaltyApplies;
      $this->DiscountApplies = $DiscountApplies;
      $this->ItineraryType = $ItineraryType;
      $this->ValidatingVendorCode = $ValidatingVendorCode;
      $this->ForTicketingOnDate = $ForTicketingOnDate;
      $this->LastDateToTicket = $LastDateToTicket;
      $this->FormOfRefund = $FormOfRefund;
      $this->AccountCode = $AccountCode;
      $this->BankersSellingRate = $BankersSellingRate;
      $this->PricingType = $PricingType;
      $this->ConversionRate = $ConversionRate;
      $this->RateOfExchange = $RateOfExchange;
      $this->OriginalTicketCurrency = $OriginalTicketCurrency;
    }

    /**
     * @return string[]
     */
    public function getAdvisoryMessage()
    {
      return $this->AdvisoryMessage;
    }

    /**
     * @param string[] $AdvisoryMessage
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setAdvisoryMessage(array $AdvisoryMessage = null)
    {
      $this->AdvisoryMessage = $AdvisoryMessage;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getEndorsementText()
    {
      return $this->EndorsementText;
    }

    /**
     * @param string[] $EndorsementText
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setEndorsementText(array $EndorsementText = null)
    {
      $this->EndorsementText = $EndorsementText;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaiverText()
    {
      return $this->WaiverText;
    }

    /**
     * @param string $WaiverText
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setWaiverText($WaiverText)
    {
      $this->WaiverText = $WaiverText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLowFarePricing()
    {
      return $this->LowFarePricing;
    }

    /**
     * @param boolean $LowFarePricing
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setLowFarePricing($LowFarePricing)
    {
      $this->LowFarePricing = $LowFarePricing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLowFareFound()
    {
      return $this->LowFareFound;
    }

    /**
     * @param boolean $LowFareFound
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setLowFareFound($LowFareFound)
    {
      $this->LowFareFound = $LowFareFound;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPenaltyApplies()
    {
      return $this->PenaltyApplies;
    }

    /**
     * @param boolean $PenaltyApplies
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setPenaltyApplies($PenaltyApplies)
    {
      $this->PenaltyApplies = $PenaltyApplies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscountApplies()
    {
      return $this->DiscountApplies;
    }

    /**
     * @param boolean $DiscountApplies
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setDiscountApplies($DiscountApplies)
    {
      $this->DiscountApplies = $DiscountApplies;
      return $this;
    }

    /**
     * @return typeItineraryCode
     */
    public function getItineraryType()
    {
      return $this->ItineraryType;
    }

    /**
     * @param typeItineraryCode $ItineraryType
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setItineraryType($ItineraryType)
    {
      $this->ItineraryType = $ItineraryType;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getValidatingVendorCode()
    {
      return $this->ValidatingVendorCode;
    }

    /**
     * @param typeCarrier $ValidatingVendorCode
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setValidatingVendorCode($ValidatingVendorCode)
    {
      $this->ValidatingVendorCode = $ValidatingVendorCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getForTicketingOnDate()
    {
      return $this->ForTicketingOnDate;
    }

    /**
     * @param date $ForTicketingOnDate
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setForTicketingOnDate($ForTicketingOnDate)
    {
      $this->ForTicketingOnDate = $ForTicketingOnDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getLastDateToTicket()
    {
      return $this->LastDateToTicket;
    }

    /**
     * @param date $LastDateToTicket
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setLastDateToTicket($LastDateToTicket)
    {
      $this->LastDateToTicket = $LastDateToTicket;
      return $this;
    }

    /**
     * @return typeFormOfRefund
     */
    public function getFormOfRefund()
    {
      return $this->FormOfRefund;
    }

    /**
     * @param typeFormOfRefund $FormOfRefund
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setFormOfRefund($FormOfRefund)
    {
      $this->FormOfRefund = $FormOfRefund;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getBankersSellingRate()
    {
      return $this->BankersSellingRate;
    }

    /**
     * @param float $BankersSellingRate
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setBankersSellingRate($BankersSellingRate)
    {
      $this->BankersSellingRate = $BankersSellingRate;
      return $this;
    }

    /**
     * @return typePricingType
     */
    public function getPricingType()
    {
      return $this->PricingType;
    }

    /**
     * @param typePricingType $PricingType
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setPricingType($PricingType)
    {
      $this->PricingType = $PricingType;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate()
    {
      return $this->ConversionRate;
    }

    /**
     * @param float $ConversionRate
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setConversionRate($ConversionRate)
    {
      $this->ConversionRate = $ConversionRate;
      return $this;
    }

    /**
     * @return float
     */
    public function getRateOfExchange()
    {
      return $this->RateOfExchange;
    }

    /**
     * @param float $RateOfExchange
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setRateOfExchange($RateOfExchange)
    {
      $this->RateOfExchange = $RateOfExchange;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getOriginalTicketCurrency()
    {
      return $this->OriginalTicketCurrency;
    }

    /**
     * @param typeCurrency $OriginalTicketCurrency
     * @return \FilippoToso\Travelport\Util\PricingDetails
     */
    public function setOriginalTicketCurrency($OriginalTicketCurrency)
    {
      $this->OriginalTicketCurrency = $OriginalTicketCurrency;
      return $this;
    }

}
