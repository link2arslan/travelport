<?php

namespace FilippoToso\Travelport\GDSQueue;

class Enumeration
{

    /**
     * @var SolutionGroup $SolutionGroup
     */
    public $SolutionGroup = null;

    /**
     * @param SolutionGroup $SolutionGroup
     */
    public function __construct($SolutionGroup = null)
    {
      $this->SolutionGroup = $SolutionGroup;
    }

    /**
     * @return SolutionGroup
     */
    public function getSolutionGroup()
    {
      return $this->SolutionGroup;
    }

    /**
     * @param SolutionGroup $SolutionGroup
     * @return \FilippoToso\Travelport\GDSQueue\Enumeration
     */
    public function setSolutionGroup($SolutionGroup)
    {
      $this->SolutionGroup = $SolutionGroup;
      return $this;
    }

}
