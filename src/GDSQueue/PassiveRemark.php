<?php

namespace FilippoToso\Travelport\GDSQueue;

class PassiveRemark
{

    /**
     * @var string $Text
     */
    public $Text = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var typeRef $PassiveSegmentRef
     */
    public $PassiveSegmentRef = null;

    /**
     * @param string $Text
     * @param string $Type
     * @param typeRef $PassiveSegmentRef
     */
    public function __construct($Text = null, $Type = null, $PassiveSegmentRef = null)
    {
      $this->Text = $Text;
      $this->Type = $Type;
      $this->PassiveSegmentRef = $PassiveSegmentRef;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \FilippoToso\Travelport\GDSQueue\PassiveRemark
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\GDSQueue\PassiveRemark
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassiveSegmentRef()
    {
      return $this->PassiveSegmentRef;
    }

    /**
     * @param typeRef $PassiveSegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\PassiveRemark
     */
    public function setPassiveSegmentRef($PassiveSegmentRef)
    {
      $this->PassiveSegmentRef = $PassiveSegmentRef;
      return $this;
    }

}
