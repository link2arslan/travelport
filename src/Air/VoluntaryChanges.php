<?php

namespace FilippoToso\Travelport\Air;

class VoluntaryChanges
{

    /**
     * @var Penalty $Penalty
     */
    public $Penalty = null;

    /**
     * @var boolean $VolChangeInd
     */
    public $VolChangeInd = null;

    /**
     * @param Penalty $Penalty
     * @param boolean $VolChangeInd
     */
    public function __construct($Penalty = null, $VolChangeInd = null)
    {
      $this->Penalty = $Penalty;
      $this->VolChangeInd = $VolChangeInd;
    }

    /**
     * @return Penalty
     */
    public function getPenalty()
    {
      return $this->Penalty;
    }

    /**
     * @param Penalty $Penalty
     * @return \FilippoToso\Travelport\Air\VoluntaryChanges
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVolChangeInd()
    {
      return $this->VolChangeInd;
    }

    /**
     * @param boolean $VolChangeInd
     * @return \FilippoToso\Travelport\Air\VoluntaryChanges
     */
    public function setVolChangeInd($VolChangeInd)
    {
      $this->VolChangeInd = $VolChangeInd;
      return $this;
    }

}
