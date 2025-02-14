<?php

namespace FilippoToso\Travelport\Hotel;

class ProviderARNKSegment
{

    /**
     * @var PreviousSegment $PreviousSegment
     */
    public $PreviousSegment = null;

    /**
     * @var NextSegment $NextSegment
     */
    public $NextSegment = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    public $ProviderReservationInfoRef = null;

    /**
     * @var anonymous82 $ProviderSegmentOrder
     */
    public $ProviderSegmentOrder = null;

    /**
     * @param typeRef $Key
     * @param typeRef $ProviderReservationInfoRef
     * @param anonymous82 $ProviderSegmentOrder
     */
    public function __construct($Key = null, $ProviderReservationInfoRef = null, $ProviderSegmentOrder = null)
    {
      $this->Key = $Key;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
    }

    /**
     * @return PreviousSegment
     */
    public function getPreviousSegment()
    {
      return $this->PreviousSegment;
    }

    /**
     * @param PreviousSegment $PreviousSegment
     * @return \FilippoToso\Travelport\Hotel\ProviderARNKSegment
     */
    public function setPreviousSegment($PreviousSegment)
    {
      $this->PreviousSegment = $PreviousSegment;
      return $this;
    }

    /**
     * @return NextSegment
     */
    public function getNextSegment()
    {
      return $this->NextSegment;
    }

    /**
     * @param NextSegment $NextSegment
     * @return \FilippoToso\Travelport\Hotel\ProviderARNKSegment
     */
    public function setNextSegment($NextSegment)
    {
      $this->NextSegment = $NextSegment;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Hotel\ProviderARNKSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Hotel\ProviderARNKSegment
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return anonymous82
     */
    public function getProviderSegmentOrder()
    {
      return $this->ProviderSegmentOrder;
    }

    /**
     * @param anonymous82 $ProviderSegmentOrder
     * @return \FilippoToso\Travelport\Hotel\ProviderARNKSegment
     */
    public function setProviderSegmentOrder($ProviderSegmentOrder)
    {
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      return $this;
    }

}
