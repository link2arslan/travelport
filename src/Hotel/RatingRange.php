<?php

namespace FilippoToso\Travelport\Hotel;

class RatingRange
{

    /**
     * @var typeSimpleHotelRating $MinimumRating
     */
    public $MinimumRating = null;

    /**
     * @var typeSimpleHotelRating $MaximumRating
     */
    public $MaximumRating = null;

    /**
     * @param typeSimpleHotelRating $MinimumRating
     * @param typeSimpleHotelRating $MaximumRating
     */
    public function __construct($MinimumRating = null, $MaximumRating = null)
    {
      $this->MinimumRating = $MinimumRating;
      $this->MaximumRating = $MaximumRating;
    }

    /**
     * @return typeSimpleHotelRating
     */
    public function getMinimumRating()
    {
      return $this->MinimumRating;
    }

    /**
     * @param typeSimpleHotelRating $MinimumRating
     * @return \FilippoToso\Travelport\Hotel\RatingRange
     */
    public function setMinimumRating($MinimumRating)
    {
      $this->MinimumRating = $MinimumRating;
      return $this;
    }

    /**
     * @return typeSimpleHotelRating
     */
    public function getMaximumRating()
    {
      return $this->MaximumRating;
    }

    /**
     * @param typeSimpleHotelRating $MaximumRating
     * @return \FilippoToso\Travelport\Hotel\RatingRange
     */
    public function setMaximumRating($MaximumRating)
    {
      $this->MaximumRating = $MaximumRating;
      return $this;
    }

}
