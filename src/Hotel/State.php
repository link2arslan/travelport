<?php

namespace FilippoToso\Travelport\Hotel;

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
     * @return \FilippoToso\Travelport\Hotel\State
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
