<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeProfileRef
{

    /**
     * @var string $ProfileEntityID
     */
    public $ProfileEntityID = null;

    /**
     * @var typeProfileLevel $ProfileLevel
     */
    public $ProfileLevel = null;

    /**
     * @param string $ProfileEntityID
     * @param typeProfileLevel $ProfileLevel
     */
    public function __construct($ProfileEntityID = null, $ProfileLevel = null)
    {
      $this->ProfileEntityID = $ProfileEntityID;
      $this->ProfileLevel = $ProfileLevel;
    }

    /**
     * @return string
     */
    public function getProfileEntityID()
    {
      return $this->ProfileEntityID;
    }

    /**
     * @param string $ProfileEntityID
     * @return \FilippoToso\Travelport\GDSQueue\typeProfileRef
     */
    public function setProfileEntityID($ProfileEntityID)
    {
      $this->ProfileEntityID = $ProfileEntityID;
      return $this;
    }

    /**
     * @return typeProfileLevel
     */
    public function getProfileLevel()
    {
      return $this->ProfileLevel;
    }

    /**
     * @param typeProfileLevel $ProfileLevel
     * @return \FilippoToso\Travelport\GDSQueue\typeProfileRef
     */
    public function setProfileLevel($ProfileLevel)
    {
      $this->ProfileLevel = $ProfileLevel;
      return $this;
    }

}
