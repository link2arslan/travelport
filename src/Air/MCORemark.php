<?php

namespace FilippoToso\Travelport\Air;

class MCORemark
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var boolean $AdditionalRmk
     */
    public $AdditionalRmk = null;

    /**
     * @param string $_
     * @param boolean $AdditionalRmk
     */
    public function __construct($_ = null, $AdditionalRmk = null)
    {
      $this->_ = $_;
      $this->AdditionalRmk = $AdditionalRmk;
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
     * @return \FilippoToso\Travelport\Air\MCORemark
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdditionalRmk()
    {
      return $this->AdditionalRmk;
    }

    /**
     * @param boolean $AdditionalRmk
     * @return \FilippoToso\Travelport\Air\MCORemark
     */
    public function setAdditionalRmk($AdditionalRmk)
    {
      $this->AdditionalRmk = $AdditionalRmk;
      return $this;
    }

}
