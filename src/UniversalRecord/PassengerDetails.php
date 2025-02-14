<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PassengerDetails
{

    /**
     * @var LoyaltyCardDetails $LoyaltyCardDetails
     */
    public $LoyaltyCardDetails = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typePTC $Code
     */
    public $Code = null;

    /**
     * @var int $Age
     */
    public $Age = null;

    /**
     * @param LoyaltyCardDetails $LoyaltyCardDetails
     * @param typeRef $Key
     * @param typePTC $Code
     * @param int $Age
     */
    public function __construct($LoyaltyCardDetails = null, $Key = null, $Code = null, $Age = null)
    {
      $this->LoyaltyCardDetails = $LoyaltyCardDetails;
      $this->Key = $Key;
      $this->Code = $Code;
      $this->Age = $Age;
    }

    /**
     * @return LoyaltyCardDetails
     */
    public function getLoyaltyCardDetails()
    {
      return $this->LoyaltyCardDetails;
    }

    /**
     * @param LoyaltyCardDetails $LoyaltyCardDetails
     * @return \FilippoToso\Travelport\UniversalRecord\PassengerDetails
     */
    public function setLoyaltyCardDetails($LoyaltyCardDetails)
    {
      $this->LoyaltyCardDetails = $LoyaltyCardDetails;
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
     * @return \FilippoToso\Travelport\UniversalRecord\PassengerDetails
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typePTC $Code
     * @return \FilippoToso\Travelport\UniversalRecord\PassengerDetails
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
      return $this->Age;
    }

    /**
     * @param int $Age
     * @return \FilippoToso\Travelport\UniversalRecord\PassengerDetails
     */
    public function setAge($Age)
    {
      $this->Age = $Age;
      return $this;
    }

}
