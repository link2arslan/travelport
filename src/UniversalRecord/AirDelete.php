<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirDelete
{

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    public $ReservationLocatorCode = null;

    /**
     * @var typeElement $Element
     */
    public $Element = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeElement $Element
     * @param typeRef $Key
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($ReservationLocatorCode = null, $Element = null, $Key = null, $BookingTravelerRef = null)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->Element = $Element;
      $this->Key = $Key;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\AirDelete
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      return $this;
    }

    /**
     * @return typeElement
     */
    public function getElement()
    {
      return $this->Element;
    }

    /**
     * @param typeElement $Element
     * @return \FilippoToso\Travelport\UniversalRecord\AirDelete
     */
    public function setElement($Element)
    {
      $this->Element = $Element;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirDelete
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirDelete
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
