<?php

namespace FilippoToso\Travelport\GDSQueue;

class BaseSearchModifiers
{

    /**
     * @var typeDateSpec $TravelDate
     */
    public $TravelDate = null;

    /**
     * @var boolean $IncludeAllNames
     */
    public $IncludeAllNames = null;

    /**
     * @var boolean $IncludeAgentInfo
     */
    public $IncludeAgentInfo = null;

    /**
     * @var typeMaxResults $MaxResults
     */
    public $MaxResults = null;

    /**
     * @var typeStartFromResult $StartFromResult
     */
    public $StartFromResult = null;

    /**
     * @var boolean $ExcludeAir
     */
    public $ExcludeAir = null;

    /**
     * @var boolean $ExcludeVehicle
     */
    public $ExcludeVehicle = null;

    /**
     * @var boolean $ExcludeHotel
     */
    public $ExcludeHotel = null;

    /**
     * @param boolean $IncludeAllNames
     * @param boolean $IncludeAgentInfo
     * @param typeMaxResults $MaxResults
     * @param typeStartFromResult $StartFromResult
     * @param boolean $ExcludeAir
     * @param boolean $ExcludeVehicle
     * @param boolean $ExcludeHotel
     */
    public function __construct($IncludeAllNames = null, $IncludeAgentInfo = null, $MaxResults = null, $StartFromResult = null, $ExcludeAir = null, $ExcludeVehicle = null, $ExcludeHotel = null)
    {
      $this->IncludeAllNames = $IncludeAllNames;
      $this->IncludeAgentInfo = $IncludeAgentInfo;
      $this->MaxResults = $MaxResults;
      $this->StartFromResult = $StartFromResult;
      $this->ExcludeAir = $ExcludeAir;
      $this->ExcludeVehicle = $ExcludeVehicle;
      $this->ExcludeHotel = $ExcludeHotel;
    }

    /**
     * @return typeDateSpec
     */
    public function getTravelDate()
    {
      return $this->TravelDate;
    }

    /**
     * @param typeDateSpec $TravelDate
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setTravelDate($TravelDate)
    {
      $this->TravelDate = $TravelDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeAllNames()
    {
      return $this->IncludeAllNames;
    }

    /**
     * @param boolean $IncludeAllNames
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setIncludeAllNames($IncludeAllNames)
    {
      $this->IncludeAllNames = $IncludeAllNames;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeAgentInfo()
    {
      return $this->IncludeAgentInfo;
    }

    /**
     * @param boolean $IncludeAgentInfo
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setIncludeAgentInfo($IncludeAgentInfo)
    {
      $this->IncludeAgentInfo = $IncludeAgentInfo;
      return $this;
    }

    /**
     * @return typeMaxResults
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param typeMaxResults $MaxResults
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return typeStartFromResult
     */
    public function getStartFromResult()
    {
      return $this->StartFromResult;
    }

    /**
     * @param typeStartFromResult $StartFromResult
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeAir()
    {
      return $this->ExcludeAir;
    }

    /**
     * @param boolean $ExcludeAir
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setExcludeAir($ExcludeAir)
    {
      $this->ExcludeAir = $ExcludeAir;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeVehicle()
    {
      return $this->ExcludeVehicle;
    }

    /**
     * @param boolean $ExcludeVehicle
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setExcludeVehicle($ExcludeVehicle)
    {
      $this->ExcludeVehicle = $ExcludeVehicle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeHotel()
    {
      return $this->ExcludeHotel;
    }

    /**
     * @param boolean $ExcludeHotel
     * @return \FilippoToso\Travelport\GDSQueue\BaseSearchModifiers
     */
    public function setExcludeHotel($ExcludeHotel)
    {
      $this->ExcludeHotel = $ExcludeHotel;
      return $this;
    }

}
