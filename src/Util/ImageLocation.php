<?php

namespace FilippoToso\Travelport\Util;

class ImageLocation
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @var int $ImageWidth
     */
    public $ImageWidth = null;

    /**
     * @var int $ImageHeight
     */
    public $ImageHeight = null;

    /**
     * @param string $_
     * @param string $Type
     * @param int $ImageWidth
     * @param int $ImageHeight
     */
    public function __construct($_ = null, $Type = null, $ImageWidth = null, $ImageHeight = null)
    {
      $this->_ = $_;
      $this->Type = $Type;
      $this->ImageWidth = $ImageWidth;
      $this->ImageHeight = $ImageHeight;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Util\ImageLocation
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\Util\ImageLocation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageWidth()
    {
      return $this->ImageWidth;
    }

    /**
     * @param int $ImageWidth
     * @return \FilippoToso\Travelport\Util\ImageLocation
     */
    public function setImageWidth($ImageWidth)
    {
      $this->ImageWidth = $ImageWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageHeight()
    {
      return $this->ImageHeight;
    }

    /**
     * @param int $ImageHeight
     * @return \FilippoToso\Travelport\Util\ImageLocation
     */
    public function setImageHeight($ImageHeight)
    {
      $this->ImageHeight = $ImageHeight;
      return $this;
    }

}
