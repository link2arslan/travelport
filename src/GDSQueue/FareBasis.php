<?php

namespace FilippoToso\Travelport\GDSQueue;

class FareBasis
{

    /**
     * @var string $Code
     */
    public $Code = null;

    /**
     * @var typeRef $SegmentRef
     */
    public $SegmentRef = null;

    /**
     * @param string $Code
     * @param typeRef $SegmentRef
     */
    public function __construct($Code = null, $SegmentRef = null)
    {
      $this->Code = $Code;
      $this->SegmentRef = $SegmentRef;
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
     * @return \FilippoToso\Travelport\GDSQueue\FareBasis
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\FareBasis
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

}
