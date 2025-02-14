<?php

namespace FilippoToso\Travelport\GDSQueue;

class HotelRulesModifiers
{

    /**
     * @var PermittedProviders $PermittedProviders
     */
    public $PermittedProviders = null;

    /**
     * @var NumberOfChildren $NumberOfChildren
     */
    public $NumberOfChildren = null;

    /**
     * @var HotelBedding $HotelBedding
     */
    public $HotelBedding = null;

    /**
     * @var typeOTACode $RateCategory
     */
    public $RateCategory = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    public $CorporateDiscountID = null;

    /**
     * @var int $NumberOfAdults
     */
    public $NumberOfAdults = null;

    /**
     * @var int $NumberOfRooms
     */
    public $NumberOfRooms = null;

    /**
     * @var int $TotalOccupants
     */
    public $TotalOccupants = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param PermittedProviders $PermittedProviders
     * @param NumberOfChildren $NumberOfChildren
     * @param HotelBedding $HotelBedding
     * @param CorporateDiscountID $CorporateDiscountID
     * @param int $NumberOfAdults
     * @param int $NumberOfRooms
     * @param int $TotalOccupants
     * @param typeRef $Key
     */
    public function __construct($PermittedProviders = null, $NumberOfChildren = null, $HotelBedding = null, $CorporateDiscountID = null, $NumberOfAdults = null, $NumberOfRooms = null, $TotalOccupants = null, $Key = null)
    {
      $this->PermittedProviders = $PermittedProviders;
      $this->NumberOfChildren = $NumberOfChildren;
      $this->HotelBedding = $HotelBedding;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->NumberOfAdults = $NumberOfAdults;
      $this->NumberOfRooms = $NumberOfRooms;
      $this->TotalOccupants = $TotalOccupants;
      $this->Key = $Key;
    }

    /**
     * @return PermittedProviders
     */
    public function getPermittedProviders()
    {
      return $this->PermittedProviders;
    }

    /**
     * @param PermittedProviders $PermittedProviders
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setPermittedProviders($PermittedProviders)
    {
      $this->PermittedProviders = $PermittedProviders;
      return $this;
    }

    /**
     * @return NumberOfChildren
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param NumberOfChildren $NumberOfChildren
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

    /**
     * @return HotelBedding
     */
    public function getHotelBedding()
    {
      return $this->HotelBedding;
    }

    /**
     * @param HotelBedding $HotelBedding
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setHotelBedding($HotelBedding)
    {
      $this->HotelBedding = $HotelBedding;
      return $this;
    }

    /**
     * @return typeOTACode
     */
    public function getRateCategory()
    {
      return $this->RateCategory;
    }

    /**
     * @param typeOTACode $RateCategory
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setRateCategory($RateCategory)
    {
      $this->RateCategory = $RateCategory;
      return $this;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfAdults()
    {
      return $this->NumberOfAdults;
    }

    /**
     * @param int $NumberOfAdults
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfRooms()
    {
      return $this->NumberOfRooms;
    }

    /**
     * @param int $NumberOfRooms
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setNumberOfRooms($NumberOfRooms)
    {
      $this->NumberOfRooms = $NumberOfRooms;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalOccupants()
    {
      return $this->TotalOccupants;
    }

    /**
     * @param int $TotalOccupants
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setTotalOccupants($TotalOccupants)
    {
      $this->TotalOccupants = $TotalOccupants;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\GDSQueue\HotelRulesModifiers
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
