<?php

namespace FilippoToso\Travelport\GDSQueue;

class TCR
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var Payment $Payment
     */
    public $Payment = null;

    /**
     * @var BookingTraveler $BookingTraveler
     */
    public $BookingTraveler = null;

    /**
     * @var PassengerTicketNumber $PassengerTicketNumber
     */
    public $PassengerTicketNumber = null;

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    public $AirPricingInfo = null;

    /**
     * @var AgencyInfo $AgencyInfo
     */
    public $AgencyInfo = null;

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    public $AirReservationLocatorCode = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    public $SupplierLocator = null;

    /**
     * @var RefundRemark $RefundRemark
     */
    public $RefundRemark = null;

    /**
     * @var typeTCRNumber $TCRNumber
     */
    public $TCRNumber = null;

    /**
     * @var typeTCRStatus $Status
     */
    public $Status = null;

    /**
     * @var string $ModifiedDate
     */
    public $ModifiedDate = null;

    /**
     * @var string $ConfirmedDate
     */
    public $ConfirmedDate = null;

    /**
     * @var typeMoney $BasePrice
     */
    public $BasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    public $Taxes = null;

    /**
     * @var typeMoney $Fees
     */
    public $Fees = null;

    /**
     * @var boolean $Refundable
     */
    public $Refundable = null;

    /**
     * @var boolean $Exchangeable
     */
    public $Exchangeable = null;

    /**
     * @var boolean $Voidable
     */
    public $Voidable = null;

    /**
     * @var boolean $Modifiable
     */
    public $Modifiable = null;

    /**
     * @var anonymous722 $RefundAccessCode
     */
    public $RefundAccessCode = null;

    /**
     * @var typeMoney $RefundAmount
     */
    public $RefundAmount = null;

    /**
     * @var typeMoney $RefundFee
     */
    public $RefundFee = null;

    /**
     * @var typeMoney $ForfeitAmount
     */
    public $ForfeitAmount = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    public $ProviderLocatorCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @param FormOfPayment $FormOfPayment
     * @param Payment $Payment
     * @param BookingTraveler $BookingTraveler
     * @param PassengerTicketNumber $PassengerTicketNumber
     * @param AirPricingInfo $AirPricingInfo
     * @param AgencyInfo $AgencyInfo
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param SupplierLocator $SupplierLocator
     * @param RefundRemark $RefundRemark
     * @param typeTCRNumber $TCRNumber
     * @param typeTCRStatus $Status
     * @param string $ModifiedDate
     * @param string $ConfirmedDate
     * @param typeMoney $BasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $Fees
     * @param boolean $Refundable
     * @param boolean $Exchangeable
     * @param boolean $Voidable
     * @param boolean $Modifiable
     * @param anonymous722 $RefundAccessCode
     * @param typeMoney $RefundAmount
     * @param typeMoney $RefundFee
     * @param typeMoney $ForfeitAmount
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typeSupplierCode $SupplierCode
     */
    public function __construct($FormOfPayment = null, $Payment = null, $BookingTraveler = null, $PassengerTicketNumber = null, $AirPricingInfo = null, $AgencyInfo = null, $AirReservationLocatorCode = null, $SupplierLocator = null, $RefundRemark = null, $TCRNumber = null, $Status = null, $ModifiedDate = null, $ConfirmedDate = null, $BasePrice = null, $Taxes = null, $Fees = null, $Refundable = null, $Exchangeable = null, $Voidable = null, $Modifiable = null, $RefundAccessCode = null, $RefundAmount = null, $RefundFee = null, $ForfeitAmount = null, $ProviderCode = null, $ProviderLocatorCode = null, $SupplierCode = null)
    {
      $this->FormOfPayment = $FormOfPayment;
      $this->Payment = $Payment;
      $this->BookingTraveler = $BookingTraveler;
      $this->PassengerTicketNumber = $PassengerTicketNumber;
      $this->AirPricingInfo = $AirPricingInfo;
      $this->AgencyInfo = $AgencyInfo;
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->SupplierLocator = $SupplierLocator;
      $this->RefundRemark = $RefundRemark;
      $this->TCRNumber = $TCRNumber;
      $this->Status = $Status;
      $this->ModifiedDate = $ModifiedDate;
      $this->ConfirmedDate = $ConfirmedDate;
      $this->BasePrice = $BasePrice;
      $this->Taxes = $Taxes;
      $this->Fees = $Fees;
      $this->Refundable = $Refundable;
      $this->Exchangeable = $Exchangeable;
      $this->Voidable = $Voidable;
      $this->Modifiable = $Modifiable;
      $this->RefundAccessCode = $RefundAccessCode;
      $this->RefundAmount = $RefundAmount;
      $this->RefundFee = $RefundFee;
      $this->ForfeitAmount = $ForfeitAmount;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->SupplierCode = $SupplierCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
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
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return BookingTraveler
     */
    public function getBookingTraveler()
    {
      return $this->BookingTraveler;
    }

    /**
     * @param BookingTraveler $BookingTraveler
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setBookingTraveler($BookingTraveler)
    {
      $this->BookingTraveler = $BookingTraveler;
      return $this;
    }

    /**
     * @return PassengerTicketNumber
     */
    public function getPassengerTicketNumber()
    {
      return $this->PassengerTicketNumber;
    }

    /**
     * @param PassengerTicketNumber $PassengerTicketNumber
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setPassengerTicketNumber($PassengerTicketNumber)
    {
      $this->PassengerTicketNumber = $PassengerTicketNumber;
      return $this;
    }

    /**
     * @return AirPricingInfo
     */
    public function getAirPricingInfo()
    {
      return $this->AirPricingInfo;
    }

    /**
     * @param AirPricingInfo $AirPricingInfo
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
      return $this;
    }

    /**
     * @return AgencyInfo
     */
    public function getAgencyInfo()
    {
      return $this->AgencyInfo;
    }

    /**
     * @param AgencyInfo $AgencyInfo
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
      return $this;
    }

    /**
     * @return AirReservationLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

    /**
     * @return SupplierLocator
     */
    public function getSupplierLocator()
    {
      return $this->SupplierLocator;
    }

    /**
     * @param SupplierLocator $SupplierLocator
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return RefundRemark
     */
    public function getRefundRemark()
    {
      return $this->RefundRemark;
    }

    /**
     * @param RefundRemark $RefundRemark
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setRefundRemark($RefundRemark)
    {
      $this->RefundRemark = $RefundRemark;
      return $this;
    }

    /**
     * @return typeTCRNumber
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber $TCRNumber
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setTCRNumber($TCRNumber)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
    }

    /**
     * @return typeTCRStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeTCRStatus $Status
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param string $ModifiedDate
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmedDate()
    {
      return $this->ConfirmedDate;
    }

    /**
     * @param string $ConfirmedDate
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setConfirmedDate($ConfirmedDate)
    {
      $this->ConfirmedDate = $ConfirmedDate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param typeMoney $Fees
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExchangeable()
    {
      return $this->Exchangeable;
    }

    /**
     * @param boolean $Exchangeable
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setExchangeable($Exchangeable)
    {
      $this->Exchangeable = $Exchangeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVoidable()
    {
      return $this->Voidable;
    }

    /**
     * @param boolean $Voidable
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setVoidable($Voidable)
    {
      $this->Voidable = $Voidable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getModifiable()
    {
      return $this->Modifiable;
    }

    /**
     * @param boolean $Modifiable
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setModifiable($Modifiable)
    {
      $this->Modifiable = $Modifiable;
      return $this;
    }

    /**
     * @return anonymous722
     */
    public function getRefundAccessCode()
    {
      return $this->RefundAccessCode;
    }

    /**
     * @param anonymous722 $RefundAccessCode
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setRefundAccessCode($RefundAccessCode)
    {
      $this->RefundAccessCode = $RefundAccessCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param typeMoney $RefundAmount
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRefundFee()
    {
      return $this->RefundFee;
    }

    /**
     * @param typeMoney $RefundFee
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setRefundFee($RefundFee)
    {
      $this->RefundFee = $RefundFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getForfeitAmount()
    {
      return $this->ForfeitAmount;
    }

    /**
     * @param typeMoney $ForfeitAmount
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setForfeitAmount($ForfeitAmount)
    {
      $this->ForfeitAmount = $ForfeitAmount;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\GDSQueue\TCR
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
