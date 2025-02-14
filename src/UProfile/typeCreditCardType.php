<?php

namespace FilippoToso\Travelport\UProfile;

class typeCreditCardType extends typePaymentCard
{

    /**
     * @var string $ExtendedPayment
     */
    public $ExtendedPayment = null;

    /**
     * @var string $CustomerReference
     */
    public $CustomerReference = null;

    /**
     * @var boolean $AcceptanceOverride
     */
    public $AcceptanceOverride = null;

    /**
     * @var boolean $ThirdPartyPayment
     */
    public $ThirdPartyPayment = null;

    /**
     * @var string $BankName
     */
    public $BankName = null;

    /**
     * @var typeCountry $BankCountryCode
     */
    public $BankCountryCode = null;

    /**
     * @var typeState $BankStateCode
     */
    public $BankStateCode = null;

    /**
     * @var boolean $Enett
     */
    public $Enett = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous37 $Name
     * @param anonymous38 $CVV
     * @param anonymous39 $ApprovalCode
     * @param string $ExtendedPayment
     * @param string $CustomerReference
     * @param boolean $AcceptanceOverride
     * @param boolean $ThirdPartyPayment
     * @param string $BankName
     * @param typeCountry $BankCountryCode
     * @param typeState $BankStateCode
     * @param boolean $Enett
     */
    public function __construct($PhoneNumber = null, $Type = null, $Number = null, $ExpDate = null, $Name = null, $CVV = null, $ApprovalCode = null, $ExtendedPayment = null, $CustomerReference = null, $AcceptanceOverride = null, $ThirdPartyPayment = null, $BankName = null, $BankCountryCode = null, $BankStateCode = null, $Enett = null)
    {
      parent::__construct($PhoneNumber, $Type, $Number, $ExpDate, $Name, $CVV, $ApprovalCode);
      $this->ExtendedPayment = $ExtendedPayment;
      $this->CustomerReference = $CustomerReference;
      $this->AcceptanceOverride = $AcceptanceOverride;
      $this->ThirdPartyPayment = $ThirdPartyPayment;
      $this->BankName = $BankName;
      $this->BankCountryCode = $BankCountryCode;
      $this->BankStateCode = $BankStateCode;
      $this->Enett = $Enett;
    }

    /**
     * @return string
     */
    public function getExtendedPayment()
    {
      return $this->ExtendedPayment;
    }

    /**
     * @param string $ExtendedPayment
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setExtendedPayment($ExtendedPayment)
    {
      $this->ExtendedPayment = $ExtendedPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
      return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptanceOverride()
    {
      return $this->AcceptanceOverride;
    }

    /**
     * @param boolean $AcceptanceOverride
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setAcceptanceOverride($AcceptanceOverride)
    {
      $this->AcceptanceOverride = $AcceptanceOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThirdPartyPayment()
    {
      return $this->ThirdPartyPayment;
    }

    /**
     * @param boolean $ThirdPartyPayment
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setThirdPartyPayment($ThirdPartyPayment)
    {
      $this->ThirdPartyPayment = $ThirdPartyPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setBankName($BankName)
    {
      $this->BankName = $BankName;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getBankCountryCode()
    {
      return $this->BankCountryCode;
    }

    /**
     * @param typeCountry $BankCountryCode
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setBankCountryCode($BankCountryCode)
    {
      $this->BankCountryCode = $BankCountryCode;
      return $this;
    }

    /**
     * @return typeState
     */
    public function getBankStateCode()
    {
      return $this->BankStateCode;
    }

    /**
     * @param typeState $BankStateCode
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setBankStateCode($BankStateCode)
    {
      $this->BankStateCode = $BankStateCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnett()
    {
      return $this->Enett;
    }

    /**
     * @param boolean $Enett
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardType
     */
    public function setEnett($Enett)
    {
      $this->Enett = $Enett;
      return $this;
    }

}
