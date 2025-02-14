<?php

namespace FilippoToso\Travelport\Util;

class typeTimeRange
{

    /**
     * @var string $EarliestTime
     */
    public $EarliestTime = null;

    /**
     * @var string $LatestTime
     */
    public $LatestTime = null;

    /**
     * @param string $EarliestTime
     * @param string $LatestTime
     */
    public function __construct($EarliestTime = null, $LatestTime = null)
    {
      $this->EarliestTime = $EarliestTime;
      $this->LatestTime = $LatestTime;
    }

    /**
     * @return string
     */
    public function getEarliestTime()
    {
      return $this->EarliestTime;
    }

    /**
     * @param string $EarliestTime
     * @return \FilippoToso\Travelport\Util\typeTimeRange
     */
    public function setEarliestTime($EarliestTime)
    {
      $this->EarliestTime = $EarliestTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatestTime()
    {
      return $this->LatestTime;
    }

    /**
     * @param string $LatestTime
     * @return \FilippoToso\Travelport\Util\typeTimeRange
     */
    public function setLatestTime($LatestTime)
    {
      $this->LatestTime = $LatestTime;
      return $this;
    }

}
