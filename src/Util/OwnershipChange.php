<?php

namespace FilippoToso\Travelport\Util;

class OwnershipChange
{

    /**
     * @var typeRef $OwningPCC
     */
    public $OwningPCC = null;

    /**
     * @param typeRef $OwningPCC
     */
    public function __construct($OwningPCC = null)
    {
      $this->OwningPCC = $OwningPCC;
    }

    /**
     * @return typeRef
     */
    public function getOwningPCC()
    {
      return $this->OwningPCC;
    }

    /**
     * @param typeRef $OwningPCC
     * @return \FilippoToso\Travelport\Util\OwnershipChange
     */
    public function setOwningPCC($OwningPCC)
    {
      $this->OwningPCC = $OwningPCC;
      return $this;
    }

}
