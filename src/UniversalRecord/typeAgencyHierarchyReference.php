<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeAgencyHierarchyReference
{

    /**
     * @var typeProfileID $ProfileID
     */
    public $ProfileID = null;

    /**
     * @var typeAgencyProfileLevel $ProfileType
     */
    public $ProfileType = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeAgencyProfileLevel $ProfileType
     */
    public function __construct($ProfileID = null, $ProfileType = null)
    {
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UniversalRecord\typeAgencyHierarchyReference
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeAgencyProfileLevel
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeAgencyProfileLevel $ProfileType
     * @return \FilippoToso\Travelport\UniversalRecord\typeAgencyHierarchyReference
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
