<?php

namespace FilippoToso\Travelport\UProfile;

class typeDateRange
{

    /**
     * @var date $StartDate
     */
    public $StartDate = null;

    /**
     * @var date $EndDate
     */
    public $EndDate = null;

    /**
     * @param date $StartDate
     * @param date $EndDate
     */
    public function __construct($StartDate = null, $EndDate = null)
    {
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
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
     * @return \FilippoToso\Travelport\UProfile\typeDateRange
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return \FilippoToso\Travelport\UProfile\typeDateRange
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

}
