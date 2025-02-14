<?php

namespace FilippoToso\Travelport\UProfile;

class MCOText extends typeFreeFormText
{

    /**
     * @var typeFreeFormText $_
     */
    public $_ = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @param string $_
     * @param typeFreeFormText $_
     * @param string $Type
     */
    public function __construct($_ = null, $Type = null)
    {
      parent::__construct($_);
      $this->_ = $_;
      $this->Type = $Type;
    }

    /**
     * @return typeFreeFormText
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeFreeFormText $_
     * @return \FilippoToso\Travelport\UProfile\MCOText
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
     * @return \FilippoToso\Travelport\UProfile\MCOText
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
