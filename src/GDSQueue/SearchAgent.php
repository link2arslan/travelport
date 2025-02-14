<?php

namespace FilippoToso\Travelport\GDSQueue;

class SearchAgent
{

    /**
     * @var string $BranchId
     */
    public $BranchId = null;

    /**
     * @var string $CreatedByAgent
     */
    public $CreatedByAgent = null;

    /**
     * @var string $ModifiedByAgent
     */
    public $ModifiedByAgent = null;

    /**
     * @var string $TicketedByAgent
     */
    public $TicketedByAgent = null;

    /**
     * @param string $BranchId
     * @param string $CreatedByAgent
     * @param string $ModifiedByAgent
     * @param string $TicketedByAgent
     */
    public function __construct($BranchId = null, $CreatedByAgent = null, $ModifiedByAgent = null, $TicketedByAgent = null)
    {
      $this->BranchId = $BranchId;
      $this->CreatedByAgent = $CreatedByAgent;
      $this->ModifiedByAgent = $ModifiedByAgent;
      $this->TicketedByAgent = $TicketedByAgent;
    }

    /**
     * @return string
     */
    public function getBranchId()
    {
      return $this->BranchId;
    }

    /**
     * @param string $BranchId
     * @return \FilippoToso\Travelport\GDSQueue\SearchAgent
     */
    public function setBranchId($BranchId)
    {
      $this->BranchId = $BranchId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedByAgent()
    {
      return $this->CreatedByAgent;
    }

    /**
     * @param string $CreatedByAgent
     * @return \FilippoToso\Travelport\GDSQueue\SearchAgent
     */
    public function setCreatedByAgent($CreatedByAgent)
    {
      $this->CreatedByAgent = $CreatedByAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedByAgent()
    {
      return $this->ModifiedByAgent;
    }

    /**
     * @param string $ModifiedByAgent
     * @return \FilippoToso\Travelport\GDSQueue\SearchAgent
     */
    public function setModifiedByAgent($ModifiedByAgent)
    {
      $this->ModifiedByAgent = $ModifiedByAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketedByAgent()
    {
      return $this->TicketedByAgent;
    }

    /**
     * @param string $TicketedByAgent
     * @return \FilippoToso\Travelport\GDSQueue\SearchAgent
     */
    public function setTicketedByAgent($TicketedByAgent)
    {
      $this->TicketedByAgent = $TicketedByAgent;
      return $this;
    }

}
