<?php

namespace FilippoToso\Travelport\Util;

class PassiveInfo
{

    /**
     * @var string[] $TicketNumber
     */
    public $TicketNumber = null;

    /**
     * @var string[] $ConfirmationNumber
     */
    public $ConfirmationNumber = null;

    /**
     * @var Commission $Commission
     */
    public $Commission = null;

    /**
     * @var string $ProviderCode
     */
    public $ProviderCode = null;

    /**
     * @var string $ProviderLocatorCode
     */
    public $ProviderLocatorCode = null;

    /**
     * @var string $SupplierCode
     */
    public $SupplierCode = null;

    /**
     * @var string $SupplierLocatorCode
     */
    public $SupplierLocatorCode = null;

    /**
     * @param Commission $Commission
     * @param string $ProviderCode
     * @param string $ProviderLocatorCode
     * @param string $SupplierCode
     * @param string $SupplierLocatorCode
     */
    public function __construct($Commission = null, $ProviderCode = null, $ProviderLocatorCode = null, $SupplierCode = null, $SupplierLocatorCode = null)
    {
      $this->Commission = $Commission;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      $this->SupplierCode = $SupplierCode;
      $this->SupplierLocatorCode = $SupplierLocatorCode;
    }

    /**
     * @return string[]
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string[] $TicketNumber
     * @return \FilippoToso\Travelport\Util\PassiveInfo
     */
    public function setTicketNumber(array $TicketNumber = null)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getConfirmationNumber()
    {
      return $this->ConfirmationNumber;
    }

    /**
     * @param string[] $ConfirmationNumber
     * @return \FilippoToso\Travelport\Util\PassiveInfo
     */
    public function setConfirmationNumber(array $ConfirmationNumber = null)
    {
      $this->ConfirmationNumber = $ConfirmationNumber;
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
     * @return \FilippoToso\Travelport\Util\PassiveInfo
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param string $ProviderCode
     * @return \FilippoToso\Travelport\Util\PassiveInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param string $ProviderLocatorCode
     * @return \FilippoToso\Travelport\Util\PassiveInfo
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \FilippoToso\Travelport\Util\PassiveInfo
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierLocatorCode()
    {
      return $this->SupplierLocatorCode;
    }

    /**
     * @param string $SupplierLocatorCode
     * @return \FilippoToso\Travelport\Util\PassiveInfo
     */
    public function setSupplierLocatorCode($SupplierLocatorCode)
    {
      $this->SupplierLocatorCode = $SupplierLocatorCode;
      return $this;
    }

}
