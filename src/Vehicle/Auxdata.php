<?php

namespace FilippoToso\Travelport\Vehicle;

class Auxdata
{

    /**
     * @var Entry[] $Entry
     */
    public $Entry = null;

    /**
     * @param Entry[] $Entry
     */
    public function __construct(array $Entry = null)
    {
      $this->Entry = $Entry;
    }

    /**
     * @return Entry[]
     */
    public function getEntry()
    {
      return $this->Entry;
    }

    /**
     * @param Entry[] $Entry
     * @return \FilippoToso\Travelport\Vehicle\Auxdata
     */
    public function setEntry(array $Entry)
    {
      $this->Entry = $Entry;
      return $this;
    }

}
