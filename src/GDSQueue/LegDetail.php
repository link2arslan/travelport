<?php

namespace FilippoToso\Travelport\GDSQueue;

class LegDetail
{

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeIATACode $OriginAirport
     */
    public $OriginAirport = null;

    /**
     * @var typeIATACode $DestinationAirport
     */
    public $DestinationAirport = null;

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @var string $TravelDate
     */
    public $TravelDate = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    public $FlightNumber = null;

    /**
     * @param typeRef $Key
     * @param typeIATACode $OriginAirport
     * @param typeIATACode $DestinationAirport
     * @param typeCarrier $Carrier
     * @param string $TravelDate
     * @param typeFlightNumber $FlightNumber
     */
    public function __construct($Key = null, $OriginAirport = null, $DestinationAirport = null, $Carrier = null, $TravelDate = null, $FlightNumber = null)
    {
      $this->Key = $Key;
      $this->OriginAirport = $OriginAirport;
      $this->DestinationAirport = $DestinationAirport;
      $this->Carrier = $Carrier;
      $this->TravelDate = $TravelDate;
      $this->FlightNumber = $FlightNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\LegDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOriginAirport()
    {
      return $this->OriginAirport;
    }

    /**
     * @param typeIATACode $OriginAirport
     * @return \FilippoToso\Travelport\GDSQueue\LegDetail
     */
    public function setOriginAirport($OriginAirport)
    {
      $this->OriginAirport = $OriginAirport;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestinationAirport()
    {
      return $this->DestinationAirport;
    }

    /**
     * @param typeIATACode $DestinationAirport
     * @return \FilippoToso\Travelport\GDSQueue\LegDetail
     */
    public function setDestinationAirport($DestinationAirport)
    {
      $this->DestinationAirport = $DestinationAirport;
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
     * @return \FilippoToso\Travelport\GDSQueue\LegDetail
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getTravelDate()
    {
      return $this->TravelDate;
    }

    /**
     * @param string $TravelDate
     * @return \FilippoToso\Travelport\GDSQueue\LegDetail
     */
    public function setTravelDate($TravelDate)
    {
      $this->TravelDate = $TravelDate;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \FilippoToso\Travelport\GDSQueue\LegDetail
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}
