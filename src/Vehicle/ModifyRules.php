<?php

namespace FilippoToso\Travelport\Vehicle;

class ModifyRules
{

    /**
     * @var ModifyRule[] $ModifyRule
     */
    public $ModifyRule = null;

    /**
     * @var anonymous324 $SupportedModifications
     */
    public $SupportedModifications = null;

    /**
     * @var string $ProviderDefinedModificationType
     */
    public $ProviderDefinedModificationType = null;

    /**
     * @param ModifyRule[] $ModifyRule
     * @param anonymous324 $SupportedModifications
     * @param string $ProviderDefinedModificationType
     */
    public function __construct(array $ModifyRule = null, $SupportedModifications = null, $ProviderDefinedModificationType = null)
    {
      $this->ModifyRule = $ModifyRule;
      $this->SupportedModifications = $SupportedModifications;
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
    }

    /**
     * @return ModifyRule[]
     */
    public function getModifyRule()
    {
      return $this->ModifyRule;
    }

    /**
     * @param ModifyRule[] $ModifyRule
     * @return \FilippoToso\Travelport\Vehicle\ModifyRules
     */
    public function setModifyRule(array $ModifyRule)
    {
      $this->ModifyRule = $ModifyRule;
      return $this;
    }

    /**
     * @return anonymous324
     */
    public function getSupportedModifications()
    {
      return $this->SupportedModifications;
    }

    /**
     * @param anonymous324 $SupportedModifications
     * @return \FilippoToso\Travelport\Vehicle\ModifyRules
     */
    public function setSupportedModifications($SupportedModifications)
    {
      $this->SupportedModifications = $SupportedModifications;
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
     * @return \FilippoToso\Travelport\Vehicle\ModifyRules
     */
    public function setProviderDefinedModificationType($ProviderDefinedModificationType)
    {
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
      return $this;
    }

}
