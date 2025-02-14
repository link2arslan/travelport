<?php

namespace FilippoToso\Travelport\Hotel;

class InvoiceData
{

    /**
     * @var BookingTravelerInformation $BookingTravelerInformation
     */
    public $BookingTravelerInformation = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var string $InvoiceNumber
     */
    public $InvoiceNumber = null;

    /**
     * @var \DateTime $IssueDate
     */
    public $IssueDate = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @param BookingTravelerInformation $BookingTravelerInformation
     * @param typeRef $Key
     * @param string $InvoiceNumber
     * @param \DateTime $IssueDate
     * @param typeRef $ProviderReservationInfoRef
     */
    public function __construct($BookingTravelerInformation = null, $Key = null, $InvoiceNumber = null, \DateTime $IssueDate = null, $ProviderReservationInfoRef = null)
    {
      $this->BookingTravelerInformation = $BookingTravelerInformation;
      $this->Key = $Key;
      $this->InvoiceNumber = $InvoiceNumber;
      $this->IssueDate = $IssueDate ? $IssueDate->format(\DateTime::ATOM) : null;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
    }

    /**
     * @return BookingTravelerInformation
     */
    public function getBookingTravelerInformation()
    {
      return $this->BookingTravelerInformation;
    }

    /**
     * @param BookingTravelerInformation $BookingTravelerInformation
     * @return \FilippoToso\Travelport\Hotel\InvoiceData
     */
    public function setBookingTravelerInformation($BookingTravelerInformation)
    {
      $this->BookingTravelerInformation = $BookingTravelerInformation;
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
     * @return \FilippoToso\Travelport\Hotel\InvoiceData
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \FilippoToso\Travelport\Hotel\InvoiceData
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssueDate()
    {
      if ($this->IssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssueDate
     * @return \FilippoToso\Travelport\Hotel\InvoiceData
     */
    public function setIssueDate(\DateTime $IssueDate)
    {
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Hotel\InvoiceData
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

}
