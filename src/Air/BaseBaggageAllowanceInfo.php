<?php

namespace FilippoToso\Travelport\Air;

class BaseBaggageAllowanceInfo
{

    /**
     * @var URLInfo $URLInfo
     */
    public $URLInfo = null;

    /**
     * @var TextInfo $TextInfo
     */
    public $TextInfo = null;

    /**
     * @var typeIATACode $Origin
     */
    public $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    public $Destination = null;

    /**
     * @var typeCarrier $Carrier
     */
    public $Carrier = null;

    /**
     * @param URLInfo $URLInfo
     * @param TextInfo $TextInfo
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param typeCarrier $Carrier
     */
    public function __construct($URLInfo = null, $TextInfo = null, $Origin = null, $Destination = null, $Carrier = null)
    {
      $this->URLInfo = $URLInfo;
      $this->TextInfo = $TextInfo;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->Carrier = $Carrier;
    }

    /**
     * @return URLInfo
     */
    public function getURLInfo()
    {
      return $this->URLInfo;
    }

    /**
     * @param URLInfo $URLInfo
     * @return \FilippoToso\Travelport\Air\BaseBaggageAllowanceInfo
     */
    public function setURLInfo($URLInfo)
    {
      $this->URLInfo = $URLInfo;
      return $this;
    }

    /**
     * @return TextInfo
     */
    public function getTextInfo()
    {
      return $this->TextInfo;
    }

    /**
     * @param TextInfo $TextInfo
     * @return \FilippoToso\Travelport\Air\BaseBaggageAllowanceInfo
     */
    public function setTextInfo($TextInfo)
    {
      $this->TextInfo = $TextInfo;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Air\BaseBaggageAllowanceInfo
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Air\BaseBaggageAllowanceInfo
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Air\BaseBaggageAllowanceInfo
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

}
