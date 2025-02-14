<?php

namespace FilippoToso\Travelport\Hotel;

class ARCPayment
{

    /**
     * @var anonymous50 $ARCIdentifier
     */
    public $ARCIdentifier = null;

    /**
     * @var anonymous51 $ARCPassword
     */
    public $ARCPassword = null;

    /**
     * @param anonymous50 $ARCIdentifier
     * @param anonymous51 $ARCPassword
     */
    public function __construct($ARCIdentifier = null, $ARCPassword = null)
    {
      $this->ARCIdentifier = $ARCIdentifier;
      $this->ARCPassword = $ARCPassword;
    }

    /**
     * @return anonymous50
     */
    public function getARCIdentifier()
    {
      return $this->ARCIdentifier;
    }

    /**
     * @param anonymous50 $ARCIdentifier
     * @return \FilippoToso\Travelport\Hotel\ARCPayment
     */
    public function setARCIdentifier($ARCIdentifier)
    {
      $this->ARCIdentifier = $ARCIdentifier;
      return $this;
    }

    /**
     * @return anonymous51
     */
    public function getARCPassword()
    {
      return $this->ARCPassword;
    }

    /**
     * @param anonymous51 $ARCPassword
     * @return \FilippoToso\Travelport\Hotel\ARCPayment
     */
    public function setARCPassword($ARCPassword)
    {
      $this->ARCPassword = $ARCPassword;
      return $this;
    }

}
