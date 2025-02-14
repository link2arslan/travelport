<?php

namespace FilippoToso\Travelport\Terminal;

class ModifyRules
{

    /**
     * @var ModifyRule[] $ModifyRule
     */
    public $ModifyRule = null;

    /**
     * @var anonymous312 $SupportedModifications
     */
    public $SupportedModifications = null;

    /**
     * @var string $ProviderDefinedModificationType
     */
    public $ProviderDefinedModificationType = null;

    /**
     * @param ModifyRule[] $ModifyRule
     * @param anonymous312 $SupportedModifications
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
     * @return \FilippoToso\Travelport\Terminal\ModifyRules
     */
    public function setModifyRule(array $ModifyRule)
    {
      $this->ModifyRule = $ModifyRule;
      return $this;
    }

    /**
     * @return anonymous312
     */
    public function getSupportedModifications()
    {
      return $this->SupportedModifications;
    }

    /**
     * @param anonymous312 $SupportedModifications
     * @return \FilippoToso\Travelport\Terminal\ModifyRules
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
     * @return \FilippoToso\Travelport\Terminal\ModifyRules
     */
    public function setProviderDefinedModificationType($ProviderDefinedModificationType)
    {
      $this->ProviderDefinedModificationType = $ProviderDefinedModificationType;
      return $this;
    }

}
