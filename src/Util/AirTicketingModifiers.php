<?php

namespace FilippoToso\Travelport\Util;

class AirTicketingModifiers
{

    /**
     * @var DocumentModifiers $DocumentModifiers
     */
    public $DocumentModifiers = null;

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    public $AirPricingInfoRef = null;

    /**
     * @var TourCode $TourCode
     */
    public $TourCode = null;

    /**
     * @var TicketEndorsement $TicketEndorsement
     */
    public $TicketEndorsement = null;

    /**
     * @var Commission $Commission
     */
    public $Commission = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    public $FormOfPayment = null;

    /**
     * @var CreditCardAuth $CreditCardAuth
     */
    public $CreditCardAuth = null;

    /**
     * @var Payment $Payment
     */
    public $Payment = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    public $PlatingCarrier = null;

    /**
     * @var boolean $TicketedFareOverride
     */
    public $TicketedFareOverride = null;

    /**
     * @var boolean $SuppressTaxAndFee
     */
    public $SuppressTaxAndFee = null;

    /**
     * @var boolean $NoComparisonSFQ
     */
    public $NoComparisonSFQ = null;

    /**
     * @param DocumentModifiers $DocumentModifiers
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param TourCode $TourCode
     * @param TicketEndorsement $TicketEndorsement
     * @param Commission $Commission
     * @param FormOfPayment $FormOfPayment
     * @param CreditCardAuth $CreditCardAuth
     * @param Payment $Payment
     * @param typeCarrier $PlatingCarrier
     * @param boolean $TicketedFareOverride
     * @param boolean $SuppressTaxAndFee
     * @param boolean $NoComparisonSFQ
     */
    public function __construct($DocumentModifiers = null, $AirPricingInfoRef = null, $TourCode = null, $TicketEndorsement = null, $Commission = null, $FormOfPayment = null, $CreditCardAuth = null, $Payment = null, $PlatingCarrier = null, $TicketedFareOverride = null, $SuppressTaxAndFee = null, $NoComparisonSFQ = null)
    {
      $this->DocumentModifiers = $DocumentModifiers;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->TourCode = $TourCode;
      $this->TicketEndorsement = $TicketEndorsement;
      $this->Commission = $Commission;
      $this->FormOfPayment = $FormOfPayment;
      $this->CreditCardAuth = $CreditCardAuth;
      $this->Payment = $Payment;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->TicketedFareOverride = $TicketedFareOverride;
      $this->SuppressTaxAndFee = $SuppressTaxAndFee;
      $this->NoComparisonSFQ = $NoComparisonSFQ;
    }

    /**
     * @return DocumentModifiers
     */
    public function getDocumentModifiers()
    {
      return $this->DocumentModifiers;
    }

    /**
     * @param DocumentModifiers $DocumentModifiers
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setDocumentModifiers($DocumentModifiers)
    {
      $this->DocumentModifiers = $DocumentModifiers;
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
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return TourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param TourCode $TourCode
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return TicketEndorsement
     */
    public function getTicketEndorsement()
    {
      return $this->TicketEndorsement;
    }

    /**
     * @param TicketEndorsement $TicketEndorsement
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setTicketEndorsement($TicketEndorsement)
    {
      $this->TicketEndorsement = $TicketEndorsement;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
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
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return CreditCardAuth
     */
    public function getCreditCardAuth()
    {
      return $this->CreditCardAuth;
    }

    /**
     * @param CreditCardAuth $CreditCardAuth
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setCreditCardAuth($CreditCardAuth)
    {
      $this->CreditCardAuth = $CreditCardAuth;
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
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
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
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketedFareOverride()
    {
      return $this->TicketedFareOverride;
    }

    /**
     * @param boolean $TicketedFareOverride
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setTicketedFareOverride($TicketedFareOverride)
    {
      $this->TicketedFareOverride = $TicketedFareOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuppressTaxAndFee()
    {
      return $this->SuppressTaxAndFee;
    }

    /**
     * @param boolean $SuppressTaxAndFee
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setSuppressTaxAndFee($SuppressTaxAndFee)
    {
      $this->SuppressTaxAndFee = $SuppressTaxAndFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoComparisonSFQ()
    {
      return $this->NoComparisonSFQ;
    }

    /**
     * @param boolean $NoComparisonSFQ
     * @return \FilippoToso\Travelport\Util\AirTicketingModifiers
     */
    public function setNoComparisonSFQ($NoComparisonSFQ)
    {
      $this->NoComparisonSFQ = $NoComparisonSFQ;
      return $this;
    }

}
