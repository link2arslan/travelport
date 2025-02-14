<?php

namespace FilippoToso\Travelport\Rail;

class LanguageOption
{

    /**
     * @var typeLanguage $Language
     */
    public $Language = null;

    /**
     * @var typeCountry $Country
     */
    public $Country = null;

    /**
     * @param typeLanguage $Language
     * @param typeCountry $Country
     */
    public function __construct($Language = null, $Country = null)
    {
      $this->Language = $Language;
      $this->Country = $Country;
    }

    /**
     * @return typeLanguage
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param typeLanguage $Language
     * @return \FilippoToso\Travelport\Rail\LanguageOption
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param typeCountry $Country
     * @return \FilippoToso\Travelport\Rail\LanguageOption
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

}
