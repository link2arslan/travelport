<?php

namespace FilippoToso\Travelport\System;

class Air extends typeTransactionsAllowed
{

    /**
     * @var boolean $OneWayShop
     */
    public $OneWayShop = null;

    /**
     * @var boolean $FlexExplore
     */
    public $FlexExplore = null;

    /**
     * @var boolean $RapidRepriceEnabled
     */
    public $RapidRepriceEnabled = null;

    /**
     * @var anonymous418 $Tier
     */
    public $Tier = null;

    /**
     * @var boolean $DaysEnabled
     */
    public $DaysEnabled = null;

    /**
     * @var boolean $WeekendsEnabled
     */
    public $WeekendsEnabled = null;

    /**
     * @var boolean $AirportsEnabled
     */
    public $AirportsEnabled = null;

    /**
     * @var boolean $ODEnabled
     */
    public $ODEnabled = null;

    /**
     * @param boolean $BookingEnabled
     * @param boolean $ShoppingEnabled
     * @param boolean $PricingEnabled
     * @param boolean $OneWayShop
     * @param boolean $FlexExplore
     * @param boolean $RapidRepriceEnabled
     * @param anonymous418 $Tier
     * @param boolean $DaysEnabled
     * @param boolean $WeekendsEnabled
     * @param boolean $AirportsEnabled
     * @param boolean $ODEnabled
     */
    public function __construct($BookingEnabled = null, $ShoppingEnabled = null, $PricingEnabled = null, $OneWayShop = null, $FlexExplore = null, $RapidRepriceEnabled = null, $Tier = null, $DaysEnabled = null, $WeekendsEnabled = null, $AirportsEnabled = null, $ODEnabled = null)
    {
      parent::__construct($BookingEnabled, $ShoppingEnabled, $PricingEnabled);
      $this->OneWayShop = $OneWayShop;
      $this->FlexExplore = $FlexExplore;
      $this->RapidRepriceEnabled = $RapidRepriceEnabled;
      $this->Tier = $Tier;
      $this->DaysEnabled = $DaysEnabled;
      $this->WeekendsEnabled = $WeekendsEnabled;
      $this->AirportsEnabled = $AirportsEnabled;
      $this->ODEnabled = $ODEnabled;
    }

    /**
     * @return boolean
     */
    public function getOneWayShop()
    {
      return $this->OneWayShop;
    }

    /**
     * @param boolean $OneWayShop
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setOneWayShop($OneWayShop)
    {
      $this->OneWayShop = $OneWayShop;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlexExplore()
    {
      return $this->FlexExplore;
    }

    /**
     * @param boolean $FlexExplore
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setFlexExplore($FlexExplore)
    {
      $this->FlexExplore = $FlexExplore;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRapidRepriceEnabled()
    {
      return $this->RapidRepriceEnabled;
    }

    /**
     * @param boolean $RapidRepriceEnabled
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setRapidRepriceEnabled($RapidRepriceEnabled)
    {
      $this->RapidRepriceEnabled = $RapidRepriceEnabled;
      return $this;
    }

    /**
     * @return anonymous418
     */
    public function getTier()
    {
      return $this->Tier;
    }

    /**
     * @param anonymous418 $Tier
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setTier($Tier)
    {
      $this->Tier = $Tier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDaysEnabled()
    {
      return $this->DaysEnabled;
    }

    /**
     * @param boolean $DaysEnabled
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setDaysEnabled($DaysEnabled)
    {
      $this->DaysEnabled = $DaysEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWeekendsEnabled()
    {
      return $this->WeekendsEnabled;
    }

    /**
     * @param boolean $WeekendsEnabled
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setWeekendsEnabled($WeekendsEnabled)
    {
      $this->WeekendsEnabled = $WeekendsEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAirportsEnabled()
    {
      return $this->AirportsEnabled;
    }

    /**
     * @param boolean $AirportsEnabled
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setAirportsEnabled($AirportsEnabled)
    {
      $this->AirportsEnabled = $AirportsEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getODEnabled()
    {
      return $this->ODEnabled;
    }

    /**
     * @param boolean $ODEnabled
     * @return \FilippoToso\Travelport\System\Air
     */
    public function setODEnabled($ODEnabled)
    {
      $this->ODEnabled = $ODEnabled;
      return $this;
    }

}
