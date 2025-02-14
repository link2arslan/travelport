<?php

namespace FilippoToso\Travelport\Rail;

class DocumentSelect
{

    /**
     * @var BackOfficeHandOff $BackOfficeHandOff
     */
    public $BackOfficeHandOff = null;

    /**
     * @var Itinerary $Itinerary
     */
    public $Itinerary = null;

    /**
     * @var boolean $IssueTicketOnly
     */
    public $IssueTicketOnly = null;

    /**
     * @var boolean $IssueElectronicTicket
     */
    public $IssueElectronicTicket = null;

    /**
     * @var boolean $FaxIndicator
     */
    public $FaxIndicator = null;

    /**
     * @param BackOfficeHandOff $BackOfficeHandOff
     * @param Itinerary $Itinerary
     * @param boolean $IssueTicketOnly
     * @param boolean $IssueElectronicTicket
     * @param boolean $FaxIndicator
     */
    public function __construct($BackOfficeHandOff = null, $Itinerary = null, $IssueTicketOnly = null, $IssueElectronicTicket = null, $FaxIndicator = null)
    {
      $this->BackOfficeHandOff = $BackOfficeHandOff;
      $this->Itinerary = $Itinerary;
      $this->IssueTicketOnly = $IssueTicketOnly;
      $this->IssueElectronicTicket = $IssueElectronicTicket;
      $this->FaxIndicator = $FaxIndicator;
    }

    /**
     * @return BackOfficeHandOff
     */
    public function getBackOfficeHandOff()
    {
      return $this->BackOfficeHandOff;
    }

    /**
     * @param BackOfficeHandOff $BackOfficeHandOff
     * @return \FilippoToso\Travelport\Rail\DocumentSelect
     */
    public function setBackOfficeHandOff($BackOfficeHandOff)
    {
      $this->BackOfficeHandOff = $BackOfficeHandOff;
      return $this;
    }

    /**
     * @return Itinerary
     */
    public function getItinerary()
    {
      return $this->Itinerary;
    }

    /**
     * @param Itinerary $Itinerary
     * @return \FilippoToso\Travelport\Rail\DocumentSelect
     */
    public function setItinerary($Itinerary)
    {
      $this->Itinerary = $Itinerary;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIssueTicketOnly()
    {
      return $this->IssueTicketOnly;
    }

    /**
     * @param boolean $IssueTicketOnly
     * @return \FilippoToso\Travelport\Rail\DocumentSelect
     */
    public function setIssueTicketOnly($IssueTicketOnly)
    {
      $this->IssueTicketOnly = $IssueTicketOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIssueElectronicTicket()
    {
      return $this->IssueElectronicTicket;
    }

    /**
     * @param boolean $IssueElectronicTicket
     * @return \FilippoToso\Travelport\Rail\DocumentSelect
     */
    public function setIssueElectronicTicket($IssueElectronicTicket)
    {
      $this->IssueElectronicTicket = $IssueElectronicTicket;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFaxIndicator()
    {
      return $this->FaxIndicator;
    }

    /**
     * @param boolean $FaxIndicator
     * @return \FilippoToso\Travelport\Rail\DocumentSelect
     */
    public function setFaxIndicator($FaxIndicator)
    {
      $this->FaxIndicator = $FaxIndicator;
      return $this;
    }

}
