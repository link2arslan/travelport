<?php

namespace FilippoToso\Travelport\Util;

class typePolicyCodesList
{

    /**
     * @var PolicyCode[] $PolicyCode
     */
    public $PolicyCode = null;

    /**
     * @var MinPolicyCode[] $MinPolicyCode
     */
    public $MinPolicyCode = null;

    /**
     * @var MaxPolicyCode[] $MaxPolicyCode
     */
    public $MaxPolicyCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PolicyCode[]
     */
    public function getPolicyCode()
    {
      return $this->PolicyCode;
    }

    /**
     * @param PolicyCode[] $PolicyCode
     * @return \FilippoToso\Travelport\Util\typePolicyCodesList
     */
    public function setPolicyCode(array $PolicyCode = null)
    {
      $this->PolicyCode = $PolicyCode;
      return $this;
    }

    /**
     * @return MinPolicyCode[]
     */
    public function getMinPolicyCode()
    {
      return $this->MinPolicyCode;
    }

    /**
     * @param MinPolicyCode[] $MinPolicyCode
     * @return \FilippoToso\Travelport\Util\typePolicyCodesList
     */
    public function setMinPolicyCode(array $MinPolicyCode = null)
    {
      $this->MinPolicyCode = $MinPolicyCode;
      return $this;
    }

    /**
     * @return MaxPolicyCode[]
     */
    public function getMaxPolicyCode()
    {
      return $this->MaxPolicyCode;
    }

    /**
     * @param MaxPolicyCode[] $MaxPolicyCode
     * @return \FilippoToso\Travelport\Util\typePolicyCodesList
     */
    public function setMaxPolicyCode(array $MaxPolicyCode = null)
    {
      $this->MaxPolicyCode = $MaxPolicyCode;
      return $this;
    }

}
