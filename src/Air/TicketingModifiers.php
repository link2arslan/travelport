<?php

namespace FilippoToso\Travelport\Air;

class TicketingModifiers extends typeBulkTicketModifierType
{

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var typeTicketModifierAmountType $NetRemit
     */
    public $NetRemit = null;

    /**
     * @var typeTicketModifierAmountType $NetFare
     */
    public $NetFare = null;

    /**
     * @var typeTicketModifierAmountType $ActualSellingFare
     */
    public $ActualSellingFare = null;

    /**
     * @var typeTicketModifierAccountingType $InvoiceFare
     */
    public $InvoiceFare = null;

    /**
     * @var typeTicketModifierAccountingType $CorporateDiscount
     */
    public $CorporateDiscount = null;

    /**
     * @var typeTicketModifierAccountingType $AccountingInfo
     */
    public $AccountingInfo = null;

    /**
     * @var BulkTicket $BulkTicket
     */
    public $BulkTicket = null;

    /**
     * @var typeBulkTicketModifierType $GroupTour
     */
    public $GroupTour = null;

    /**
     * @var Commission $Commission
     */
    public $Commission = null;

    /**
     * @var TourCode $TourCode
     */
    public $TourCode = null;

    /**
     * @var TicketEndorsement $TicketEndorsement
     */
    public $TicketEndorsement = null;

    /**
     * @var typeTicketModifierValueType $ValueModifier
     */
    public $ValueModifier = null;

    /**
     * @var DocumentSelect $DocumentSelect
     */
    public $DocumentSelect = null;

    /**
     * @var DocumentOptions $DocumentOptions
     */
    public $DocumentOptions = null;

    /**
     * @var SegmentSelect $SegmentSelect
     */
    public $SegmentSelect = null;

    /**
     * @var SegmentModifiers $SegmentModifiers
     */
    public $SegmentModifiers = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    public $SupplierLocator = null;

    /**
     * @var DestinationPurposeCode $DestinationPurposeCode
     */
    public $DestinationPurposeCode = null;

    /**
     * @var LanguageOption $LanguageOption
     */
    public $LanguageOption = null;

    /**
     * @var LandCharges $LandCharges
     */
    public $LandCharges = null;

    /**
     * @var PrintBlankFormItinerary $PrintBlankFormItinerary
     */
    public $PrintBlankFormItinerary = null;

    /**
     * @var ExcludeTicketing $ExcludeTicketing
     */
    public $ExcludeTicketing = null;

    /**
     * @var ExemptOBFee $ExemptOBFee
     */
    public $ExemptOBFee = null;

    /**
     * @var boolean $IsPrimaryDI
     */
    public $IsPrimaryDI = null;

    /**
     * @var string $DocumentInstructionNumber
     */
    public $DocumentInstructionNumber = null;

    /**
     * @var StringLength1to30 $Reference
     */
    public $Reference = null;

    /**
     * @var anonymous927 $Status
     */
    public $Status = null;

    /**
     * @var anonymous928 $FreeText
     */
    public $FreeText = null;

    /**
     * @var string $NameNumber
     */
    public $NameNumber = null;

    /**
     * @var string $TicketRecord
     */
    public $TicketRecord = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

    /**
     * @var boolean $ExemptVAT
     */
    public $ExemptVAT = null;

    /**
     * @var boolean $NetRemitApplied
     */
    public $NetRemitApplied = null;

    /**
     * @var boolean $FreeTicket
     */
    public $FreeTicket = null;

    /**
     * @var anonymous929 $CurrencyOverrideCode
     */
    public $CurrencyOverrideCode = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param boolean $SuppressOnFareCalc
     * @param Commission $Commission
     * @param TourCode $TourCode
     * @param TicketEndorsement $TicketEndorsement
     * @param DocumentSelect $DocumentSelect
     * @param DocumentOptions $DocumentOptions
     * @param SegmentSelect $SegmentSelect
     * @param SegmentModifiers $SegmentModifiers
     * @param SupplierLocator $SupplierLocator
     * @param DestinationPurposeCode $DestinationPurposeCode
     * @param LanguageOption $LanguageOption
     * @param LandCharges $LandCharges
     * @param PrintBlankFormItinerary $PrintBlankFormItinerary
     * @param ExcludeTicketing $ExcludeTicketing
     * @param ExemptOBFee $ExemptOBFee
     * @param boolean $IsPrimaryDI
     * @param string $DocumentInstructionNumber
     * @param StringLength1to30 $Reference
     * @param anonymous927 $Status
     * @param anonymous928 $FreeText
     * @param string $NameNumber
     * @param string $TicketRecord
     * @param typeCarrier $PlatingCarrier
     * @param boolean $ExemptVAT
     * @param boolean $NetRemitApplied
     * @param boolean $FreeTicket
     * @param anonymous929 $CurrencyOverrideCode
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($SuppressOnFareCalc = null, $Commission = null, $TourCode = null, $TicketEndorsement = null, $DocumentSelect = null, $DocumentOptions = null, $SegmentSelect = null, $SegmentModifiers = null, $SupplierLocator = null, $DestinationPurposeCode = null, $LanguageOption = null, $LandCharges = null, $PrintBlankFormItinerary = null, $ExcludeTicketing = null, $ExemptOBFee = null, $IsPrimaryDI = null, $DocumentInstructionNumber = null, $Reference = null, $Status = null, $FreeText = null, $NameNumber = null, $TicketRecord = null, $PlatingCarrier = null, $ExemptVAT = null, $NetRemitApplied = null, $FreeTicket = null, $CurrencyOverrideCode = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      parent::__construct($SuppressOnFareCalc);
      $this->Commission = $Commission;
      $this->TourCode = $TourCode;
      $this->TicketEndorsement = $TicketEndorsement;
      $this->DocumentSelect = $DocumentSelect;
      $this->DocumentOptions = $DocumentOptions;
      $this->SegmentSelect = $SegmentSelect;
      $this->SegmentModifiers = $SegmentModifiers;
      $this->SupplierLocator = $SupplierLocator;
      $this->DestinationPurposeCode = $DestinationPurposeCode;
      $this->LanguageOption = $LanguageOption;
      $this->LandCharges = $LandCharges;
      $this->PrintBlankFormItinerary = $PrintBlankFormItinerary;
      $this->ExcludeTicketing = $ExcludeTicketing;
      $this->ExemptOBFee = $ExemptOBFee;
      $this->IsPrimaryDI = $IsPrimaryDI;
      $this->DocumentInstructionNumber = $DocumentInstructionNumber;
      $this->Reference = $Reference;
      $this->Status = $Status;
      $this->FreeText = $FreeText;
      $this->NameNumber = $NameNumber;
      $this->TicketRecord = $TicketRecord;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->ExemptVAT = $ExemptVAT;
      $this->NetRemitApplied = $NetRemitApplied;
      $this->FreeTicket = $FreeTicket;
      $this->CurrencyOverrideCode = $CurrencyOverrideCode;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeTicketModifierAmountType
     */
    public function getNetRemit()
    {
      return $this->NetRemit;
    }

    /**
     * @param typeTicketModifierAmountType $NetRemit
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setNetRemit($NetRemit)
    {
      $this->NetRemit = $NetRemit;
      return $this;
    }

    /**
     * @return typeTicketModifierAmountType
     */
    public function getNetFare()
    {
      return $this->NetFare;
    }

    /**
     * @param typeTicketModifierAmountType $NetFare
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setNetFare($NetFare)
    {
      $this->NetFare = $NetFare;
      return $this;
    }

    /**
     * @return typeTicketModifierAmountType
     */
    public function getActualSellingFare()
    {
      return $this->ActualSellingFare;
    }

    /**
     * @param typeTicketModifierAmountType $ActualSellingFare
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setActualSellingFare($ActualSellingFare)
    {
      $this->ActualSellingFare = $ActualSellingFare;
      return $this;
    }

    /**
     * @return typeTicketModifierAccountingType
     */
    public function getInvoiceFare()
    {
      return $this->InvoiceFare;
    }

    /**
     * @param typeTicketModifierAccountingType $InvoiceFare
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setInvoiceFare($InvoiceFare)
    {
      $this->InvoiceFare = $InvoiceFare;
      return $this;
    }

    /**
     * @return typeTicketModifierAccountingType
     */
    public function getCorporateDiscount()
    {
      return $this->CorporateDiscount;
    }

    /**
     * @param typeTicketModifierAccountingType $CorporateDiscount
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setCorporateDiscount($CorporateDiscount)
    {
      $this->CorporateDiscount = $CorporateDiscount;
      return $this;
    }

    /**
     * @return typeTicketModifierAccountingType
     */
    public function getAccountingInfo()
    {
      return $this->AccountingInfo;
    }

    /**
     * @param typeTicketModifierAccountingType $AccountingInfo
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setAccountingInfo($AccountingInfo)
    {
      $this->AccountingInfo = $AccountingInfo;
      return $this;
    }

    /**
     * @return BulkTicket
     */
    public function getBulkTicket()
    {
      return $this->BulkTicket;
    }

    /**
     * @param BulkTicket $BulkTicket
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return typeBulkTicketModifierType
     */
    public function getGroupTour()
    {
      return $this->GroupTour;
    }

    /**
     * @param typeBulkTicketModifierType $GroupTour
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setGroupTour($GroupTour)
    {
      $this->GroupTour = $GroupTour;
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
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return TourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param TourCode $TourCode
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return TicketEndorsement
     */
    public function getTicketEndorsement()
    {
      return $this->TicketEndorsement;
    }

    /**
     * @param TicketEndorsement $TicketEndorsement
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setTicketEndorsement($TicketEndorsement)
    {
      $this->TicketEndorsement = $TicketEndorsement;
      return $this;
    }

    /**
     * @return typeTicketModifierValueType
     */
    public function getValueModifier()
    {
      return $this->ValueModifier;
    }

    /**
     * @param typeTicketModifierValueType $ValueModifier
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setValueModifier($ValueModifier)
    {
      $this->ValueModifier = $ValueModifier;
      return $this;
    }

    /**
     * @return DocumentSelect
     */
    public function getDocumentSelect()
    {
      return $this->DocumentSelect;
    }

    /**
     * @param DocumentSelect $DocumentSelect
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setDocumentSelect($DocumentSelect)
    {
      $this->DocumentSelect = $DocumentSelect;
      return $this;
    }

    /**
     * @return DocumentOptions
     */
    public function getDocumentOptions()
    {
      return $this->DocumentOptions;
    }

    /**
     * @param DocumentOptions $DocumentOptions
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setDocumentOptions($DocumentOptions)
    {
      $this->DocumentOptions = $DocumentOptions;
      return $this;
    }

    /**
     * @return SegmentSelect
     */
    public function getSegmentSelect()
    {
      return $this->SegmentSelect;
    }

    /**
     * @param SegmentSelect $SegmentSelect
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setSegmentSelect($SegmentSelect)
    {
      $this->SegmentSelect = $SegmentSelect;
      return $this;
    }

    /**
     * @return SegmentModifiers
     */
    public function getSegmentModifiers()
    {
      return $this->SegmentModifiers;
    }

    /**
     * @param SegmentModifiers $SegmentModifiers
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setSegmentModifiers($SegmentModifiers)
    {
      $this->SegmentModifiers = $SegmentModifiers;
      return $this;
    }

    /**
     * @return SupplierLocator
     */
    public function getSupplierLocator()
    {
      return $this->SupplierLocator;
    }

    /**
     * @param SupplierLocator $SupplierLocator
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return DestinationPurposeCode
     */
    public function getDestinationPurposeCode()
    {
      return $this->DestinationPurposeCode;
    }

    /**
     * @param DestinationPurposeCode $DestinationPurposeCode
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setDestinationPurposeCode($DestinationPurposeCode)
    {
      $this->DestinationPurposeCode = $DestinationPurposeCode;
      return $this;
    }

    /**
     * @return LanguageOption
     */
    public function getLanguageOption()
    {
      return $this->LanguageOption;
    }

    /**
     * @param LanguageOption $LanguageOption
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setLanguageOption($LanguageOption)
    {
      $this->LanguageOption = $LanguageOption;
      return $this;
    }

    /**
     * @return LandCharges
     */
    public function getLandCharges()
    {
      return $this->LandCharges;
    }

    /**
     * @param LandCharges $LandCharges
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setLandCharges($LandCharges)
    {
      $this->LandCharges = $LandCharges;
      return $this;
    }

    /**
     * @return PrintBlankFormItinerary
     */
    public function getPrintBlankFormItinerary()
    {
      return $this->PrintBlankFormItinerary;
    }

    /**
     * @param PrintBlankFormItinerary $PrintBlankFormItinerary
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setPrintBlankFormItinerary($PrintBlankFormItinerary)
    {
      $this->PrintBlankFormItinerary = $PrintBlankFormItinerary;
      return $this;
    }

    /**
     * @return ExcludeTicketing
     */
    public function getExcludeTicketing()
    {
      return $this->ExcludeTicketing;
    }

    /**
     * @param ExcludeTicketing $ExcludeTicketing
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setExcludeTicketing($ExcludeTicketing)
    {
      $this->ExcludeTicketing = $ExcludeTicketing;
      return $this;
    }

    /**
     * @return ExemptOBFee
     */
    public function getExemptOBFee()
    {
      return $this->ExemptOBFee;
    }

    /**
     * @param ExemptOBFee $ExemptOBFee
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setExemptOBFee($ExemptOBFee)
    {
      $this->ExemptOBFee = $ExemptOBFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryDI()
    {
      return $this->IsPrimaryDI;
    }

    /**
     * @param boolean $IsPrimaryDI
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setIsPrimaryDI($IsPrimaryDI)
    {
      $this->IsPrimaryDI = $IsPrimaryDI;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentInstructionNumber()
    {
      return $this->DocumentInstructionNumber;
    }

    /**
     * @param string $DocumentInstructionNumber
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setDocumentInstructionNumber($DocumentInstructionNumber)
    {
      $this->DocumentInstructionNumber = $DocumentInstructionNumber;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param StringLength1to30 $Reference
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return anonymous927
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param anonymous927 $Status
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return anonymous928
     */
    public function getFreeText()
    {
      return $this->FreeText;
    }

    /**
     * @param anonymous928 $FreeText
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setFreeText($FreeText)
    {
      $this->FreeText = $FreeText;
      return $this;
    }

    /**
     * @return string
     */
    public function getNameNumber()
    {
      return $this->NameNumber;
    }

    /**
     * @param string $NameNumber
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setNameNumber($NameNumber)
    {
      $this->NameNumber = $NameNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketRecord()
    {
      return $this->TicketRecord;
    }

    /**
     * @param string $TicketRecord
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setTicketRecord($TicketRecord)
    {
      $this->TicketRecord = $TicketRecord;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param typeCarrier $PlatingCarrier
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExemptVAT()
    {
      return $this->ExemptVAT;
    }

    /**
     * @param boolean $ExemptVAT
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setExemptVAT($ExemptVAT)
    {
      $this->ExemptVAT = $ExemptVAT;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNetRemitApplied()
    {
      return $this->NetRemitApplied;
    }

    /**
     * @param boolean $NetRemitApplied
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setNetRemitApplied($NetRemitApplied)
    {
      $this->NetRemitApplied = $NetRemitApplied;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFreeTicket()
    {
      return $this->FreeTicket;
    }

    /**
     * @param boolean $FreeTicket
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setFreeTicket($FreeTicket)
    {
      $this->FreeTicket = $FreeTicket;
      return $this;
    }

    /**
     * @return anonymous929
     */
    public function getCurrencyOverrideCode()
    {
      return $this->CurrencyOverrideCode;
    }

    /**
     * @param anonymous929 $CurrencyOverrideCode
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setCurrencyOverrideCode($CurrencyOverrideCode)
    {
      $this->CurrencyOverrideCode = $CurrencyOverrideCode;
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
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
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
     * @return \FilippoToso\Travelport\Air\TicketingModifiers
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
