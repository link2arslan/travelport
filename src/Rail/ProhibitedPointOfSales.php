<?php

namespace FilippoToso\Travelport\Rail;

class ProhibitedPointOfSales
{

    /**
     * @var PointOfSale $PointOfSale
     */
    public $PointOfSale = null;

    /**
     * @param PointOfSale $PointOfSale
     */
    public function __construct($PointOfSale = null)
    {
      $this->PointOfSale = $PointOfSale;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\Rail\ProhibitedPointOfSales
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

}
