<?php

namespace FilippoToso\Travelport\Util;

class typeFlexibleTimeSpec extends typeTimeSpec
{

    /**
     * @var SearchExtraDays $SearchExtraDays
     */
    public $SearchExtraDays = null;

    /**
     * @param string $PreferredTime
     */
    public function __construct($PreferredTime = null)
    {
      parent::__construct($PreferredTime);
    }

    /**
     * @return SearchExtraDays
     */
    public function getSearchExtraDays()
    {
      return $this->SearchExtraDays;
    }

    /**
     * @param SearchExtraDays $SearchExtraDays
     * @return \FilippoToso\Travelport\Util\typeFlexibleTimeSpec
     */
    public function setSearchExtraDays($SearchExtraDays)
    {
      $this->SearchExtraDays = $SearchExtraDays;
      return $this;
    }

}
