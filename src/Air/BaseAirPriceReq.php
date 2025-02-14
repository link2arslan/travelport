<?php

namespace FilippoToso\Travelport\Air;

class BaseAirPriceReq extends BaseCoreReq
{

    /**
     * @var AirItinerary $AirItinerary
     */
    public $AirItinerary = null;

    /**
     * @var AirPricingModifiers $AirPricingModifiers
     */
    public $AirPricingModifiers = null;

    /**
     * @var SearchPassenger $SearchPassenger
     */
    public $SearchPassenger = null;

    /**
     * @var AirPricingCommand $AirPricingCommand
     */
    public $AirPricingCommand = null;

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    public $AirReservationLocatorCode = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    public $OptionalServices = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var PCC $PCC
     */
    public $PCC = null;

    /**
     * @var SSR $SSR
     */
    public $SSR = null;

    /**
     * @var string $CheckOBFees
     */
    public $CheckOBFees = null;

    /**
     * @var typeFareRuleType $FareRuleType
     */
    public $FareRuleType = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var date $TicketDate
     */
    public $TicketDate = null;

    /**
     * @var boolean $CheckFlightDetails
     */
    public $CheckFlightDetails = null;

    /**
     * @var boolean $ReturnMM
     */
    public $ReturnMM = null;

    /**
     * @var anonymous1147 $NSCC
     */
    public $NSCC = null;

    /**
     * @var boolean $SplitPricing
     */
    public $SplitPricing = null;

    /**
     * @var boolean $MostRestrictivePenalties
     */
    public $MostRestrictivePenalties = null;

    /**
     * @var string $PricingPreference
     */
    public $PricingPreference = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param AirItinerary $AirItinerary
     * @param AirPricingModifiers $AirPricingModifiers
     * @param SearchPassenger $SearchPassenger
     * @param AirPricingCommand $AirPricingCommand
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param OptionalServices $OptionalServices
     * @param FormOfPayment $FormOfPayment
     * @param PCC $PCC
     * @param SSR $SSR
     * @param string $CheckOBFees
     * @param typeFareRuleType $FareRuleType
     * @param typeSupplierCode $SupplierCode
     * @param date $TicketDate
     * @param boolean $CheckFlightDetails
     * @param boolean $ReturnMM
     * @param anonymous1147 $NSCC
     * @param boolean $SplitPricing
     * @param boolean $MostRestrictivePenalties
     * @param string $PricingPreference
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $AirItinerary = null, $AirPricingModifiers = null, $SearchPassenger = null, $AirPricingCommand = null, $AirReservationLocatorCode = null, $OptionalServices = null, $FormOfPayment = null, $PCC = null, $SSR = null, $CheckOBFees = null, $FareRuleType = null, $SupplierCode = null, $TicketDate = null, $CheckFlightDetails = null, $ReturnMM = null, $NSCC = null, $SplitPricing = null, $MostRestrictivePenalties = null, $PricingPreference = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode);
      $this->AirItinerary = $AirItinerary;
      $this->AirPricingModifiers = $AirPricingModifiers;
      $this->SearchPassenger = $SearchPassenger;
      $this->AirPricingCommand = $AirPricingCommand;
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->OptionalServices = $OptionalServices;
      $this->FormOfPayment = $FormOfPayment;
      $this->PCC = $PCC;
      $this->SSR = $SSR;
      $this->CheckOBFees = $CheckOBFees;
      $this->FareRuleType = $FareRuleType;
      $this->SupplierCode = $SupplierCode;
      $this->TicketDate = $TicketDate;
      $this->CheckFlightDetails = $CheckFlightDetails;
      $this->ReturnMM = $ReturnMM;
      $this->NSCC = $NSCC;
      $this->SplitPricing = $SplitPricing;
      $this->MostRestrictivePenalties = $MostRestrictivePenalties;
      $this->PricingPreference = $PricingPreference;
    }

    /**
     * @return AirItinerary
     */
    public function getAirItinerary()
    {
      return $this->AirItinerary;
    }

    /**
     * @param AirItinerary $AirItinerary
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setAirItinerary($AirItinerary)
    {
      $this->AirItinerary = $AirItinerary;
      return $this;
    }

    /**
     * @return AirPricingModifiers
     */
    public function getAirPricingModifiers()
    {
      return $this->AirPricingModifiers;
    }

    /**
     * @param AirPricingModifiers $AirPricingModifiers
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setAirPricingModifiers($AirPricingModifiers)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      return $this;
    }

    /**
     * @return SearchPassenger
     */
    public function getSearchPassenger()
    {
      return $this->SearchPassenger;
    }

    /**
     * @param SearchPassenger $SearchPassenger
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setSearchPassenger($SearchPassenger)
    {
      $this->SearchPassenger = $SearchPassenger;
      return $this;
    }

    /**
     * @return AirPricingCommand
     */
    public function getAirPricingCommand()
    {
      return $this->AirPricingCommand;
    }

    /**
     * @param AirPricingCommand $AirPricingCommand
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setAirPricingCommand($AirPricingCommand)
    {
      $this->AirPricingCommand = $AirPricingCommand;
      return $this;
    }

    /**
     * @return AirReservationLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return OptionalServices
     */
    public function getOptionalServices()
    {
      return $this->OptionalServices;
    }

    /**
     * @param OptionalServices $OptionalServices
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return PCC
     */
    public function getPCC()
    {
      return $this->PCC;
    }

    /**
     * @param PCC $PCC
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setPCC($PCC)
    {
      $this->PCC = $PCC;
      return $this;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckOBFees()
    {
      return $this->CheckOBFees;
    }

    /**
     * @param string $CheckOBFees
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setCheckOBFees($CheckOBFees)
    {
      $this->CheckOBFees = $CheckOBFees;
      return $this;
    }

    /**
     * @return typeFareRuleType
     */
    public function getFareRuleType()
    {
      return $this->FareRuleType;
    }

    /**
     * @param typeFareRuleType $FareRuleType
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setFareRuleType($FareRuleType)
    {
      $this->FareRuleType = $FareRuleType;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getTicketDate()
    {
      return $this->TicketDate;
    }

    /**
     * @param date $TicketDate
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setTicketDate($TicketDate)
    {
      $this->TicketDate = $TicketDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCheckFlightDetails()
    {
      return $this->CheckFlightDetails;
    }

    /**
     * @param boolean $CheckFlightDetails
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setCheckFlightDetails($CheckFlightDetails)
    {
      $this->CheckFlightDetails = $CheckFlightDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnMM()
    {
      return $this->ReturnMM;
    }

    /**
     * @param boolean $ReturnMM
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setReturnMM($ReturnMM)
    {
      $this->ReturnMM = $ReturnMM;
      return $this;
    }

    /**
     * @return anonymous1147
     */
    public function getNSCC()
    {
      return $this->NSCC;
    }

    /**
     * @param anonymous1147 $NSCC
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setNSCC($NSCC)
    {
      $this->NSCC = $NSCC;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSplitPricing()
    {
      return $this->SplitPricing;
    }

    /**
     * @param boolean $SplitPricing
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setSplitPricing($SplitPricing)
    {
      $this->SplitPricing = $SplitPricing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMostRestrictivePenalties()
    {
      return $this->MostRestrictivePenalties;
    }

    /**
     * @param boolean $MostRestrictivePenalties
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setMostRestrictivePenalties($MostRestrictivePenalties)
    {
      $this->MostRestrictivePenalties = $MostRestrictivePenalties;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingPreference()
    {
      return $this->PricingPreference;
    }

    /**
     * @param string $PricingPreference
     * @return \FilippoToso\Travelport\Air\BaseAirPriceReq
     */
    public function setPricingPreference($PricingPreference)
    {
      $this->PricingPreference = $PricingPreference;
      return $this;
    }

}
