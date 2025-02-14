<?php

namespace FilippoToso\Travelport\Rail;

class ConjunctedTicketInfo
{

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
     * @var anonymous863 $TicketingAgentSignOn
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
     * @param string $Number
     * @param typeIATA $IATANumber
     * @param \DateTime $TicketIssueDate
     * @param anonymous863 $TicketingAgentSignOn
     * @param typeCountry $CountryCode
     * @param typeTicketStatus $Status
     */
    public function __construct($Number = null, $IATANumber = null, \DateTime $TicketIssueDate = null, $TicketingAgentSignOn = null, $CountryCode = null, $Status = null)
    {
      $this->Number = $Number;
      $this->IATANumber = $IATANumber;
      $this->TicketIssueDate = $TicketIssueDate ? $TicketIssueDate->format(\DateTime::ATOM) : null;
      $this->TicketingAgentSignOn = $TicketingAgentSignOn;
      $this->CountryCode = $CountryCode;
      $this->Status = $Status;
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
     * @return \FilippoToso\Travelport\Rail\ConjunctedTicketInfo
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
     * @return \FilippoToso\Travelport\Rail\ConjunctedTicketInfo
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
     * @return \FilippoToso\Travelport\Rail\ConjunctedTicketInfo
     */
    public function setTicketIssueDate(\DateTime $TicketIssueDate)
    {
      $this->TicketIssueDate = $TicketIssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anonymous863
     */
    public function getTicketingAgentSignOn()
    {
      return $this->TicketingAgentSignOn;
    }

    /**
     * @param anonymous863 $TicketingAgentSignOn
     * @return \FilippoToso\Travelport\Rail\ConjunctedTicketInfo
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
     * @return \FilippoToso\Travelport\Rail\ConjunctedTicketInfo
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
     * @return \FilippoToso\Travelport\Rail\ConjunctedTicketInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
