<?php

namespace FilippoToso\Travelport\GDSQueue;

class typePaymentInformation
{

    /**
     * @var typeVoucherInformation $Voucher
     */
    public $Voucher = null;

    /**
     * @var string $BillingNumber
     */
    public $BillingNumber = null;

    /**
     * @var string $BillingReferenceNumber
     */
    public $BillingReferenceNumber = null;

    /**
     * @var anonymous582 $PrePayment
     */
    public $PrePayment = null;

    /**
     * @param string $BillingNumber
     * @param string $BillingReferenceNumber
     * @param anonymous582 $PrePayment
     */
    public function __construct($BillingNumber = null, $BillingReferenceNumber = null, $PrePayment = null)
    {
      $this->BillingNumber = $BillingNumber;
      $this->BillingReferenceNumber = $BillingReferenceNumber;
      $this->PrePayment = $PrePayment;
    }

    /**
     * @return typeVoucherInformation
     */
    public function getVoucher()
    {
      return $this->Voucher;
    }

    /**
     * @param typeVoucherInformation $Voucher
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentInformation
     */
    public function setVoucher($Voucher)
    {
      $this->Voucher = $Voucher;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingNumber()
    {
      return $this->BillingNumber;
    }

    /**
     * @param string $BillingNumber
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentInformation
     */
    public function setBillingNumber($BillingNumber)
    {
      $this->BillingNumber = $BillingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingReferenceNumber()
    {
      return $this->BillingReferenceNumber;
    }

    /**
     * @param string $BillingReferenceNumber
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentInformation
     */
    public function setBillingReferenceNumber($BillingReferenceNumber)
    {
      $this->BillingReferenceNumber = $BillingReferenceNumber;
      return $this;
    }

    /**
     * @return anonymous582
     */
    public function getPrePayment()
    {
      return $this->PrePayment;
    }

    /**
     * @param anonymous582 $PrePayment
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentInformation
     */
    public function setPrePayment($PrePayment)
    {
      $this->PrePayment = $PrePayment;
      return $this;
    }

}
