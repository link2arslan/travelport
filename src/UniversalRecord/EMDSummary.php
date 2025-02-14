<?php

namespace FilippoToso\Travelport\UniversalRecord;

class EMDSummary
{

    /**
     * @var EMDCoupon $EMDCoupon
     */
    public $EMDCoupon = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeEMDNumber $Number
     */
    public $Number = null;

    /**
     * @var boolean $PrimaryDocumentIndicator
     */
    public $PrimaryDocumentIndicator = null;

    /**
     * @var typeEMDNumber $InConjunctionWith
     */
    public $InConjunctionWith = null;

    /**
     * @var typeTicketNumber $AssociatedTicketNumber
     */
    public $AssociatedTicketNumber = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

    /**
     * @var \DateTime $IssueDate
     */
    public $IssueDate = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param EMDCoupon $EMDCoupon
     * @param typeRef $Key
     * @param typeEMDNumber $Number
     * @param boolean $PrimaryDocumentIndicator
     * @param typeEMDNumber $InConjunctionWith
     * @param typeTicketNumber $AssociatedTicketNumber
     * @param typeCarrier $PlatingCarrier
     * @param \DateTime $IssueDate
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($EMDCoupon = null, $Key = null, $Number = null, $PrimaryDocumentIndicator = null, $InConjunctionWith = null, $AssociatedTicketNumber = null, $PlatingCarrier = null, \DateTime $IssueDate = null, $ElStat = null, $KeyOverride = null)
    {
      $this->EMDCoupon = $EMDCoupon;
      $this->Key = $Key;
      $this->Number = $Number;
      $this->PrimaryDocumentIndicator = $PrimaryDocumentIndicator;
      $this->InConjunctionWith = $InConjunctionWith;
      $this->AssociatedTicketNumber = $AssociatedTicketNumber;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->IssueDate = $IssueDate ? $IssueDate->format(\DateTime::ATOM) : null;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return EMDCoupon
     */
    public function getEMDCoupon()
    {
      return $this->EMDCoupon;
    }

    /**
     * @param EMDCoupon $EMDCoupon
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setEMDCoupon($EMDCoupon)
    {
      $this->EMDCoupon = $EMDCoupon;
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeEMDNumber
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param typeEMDNumber $Number
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimaryDocumentIndicator()
    {
      return $this->PrimaryDocumentIndicator;
    }

    /**
     * @param boolean $PrimaryDocumentIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setPrimaryDocumentIndicator($PrimaryDocumentIndicator)
    {
      $this->PrimaryDocumentIndicator = $PrimaryDocumentIndicator;
      return $this;
    }

    /**
     * @return typeEMDNumber
     */
    public function getInConjunctionWith()
    {
      return $this->InConjunctionWith;
    }

    /**
     * @param typeEMDNumber $InConjunctionWith
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setInConjunctionWith($InConjunctionWith)
    {
      $this->InConjunctionWith = $InConjunctionWith;
      return $this;
    }

    /**
     * @return typeTicketNumber
     */
    public function getAssociatedTicketNumber()
    {
      return $this->AssociatedTicketNumber;
    }

    /**
     * @param typeTicketNumber $AssociatedTicketNumber
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setAssociatedTicketNumber($AssociatedTicketNumber)
    {
      $this->AssociatedTicketNumber = $AssociatedTicketNumber;
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setIssueDate(\DateTime $IssueDate)
    {
      $this->IssueDate = $IssueDate->format(\DateTime::ATOM);
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
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
     * @return \FilippoToso\Travelport\UniversalRecord\EMDSummary
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
