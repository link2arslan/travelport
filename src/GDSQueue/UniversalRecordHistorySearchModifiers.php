<?php

namespace FilippoToso\Travelport\GDSQueue;

class UniversalRecordHistorySearchModifiers
{

    /**
     * @var string $ElementType
     */
    public $ElementType = null;

    /**
     * @var date $ModifiedDate
     */
    public $ModifiedDate = null;

    /**
     * @var ModifiedRange $ModifiedRange
     */
    public $ModifiedRange = null;

    /**
     * @var typeMaxResults $MaxResults
     */
    public $MaxResults = null;

    /**
     * @var typeStartFromResult $StartFromResult
     */
    public $StartFromResult = null;

    /**
     * @var UNKNOWN $ModifiedBy
     */
    public $ModifiedBy = null;

    /**
     * @var boolean $DebugMode
     */
    public $DebugMode = null;

    /**
     * @param date $ModifiedDate
     * @param ModifiedRange $ModifiedRange
     * @param typeMaxResults $MaxResults
     * @param typeStartFromResult $StartFromResult
     * @param UNKNOWN $ModifiedBy
     * @param boolean $DebugMode
     */
    public function __construct($ModifiedDate = null, $ModifiedRange = null, $MaxResults = null, $StartFromResult = null, $ModifiedBy = null, $DebugMode = null)
    {
      $this->ModifiedDate = $ModifiedDate;
      $this->ModifiedRange = $ModifiedRange;
      $this->MaxResults = $MaxResults;
      $this->StartFromResult = $StartFromResult;
      $this->ModifiedBy = $ModifiedBy;
      $this->DebugMode = $DebugMode;
    }

    /**
     * @return string
     */
    public function getElementType()
    {
      return $this->ElementType;
    }

    /**
     * @param string $ElementType
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordHistorySearchModifiers
     */
    public function setElementType($ElementType)
    {
      $this->ElementType = $ElementType;
      return $this;
    }

    /**
     * @return date
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param date $ModifiedDate
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return ModifiedRange
     */
    public function getModifiedRange()
    {
      return $this->ModifiedRange;
    }

    /**
     * @param ModifiedRange $ModifiedRange
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedRange($ModifiedRange)
    {
      $this->ModifiedRange = $ModifiedRange;
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
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordHistorySearchModifiers
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
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordHistorySearchModifiers
     */
    public function setStartFromResult($StartFromResult)
    {
      $this->StartFromResult = $StartFromResult;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getModifiedBy()
    {
      return $this->ModifiedBy;
    }

    /**
     * @param UNKNOWN $ModifiedBy
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordHistorySearchModifiers
     */
    public function setModifiedBy($ModifiedBy)
    {
      $this->ModifiedBy = $ModifiedBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDebugMode()
    {
      return $this->DebugMode;
    }

    /**
     * @param boolean $DebugMode
     * @return \FilippoToso\Travelport\GDSQueue\UniversalRecordHistorySearchModifiers
     */
    public function setDebugMode($DebugMode)
    {
      $this->DebugMode = $DebugMode;
      return $this;
    }

}
