<?php

namespace FilippoToso\Travelport\Hotel;

class MealPlans
{

    /**
     * @var MealPlan[] $MealPlan
     */
    public $MealPlan = null;

    /**
     * @var typeTrinary $Breakfast
     */
    public $Breakfast = null;

    /**
     * @var typeTrinary $Lunch
     */
    public $Lunch = null;

    /**
     * @var typeTrinary $Dinner
     */
    public $Dinner = null;

    /**
     * @param typeTrinary $Breakfast
     * @param typeTrinary $Lunch
     * @param typeTrinary $Dinner
     */
    public function __construct($Breakfast = null, $Lunch = null, $Dinner = null)
    {
      $this->Breakfast = $Breakfast;
      $this->Lunch = $Lunch;
      $this->Dinner = $Dinner;
    }

    /**
     * @return MealPlan[]
     */
    public function getMealPlan()
    {
      return $this->MealPlan;
    }

    /**
     * @param MealPlan[] $MealPlan
     * @return \FilippoToso\Travelport\Hotel\MealPlans
     */
    public function setMealPlan(array $MealPlan = null)
    {
      $this->MealPlan = $MealPlan;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getBreakfast()
    {
      return $this->Breakfast;
    }

    /**
     * @param typeTrinary $Breakfast
     * @return \FilippoToso\Travelport\Hotel\MealPlans
     */
    public function setBreakfast($Breakfast)
    {
      $this->Breakfast = $Breakfast;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getLunch()
    {
      return $this->Lunch;
    }

    /**
     * @param typeTrinary $Lunch
     * @return \FilippoToso\Travelport\Hotel\MealPlans
     */
    public function setLunch($Lunch)
    {
      $this->Lunch = $Lunch;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getDinner()
    {
      return $this->Dinner;
    }

    /**
     * @param typeTrinary $Dinner
     * @return \FilippoToso\Travelport\Hotel\MealPlans
     */
    public function setDinner($Dinner)
    {
      $this->Dinner = $Dinner;
      return $this;
    }

}
