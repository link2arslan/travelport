<?php

namespace FilippoToso\Travelport\Vehicle;

class PermittedProviders
{

    /**
     * @var Provider $Provider
     */
    public $Provider = null;

    /**
     * @param Provider $Provider
     */
    public function __construct($Provider = null)
    {
      $this->Provider = $Provider;
    }

    /**
     * @return Provider
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param Provider $Provider
     * @return \FilippoToso\Travelport\Vehicle\PermittedProviders
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

}
