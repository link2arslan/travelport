<?php

namespace FilippoToso\Travelport\Hotel;

class ServiceRuleType
{

    /**
     * @var ApplicationRules $ApplicationRules
     */
    public $ApplicationRules = null;

    /**
     * @var ApplicationLevel $ApplicationLevel
     */
    public $ApplicationLevel = null;

    /**
     * @var ModifyRules $ModifyRules
     */
    public $ModifyRules = null;

    /**
     * @var SecondaryTypeRules $SecondaryTypeRules
     */
    public $SecondaryTypeRules = null;

    /**
     * @var FormattedTextTextType[] $Remarks
     */
    public $Remarks = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param typeRef $Key
     */
    public function __construct($Key = null)
    {
      $this->Key = $Key;
    }

    /**
     * @return ApplicationRules
     */
    public function getApplicationRules()
    {
      return $this->ApplicationRules;
    }

    /**
     * @param ApplicationRules $ApplicationRules
     * @return \FilippoToso\Travelport\Hotel\ServiceRuleType
     */
    public function setApplicationRules($ApplicationRules)
    {
      $this->ApplicationRules = $ApplicationRules;
      return $this;
    }

    /**
     * @return ApplicationLevel
     */
    public function getApplicationLevel()
    {
      return $this->ApplicationLevel;
    }

    /**
     * @param ApplicationLevel $ApplicationLevel
     * @return \FilippoToso\Travelport\Hotel\ServiceRuleType
     */
    public function setApplicationLevel($ApplicationLevel)
    {
      $this->ApplicationLevel = $ApplicationLevel;
      return $this;
    }

    /**
     * @return ModifyRules
     */
    public function getModifyRules()
    {
      return $this->ModifyRules;
    }

    /**
     * @param ModifyRules $ModifyRules
     * @return \FilippoToso\Travelport\Hotel\ServiceRuleType
     */
    public function setModifyRules($ModifyRules)
    {
      $this->ModifyRules = $ModifyRules;
      return $this;
    }

    /**
     * @return SecondaryTypeRules
     */
    public function getSecondaryTypeRules()
    {
      return $this->SecondaryTypeRules;
    }

    /**
     * @param SecondaryTypeRules $SecondaryTypeRules
     * @return \FilippoToso\Travelport\Hotel\ServiceRuleType
     */
    public function setSecondaryTypeRules($SecondaryTypeRules)
    {
      $this->SecondaryTypeRules = $SecondaryTypeRules;
      return $this;
    }

    /**
     * @return FormattedTextTextType[]
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param FormattedTextTextType[] $Remarks
     * @return \FilippoToso\Travelport\Hotel\ServiceRuleType
     */
    public function setRemarks(array $Remarks = null)
    {
      $this->Remarks = $Remarks;
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
     * @return \FilippoToso\Travelport\Hotel\ServiceRuleType
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
