<?php

namespace FilippoToso\Travelport\Air;

class IssuanceModifiers
{

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    public $FormOfPaymentRef = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var CustomerReceiptInfo $CustomerReceiptInfo
     */
    public $CustomerReceiptInfo = null;

    /**
     * @var EMDEndorsement $EMDEndorsement
     */
    public $EMDEndorsement = null;

    /**
     * @var EMDCommission $EMDCommission
     */
    public $EMDCommission = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

    /**
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @param FormOfPayment $FormOfPayment
     * @param CustomerReceiptInfo $CustomerReceiptInfo
     * @param EMDEndorsement $EMDEndorsement
     * @param EMDCommission $EMDCommission
     * @param typeCarrier $PlatingCarrier
     */
    public function __construct($FormOfPaymentRef = null, $FormOfPayment = null, $CustomerReceiptInfo = null, $EMDEndorsement = null, $EMDCommission = null, $PlatingCarrier = null)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->FormOfPayment = $FormOfPayment;
      $this->CustomerReceiptInfo = $CustomerReceiptInfo;
      $this->EMDEndorsement = $EMDEndorsement;
      $this->EMDCommission = $EMDCommission;
      $this->PlatingCarrier = $PlatingCarrier;
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
     * @return \FilippoToso\Travelport\Air\IssuanceModifiers
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
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
     * @return \FilippoToso\Travelport\Air\IssuanceModifiers
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return CustomerReceiptInfo
     */
    public function getCustomerReceiptInfo()
    {
      return $this->CustomerReceiptInfo;
    }

    /**
     * @param CustomerReceiptInfo $CustomerReceiptInfo
     * @return \FilippoToso\Travelport\Air\IssuanceModifiers
     */
    public function setCustomerReceiptInfo($CustomerReceiptInfo)
    {
      $this->CustomerReceiptInfo = $CustomerReceiptInfo;
      return $this;
    }

    /**
     * @return EMDEndorsement
     */
    public function getEMDEndorsement()
    {
      return $this->EMDEndorsement;
    }

    /**
     * @param EMDEndorsement $EMDEndorsement
     * @return \FilippoToso\Travelport\Air\IssuanceModifiers
     */
    public function setEMDEndorsement($EMDEndorsement)
    {
      $this->EMDEndorsement = $EMDEndorsement;
      return $this;
    }

    /**
     * @return EMDCommission
     */
    public function getEMDCommission()
    {
      return $this->EMDCommission;
    }

    /**
     * @param EMDCommission $EMDCommission
     * @return \FilippoToso\Travelport\Air\IssuanceModifiers
     */
    public function setEMDCommission($EMDCommission)
    {
      $this->EMDCommission = $EMDCommission;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param typeCarrier $PlatingCarrier
     * @return \FilippoToso\Travelport\Air\IssuanceModifiers
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

}
