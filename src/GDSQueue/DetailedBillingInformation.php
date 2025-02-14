<?php

namespace FilippoToso\Travelport\GDSQueue;

class DetailedBillingInformation
{

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    public $FormOfPaymentRef = null;

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    public $AirPricingInfoRef = null;

    /**
     * @var BillingDetailItem $BillingDetailItem
     */
    public $BillingDetailItem = null;

    /**
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param BillingDetailItem $BillingDetailItem
     */
    public function __construct($FormOfPaymentRef = null, $AirPricingInfoRef = null, $BillingDetailItem = null)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->BillingDetailItem = $BillingDetailItem;
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
     * @return \FilippoToso\Travelport\GDSQueue\DetailedBillingInformation
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
     * @return \FilippoToso\Travelport\GDSQueue\DetailedBillingInformation
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return BillingDetailItem
     */
    public function getBillingDetailItem()
    {
      return $this->BillingDetailItem;
    }

    /**
     * @param BillingDetailItem $BillingDetailItem
     * @return \FilippoToso\Travelport\GDSQueue\DetailedBillingInformation
     */
    public function setBillingDetailItem($BillingDetailItem)
    {
      $this->BillingDetailItem = $BillingDetailItem;
      return $this;
    }

}
