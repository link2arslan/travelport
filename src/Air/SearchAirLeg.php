<?php

namespace FilippoToso\Travelport\Air;

class SearchAirLeg
{

    /**
     * @var typeSearchLocation[] $SearchOrigin
     */
    public $SearchOrigin = null;

    /**
     * @var typeSearchLocation[] $SearchDestination
     */
    public $SearchDestination = null;

    /**
     * @var typeFlexibleTimeSpec[] $SearchDepTime
     */
    public $SearchDepTime = null;

    /**
     * @var typeTimeSpec[] $SearchArvTime
     */
    public $SearchArvTime = null;

    /**
     * @var AirLegModifiers $AirLegModifiers
     */
    public $AirLegModifiers = null;

    /**
     * @param typeSearchLocation[] $SearchOrigin
     * @param typeFlexibleTimeSpec[] $SearchDepTime
     * @param typeTimeSpec[] $SearchArvTime
     * @param AirLegModifiers $AirLegModifiers
     */
    public function __construct(array $SearchOrigin = null,array $SearchDestination = null, array $SearchDepTime = null, array $SearchArvTime = null, $AirLegModifiers = null)
    {
      $this->SearchOrigin = $SearchOrigin;
      $this->SearchDestination = $SearchDestination;
      $this->SearchDepTime = $SearchDepTime;
      $this->SearchArvTime = $SearchArvTime;
      $this->AirLegModifiers = $AirLegModifiers;
    }

    /**
     * @return typeSearchLocation[]
     */
    public function getSearchOrigin()
    {
      return $this->SearchOrigin;
    }

    /**
     * @param typeSearchLocation[] $SearchOrigin
     * @return \FilippoToso\Travelport\Air\SearchAirLeg
     */
    public function setSearchOrigin(array $SearchOrigin)
    {
      $this->SearchOrigin = $SearchOrigin;
      return $this;
    }

    /**
     * @return typeSearchLocation[]
     */
    public function getSearchDestination()
    {
      return $this->SearchDestination;
    }

    /**
     * @param typeSearchLocation[] $SearchDestination
     * @return \FilippoToso\Travelport\Air\SearchAirLeg
     */
    public function setSearchDestination(array $SearchDestination = null)
    {
      $this->SearchDestination = $SearchDestination;
      return $this;
    }

    /**
     * @return typeFlexibleTimeSpec[]
     */
    public function getSearchDepTime()
    {
      return $this->SearchDepTime;
    }

    /**
     * @param typeFlexibleTimeSpec[] $SearchDepTime
     * @return \FilippoToso\Travelport\Air\SearchAirLeg
     */
    public function setSearchDepTime(array $SearchDepTime)
    {
      $this->SearchDepTime = $SearchDepTime;
      return $this;
    }

    /**
     * @return typeTimeSpec[]
     */
    public function getSearchArvTime()
    {
      return $this->SearchArvTime;
    }

    /**
     * @param typeTimeSpec[] $SearchArvTime
     * @return \FilippoToso\Travelport\Air\SearchAirLeg
     */
    public function setSearchArvTime(array $SearchArvTime)
    {
      $this->SearchArvTime = $SearchArvTime;
      return $this;
    }

    /**
     * @return AirLegModifiers
     */
    public function getAirLegModifiers()
    {
      return $this->AirLegModifiers;
    }

    /**
     * @param AirLegModifiers $AirLegModifiers
     * @return \FilippoToso\Travelport\Air\SearchAirLeg
     */
    public function setAirLegModifiers($AirLegModifiers)
    {
      $this->AirLegModifiers = $AirLegModifiers;
      return $this;
    }

}
