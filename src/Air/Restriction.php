<?php

namespace FilippoToso\Travelport\Air;

class Restriction
{

    /**
     * @var DaysOfWeekRestriction $DaysOfWeekRestriction
     */
    public $DaysOfWeekRestriction = null;

    /**
     * @var RestrictionPassengerTypes $RestrictionPassengerTypes
     */
    public $RestrictionPassengerTypes = null;

    /**
     * @param DaysOfWeekRestriction $DaysOfWeekRestriction
     * @param RestrictionPassengerTypes $RestrictionPassengerTypes
     */
    public function __construct($DaysOfWeekRestriction = null, $RestrictionPassengerTypes = null)
    {
      $this->DaysOfWeekRestriction = $DaysOfWeekRestriction;
      $this->RestrictionPassengerTypes = $RestrictionPassengerTypes;
    }

    /**
     * @return DaysOfWeekRestriction
     */
    public function getDaysOfWeekRestriction()
    {
      return $this->DaysOfWeekRestriction;
    }

    /**
     * @param DaysOfWeekRestriction $DaysOfWeekRestriction
     * @return \FilippoToso\Travelport\Air\Restriction
     */
    public function setDaysOfWeekRestriction($DaysOfWeekRestriction)
    {
      $this->DaysOfWeekRestriction = $DaysOfWeekRestriction;
      return $this;
    }

    /**
     * @return RestrictionPassengerTypes
     */
    public function getRestrictionPassengerTypes()
    {
      return $this->RestrictionPassengerTypes;
    }

    /**
     * @param RestrictionPassengerTypes $RestrictionPassengerTypes
     * @return \FilippoToso\Travelport\Air\Restriction
     */
    public function setRestrictionPassengerTypes($RestrictionPassengerTypes)
    {
      $this->RestrictionPassengerTypes = $RestrictionPassengerTypes;
      return $this;
    }

}
