<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RepricingModifiers
{

    /**
     * @var PrivateFareOptions $PrivateFareOptions
     */
    public $PrivateFareOptions = null;

    /**
     * @var FareType $FareType
     */
    public $FareType = null;

    /**
     * @var FareTicketDesignator $FareTicketDesignator
     */
    public $FareTicketDesignator = null;

    /**
     * @var OverrideCurrency $OverrideCurrency
     */
    public $OverrideCurrency = null;

    /**
     * @var AirSegmentPricingModifiers $AirSegmentPricingModifiers
     */
    public $AirSegmentPricingModifiers = null;

    /**
     * @var WithholdTaxCode[] $WithholdTaxCode
     */
    public $WithholdTaxCode = null;

    /**
     * @var typePriceClassOfService $PriceClassOfService
     */
    public $PriceClassOfService = null;

    /**
     * @var date $CreateDate
     */
    public $CreateDate = null;

    /**
     * @var typeCity $ReissueLocCityCode
     */
    public $ReissueLocCityCode = null;

    /**
     * @var typeCountry $ReissueLocCountryCode
     */
    public $ReissueLocCountryCode = null;

    /**
     * @var boolean $BulkTicket
     */
    public $BulkTicket = null;

    /**
     * @var string $AccountCode
     */
    public $AccountCode = null;

    /**
     * @var anonymous1038 $PenaltyAsTaxCode
     */
    public $PenaltyAsTaxCode = null;

    /**
     * @var typeRef $AirPricingSolutionRef
     */
    public $AirPricingSolutionRef = null;

    /**
     * @var boolean $PenaltyToFare
     */
    public $PenaltyToFare = null;

    /**
     * @var boolean $PricePTCOnly
     */
    public $PricePTCOnly = null;

    /**
     * @var boolean $BrandDetails
     */
    public $BrandDetails = null;

    /**
     * @var string $BrandModifier
     */
    public $BrandModifier = null;

    /**
     * @var boolean $JetServiceOnly
     */
    public $JetServiceOnly = null;

    /**
     * @var anonymous1039 $TimeWindow
     */
    public $TimeWindow = null;

    /**
     * @var anonymous1040 $FlightType
     */
    public $FlightType = null;

    /**
     * @var boolean $MultiAirportSearch
     */
    public $MultiAirportSearch = null;

    /**
     * @var typeIATACode $ConnectionPoint
     */
    public $ConnectionPoint = null;

    /**
     * @param FareType $FareType
     * @param FareTicketDesignator $FareTicketDesignator
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @param typePriceClassOfService $PriceClassOfService
     * @param date $CreateDate
     * @param typeCity $ReissueLocCityCode
     * @param typeCountry $ReissueLocCountryCode
     * @param boolean $BulkTicket
     * @param string $AccountCode
     * @param anonymous1038 $PenaltyAsTaxCode
     * @param typeRef $AirPricingSolutionRef
     * @param boolean $PenaltyToFare
     * @param boolean $PricePTCOnly
     * @param boolean $BrandDetails
     * @param string $BrandModifier
     * @param boolean $JetServiceOnly
     * @param anonymous1039 $TimeWindow
     * @param anonymous1040 $FlightType
     * @param boolean $MultiAirportSearch
     * @param typeIATACode $ConnectionPoint
     */
    public function __construct($FareType = null, $FareTicketDesignator = null, $AirSegmentPricingModifiers = null, $PriceClassOfService = null, $CreateDate = null, $ReissueLocCityCode = null, $ReissueLocCountryCode = null, $BulkTicket = null, $AccountCode = null, $PenaltyAsTaxCode = null, $AirPricingSolutionRef = null, $PenaltyToFare = null, $PricePTCOnly = null, $BrandDetails = null, $BrandModifier = null, $JetServiceOnly = null, $TimeWindow = null, $FlightType = null, $MultiAirportSearch = null, $ConnectionPoint = null)
    {
      $this->FareType = $FareType;
      $this->FareTicketDesignator = $FareTicketDesignator;
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      $this->PriceClassOfService = $PriceClassOfService;
      $this->CreateDate = $CreateDate;
      $this->ReissueLocCityCode = $ReissueLocCityCode;
      $this->ReissueLocCountryCode = $ReissueLocCountryCode;
      $this->BulkTicket = $BulkTicket;
      $this->AccountCode = $AccountCode;
      $this->PenaltyAsTaxCode = $PenaltyAsTaxCode;
      $this->AirPricingSolutionRef = $AirPricingSolutionRef;
      $this->PenaltyToFare = $PenaltyToFare;
      $this->PricePTCOnly = $PricePTCOnly;
      $this->BrandDetails = $BrandDetails;
      $this->BrandModifier = $BrandModifier;
      $this->JetServiceOnly = $JetServiceOnly;
      $this->TimeWindow = $TimeWindow;
      $this->FlightType = $FlightType;
      $this->MultiAirportSearch = $MultiAirportSearch;
      $this->ConnectionPoint = $ConnectionPoint;
    }

    /**
     * @return PrivateFareOptions
     */
    public function getPrivateFareOptions()
    {
      return $this->PrivateFareOptions;
    }

    /**
     * @param PrivateFareOptions $PrivateFareOptions
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setPrivateFareOptions($PrivateFareOptions)
    {
      $this->PrivateFareOptions = $PrivateFareOptions;
      return $this;
    }

    /**
     * @return FareType
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param FareType $FareType
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return FareTicketDesignator
     */
    public function getFareTicketDesignator()
    {
      return $this->FareTicketDesignator;
    }

    /**
     * @param FareTicketDesignator $FareTicketDesignator
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setFareTicketDesignator($FareTicketDesignator)
    {
      $this->FareTicketDesignator = $FareTicketDesignator;
      return $this;
    }

    /**
     * @return OverrideCurrency
     */
    public function getOverrideCurrency()
    {
      return $this->OverrideCurrency;
    }

    /**
     * @param OverrideCurrency $OverrideCurrency
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setOverrideCurrency($OverrideCurrency)
    {
      $this->OverrideCurrency = $OverrideCurrency;
      return $this;
    }

    /**
     * @return AirSegmentPricingModifiers
     */
    public function getAirSegmentPricingModifiers()
    {
      return $this->AirSegmentPricingModifiers;
    }

    /**
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setAirSegmentPricingModifiers($AirSegmentPricingModifiers)
    {
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      return $this;
    }

    /**
     * @return WithholdTaxCode[]
     */
    public function getWithholdTaxCode()
    {
      return $this->WithholdTaxCode;
    }

    /**
     * @param WithholdTaxCode[] $WithholdTaxCode
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setWithholdTaxCode(array $WithholdTaxCode = null)
    {
      $this->WithholdTaxCode = $WithholdTaxCode;
      return $this;
    }

    /**
     * @return typePriceClassOfService
     */
    public function getPriceClassOfService()
    {
      return $this->PriceClassOfService;
    }

    /**
     * @param typePriceClassOfService $PriceClassOfService
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setPriceClassOfService($PriceClassOfService)
    {
      $this->PriceClassOfService = $PriceClassOfService;
      return $this;
    }

    /**
     * @return date
     */
    public function getCreateDate()
    {
      return $this->CreateDate;
    }

    /**
     * @param date $CreateDate
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setCreateDate($CreateDate)
    {
      $this->CreateDate = $CreateDate;
      return $this;
    }

    /**
     * @return typeCity
     */
    public function getReissueLocCityCode()
    {
      return $this->ReissueLocCityCode;
    }

    /**
     * @param typeCity $ReissueLocCityCode
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setReissueLocCityCode($ReissueLocCityCode)
    {
      $this->ReissueLocCityCode = $ReissueLocCityCode;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getReissueLocCountryCode()
    {
      return $this->ReissueLocCountryCode;
    }

    /**
     * @param typeCountry $ReissueLocCountryCode
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setReissueLocCountryCode($ReissueLocCountryCode)
    {
      $this->ReissueLocCountryCode = $ReissueLocCountryCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBulkTicket()
    {
      return $this->BulkTicket;
    }

    /**
     * @param boolean $BulkTicket
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return anonymous1038
     */
    public function getPenaltyAsTaxCode()
    {
      return $this->PenaltyAsTaxCode;
    }

    /**
     * @param anonymous1038 $PenaltyAsTaxCode
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setPenaltyAsTaxCode($PenaltyAsTaxCode)
    {
      $this->PenaltyAsTaxCode = $PenaltyAsTaxCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirPricingSolutionRef()
    {
      return $this->AirPricingSolutionRef;
    }

    /**
     * @param typeRef $AirPricingSolutionRef
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setAirPricingSolutionRef($AirPricingSolutionRef)
    {
      $this->AirPricingSolutionRef = $AirPricingSolutionRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPenaltyToFare()
    {
      return $this->PenaltyToFare;
    }

    /**
     * @param boolean $PenaltyToFare
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setPenaltyToFare($PenaltyToFare)
    {
      $this->PenaltyToFare = $PenaltyToFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPricePTCOnly()
    {
      return $this->PricePTCOnly;
    }

    /**
     * @param boolean $PricePTCOnly
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setPricePTCOnly($PricePTCOnly)
    {
      $this->PricePTCOnly = $PricePTCOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBrandDetails()
    {
      return $this->BrandDetails;
    }

    /**
     * @param boolean $BrandDetails
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setBrandDetails($BrandDetails)
    {
      $this->BrandDetails = $BrandDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandModifier()
    {
      return $this->BrandModifier;
    }

    /**
     * @param string $BrandModifier
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setBrandModifier($BrandModifier)
    {
      $this->BrandModifier = $BrandModifier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getJetServiceOnly()
    {
      return $this->JetServiceOnly;
    }

    /**
     * @param boolean $JetServiceOnly
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setJetServiceOnly($JetServiceOnly)
    {
      $this->JetServiceOnly = $JetServiceOnly;
      return $this;
    }

    /**
     * @return anonymous1039
     */
    public function getTimeWindow()
    {
      return $this->TimeWindow;
    }

    /**
     * @param anonymous1039 $TimeWindow
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setTimeWindow($TimeWindow)
    {
      $this->TimeWindow = $TimeWindow;
      return $this;
    }

    /**
     * @return anonymous1040
     */
    public function getFlightType()
    {
      return $this->FlightType;
    }

    /**
     * @param anonymous1040 $FlightType
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultiAirportSearch()
    {
      return $this->MultiAirportSearch;
    }

    /**
     * @param boolean $MultiAirportSearch
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setMultiAirportSearch($MultiAirportSearch)
    {
      $this->MultiAirportSearch = $MultiAirportSearch;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getConnectionPoint()
    {
      return $this->ConnectionPoint;
    }

    /**
     * @param typeIATACode $ConnectionPoint
     * @return \FilippoToso\Travelport\UniversalRecord\RepricingModifiers
     */
    public function setConnectionPoint($ConnectionPoint)
    {
      $this->ConnectionPoint = $ConnectionPoint;
      return $this;
    }

}
