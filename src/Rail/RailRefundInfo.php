<?php

namespace FilippoToso\Travelport\Rail;

class RailRefundInfo
{

    /**
     * @var typeMoney $RefundAmount
     */
    public $RefundAmount = null;

    /**
     * @var typeMoney $CancellationFee
     */
    public $CancellationFee = null;

    /**
     * @var boolean $Refund
     */
    public $Refund = null;

    /**
     * @var boolean $Retain
     */
    public $Retain = null;

    /**
     * @var typeMoney $RetainAmount
     */
    public $RetainAmount = null;

    /**
     * @var typeMoney $NetAmount
     */
    public $NetAmount = null;

    /**
     * @param typeMoney $RefundAmount
     * @param typeMoney $CancellationFee
     * @param boolean $Refund
     * @param boolean $Retain
     * @param typeMoney $RetainAmount
     * @param typeMoney $NetAmount
     */
    public function __construct($RefundAmount = null, $CancellationFee = null, $Refund = null, $Retain = null, $RetainAmount = null, $NetAmount = null)
    {
      $this->RefundAmount = $RefundAmount;
      $this->CancellationFee = $CancellationFee;
      $this->Refund = $Refund;
      $this->Retain = $Retain;
      $this->RetainAmount = $RetainAmount;
      $this->NetAmount = $NetAmount;
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
     * @return \FilippoToso\Travelport\Rail\RailRefundInfo
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getCancellationFee()
    {
      return $this->CancellationFee;
    }

    /**
     * @param typeMoney $CancellationFee
     * @return \FilippoToso\Travelport\Rail\RailRefundInfo
     */
    public function setCancellationFee($CancellationFee)
    {
      $this->CancellationFee = $CancellationFee;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefund()
    {
      return $this->Refund;
    }

    /**
     * @param boolean $Refund
     * @return \FilippoToso\Travelport\Rail\RailRefundInfo
     */
    public function setRefund($Refund)
    {
      $this->Refund = $Refund;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRetain()
    {
      return $this->Retain;
    }

    /**
     * @param boolean $Retain
     * @return \FilippoToso\Travelport\Rail\RailRefundInfo
     */
    public function setRetain($Retain)
    {
      $this->Retain = $Retain;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRetainAmount()
    {
      return $this->RetainAmount;
    }

    /**
     * @param typeMoney $RetainAmount
     * @return \FilippoToso\Travelport\Rail\RailRefundInfo
     */
    public function setRetainAmount($RetainAmount)
    {
      $this->RetainAmount = $RetainAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getNetAmount()
    {
      return $this->NetAmount;
    }

    /**
     * @param typeMoney $NetAmount
     * @return \FilippoToso\Travelport\Rail\RailRefundInfo
     */
    public function setNetAmount($NetAmount)
    {
      $this->NetAmount = $NetAmount;
      return $this;
    }

}
