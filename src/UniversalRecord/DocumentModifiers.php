<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DocumentModifiers
{

    /**
     * @var boolean $GenerateItineraryInvoice
     */
    public $GenerateItineraryInvoice = null;

    /**
     * @var boolean $GenerateAccountingInterface
     */
    public $GenerateAccountingInterface = null;

    /**
     * @param boolean $GenerateItineraryInvoice
     * @param boolean $GenerateAccountingInterface
     */
    public function __construct($GenerateItineraryInvoice = null, $GenerateAccountingInterface = null)
    {
      $this->GenerateItineraryInvoice = $GenerateItineraryInvoice;
      $this->GenerateAccountingInterface = $GenerateAccountingInterface;
    }

    /**
     * @return boolean
     */
    public function getGenerateItineraryInvoice()
    {
      return $this->GenerateItineraryInvoice;
    }

    /**
     * @param boolean $GenerateItineraryInvoice
     * @return \FilippoToso\Travelport\UniversalRecord\DocumentModifiers
     */
    public function setGenerateItineraryInvoice($GenerateItineraryInvoice)
    {
      $this->GenerateItineraryInvoice = $GenerateItineraryInvoice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenerateAccountingInterface()
    {
      return $this->GenerateAccountingInterface;
    }

    /**
     * @param boolean $GenerateAccountingInterface
     * @return \FilippoToso\Travelport\UniversalRecord\DocumentModifiers
     */
    public function setGenerateAccountingInterface($GenerateAccountingInterface)
    {
      $this->GenerateAccountingInterface = $GenerateAccountingInterface;
      return $this;
    }

}
