<?php

namespace FilippoToso\Travelport\Air;

class State
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @param string $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\Air\State
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
