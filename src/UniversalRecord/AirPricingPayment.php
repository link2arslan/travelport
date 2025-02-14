<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirPricingPayment
{

    /**
     * @var Payment $Payment
     */
    public $Payment = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    public $FormOfPaymentRef = null;

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    public $AirPricingInfoRef = null;

    /**
     * @param Payment $Payment
     * @param FormOfPayment $FormOfPayment
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @param AirPricingInfoRef $AirPricingInfoRef
     */
    public function __construct($Payment = null, $FormOfPayment = null, $FormOfPaymentRef = null, $AirPricingInfoRef = null)
    {
      $this->Payment = $Payment;
      $this->FormOfPayment = $FormOfPayment;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingPayment
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingPayment
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return FormOfPaymentRef
     */
    public function getFormOfPaymentRef()
    {
      return $this->FormOfPaymentRef;
    }

    /**
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingPayment
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
    }

    /**
     * @return AirPricingInfoRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirPricingPayment
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

}
