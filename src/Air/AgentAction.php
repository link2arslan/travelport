<?php

namespace FilippoToso\Travelport\Air;

class AgentAction
{

    /**
     * @var anonymous12 $ActionType
     */
    public $ActionType = null;

    /**
     * @var string $AgentCode
     */
    public $AgentCode = null;

    /**
     * @var typeBranchCode $BranchCode
     */
    public $BranchCode = null;

    /**
     * @var string $AgencyCode
     */
    public $AgencyCode = null;

    /**
     * @var string $AgentSine
     */
    public $AgentSine = null;

    /**
     * @var \DateTime $EventTime
     */
    public $EventTime = null;

    /**
     * @var anonymous518 $AgentOverride
     */
    public $AgentOverride = null;

    /**
     * @param anonymous12 $ActionType
     * @param string $AgentCode
     * @param typeBranchCode $BranchCode
     * @param string $AgencyCode
     * @param string $AgentSine
     * @param \DateTime $EventTime
     * @param anonymous518 $AgentOverride
     */
    public function __construct($ActionType = null, $AgentCode = null, $BranchCode = null, $AgencyCode = null, $AgentSine = null, \DateTime $EventTime = null, $AgentOverride = null)
    {
      $this->ActionType = $ActionType;
      $this->AgentCode = $AgentCode;
      $this->BranchCode = $BranchCode;
      $this->AgencyCode = $AgencyCode;
      $this->AgentSine = $AgentSine;
      $this->EventTime = $EventTime ? $EventTime->format(\DateTime::ATOM) : null;
      $this->AgentOverride = $AgentOverride;
    }

    /**
     * @return anonymous12
     */
    public function getActionType()
    {
      return $this->ActionType;
    }

    /**
     * @param anonymous12 $ActionType
     * @return \FilippoToso\Travelport\Air\AgentAction
     */
    public function setActionType($ActionType)
    {
      $this->ActionType = $ActionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgentCode()
    {
      return $this->AgentCode;
    }

    /**
     * @param string $AgentCode
     * @return \FilippoToso\Travelport\Air\AgentAction
     */
    public function setAgentCode($AgentCode)
    {
      $this->AgentCode = $AgentCode;
      return $this;
    }

    /**
     * @return typeBranchCode
     */
    public function getBranchCode()
    {
      return $this->BranchCode;
    }

    /**
     * @param typeBranchCode $BranchCode
     * @return \FilippoToso\Travelport\Air\AgentAction
     */
    public function setBranchCode($BranchCode)
    {
      $this->BranchCode = $BranchCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyCode()
    {
      return $this->AgencyCode;
    }

    /**
     * @param string $AgencyCode
     * @return \FilippoToso\Travelport\Air\AgentAction
     */
    public function setAgencyCode($AgencyCode)
    {
      $this->AgencyCode = $AgencyCode;
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
     * @return \FilippoToso\Travelport\Air\AgentAction
     */
    public function setAgentSine($AgentSine)
    {
      $this->AgentSine = $AgentSine;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEventTime()
    {
      if ($this->EventTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EventTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EventTime
     * @return \FilippoToso\Travelport\Air\AgentAction
     */
    public function setEventTime(\DateTime $EventTime)
    {
      $this->EventTime = $EventTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anonymous518
     */
    public function getAgentOverride()
    {
      return $this->AgentOverride;
    }

    /**
     * @param anonymous518 $AgentOverride
     * @return \FilippoToso\Travelport\Air\AgentAction
     */
    public function setAgentOverride($AgentOverride)
    {
      $this->AgentOverride = $AgentOverride;
      return $this;
    }

}
