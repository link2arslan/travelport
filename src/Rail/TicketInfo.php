<?php

namespace FilippoToso\Travelport\Rail;

class TicketInfo
{

    /**
     * @var Name $Name
     */
    public $Name = null;

    /**
     * @var ConjunctedTicketInfo $ConjunctedTicketInfo
     */
    public $ConjunctedTicketInfo = null;

    /**
     * @var ExchangedTicketInfo $ExchangedTicketInfo
     */
    public $ExchangedTicketInfo = null;

    /**
     * @var string $Number
     */
    public $Number = null;

    /**
     * @var typeIATA $IATANumber
     */
    public $IATANumber = null;

    /**
     * @var \DateTime $TicketIssueDate
     */
    public $TicketIssueDate = null;

    /**
     * @var anonymous850 $TicketingAgentSignOn
     */
    public $TicketingAgentSignOn = null;

    /**
     * @var typeCountry $CountryCode
     */
    public $CountryCode = null;

    /**
     * @var typeTicketStatus $Status
     */
    public $Status = null;

    /**
     * @var boolean $BulkTicket
     */
    public $BulkTicket = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var typeRef $AirPricingInfoRef
     */
    public $AirPricingInfoRef = null;

    /**
     * @param Name $Name
     * @param ConjunctedTicketInfo $ConjunctedTicketInfo
     * @param ExchangedTicketInfo $ExchangedTicketInfo
     * @param string $Number
     * @param typeIATA $IATANumber
     * @param \DateTime $TicketIssueDate
     * @param anonymous850 $TicketingAgentSignOn
     * @param typeCountry $CountryCode
     * @param typeTicketStatus $Status
     * @param boolean $BulkTicket
     * @param typeRef $BookingTravelerRef
     * @param typeRef $AirPricingInfoRef
     */
    public function __construct($Name = null, $ConjunctedTicketInfo = null, $ExchangedTicketInfo = null, $Number = null, $IATANumber = null, \DateTime $TicketIssueDate = null, $TicketingAgentSignOn = null, $CountryCode = null, $Status = null, $BulkTicket = null, $BookingTravelerRef = null, $AirPricingInfoRef = null)
    {
      $this->Name = $Name;
      $this->ConjunctedTicketInfo = $ConjunctedTicketInfo;
      $this->ExchangedTicketInfo = $ExchangedTicketInfo;
      $this->Number = $Number;
      $this->IATANumber = $IATANumber;
      $this->TicketIssueDate = $TicketIssueDate ? $TicketIssueDate->format(\DateTime::ATOM) : null;
      $this->TicketingAgentSignOn = $TicketingAgentSignOn;
      $this->CountryCode = $CountryCode;
      $this->Status = $Status;
      $this->BulkTicket = $BulkTicket;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ConjunctedTicketInfo
     */
    public function getConjunctedTicketInfo()
    {
      return $this->ConjunctedTicketInfo;
    }

    /**
     * @param ConjunctedTicketInfo $ConjunctedTicketInfo
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setConjunctedTicketInfo($ConjunctedTicketInfo)
    {
      $this->ConjunctedTicketInfo = $ConjunctedTicketInfo;
      return $this;
    }

    /**
     * @return ExchangedTicketInfo
     */
    public function getExchangedTicketInfo()
    {
      return $this->ExchangedTicketInfo;
    }

    /**
     * @param ExchangedTicketInfo $ExchangedTicketInfo
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setExchangedTicketInfo($ExchangedTicketInfo)
    {
      $this->ExchangedTicketInfo = $ExchangedTicketInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param typeIATA $IATANumber
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTicketIssueDate()
    {
      if ($this->TicketIssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TicketIssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TicketIssueDate
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setTicketIssueDate(\DateTime $TicketIssueDate)
    {
      $this->TicketIssueDate = $TicketIssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anonymous850
     */
    public function getTicketingAgentSignOn()
    {
      return $this->TicketingAgentSignOn;
    }

    /**
     * @param anonymous850 $TicketingAgentSignOn
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setTicketingAgentSignOn($TicketingAgentSignOn)
    {
      $this->TicketingAgentSignOn = $TicketingAgentSignOn;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param typeCountry $CountryCode
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return typeTicketStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeTicketStatus $Status
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param typeRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\Rail\TicketInfo
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

}
