<?php

namespace FilippoToso\Travelport\Rail;

class ProfileAssociation
{

    /**
     * @var typeRef $TravelerID
     */
    public $TravelerID = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    public $BookingTravelerRef = null;

    /**
     * @param typeRef $TravelerID
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($TravelerID = null, $BookingTravelerRef = null)
    {
      $this->TravelerID = $TravelerID;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typeRef
     */
    public function getTravelerID()
    {
      return $this->TravelerID;
    }

    /**
     * @param typeRef $TravelerID
     * @return \FilippoToso\Travelport\Rail\ProfileAssociation
     */
    public function setTravelerID($TravelerID)
    {
      $this->TravelerID = $TravelerID;
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
     * @return \FilippoToso\Travelport\Rail\ProfileAssociation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
