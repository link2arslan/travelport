<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TaxDetails
{

    /**
     * @var Tax $Tax
     */
    public $Tax = null;

    /**
     * @param Tax $Tax
     */
    public function __construct($Tax = null)
    {
      $this->Tax = $Tax;
    }

    /**
     * @return Tax
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param Tax $Tax
     * @return \FilippoToso\Travelport\UniversalRecord\TaxDetails
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

}
