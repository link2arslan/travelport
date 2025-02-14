<?php

namespace FilippoToso\Travelport\Air;

class typeRateDescription
{

    /**
     * @var Text[] $Text
     */
    public $Text = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @param Text[] $Text
     * @param string $Name
     */
    public function __construct(array $Text = null, $Name = null)
    {
      $this->Text = $Text;
      $this->Name = $Name;
    }

    /**
     * @return Text[]
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param Text[] $Text
     * @return \FilippoToso\Travelport\Air\typeRateDescription
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
     * @return \FilippoToso\Travelport\Air\typeRateDescription
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
