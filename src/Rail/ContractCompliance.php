<?php

namespace FilippoToso\Travelport\Rail;

class ContractCompliance
{

    /**
     * @var boolean $InContract
     */
    public $InContract = null;

    /**
     * @var StringLength1to128 $ContractToken
     */
    public $ContractToken = null;

    /**
     * @param boolean $InContract
     * @param StringLength1to128 $ContractToken
     */
    public function __construct($InContract = null, $ContractToken = null)
    {
      $this->InContract = $InContract;
      $this->ContractToken = $ContractToken;
    }

    /**
     * @return boolean
     */
    public function getInContract()
    {
      return $this->InContract;
    }

    /**
     * @param boolean $InContract
     * @return \FilippoToso\Travelport\Rail\ContractCompliance
     */
    public function setInContract($InContract)
    {
      $this->InContract = $InContract;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getContractToken()
    {
      return $this->ContractToken;
    }

    /**
     * @param StringLength1to128 $ContractToken
     * @return \FilippoToso\Travelport\Rail\ContractCompliance
     */
    public function setContractToken($ContractToken)
    {
      $this->ContractToken = $ContractToken;
      return $this;
    }

}
