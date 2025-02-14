<?php

namespace FilippoToso\Travelport\Air;

class typeResultMessage
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var int $Code
     */
    public $Code = null;

    /**
     * @var anonymous232 $Type
     */
    public $Type = null;

    /**
     * @param string $_
     * @param int $Code
     * @param anonymous232 $Type
     */
    public function __construct($_ = null, $Code = null, $Type = null)
    {
      $this->_ = $_;
      $this->Code = $Code;
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Air\typeResultMessage
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\Air\typeResultMessage
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous232
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous232 $Type
     * @return \FilippoToso\Travelport\Air\typeResultMessage
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
