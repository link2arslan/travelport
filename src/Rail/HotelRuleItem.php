<?php

namespace FilippoToso\Travelport\Rail;

class HotelRuleItem
{

    /**
     * @var string[] $Text
     */
    public $Text = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @param string[] $Text
     * @param string $Name
     */
    public function __construct(array $Text = null, $Name = null)
    {
      $this->Text = $Text;
      $this->Name = $Name;
    }

    /**
     * @return string[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string[] $Text
     * @return \FilippoToso\Travelport\Rail\HotelRuleItem
     */
    public function setText(array $Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\Rail\HotelRuleItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
