<?php

namespace FilippoToso\Travelport\Hotel;

class AddSvc
{

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
     * @param string $RFIC
     * @param string $RFISC
     * @param string $SvcDescription
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param date $StartDate
     */
    public function __construct($RFIC = null, $RFISC = null, $SvcDescription = null, $Origin = null, $Destination = null, $StartDate = null)
    {
      $this->RFIC = $RFIC;
      $this->RFISC = $RFISC;
      $this->SvcDescription = $SvcDescription;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->StartDate = $StartDate;
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
     * @return \FilippoToso\Travelport\Hotel\AddSvc
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
     * @return \FilippoToso\Travelport\Hotel\AddSvc
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
     * @return \FilippoToso\Travelport\Hotel\AddSvc
     */
    public function setSvcDescription($SvcDescription)
    {
      $this->SvcDescription = $SvcDescription;
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
     * @return \FilippoToso\Travelport\Hotel\AddSvc
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
     * @return \FilippoToso\Travelport\Hotel\AddSvc
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
     * @return \FilippoToso\Travelport\Hotel\AddSvc
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

}
