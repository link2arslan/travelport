<?php

namespace FilippoToso\Travelport\Terminal;

class AgencyContactInfo
{

    /**
     * @var PhoneNumber $PhoneNumber
     */
    public $PhoneNumber = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param typeRef $Key
     */
    public function __construct($PhoneNumber = null, $Key = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->Key = $Key;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\Terminal\AgencyContactInfo
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
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
     * @return \FilippoToso\Travelport\Terminal\AgencyContactInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
