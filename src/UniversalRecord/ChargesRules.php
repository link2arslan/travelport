<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ChargesRules
{

    /**
     * @var VoluntaryChanges[] $VoluntaryChanges
     */
    public $VoluntaryChanges = null;

    /**
     * @var VoluntaryRefunds[] $VoluntaryRefunds
     */
    public $VoluntaryRefunds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VoluntaryChanges[]
     */
    public function getVoluntaryChanges()
    {
      return $this->VoluntaryChanges;
    }

    /**
     * @param VoluntaryChanges[] $VoluntaryChanges
     * @return \FilippoToso\Travelport\UniversalRecord\ChargesRules
     */
    public function setVoluntaryChanges(array $VoluntaryChanges = null)
    {
      $this->VoluntaryChanges = $VoluntaryChanges;
      return $this;
    }

    /**
     * @return VoluntaryRefunds[]
     */
    public function getVoluntaryRefunds()
    {
      return $this->VoluntaryRefunds;
    }

    /**
     * @param VoluntaryRefunds[] $VoluntaryRefunds
     * @return \FilippoToso\Travelport\UniversalRecord\ChargesRules
     */
    public function setVoluntaryRefunds(array $VoluntaryRefunds = null)
    {
      $this->VoluntaryRefunds = $VoluntaryRefunds;
      return $this;
    }

}
