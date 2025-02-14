<?php

namespace FilippoToso\Travelport\Air;

class EMDSummaryInfo
{

    /**
     * @var EMDSummary $EMDSummary
     */
    public $EMDSummary = null;

    /**
     * @var EMDTravelerInfo $EMDTravelerInfo
     */
    public $EMDTravelerInfo = null;

    /**
     * @var Payment $Payment
     */
    public $Payment = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    public $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    public $KeyOverride = null;

    /**
     * @param EMDSummary $EMDSummary
     * @param EMDTravelerInfo $EMDTravelerInfo
     * @param Payment $Payment
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($EMDSummary = null, $EMDTravelerInfo = null, $Payment = null, $ProviderReservationInfoRef = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->EMDSummary = $EMDSummary;
      $this->EMDTravelerInfo = $EMDTravelerInfo;
      $this->Payment = $Payment;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return EMDSummary
     */
    public function getEMDSummary()
    {
      return $this->EMDSummary;
    }

    /**
     * @param EMDSummary $EMDSummary
     * @return \FilippoToso\Travelport\Air\EMDSummaryInfo
     */
    public function setEMDSummary($EMDSummary)
    {
      $this->EMDSummary = $EMDSummary;
      return $this;
    }

    /**
     * @return EMDTravelerInfo
     */
    public function getEMDTravelerInfo()
    {
      return $this->EMDTravelerInfo;
    }

    /**
     * @param EMDTravelerInfo $EMDTravelerInfo
     * @return \FilippoToso\Travelport\Air\EMDSummaryInfo
     */
    public function setEMDTravelerInfo($EMDTravelerInfo)
    {
      $this->EMDTravelerInfo = $EMDTravelerInfo;
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
     * @return \FilippoToso\Travelport\Air\EMDSummaryInfo
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Air\EMDSummaryInfo
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\Air\EMDSummaryInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Air\EMDSummaryInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Air\EMDSummaryInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
