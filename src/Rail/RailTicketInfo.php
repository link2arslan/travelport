<?php

namespace FilippoToso\Travelport\Rail;

class RailTicketInfo
{

    /**
     * @var RailJourneyRef $RailJourneyRef
     */
    public $RailJourneyRef = null;

    /**
     * @var TicketAdvisory $TicketAdvisory
     */
    public $TicketAdvisory = null;

    /**
     * @var anonymous1279 $Number
     */
    public $Number = null;

    /**
     * @var anonymous1280 $IssueLocation
     */
    public $IssueLocation = null;

    /**
     * @var StringLength1to255 $TicketStatus
     */
    public $TicketStatus = null;

    /**
     * @var anonymous1281 $TicketFormType
     */
    public $TicketFormType = null;

    /**
     * @var StringLength1to255 $TrafficType
     */
    public $TrafficType = null;

    /**
     * @var \DateTime $IssuedDate
     */
    public $IssuedDate = null;

    /**
     * @var StringLength1to255 $TicketType
     */
    public $TicketType = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param RailJourneyRef $RailJourneyRef
     * @param TicketAdvisory $TicketAdvisory
     * @param anonymous1279 $Number
     * @param anonymous1280 $IssueLocation
     * @param StringLength1to255 $TicketStatus
     * @param anonymous1281 $TicketFormType
     * @param StringLength1to255 $TrafficType
     * @param \DateTime $IssuedDate
     * @param StringLength1to255 $TicketType
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($RailJourneyRef = null, $TicketAdvisory = null, $Number = null, $IssueLocation = null, $TicketStatus = null, $TicketFormType = null, $TrafficType = null, \DateTime $IssuedDate = null, $TicketType = null, $BookingTravelerRef = null)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      $this->TicketAdvisory = $TicketAdvisory;
      $this->Number = $Number;
      $this->IssueLocation = $IssueLocation;
      $this->TicketStatus = $TicketStatus;
      $this->TicketFormType = $TicketFormType;
      $this->TrafficType = $TrafficType;
      $this->IssuedDate = $IssuedDate ? $IssuedDate->format(\DateTime::ATOM) : null;
      $this->TicketType = $TicketType;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return RailJourneyRef
     */
    public function getRailJourneyRef()
    {
      return $this->RailJourneyRef;
    }

    /**
     * @param RailJourneyRef $RailJourneyRef
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setRailJourneyRef($RailJourneyRef)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      return $this;
    }

    /**
     * @return TicketAdvisory
     */
    public function getTicketAdvisory()
    {
      return $this->TicketAdvisory;
    }

    /**
     * @param TicketAdvisory $TicketAdvisory
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setTicketAdvisory($TicketAdvisory)
    {
      $this->TicketAdvisory = $TicketAdvisory;
      return $this;
    }

    /**
     * @return anonymous1279
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param anonymous1279 $Number
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous1280
     */
    public function getIssueLocation()
    {
      return $this->IssueLocation;
    }

    /**
     * @param anonymous1280 $IssueLocation
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setIssueLocation($IssueLocation)
    {
      $this->IssueLocation = $IssueLocation;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param StringLength1to255 $TicketStatus
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return anonymous1281
     */
    public function getTicketFormType()
    {
      return $this->TicketFormType;
    }

    /**
     * @param anonymous1281 $TicketFormType
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setTicketFormType($TicketFormType)
    {
      $this->TicketFormType = $TicketFormType;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getTrafficType()
    {
      return $this->TrafficType;
    }

    /**
     * @param StringLength1to255 $TrafficType
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setTrafficType($TrafficType)
    {
      $this->TrafficType = $TrafficType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDate()
    {
      if ($this->IssuedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssuedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssuedDate
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setIssuedDate(\DateTime $IssuedDate)
    {
      $this->IssuedDate = $IssuedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getTicketType()
    {
      return $this->TicketType;
    }

    /**
     * @param StringLength1to255 $TicketType
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setTicketType($TicketType)
    {
      $this->TicketType = $TicketType;
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
     * @return \FilippoToso\Travelport\Rail\RailTicketInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
