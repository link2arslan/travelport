<?php

namespace FilippoToso\Travelport\Air;

class FareStatusFailureInfo
{

    /**
     * @var string $Code
     */
    public $Code = null;

    /**
     * @var string $Reason
     */
    public $Reason = null;

    /**
     * @param string $Code
     * @param string $Reason
     */
    public function __construct($Code = null, $Reason = null)
    {
      $this->Code = $Code;
      $this->Reason = $Reason;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\Air\FareStatusFailureInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \FilippoToso\Travelport\Air\FareStatusFailureInfo
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
