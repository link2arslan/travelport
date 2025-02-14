<?php

namespace FilippoToso\Travelport\Air;

class Guarantee
{

    /**
     * @var CreditCard $CreditCard
     */
    public $CreditCard = null;

    /**
     * @var OtherGuaranteeInfo $OtherGuaranteeInfo
     */
    public $OtherGuaranteeInfo = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeRef $ReuseFOP
     */
    public $ReuseFOP = null;

    /**
     * @var typeExternalReference $ExternalReference
     */
    public $ExternalReference = null;

    /**
     * @var boolean $Reusable
     */
    public $Reusable = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param CreditCard $CreditCard
     * @param OtherGuaranteeInfo $OtherGuaranteeInfo
     * @param string $Type
     * @param typeRef $Key
     * @param typeRef $ReuseFOP
     * @param typeExternalReference $ExternalReference
     * @param boolean $Reusable
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($CreditCard = null, $OtherGuaranteeInfo = null, $Type = null, $Key = null, $ReuseFOP = null, $ExternalReference = null, $Reusable = null, $ElStat = null, $KeyOverride = null)
    {
      $this->CreditCard = $CreditCard;
      $this->OtherGuaranteeInfo = $OtherGuaranteeInfo;
      $this->Type = $Type;
      $this->Key = $Key;
      $this->ReuseFOP = $ReuseFOP;
      $this->ExternalReference = $ExternalReference;
      $this->Reusable = $Reusable;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

    /**
     * @return OtherGuaranteeInfo
     */
    public function getOtherGuaranteeInfo()
    {
      return $this->OtherGuaranteeInfo;
    }

    /**
     * @param OtherGuaranteeInfo $OtherGuaranteeInfo
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setOtherGuaranteeInfo($OtherGuaranteeInfo)
    {
      $this->OtherGuaranteeInfo = $OtherGuaranteeInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getReuseFOP()
    {
      return $this->ReuseFOP;
    }

    /**
     * @param typeRef $ReuseFOP
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setReuseFOP($ReuseFOP)
    {
      $this->ReuseFOP = $ReuseFOP;
      return $this;
    }

    /**
     * @return typeExternalReference
     */
    public function getExternalReference()
    {
      return $this->ExternalReference;
    }

    /**
     * @param typeExternalReference $ExternalReference
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setExternalReference($ExternalReference)
    {
      $this->ExternalReference = $ExternalReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReusable()
    {
      return $this->Reusable;
    }

    /**
     * @param boolean $Reusable
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setReusable($Reusable)
    {
      $this->Reusable = $Reusable;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Air\Guarantee
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
