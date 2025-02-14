<?php

namespace FilippoToso\Travelport\GDSQueue;

class QueuePlace
{

    /**
     * @var typePCC $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @var QueueSelector $QueueSelector
     */
    public $QueueSelector = null;

    /**
     * @param QueueSelector $QueueSelector
     */
    public function __construct($QueueSelector = null)
    {
      $this->QueueSelector = $QueueSelector;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\GDSQueue\QueuePlace
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return QueueSelector
     */
    public function getQueueSelector()
    {
      return $this->QueueSelector;
    }

    /**
     * @param QueueSelector $QueueSelector
     * @return \FilippoToso\Travelport\GDSQueue\QueuePlace
     */
    public function setQueueSelector($QueueSelector)
    {
      $this->QueueSelector = $QueueSelector;
      return $this;
    }

}
