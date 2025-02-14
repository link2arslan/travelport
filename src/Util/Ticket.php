<?php

namespace FilippoToso\Travelport\Util;

class Ticket
{

    /**
     * @var Coupon $Coupon
     */
    public $Coupon = null;

    /**
     * @var TicketEndorsement $TicketEndorsement
     */
    public $TicketEndorsement = null;

    /**
     * @var TourCode $TourCode
     */
    public $TourCode = null;

    /**
     * @var ExchangedTicketInfo $ExchangedTicketInfo
     */
    public $ExchangedTicketInfo = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeTicketNumber $TicketNumber
     */
    public $TicketNumber = null;

    /**
     * @var typeTicketStatus $TicketStatus
     */
    public $TicketStatus = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param Coupon $Coupon
     * @param TicketEndorsement $TicketEndorsement
     * @param TourCode $TourCode
     * @param ExchangedTicketInfo $ExchangedTicketInfo
     * @param typeRef $Key
     * @param typeTicketNumber $TicketNumber
     * @param typeTicketStatus $TicketStatus
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Coupon = null, $TicketEndorsement = null, $TourCode = null, $ExchangedTicketInfo = null, $Key = null, $TicketNumber = null, $TicketStatus = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Coupon = $Coupon;
      $this->TicketEndorsement = $TicketEndorsement;
      $this->TourCode = $TourCode;
      $this->ExchangedTicketInfo = $ExchangedTicketInfo;
      $this->Key = $Key;
      $this->TicketNumber = $TicketNumber;
      $this->TicketStatus = $TicketStatus;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return Coupon
     */
    public function getCoupon()
    {
      return $this->Coupon;
    }

    /**
     * @param Coupon $Coupon
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setCoupon($Coupon)
    {
      $this->Coupon = $Coupon;
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
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setTicketEndorsement($TicketEndorsement)
    {
      $this->TicketEndorsement = $TicketEndorsement;
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
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
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
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setExchangedTicketInfo($ExchangedTicketInfo)
    {
      $this->ExchangedTicketInfo = $ExchangedTicketInfo;
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
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeTicketNumber
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param typeTicketNumber $TicketNumber
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return typeTicketStatus
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param typeTicketStatus $TicketStatus
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
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
     * @return \FilippoToso\Travelport\Util\Ticket
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
     * @return \FilippoToso\Travelport\Util\Ticket
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
