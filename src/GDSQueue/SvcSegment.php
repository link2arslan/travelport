<?php

namespace FilippoToso\Travelport\GDSQueue;

class SvcSegment
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @var string $Status
     */
    public $Status = null;

    /**
     * @var int $NumberOfItems
     */
    public $NumberOfItems = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @var date $StartDate
     */
    public $StartDate = null;

    /**
     * @var int $TravelOrder
     */
    public $TravelOrder = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @var string $RFIC
     */
    public $RFIC = null;

    /**
     * @var string $RFISC
     */
    public $RFISC = null;

    /**
     * @var string $SvcDescription
     */
    public $SvcDescription = null;

    /**
     * @var typeMoney $Fee
     */
    public $Fee = null;

    /**
     * @var typeEMDNumber $EMDNumber
     */
    public $EMDNumber = null;

    /**
     * @param typeRef $Key
     * @param typeCarrier $Carrier
     * @param string $Status
     * @param int $NumberOfItems
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param date $StartDate
     * @param int $TravelOrder
     * @param typeRef $BookingTravelerRef
     * @param string $RFIC
     * @param string $RFISC
     * @param string $SvcDescription
     * @param typeMoney $Fee
     * @param typeEMDNumber $EMDNumber
     */
    public function __construct($Key = null, $Carrier = null, $Status = null, $NumberOfItems = null, $Origin = null, $Destination = null, $StartDate = null, $TravelOrder = null, $BookingTravelerRef = null, $RFIC = null, $RFISC = null, $SvcDescription = null, $Fee = null, $EMDNumber = null)
    {
      $this->Key = $Key;
      $this->Carrier = $Carrier;
      $this->Status = $Status;
      $this->NumberOfItems = $NumberOfItems;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->StartDate = $StartDate;
      $this->TravelOrder = $TravelOrder;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->RFIC = $RFIC;
      $this->RFISC = $RFISC;
      $this->SvcDescription = $SvcDescription;
      $this->Fee = $Fee;
      $this->EMDNumber = $EMDNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param int $NumberOfItems
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
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
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getRFIC()
    {
      return $this->RFIC;
    }

    /**
     * @param string $RFIC
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setRFIC($RFIC)
    {
      $this->RFIC = $RFIC;
      return $this;
    }

    /**
     * @return string
     */
    public function getRFISC()
    {
      return $this->RFISC;
    }

    /**
     * @param string $RFISC
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setRFISC($RFISC)
    {
      $this->RFISC = $RFISC;
      return $this;
    }

    /**
     * @return string
     */
    public function getSvcDescription()
    {
      return $this->SvcDescription;
    }

    /**
     * @param string $SvcDescription
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setSvcDescription($SvcDescription)
    {
      $this->SvcDescription = $SvcDescription;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFee()
    {
      return $this->Fee;
    }

    /**
     * @param typeMoney $Fee
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setFee($Fee)
    {
      $this->Fee = $Fee;
      return $this;
    }

    /**
     * @return typeEMDNumber
     */
    public function getEMDNumber()
    {
      return $this->EMDNumber;
    }

    /**
     * @param typeEMDNumber $EMDNumber
     * @return \FilippoToso\Travelport\GDSQueue\SvcSegment
     */
    public function setEMDNumber($EMDNumber)
    {
      $this->EMDNumber = $EMDNumber;
      return $this;
    }

}
