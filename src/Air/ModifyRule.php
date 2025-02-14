<?php

namespace FilippoToso\Travelport\Air;

class ModifyRule
{

    /**
     * @var ModificationType $Modification
     */
    public $Modification = null;

    /**
     * @var boolean $AutomaticallyAppliedOnAdd
     */
    public $AutomaticallyAppliedOnAdd = null;

    /**
     * @var boolean $CanDelete
     */
    public $CanDelete = null;

    /**
     * @var boolean $CanAdd
     */
    public $CanAdd = null;

    /**
     * @var boolean $Refundable
     */
    public $Refundable = null;

    /**
     * @var string $ProviderDefinedModificationType
     */
    public $ProviderDefinedModificationType = null;

    /**
     * @param ModificationType $Modification
     * @param boolean $AutomaticallyAppliedOnAdd
     * @param boolean $CanDelete
     * @param boolean $CanAdd
     * @param boolean $Refundable
     * @param string $ProviderDefinedModificationType
     */
    public function __construct($Modification = null, $AutomaticallyAppliedOnAdd = null, $CanDelete = null, $CanAdd = null, $Refundable = null, $ProviderDefinedModificationType = null)
    {
      $this->Modification = $Modification;
      $this->AutomaticallyAppliedOnAdd = $AutomaticallyAppliedOnAdd;
      $this->CanDelete = $CanDelete;
      $this->CanAdd = $CanAdd;
      $this->Refundable = $Refundable;
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
    }

    /**
     * @return ModificationType
     */
    public function getModification()
    {
      return $this->Modification;
    }

    /**
     * @param ModificationType $Modification
     * @return \FilippoToso\Travelport\Air\ModifyRule
     */
    public function setModification($Modification)
    {
      $this->Modification = $Modification;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutomaticallyAppliedOnAdd()
    {
      return $this->AutomaticallyAppliedOnAdd;
    }

    /**
     * @param boolean $AutomaticallyAppliedOnAdd
     * @return \FilippoToso\Travelport\Air\ModifyRule
     */
    public function setAutomaticallyAppliedOnAdd($AutomaticallyAppliedOnAdd)
    {
      $this->AutomaticallyAppliedOnAdd = $AutomaticallyAppliedOnAdd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanDelete()
    {
      return $this->CanDelete;
    }

    /**
     * @param boolean $CanDelete
     * @return \FilippoToso\Travelport\Air\ModifyRule
     */
    public function setCanDelete($CanDelete)
    {
      $this->CanDelete = $CanDelete;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanAdd()
    {
      return $this->CanAdd;
    }

    /**
     * @param boolean $CanAdd
     * @return \FilippoToso\Travelport\Air\ModifyRule
     */
    public function setCanAdd($CanAdd)
    {
      $this->CanAdd = $CanAdd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \FilippoToso\Travelport\Air\ModifyRule
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderDefinedModificationType()
    {
      return $this->ProviderDefinedModificationType;
    }

    /**
     * @param string $ProviderDefinedModificationType
     * @return \FilippoToso\Travelport\Air\ModifyRule
     */
    public function setProviderDefinedModificationType($ProviderDefinedModificationType)
    {
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
      return $this;
    }

}
