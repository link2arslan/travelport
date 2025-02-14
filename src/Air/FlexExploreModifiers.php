<?php

namespace FilippoToso\Travelport\Air;

class FlexExploreModifiers
{

    /**
     * @var typeIATACode[] $Destination
     */
    public $Destination = null;

    /**
     * @var anonymous671 $Type
     */
    public $Type = null;

    /**
     * @var int $Radius
     */
    public $Radius = null;

    /**
     * @var anonymous672 $GroupName
     */
    public $GroupName = null;

    /**
     * @param anonymous671 $Type
     * @param int $Radius
     * @param anonymous672 $GroupName
     */
    public function __construct($Type = null, $Radius = null, $GroupName = null)
    {
      $this->Type = $Type;
      $this->Radius = $Radius;
      $this->GroupName = $GroupName;
    }

    /**
     * @return typeIATACode[]
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode[] $Destination
     * @return \FilippoToso\Travelport\Air\FlexExploreModifiers
     */
    public function setDestination(array $Destination = null)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return anonymous671
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous671 $Type
     * @return \FilippoToso\Travelport\Air\FlexExploreModifiers
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
      return $this->Radius;
    }

    /**
     * @param int $Radius
     * @return \FilippoToso\Travelport\Air\FlexExploreModifiers
     */
    public function setRadius($Radius)
    {
      $this->Radius = $Radius;
      return $this;
    }

    /**
     * @return anonymous672
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param anonymous672 $GroupName
     * @return \FilippoToso\Travelport\Air\FlexExploreModifiers
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

}
