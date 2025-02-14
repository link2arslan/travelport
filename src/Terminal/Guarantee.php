<?php

namespace FilippoToso\Travelport\Terminal;

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
     * @var anonymous297 $Type
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
     * @param anonymous297 $Type
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
     */
    public function setOtherGuaranteeInfo($OtherGuaranteeInfo)
    {
      $this->OtherGuaranteeInfo = $OtherGuaranteeInfo;
      return $this;
    }

    /**
     * @return anonymous297
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous297 $Type
     * @return \FilippoToso\Travelport\Terminal\Guarantee
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
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
     * @return \FilippoToso\Travelport\Terminal\Guarantee
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
