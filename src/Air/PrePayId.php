<?php

namespace FilippoToso\Travelport\Air;

class PrePayId
{

    /**
     * @var CompanyName $CompanyName
     */
    public $CompanyName = null;

    /**
     * @var typeCardNumber $Id
     */
    public $Id = null;

    /**
     * @var string $Type
     */
    public $Type = null;

    /**
     * @param CompanyName $CompanyName
     * @param typeCardNumber $Id
     * @param string $Type
     */
    public function __construct($CompanyName = null, $Id = null, $Type = null)
    {
      $this->CompanyName = $CompanyName;
      $this->Id = $Id;
      $this->Type = $Type;
    }

    /**
     * @return CompanyName
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param CompanyName $CompanyName
     * @return \FilippoToso\Travelport\Air\PrePayId
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return typeCardNumber
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param typeCardNumber $Id
     * @return \FilippoToso\Travelport\Air\PrePayId
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \FilippoToso\Travelport\Air\PrePayId
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
