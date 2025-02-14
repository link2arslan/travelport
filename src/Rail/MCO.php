<?php

namespace FilippoToso\Travelport\Rail;

class MCO extends MCOInformation
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var Endorsement $Endorsement
     */
    public $Endorsement = null;

    /**
     * @var MCOExchangeInfo $MCOExchangeInfo
     */
    public $MCOExchangeInfo = null;

    /**
     * @var MCOFeeInfo $MCOFeeInfo
     */
    public $MCOFeeInfo = null;

    /**
     * @var MCORemark $MCORemark
     */
    public $MCORemark = null;

    /**
     * @var MCOPriceData $MCOPriceData
     */
    public $MCOPriceData = null;

    /**
     * @var StockControl $StockControl
     */
    public $StockControl = null;

    /**
     * @var MCOText $MCOText
     */
    public $MCOText = null;

    /**
     * @var string $TicketType
     */
    public $TicketType = null;

    /**
     * @var string $TicketNumber
     */
    public $TicketNumber = null;

    /**
     * @var boolean $MCOIssued
     */
    public $MCOIssued = null;

    /**
     * @var \DateTime $MCOIssueDate
     */
    public $MCOIssueDate = null;

    /**
     * @var string $MCODocNum
     */
    public $MCODocNum = null;

    /**
     * @var string $IssueReasonCode
     */
    public $IssueReasonCode = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

    /**
     * @var string $TourOperator
     */
    public $TourOperator = null;

    /**
     * @var string $Location
     */
    public $Location = null;

    /**
     * @var string $TourCode
     */
    public $TourCode = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    public $ProviderLocatorCode = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @var date $ExpiryDate
     */
    public $ExpiryDate = null;

    /**
     * @param PassengerInfo $PassengerInfo
     * @param string $MCONumber
     * @param string $Status
     * @param string $MCOType
     * @param FormOfPayment $FormOfPayment
     * @param Endorsement $Endorsement
     * @param MCOExchangeInfo $MCOExchangeInfo
     * @param MCOFeeInfo $MCOFeeInfo
     * @param MCORemark $MCORemark
     * @param MCOPriceData $MCOPriceData
     * @param StockControl $StockControl
     * @param MCOText $MCOText
     * @param string $TicketType
     * @param string $TicketNumber
     * @param boolean $MCOIssued
     * @param \DateTime $MCOIssueDate
     * @param string $MCODocNum
     * @param string $IssueReasonCode
     * @param typeCarrier $PlatingCarrier
     * @param string $TourOperator
     * @param string $Location
     * @param string $TourCode
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typePCC $PseudoCityCode
     * @param date $ExpiryDate
     */
    public function __construct($PassengerInfo = null, $MCONumber = null, $Status = null, $MCOType = null, $FormOfPayment = null, $Endorsement = null, $MCOExchangeInfo = null, $MCOFeeInfo = null, $MCORemark = null, $MCOPriceData = null, $StockControl = null, $MCOText = null, $TicketType = null, $TicketNumber = null, $MCOIssued = null, \DateTime $MCOIssueDate = null, $MCODocNum = null, $IssueReasonCode = null, $PlatingCarrier = null, $TourOperator = null, $Location = null, $TourCode = null, $ProviderCode = null, $ProviderLocatorCode = null, $PseudoCityCode = null, $ExpiryDate = null)
    {
      parent::__construct($PassengerInfo, $MCONumber, $Status, $MCOType);
      $this->FormOfPayment = $FormOfPayment;
      $this->Endorsement = $Endorsement;
      $this->MCOExchangeInfo = $MCOExchangeInfo;
      $this->MCOFeeInfo = $MCOFeeInfo;
      $this->MCORemark = $MCORemark;
      $this->MCOPriceData = $MCOPriceData;
      $this->StockControl = $StockControl;
      $this->MCOText = $MCOText;
      $this->TicketType = $TicketType;
      $this->TicketNumber = $TicketNumber;
      $this->MCOIssued = $MCOIssued;
      $this->MCOIssueDate = $MCOIssueDate ? $MCOIssueDate->format(\DateTime::ATOM) : null;
      $this->MCODocNum = $MCODocNum;
      $this->IssueReasonCode = $IssueReasonCode;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->TourOperator = $TourOperator;
      $this->Location = $Location;
      $this->TourCode = $TourCode;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->ExpiryDate = $ExpiryDate;
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
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
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
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return MCOExchangeInfo
     */
    public function getMCOExchangeInfo()
    {
      return $this->MCOExchangeInfo;
    }

    /**
     * @param MCOExchangeInfo $MCOExchangeInfo
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCOExchangeInfo($MCOExchangeInfo)
    {
      $this->MCOExchangeInfo = $MCOExchangeInfo;
      return $this;
    }

    /**
     * @return MCOFeeInfo
     */
    public function getMCOFeeInfo()
    {
      return $this->MCOFeeInfo;
    }

    /**
     * @param MCOFeeInfo $MCOFeeInfo
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCOFeeInfo($MCOFeeInfo)
    {
      $this->MCOFeeInfo = $MCOFeeInfo;
      return $this;
    }

    /**
     * @return MCORemark
     */
    public function getMCORemark()
    {
      return $this->MCORemark;
    }

    /**
     * @param MCORemark $MCORemark
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCORemark($MCORemark)
    {
      $this->MCORemark = $MCORemark;
      return $this;
    }

    /**
     * @return MCOPriceData
     */
    public function getMCOPriceData()
    {
      return $this->MCOPriceData;
    }

    /**
     * @param MCOPriceData $MCOPriceData
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCOPriceData($MCOPriceData)
    {
      $this->MCOPriceData = $MCOPriceData;
      return $this;
    }

    /**
     * @return StockControl
     */
    public function getStockControl()
    {
      return $this->StockControl;
    }

    /**
     * @param StockControl $StockControl
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setStockControl($StockControl)
    {
      $this->StockControl = $StockControl;
      return $this;
    }

    /**
     * @return MCOText
     */
    public function getMCOText()
    {
      return $this->MCOText;
    }

    /**
     * @param MCOText $MCOText
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCOText($MCOText)
    {
      $this->MCOText = $MCOText;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketType()
    {
      return $this->TicketType;
    }

    /**
     * @param string $TicketType
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setTicketType($TicketType)
    {
      $this->TicketType = $TicketType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMCOIssued()
    {
      return $this->MCOIssued;
    }

    /**
     * @param boolean $MCOIssued
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCOIssued($MCOIssued)
    {
      $this->MCOIssued = $MCOIssued;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getMCOIssueDate()
    {
      if ($this->MCOIssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MCOIssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MCOIssueDate
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCOIssueDate(\DateTime $MCOIssueDate)
    {
      $this->MCOIssueDate = $MCOIssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getMCODocNum()
    {
      return $this->MCODocNum;
    }

    /**
     * @param string $MCODocNum
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setMCODocNum($MCODocNum)
    {
      $this->MCODocNum = $MCODocNum;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssueReasonCode()
    {
      return $this->IssueReasonCode;
    }

    /**
     * @param string $IssueReasonCode
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setIssueReasonCode($IssueReasonCode)
    {
      $this->IssueReasonCode = $IssueReasonCode;
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
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourOperator()
    {
      return $this->TourOperator;
    }

    /**
     * @param string $TourOperator
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setTourOperator($TourOperator)
    {
      $this->TourOperator = $TourOperator;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param string $TourCode
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
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
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getExpiryDate()
    {
      return $this->ExpiryDate;
    }

    /**
     * @param date $ExpiryDate
     * @return \FilippoToso\Travelport\Rail\MCO
     */
    public function setExpiryDate($ExpiryDate)
    {
      $this->ExpiryDate = $ExpiryDate;
      return $this;
    }

}
