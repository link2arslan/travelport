<?php

namespace FilippoToso\Travelport\Util;

class RefundFailureInfo
{

    /**
     * @var StringLength1to13 $TicketNumber
     */
    public $TicketNumber = null;

    /**
     * @var Name $Name
     */
    public $Name = null;

    /**
     * @var typeTCRNumber $TCRNumber
     */
    public $TCRNumber = null;

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var int $Code
     */
    public $Code = null;

    /**
     * @var string $Message
     */
    public $Message = null;

    /**
     * @param StringLength1to13 $TicketNumber
     * @param Name $Name
     * @param typeTCRNumber $TCRNumber
     * @param typeRef[] $BookingTravelerRef
     * @param int $Code
     * @param string $Message
     */
    public function __construct($TicketNumber = null, $Name = null, $TCRNumber = null, array $BookingTravelerRef = null, $Code = null, $Message = null)
    {
      $this->TicketNumber = $TicketNumber;
      $this->Name = $Name;
      $this->TCRNumber = $TCRNumber;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->Code = $Code;
      $this->Message = $Message;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\Util\RefundFailureInfo
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
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
     * @return \FilippoToso\Travelport\Util\RefundFailureInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeTCRNumber
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber $TCRNumber
     * @return \FilippoToso\Travelport\Util\RefundFailureInfo
     */
    public function setTCRNumber($TCRNumber)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
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
     * @return \FilippoToso\Travelport\Util\RefundFailureInfo
     */
    public function setBookingTravelerRef(array $BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\Util\RefundFailureInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FilippoToso\Travelport\Util\RefundFailureInfo
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
