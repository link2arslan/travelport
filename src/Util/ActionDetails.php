<?php

namespace FilippoToso\Travelport\Util;

class ActionDetails
{

    /**
     * @var typePCC $PseudoCityCode
     */
    public $PseudoCityCode = null;

    /**
     * @var string $AgentSine
     */
    public $AgentSine = null;

    /**
     * @var date $EventDate
     */
    public $EventDate = null;

    /**
     * @var time $EventTime
     */
    public $EventTime = null;

    /**
     * @var string $Text
     */
    public $Text = null;

    /**
     * @param typePCC $PseudoCityCode
     * @param string $AgentSine
     * @param date $EventDate
     * @param time $EventTime
     * @param string $Text
     */
    public function __construct($PseudoCityCode = null, $AgentSine = null, $EventDate = null, $EventTime = null, $Text = null)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      $this->AgentSine = $AgentSine;
      $this->EventDate = $EventDate;
      $this->EventTime = $EventTime;
      $this->Text = $Text;
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
     * @return \FilippoToso\Travelport\Util\ActionDetails
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgentSine()
    {
      return $this->AgentSine;
    }

    /**
     * @param string $AgentSine
     * @return \FilippoToso\Travelport\Util\ActionDetails
     */
    public function setAgentSine($AgentSine)
    {
      $this->AgentSine = $AgentSine;
      return $this;
    }

    /**
     * @return date
     */
    public function getEventDate()
    {
      return $this->EventDate;
    }

    /**
     * @param date $EventDate
     * @return \FilippoToso\Travelport\Util\ActionDetails
     */
    public function setEventDate($EventDate)
    {
      $this->EventDate = $EventDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getEventTime()
    {
      return $this->EventTime;
    }

    /**
     * @param time $EventTime
     * @return \FilippoToso\Travelport\Util\ActionDetails
     */
    public function setEventTime($EventTime)
    {
      $this->EventTime = $EventTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \FilippoToso\Travelport\Util\ActionDetails
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
