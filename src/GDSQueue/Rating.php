<?php

namespace FilippoToso\Travelport\GDSQueue;

class Rating
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var int $Number
     */
    public $Number = null;

    /**
     * @param string $_
     * @param int $Number
     */
    public function __construct($_ = null, $Number = null)
    {
      $this->_ = $_;
      $this->Number = $Number;
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
     * @return \FilippoToso\Travelport\GDSQueue\Rating
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \FilippoToso\Travelport\GDSQueue\Rating
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
