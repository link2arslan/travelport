<?php

namespace FilippoToso\Travelport\Air;

class KeyMapping
{

    /**
     * @var string $ElementName
     */
    public $ElementName = null;

    /**
     * @var string $OriginalKey
     */
    public $OriginalKey = null;

    /**
     * @var string $NewKey
     */
    public $NewKey = null;

    /**
     * @param string $ElementName
     * @param string $OriginalKey
     * @param string $NewKey
     */
    public function __construct($ElementName = null, $OriginalKey = null, $NewKey = null)
    {
      $this->ElementName = $ElementName;
      $this->OriginalKey = $OriginalKey;
      $this->NewKey = $NewKey;
    }

    /**
     * @return string
     */
    public function getElementName()
    {
      return $this->ElementName;
    }

    /**
     * @param string $ElementName
     * @return \FilippoToso\Travelport\Air\KeyMapping
     */
    public function setElementName($ElementName)
    {
      $this->ElementName = $ElementName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalKey()
    {
      return $this->OriginalKey;
    }

    /**
     * @param string $OriginalKey
     * @return \FilippoToso\Travelport\Air\KeyMapping
     */
    public function setOriginalKey($OriginalKey)
    {
      $this->OriginalKey = $OriginalKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewKey()
    {
      return $this->NewKey;
    }

    /**
     * @param string $NewKey
     * @return \FilippoToso\Travelport\Air\KeyMapping
     */
    public function setNewKey($NewKey)
    {
      $this->NewKey = $NewKey;
      return $this;
    }

}
