<?php

namespace FilippoToso\Travelport\GDSQueue;

class AgentVoucher
{

    /**
     * @var string $Number
     */
    public $Number = null;

    /**
     * @param string $Number
     */
    public function __construct($Number = null)
    {
      $this->Number = $Number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\GDSQueue\AgentVoucher
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
