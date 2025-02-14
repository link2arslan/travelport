<?php

namespace FilippoToso\Travelport\Util;

class FareRemark
{

    /**
     * @var string[] $Text
     */
    public $Text = null;

    /**
     * @var URL $URL
     */
    public $URL = null;

    /**
     * @var typeRef $Key
     */
    public $Key = null;

    /**
     * @var string $Name
     */
    public $Name = null;

    /**
     * @param URL $URL
     * @param typeRef $Key
     * @param string $Name
     */
    public function __construct($URL = null, $Key = null, $Name = null)
    {
      $this->URL = $URL;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Util\FareRemark
     */
    public function setText(array $Text = null)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return URL
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param URL $URL
     * @return \FilippoToso\Travelport\Util\FareRemark
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
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
     * @return \FilippoToso\Travelport\Util\FareRemark
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Util\FareRemark
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
