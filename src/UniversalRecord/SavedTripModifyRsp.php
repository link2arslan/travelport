<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SavedTripModifyRsp extends BaseRsp
{

    /**
     * @var SavedTrip $SavedTrip
     */
    public $SavedTrip = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param SavedTrip $SavedTrip
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $SavedTrip = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->SavedTrip = $SavedTrip;
    }

    /**
     * @return SavedTrip
     */
    public function getSavedTrip()
    {
      return $this->SavedTrip;
    }

    /**
     * @param SavedTrip $SavedTrip
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripModifyRsp
     */
    public function setSavedTrip($SavedTrip)
    {
      $this->SavedTrip = $SavedTrip;
      return $this;
    }

}
