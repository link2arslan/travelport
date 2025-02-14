<?php

namespace FilippoToso\Travelport\UProfile;

class typeLoyaltyProgramEnrollmentHistory extends typeKeyElement
{

    /**
     * @var typeSupplierType $SupplierType
     */
    public $SupplierType = null;

    /**
     * @var typeSupplier $Supplier
     */
    public $Supplier = null;

    /**
     * @var StringLength1to255 $Number
     */
    public $Number = null;

    /**
     * @var StringLength1to128 $ProgramName
     */
    public $ProgramName = null;

    /**
     * @var StringLength1to128 $Status
     */
    public $Status = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    public $PriorityOrder = null;

    /**
     * @param typeRef $Key
     * @param typeSupplierType $SupplierType
     * @param typeSupplier $Supplier
     * @param StringLength1to255 $Number
     * @param StringLength1to128 $ProgramName
     * @param StringLength1to128 $Status
     * @param typePriorityOrder $PriorityOrder
     */
    public function __construct($Key = null, $SupplierType = null, $Supplier = null, $Number = null, $ProgramName = null, $Status = null, $PriorityOrder = null)
    {
      parent::__construct($Key);
      $this->SupplierType = $SupplierType;
      $this->Supplier = $Supplier;
      $this->Number = $Number;
      $this->ProgramName = $ProgramName;
      $this->Status = $Status;
      $this->PriorityOrder = $PriorityOrder;
    }

    /**
     * @return typeSupplierType
     */
    public function getSupplierType()
    {
      return $this->SupplierType;
    }

    /**
     * @param typeSupplierType $SupplierType
     * @return \FilippoToso\Travelport\UProfile\typeLoyaltyProgramEnrollmentHistory
     */
    public function setSupplierType($SupplierType)
    {
      $this->SupplierType = $SupplierType;
      return $this;
    }

    /**
     * @return typeSupplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param typeSupplier $Supplier
     * @return \FilippoToso\Travelport\UProfile\typeLoyaltyProgramEnrollmentHistory
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to255 $Number
     * @return \FilippoToso\Travelport\UProfile\typeLoyaltyProgramEnrollmentHistory
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getProgramName()
    {
      return $this->ProgramName;
    }

    /**
     * @param StringLength1to128 $ProgramName
     * @return \FilippoToso\Travelport\UProfile\typeLoyaltyProgramEnrollmentHistory
     */
    public function setProgramName($ProgramName)
    {
      $this->ProgramName = $ProgramName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param StringLength1to128 $Status
     * @return \FilippoToso\Travelport\UProfile\typeLoyaltyProgramEnrollmentHistory
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\typeLoyaltyProgramEnrollmentHistory
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

}
