<?php

namespace FilippoToso\Travelport\Air;

class typeSubKey
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
     * @var string $Description
     */
    public $Description = null;

    /**
     * @param string $Name
     * @param string $Description
     */
    public function __construct($Name = null, $Description = null)
    {
      $this->Name = $Name;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\Air\typeSubKey
     */
    public function setText(array $Text = null)
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
     * @return \FilippoToso\Travelport\Air\typeSubKey
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Air\typeSubKey
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
