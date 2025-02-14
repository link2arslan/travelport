<?php

namespace FilippoToso\Travelport\Rail;

class OriginalItineraryDetails
{

    /**
     * @var typeItineraryCode $ItineraryType
     */
    public $ItineraryType = null;

    /**
     * @var boolean $BulkTicket
     */
    public $BulkTicket = null;

    /**
     * @var typePCC $TicketingPCC
     */
    public $TicketingPCC = null;

    /**
     * @var typeIATA $TicketingIATA
     */
    public $TicketingIATA = null;

    /**
     * @var typeCountry $TicketingCountry
     */
    public $TicketingCountry = null;

    /**
     * @var typeTourCode $TourCode
     */
    public $TourCode = null;

    /**
     * @var date $TicketingDate
     */
    public $TicketingDate = null;

    /**
     * @param typeItineraryCode $ItineraryType
     * @param boolean $BulkTicket
     * @param typePCC $TicketingPCC
     * @param typeIATA $TicketingIATA
     * @param typeCountry $TicketingCountry
     * @param typeTourCode $TourCode
     * @param date $TicketingDate
     */
    public function __construct($ItineraryType = null, $BulkTicket = null, $TicketingPCC = null, $TicketingIATA = null, $TicketingCountry = null, $TourCode = null, $TicketingDate = null)
    {
      $this->ItineraryType = $ItineraryType;
      $this->BulkTicket = $BulkTicket;
      $this->TicketingPCC = $TicketingPCC;
      $this->TicketingIATA = $TicketingIATA;
      $this->TicketingCountry = $TicketingCountry;
      $this->TourCode = $TourCode;
      $this->TicketingDate = $TicketingDate;
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
     * @return \FilippoToso\Travelport\Rail\OriginalItineraryDetails
     */
    public function setItineraryType($ItineraryType)
    {
      $this->ItineraryType = $ItineraryType;
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
     * @return \FilippoToso\Travelport\Rail\OriginalItineraryDetails
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getTicketingPCC()
    {
      return $this->TicketingPCC;
    }

    /**
     * @param typePCC $TicketingPCC
     * @return \FilippoToso\Travelport\Rail\OriginalItineraryDetails
     */
    public function setTicketingPCC($TicketingPCC)
    {
      $this->TicketingPCC = $TicketingPCC;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getTicketingIATA()
    {
      return $this->TicketingIATA;
    }

    /**
     * @param typeIATA $TicketingIATA
     * @return \FilippoToso\Travelport\Rail\OriginalItineraryDetails
     */
    public function setTicketingIATA($TicketingIATA)
    {
      $this->TicketingIATA = $TicketingIATA;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getTicketingCountry()
    {
      return $this->TicketingCountry;
    }

    /**
     * @param typeCountry $TicketingCountry
     * @return \FilippoToso\Travelport\Rail\OriginalItineraryDetails
     */
    public function setTicketingCountry($TicketingCountry)
    {
      $this->TicketingCountry = $TicketingCountry;
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
     * @return \FilippoToso\Travelport\Rail\OriginalItineraryDetails
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return date
     */
    public function getTicketingDate()
    {
      return $this->TicketingDate;
    }

    /**
     * @param date $TicketingDate
     * @return \FilippoToso\Travelport\Rail\OriginalItineraryDetails
     */
    public function setTicketingDate($TicketingDate)
    {
      $this->TicketingDate = $TicketingDate;
      return $this;
    }

}
