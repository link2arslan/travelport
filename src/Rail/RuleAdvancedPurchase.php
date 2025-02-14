<?php

namespace FilippoToso\Travelport\Rail;

class RuleAdvancedPurchase
{

    /**
     * @var string $ReservationLatestPeriod
     */
    public $ReservationLatestPeriod = null;

    /**
     * @var typeStayUnit $ReservationLatestUnit
     */
    public $ReservationLatestUnit = null;

    /**
     * @var string $TicketingEarliestDate
     */
    public $TicketingEarliestDate = null;

    /**
     * @var string $TicketingLatestDate
     */
    public $TicketingLatestDate = null;

    /**
     * @var boolean $MoreRulesPresent
     */
    public $MoreRulesPresent = null;

    /**
     * @param string $ReservationLatestPeriod
     * @param typeStayUnit $ReservationLatestUnit
     * @param string $TicketingEarliestDate
     * @param string $TicketingLatestDate
     * @param boolean $MoreRulesPresent
     */
    public function __construct($ReservationLatestPeriod = null, $ReservationLatestUnit = null, $TicketingEarliestDate = null, $TicketingLatestDate = null, $MoreRulesPresent = null)
    {
      $this->ReservationLatestPeriod = $ReservationLatestPeriod;
      $this->ReservationLatestUnit = $ReservationLatestUnit;
      $this->TicketingEarliestDate = $TicketingEarliestDate;
      $this->TicketingLatestDate = $TicketingLatestDate;
      $this->MoreRulesPresent = $MoreRulesPresent;
    }

    /**
     * @return string
     */
    public function getReservationLatestPeriod()
    {
      return $this->ReservationLatestPeriod;
    }

    /**
     * @param string $ReservationLatestPeriod
     * @return \FilippoToso\Travelport\Rail\RuleAdvancedPurchase
     */
    public function setReservationLatestPeriod($ReservationLatestPeriod)
    {
      $this->ReservationLatestPeriod = $ReservationLatestPeriod;
      return $this;
    }

    /**
     * @return typeStayUnit
     */
    public function getReservationLatestUnit()
    {
      return $this->ReservationLatestUnit;
    }

    /**
     * @param typeStayUnit $ReservationLatestUnit
     * @return \FilippoToso\Travelport\Rail\RuleAdvancedPurchase
     */
    public function setReservationLatestUnit($ReservationLatestUnit)
    {
      $this->ReservationLatestUnit = $ReservationLatestUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketingEarliestDate()
    {
      return $this->TicketingEarliestDate;
    }

    /**
     * @param string $TicketingEarliestDate
     * @return \FilippoToso\Travelport\Rail\RuleAdvancedPurchase
     */
    public function setTicketingEarliestDate($TicketingEarliestDate)
    {
      $this->TicketingEarliestDate = $TicketingEarliestDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketingLatestDate()
    {
      return $this->TicketingLatestDate;
    }

    /**
     * @param string $TicketingLatestDate
     * @return \FilippoToso\Travelport\Rail\RuleAdvancedPurchase
     */
    public function setTicketingLatestDate($TicketingLatestDate)
    {
      $this->TicketingLatestDate = $TicketingLatestDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreRulesPresent()
    {
      return $this->MoreRulesPresent;
    }

    /**
     * @param boolean $MoreRulesPresent
     * @return \FilippoToso\Travelport\Rail\RuleAdvancedPurchase
     */
    public function setMoreRulesPresent($MoreRulesPresent)
    {
      $this->MoreRulesPresent = $MoreRulesPresent;
      return $this;
    }

}
