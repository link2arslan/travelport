<?php

namespace FilippoToso\Travelport\GDSQueue;

class SearchAccount
{

    /**
     * @var string $ClientID
     */
    public $ClientID = null;

    /**
     * @var typeBranchId $BranchID
     */
    public $BranchID = null;

    /**
     * @param string $ClientID
     * @param typeBranchId $BranchID
     */
    public function __construct($ClientID = null, $BranchID = null)
    {
      $this->ClientID = $ClientID;
      $this->BranchID = $BranchID;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \FilippoToso\Travelport\GDSQueue\SearchAccount
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return typeBranchId
     */
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param typeBranchId $BranchID
     * @return \FilippoToso\Travelport\GDSQueue\SearchAccount
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
      return $this;
    }

}
