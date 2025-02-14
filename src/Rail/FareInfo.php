<?php

namespace FilippoToso\Travelport\Rail;

class FareInfo
{

    /**
     * @var FareTicketDesignator $FareTicketDesignator
     */
    public $FareTicketDesignator = null;

    /**
     * @var FareSurcharge $FareSurcharge
     */
    public $FareSurcharge = null;

    /**
     * @var AccountCode $AccountCode
     */
    public $AccountCode = null;

    /**
     * @var ContractCode $ContractCode
     */
    public $ContractCode = null;

    /**
     * @var Endorsement $Endorsement
     */
    public $Endorsement = null;

    /**
     * @var BaggageAllowance $BaggageAllowance
     */
    public $BaggageAllowance = null;

    /**
     * @var FareRuleKey $FareRuleKey
     */
    public $FareRuleKey = null;

    /**
     * @var FareRuleFailureInfo $FareRuleFailureInfo
     */
    public $FareRuleFailureInfo = null;

    /**
     * @var FareRemarkRef $FareRemarkRef
     */
    public $FareRemarkRef = null;

    /**
     * @var Brand $Brand
     */
    public $Brand = null;

    /**
     * @var Commission $Commission
     */
    public $Commission = null;

    /**
     * @var string $FareAttributes
     */
    public $FareAttributes = null;

    /**
     * @var typeFarePenalty $ChangePenalty
     */
    public $ChangePenalty = null;

    /**
     * @var typeFarePenalty $CancelPenalty
     */
    public $CancelPenalty = null;

    /**
     * @var FareRulesFilter $FareRulesFilter
     */
    public $FareRulesFilter = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var string $FareBasis
     */
    public $FareBasis = null;

    /**
     * @var typePTC $PassengerTypeCode
     */
    public $PassengerTypeCode = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @var string $EffectiveDate
     */
    public $EffectiveDate = null;

    /**
     * @var date $TravelDate
     */
    public $TravelDate = null;

    /**
     * @var date $DepartureDate
     */
    public $DepartureDate = null;

    /**
     * @var typeMoney $Amount
     */
    public $Amount = null;

    /**
     * @var typePrivateFare $PrivateFare
     */
    public $PrivateFare = null;

    /**
     * @var boolean $NegotiatedFare
     */
    public $NegotiatedFare = null;

    /**
     * @var typeTourCode $TourCode
     */
    public $TourCode = null;

    /**
     * @var string $WaiverCode
     */
    public $WaiverCode = null;

    /**
     * @var date $NotValidBefore
     */
    public $NotValidBefore = null;

    /**
     * @var date $NotValidAfter
     */
    public $NotValidAfter = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @var typeFareFamily $FareFamily
     */
    public $FareFamily = null;

    /**
     * @var boolean $PromotionalFare
     */
    public $PromotionalFare = null;

    /**
     * @var typeCarCode $CarCode
     */
    public $CarCode = null;

    /**
     * @var typeValueCode $ValueCode
     */
    public $ValueCode = null;

    /**
     * @var boolean $BulkTicket
     */
    public $BulkTicket = null;

    /**
     * @var boolean $InclusiveTour
     */
    public $InclusiveTour = null;

    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var typeMoney $TaxAmount
     */
    public $TaxAmount = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param FareTicketDesignator $FareTicketDesignator
     * @param FareSurcharge $FareSurcharge
     * @param AccountCode $AccountCode
     * @param ContractCode $ContractCode
     * @param Endorsement $Endorsement
     * @param BaggageAllowance $BaggageAllowance
     * @param FareRuleKey $FareRuleKey
     * @param FareRuleFailureInfo $FareRuleFailureInfo
     * @param FareRemarkRef $FareRemarkRef
     * @param Brand $Brand
     * @param Commission $Commission
     * @param FareRulesFilter $FareRulesFilter
     * @param typeRef $Key
     * @param string $FareBasis
     * @param typePTC $PassengerTypeCode
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $EffectiveDate
     * @param date $TravelDate
     * @param date $DepartureDate
     * @param typeMoney $Amount
     * @param typePrivateFare $PrivateFare
     * @param boolean $NegotiatedFare
     * @param typeTourCode $TourCode
     * @param string $WaiverCode
     * @param date $NotValidBefore
     * @param date $NotValidAfter
     * @param typePCC $PseudoCityCode
     * @param typeFareFamily $FareFamily
     * @param boolean $PromotionalFare
     * @param typeCarCode $CarCode
     * @param typeValueCode $ValueCode
     * @param boolean $BulkTicket
     * @param boolean $InclusiveTour
     * @param string $Value
     * @param typeSupplierCode $SupplierCode
     * @param typeMoney $TaxAmount
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($FareTicketDesignator = null, $FareSurcharge = null, $AccountCode = null, $ContractCode = null, $Endorsement = null, $BaggageAllowance = null, $FareRuleKey = null, $FareRuleFailureInfo = null, $FareRemarkRef = null, $Brand = null, $Commission = null, $FareRulesFilter = null, $Key = null, $FareBasis = null, $PassengerTypeCode = null, $Origin = null, $Destination = null, $EffectiveDate = null, $TravelDate = null, $DepartureDate = null, $Amount = null, $PrivateFare = null, $NegotiatedFare = null, $TourCode = null, $WaiverCode = null, $NotValidBefore = null, $NotValidAfter = null, $PseudoCityCode = null, $FareFamily = null, $PromotionalFare = null, $CarCode = null, $ValueCode = null, $BulkTicket = null, $InclusiveTour = null, $Value = null, $SupplierCode = null, $TaxAmount = null, $ElStat = null, $KeyOverride = null)
    {
      $this->FareTicketDesignator = $FareTicketDesignator;
      $this->FareSurcharge = $FareSurcharge;
      $this->AccountCode = $AccountCode;
      $this->ContractCode = $ContractCode;
      $this->Endorsement = $Endorsement;
      $this->BaggageAllowance = $BaggageAllowance;
      $this->FareRuleKey = $FareRuleKey;
      $this->FareRuleFailureInfo = $FareRuleFailureInfo;
      $this->FareRemarkRef = $FareRemarkRef;
      $this->Brand = $Brand;
      $this->Commission = $Commission;
      $this->FareRulesFilter = $FareRulesFilter;
      $this->Key = $Key;
      $this->FareBasis = $FareBasis;
      $this->PassengerTypeCode = $PassengerTypeCode;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->EffectiveDate = $EffectiveDate;
      $this->TravelDate = $TravelDate;
      $this->DepartureDate = $DepartureDate;
      $this->Amount = $Amount;
      $this->PrivateFare = $PrivateFare;
      $this->NegotiatedFare = $NegotiatedFare;
      $this->TourCode = $TourCode;
      $this->WaiverCode = $WaiverCode;
      $this->NotValidBefore = $NotValidBefore;
      $this->NotValidAfter = $NotValidAfter;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->FareFamily = $FareFamily;
      $this->PromotionalFare = $PromotionalFare;
      $this->CarCode = $CarCode;
      $this->ValueCode = $ValueCode;
      $this->BulkTicket = $BulkTicket;
      $this->InclusiveTour = $InclusiveTour;
      $this->Value = $Value;
      $this->SupplierCode = $SupplierCode;
      $this->TaxAmount = $TaxAmount;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareTicketDesignator($FareTicketDesignator)
    {
      $this->FareTicketDesignator = $FareTicketDesignator;
      return $this;
    }

    /**
     * @return FareSurcharge
     */
    public function getFareSurcharge()
    {
      return $this->FareSurcharge;
    }

    /**
     * @param FareSurcharge $FareSurcharge
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareSurcharge($FareSurcharge)
    {
      $this->FareSurcharge = $FareSurcharge;
      return $this;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return ContractCode
     */
    public function getContractCode()
    {
      return $this->ContractCode;
    }

    /**
     * @param ContractCode $ContractCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
      return $this;
    }

    /**
     * @return Endorsement
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param Endorsement $Endorsement
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return BaggageAllowance
     */
    public function getBaggageAllowance()
    {
      return $this->BaggageAllowance;
    }

    /**
     * @param BaggageAllowance $BaggageAllowance
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setBaggageAllowance($BaggageAllowance)
    {
      $this->BaggageAllowance = $BaggageAllowance;
      return $this;
    }

    /**
     * @return FareRuleKey
     */
    public function getFareRuleKey()
    {
      return $this->FareRuleKey;
    }

    /**
     * @param FareRuleKey $FareRuleKey
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareRuleKey($FareRuleKey)
    {
      $this->FareRuleKey = $FareRuleKey;
      return $this;
    }

    /**
     * @return FareRuleFailureInfo
     */
    public function getFareRuleFailureInfo()
    {
      return $this->FareRuleFailureInfo;
    }

    /**
     * @param FareRuleFailureInfo $FareRuleFailureInfo
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareRuleFailureInfo($FareRuleFailureInfo)
    {
      $this->FareRuleFailureInfo = $FareRuleFailureInfo;
      return $this;
    }

    /**
     * @return FareRemarkRef
     */
    public function getFareRemarkRef()
    {
      return $this->FareRemarkRef;
    }

    /**
     * @param FareRemarkRef $FareRemarkRef
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareRemarkRef($FareRemarkRef)
    {
      $this->FareRemarkRef = $FareRemarkRef;
      return $this;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
      return $this->Brand;
    }

    /**
     * @param Brand $Brand
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setBrand($Brand)
    {
      $this->Brand = $Brand;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareAttributes()
    {
      return $this->FareAttributes;
    }

    /**
     * @param string $FareAttributes
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareAttributes($FareAttributes)
    {
      $this->FareAttributes = $FareAttributes;
      return $this;
    }

    /**
     * @return typeFarePenalty
     */
    public function getChangePenalty()
    {
      return $this->ChangePenalty;
    }

    /**
     * @param typeFarePenalty $ChangePenalty
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setChangePenalty($ChangePenalty)
    {
      $this->ChangePenalty = $ChangePenalty;
      return $this;
    }

    /**
     * @return typeFarePenalty
     */
    public function getCancelPenalty()
    {
      return $this->CancelPenalty;
    }

    /**
     * @param typeFarePenalty $CancelPenalty
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setCancelPenalty($CancelPenalty)
    {
      $this->CancelPenalty = $CancelPenalty;
      return $this;
    }

    /**
     * @return FareRulesFilter
     */
    public function getFareRulesFilter()
    {
      return $this->FareRulesFilter;
    }

    /**
     * @param FareRulesFilter $FareRulesFilter
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareRulesFilter($FareRulesFilter)
    {
      $this->FareRulesFilter = $FareRulesFilter;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param typePTC $PassengerTypeCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param string $EffectiveDate
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelDate()
    {
      return $this->TravelDate;
    }

    /**
     * @param date $TravelDate
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setTravelDate($TravelDate)
    {
      $this->TravelDate = $TravelDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param date $DepartureDate
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePrivateFare
     */
    public function getPrivateFare()
    {
      return $this->PrivateFare;
    }

    /**
     * @param typePrivateFare $PrivateFare
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setPrivateFare($PrivateFare)
    {
      $this->PrivateFare = $PrivateFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNegotiatedFare()
    {
      return $this->NegotiatedFare;
    }

    /**
     * @param boolean $NegotiatedFare
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setNegotiatedFare($NegotiatedFare)
    {
      $this->NegotiatedFare = $NegotiatedFare;
      return $this;
    }

    /**
     * @return typeTourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param typeTourCode $TourCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaiverCode()
    {
      return $this->WaiverCode;
    }

    /**
     * @param string $WaiverCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidBefore()
    {
      return $this->NotValidBefore;
    }

    /**
     * @param date $NotValidBefore
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setNotValidBefore($NotValidBefore)
    {
      $this->NotValidBefore = $NotValidBefore;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidAfter()
    {
      return $this->NotValidAfter;
    }

    /**
     * @param date $NotValidAfter
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setNotValidAfter($NotValidAfter)
    {
      $this->NotValidAfter = $NotValidAfter;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return typeFareFamily
     */
    public function getFareFamily()
    {
      return $this->FareFamily;
    }

    /**
     * @param typeFareFamily $FareFamily
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setFareFamily($FareFamily)
    {
      $this->FareFamily = $FareFamily;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPromotionalFare()
    {
      return $this->PromotionalFare;
    }

    /**
     * @param boolean $PromotionalFare
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setPromotionalFare($PromotionalFare)
    {
      $this->PromotionalFare = $PromotionalFare;
      return $this;
    }

    /**
     * @return typeCarCode
     */
    public function getCarCode()
    {
      return $this->CarCode;
    }

    /**
     * @param typeCarCode $CarCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setCarCode($CarCode)
    {
      $this->CarCode = $CarCode;
      return $this;
    }

    /**
     * @return typeValueCode
     */
    public function getValueCode()
    {
      return $this->ValueCode;
    }

    /**
     * @param typeValueCode $ValueCode
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setValueCode($ValueCode)
    {
      $this->ValueCode = $ValueCode;
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
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclusiveTour()
    {
      return $this->InclusiveTour;
    }

    /**
     * @param boolean $InclusiveTour
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setInclusiveTour($InclusiveTour)
    {
      $this->InclusiveTour = $InclusiveTour;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
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
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxAmount()
    {
      return $this->TaxAmount;
    }

    /**
     * @param typeMoney $TaxAmount
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setTaxAmount($TaxAmount)
    {
      $this->TaxAmount = $TaxAmount;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Rail\FareInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
