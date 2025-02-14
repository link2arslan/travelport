<?php

namespace FilippoToso\Travelport\GDSQueue;

class TravelArranger
{

    /**
     * @var string $_
     */
    public $_ = null;

    /**
     * @var string $CompanyShortName
     */
    public $CompanyShortName = null;

    /**
     * @var string $Code
     */
    public $Code = null;

    /**
     * @param string $_
     * @param string $CompanyShortName
     * @param string $Code
     */
    public function __construct($_ = null, $CompanyShortName = null, $Code = null)
    {
      $this->_ = $_;
      $this->CompanyShortName = $CompanyShortName;
      $this->Code = $Code;
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
     * @return \FilippoToso\Travelport\GDSQueue\TravelArranger
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyShortName()
    {
      return $this->CompanyShortName;
    }

    /**
     * @param string $CompanyShortName
     * @return \FilippoToso\Travelport\GDSQueue\TravelArranger
     */
    public function setCompanyShortName($CompanyShortName)
    {
      $this->CompanyShortName = $CompanyShortName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\GDSQueue\TravelArranger
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
