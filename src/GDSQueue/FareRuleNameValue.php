<?php

namespace FilippoToso\Travelport\GDSQueue;

class FareRuleNameValue
{

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @var string $Value
     */
    public $Value = null;

    /**
     * @param string $Name
     * @param string $Value
     */
    public function __construct($Name = null, $Value = null)
    {
      $this->Name = $Name;
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\GDSQueue\FareRuleNameValue
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\GDSQueue\FareRuleNameValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
