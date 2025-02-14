<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeAgencyPayment
{

    /**
     * @var anonymous61 $AgencyBillingIdentifier
     */
    public $AgencyBillingIdentifier = null;

    /**
     * @var anonymous62 $AgencyBillingNumber
     */
    public $AgencyBillingNumber = null;

    /**
     * @var anonymous63 $AgencyBillingPassword
     */
    public $AgencyBillingPassword = null;

    /**
     * @param anonymous61 $AgencyBillingIdentifier
     * @param anonymous62 $AgencyBillingNumber
     * @param anonymous63 $AgencyBillingPassword
     */
    public function __construct($AgencyBillingIdentifier = null, $AgencyBillingNumber = null, $AgencyBillingPassword = null)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      $this->AgencyBillingPassword = $AgencyBillingPassword;
    }

    /**
     * @return anonymous61
     */
    public function getAgencyBillingIdentifier()
    {
      return $this->AgencyBillingIdentifier;
    }

    /**
     * @param anonymous61 $AgencyBillingIdentifier
     * @return \FilippoToso\Travelport\GDSQueue\typeAgencyPayment
     */
    public function setAgencyBillingIdentifier($AgencyBillingIdentifier)
    {
      $this->AgencyBillingIdentifier = $AgencyBillingIdentifier;
      return $this;
    }

    /**
     * @return anonymous62
     */
    public function getAgencyBillingNumber()
    {
      return $this->AgencyBillingNumber;
    }

    /**
     * @param anonymous62 $AgencyBillingNumber
     * @return \FilippoToso\Travelport\GDSQueue\typeAgencyPayment
     */
    public function setAgencyBillingNumber($AgencyBillingNumber)
    {
      $this->AgencyBillingNumber = $AgencyBillingNumber;
      return $this;
    }

    /**
     * @return anonymous63
     */
    public function getAgencyBillingPassword()
    {
      return $this->AgencyBillingPassword;
    }

    /**
     * @param anonymous63 $AgencyBillingPassword
     * @return \FilippoToso\Travelport\GDSQueue\typeAgencyPayment
     */
    public function setAgencyBillingPassword($AgencyBillingPassword)
    {
      $this->AgencyBillingPassword = $AgencyBillingPassword;
      return $this;
    }

}
