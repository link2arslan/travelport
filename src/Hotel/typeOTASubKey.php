<?php

namespace FilippoToso\Travelport\Hotel;

class typeOTASubKey
{

    /**
     * @var string[] $Text
     */
    public $Text = null;

    /**
     * @var typeOTACode $Name
     */
    public $Name = null;

    /**
     * @var string $Description
     */
    public $Description = null;

    /**
     * @param typeOTACode $Name
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
     * @return \FilippoToso\Travelport\Hotel\typeOTASubKey
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return typeOTACode
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeOTACode $Name
     * @return \FilippoToso\Travelport\Hotel\typeOTASubKey
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
     * @return \FilippoToso\Travelport\Hotel\typeOTASubKey
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
