<?php

namespace FilippoToso\Travelport\Rail;

class BaseCoreReq
{

    /**
     * @var BillingPointOfSaleInfo $BillingPointOfSaleInfo
     */
    public $BillingPointOfSaleInfo = null;

    /**
     * @var AgentIDOverride $AgentIDOverride
     */
    public $AgentIDOverride = null;

    /**
     * @var string $TerminalSessionInfo
     */
    public $TerminalSessionInfo = null;

    /**
     * @var string $TraceId
     */
    public $TraceId = null;

    /**
     * @var string $TokenId
     */
    public $TokenId = null;

    /**
     * @var string $AuthorizedBy
     */
    public $AuthorizedBy = null;

    /**
     * @var typeBranchCode $TargetBranch
     */
    public $TargetBranch = null;

    /**
     * @var typeLoggingLevel $OverrideLogging
     */
    public $OverrideLogging = null;

    /**
     * @var language $LanguageCode
     */
    public $LanguageCode = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null)
    {
      $this->BillingPointOfSaleInfo = $BillingPointOfSaleInfo;
      $this->AgentIDOverride = $AgentIDOverride;
      $this->TerminalSessionInfo = $TerminalSessionInfo;
      $this->TraceId = $TraceId;
      $this->TokenId = $TokenId;
      $this->AuthorizedBy = $AuthorizedBy;
      $this->TargetBranch = $TargetBranch;
      $this->OverrideLogging = $OverrideLogging;
      $this->LanguageCode = $LanguageCode;
    }

    /**
     * @return BillingPointOfSaleInfo
     */
    public function getBillingPointOfSaleInfo()
    {
      return $this->BillingPointOfSaleInfo;
    }

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setBillingPointOfSaleInfo($BillingPointOfSaleInfo)
    {
      $this->BillingPointOfSaleInfo = $BillingPointOfSaleInfo;
      return $this;
    }

    /**
     * @return AgentIDOverride
     */
    public function getAgentIDOverride()
    {
      return $this->AgentIDOverride;
    }

    /**
     * @param AgentIDOverride $AgentIDOverride
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setAgentIDOverride($AgentIDOverride)
    {
      $this->AgentIDOverride = $AgentIDOverride;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalSessionInfo()
    {
      return $this->TerminalSessionInfo;
    }

    /**
     * @param string $TerminalSessionInfo
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setTerminalSessionInfo($TerminalSessionInfo)
    {
      $this->TerminalSessionInfo = $TerminalSessionInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTraceId()
    {
      return $this->TraceId;
    }

    /**
     * @param string $TraceId
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setTraceId($TraceId)
    {
      $this->TraceId = $TraceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTokenId()
    {
      return $this->TokenId;
    }

    /**
     * @param string $TokenId
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setTokenId($TokenId)
    {
      $this->TokenId = $TokenId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizedBy()
    {
      return $this->AuthorizedBy;
    }

    /**
     * @param string $AuthorizedBy
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setAuthorizedBy($AuthorizedBy)
    {
      $this->AuthorizedBy = $AuthorizedBy;
      return $this;
    }

    /**
     * @return typeBranchCode
     */
    public function getTargetBranch()
    {
      return $this->TargetBranch;
    }

    /**
     * @param typeBranchCode $TargetBranch
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setTargetBranch($TargetBranch)
    {
      $this->TargetBranch = $TargetBranch;
      return $this;
    }

    /**
     * @return typeLoggingLevel
     */
    public function getOverrideLogging()
    {
      return $this->OverrideLogging;
    }

    /**
     * @param typeLoggingLevel $OverrideLogging
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setOverrideLogging($OverrideLogging)
    {
      $this->OverrideLogging = $OverrideLogging;
      return $this;
    }

    /**
     * @return language
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param language $LanguageCode
     * @return \FilippoToso\Travelport\Rail\BaseCoreReq
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
