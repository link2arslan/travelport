<?php

namespace FilippoToso\Travelport\GDSQueue;

class Check
{

    /**
     * @var anonymous19 $MICRNumber
     */
    public $MICRNumber = null;

    /**
     * @var string $RoutingNumber
     */
    public $RoutingNumber = null;

    /**
     * @var string $AccountNumber
     */
    public $AccountNumber = null;

    /**
     * @var string $CheckNumber
     */
    public $CheckNumber = null;

    /**
     * @param anonymous19 $MICRNumber
     * @param string $RoutingNumber
     * @param string $AccountNumber
     * @param string $CheckNumber
     */
    public function __construct($MICRNumber = null, $RoutingNumber = null, $AccountNumber = null, $CheckNumber = null)
    {
      $this->MICRNumber = $MICRNumber;
      $this->RoutingNumber = $RoutingNumber;
      $this->AccountNumber = $AccountNumber;
      $this->CheckNumber = $CheckNumber;
    }

    /**
     * @return anonymous19
     */
    public function getMICRNumber()
    {
      return $this->MICRNumber;
    }

    /**
     * @param anonymous19 $MICRNumber
     * @return \FilippoToso\Travelport\GDSQueue\Check
     */
    public function setMICRNumber($MICRNumber)
    {
      $this->MICRNumber = $MICRNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
      return $this->RoutingNumber;
    }

    /**
     * @param string $RoutingNumber
     * @return \FilippoToso\Travelport\GDSQueue\Check
     */
    public function setRoutingNumber($RoutingNumber)
    {
      $this->RoutingNumber = $RoutingNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \FilippoToso\Travelport\GDSQueue\Check
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckNumber()
    {
      return $this->CheckNumber;
    }

    /**
     * @param string $CheckNumber
     * @return \FilippoToso\Travelport\GDSQueue\Check
     */
    public function setCheckNumber($CheckNumber)
    {
      $this->CheckNumber = $CheckNumber;
      return $this;
    }

}
