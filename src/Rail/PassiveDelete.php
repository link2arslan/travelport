<?php

namespace FilippoToso\Travelport\Rail;

class PassiveDelete
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
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeElement $Element
     * @param typeRef $Key
     */
    public function __construct($ReservationLocatorCode = null, $Element = null, $Key = null)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->Element = $Element;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Rail\PassiveDelete
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
     * @return \FilippoToso\Travelport\Rail\PassiveDelete
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
     * @return \FilippoToso\Travelport\Rail\PassiveDelete
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
