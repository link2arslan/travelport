<?php

namespace FilippoToso\Travelport\UniversalRecord;

class APISRequirements
{

    /**
     * @var Document $Document
     */
    public $Document = null;

    /**
     * @var UNKNOWN $Key
     */
    public $Key = null;

    /**
     * @var string $Level
     */
    public $Level = null;

    /**
     * @var boolean $GenderRequired
     */
    public $GenderRequired = null;

    /**
     * @var boolean $DateOfBirthRequired
     */
    public $DateOfBirthRequired = null;

    /**
     * @var string $RequiredDocuments
     */
    public $RequiredDocuments = null;

    /**
     * @var boolean $NationalityRequired
     */
    public $NationalityRequired = null;

    /**
     * @param Document $Document
     * @param UNKNOWN $Key
     * @param string $Level
     * @param boolean $GenderRequired
     * @param boolean $DateOfBirthRequired
     * @param string $RequiredDocuments
     * @param boolean $NationalityRequired
     */
    public function __construct($Document = null, $Key = null, $Level = null, $GenderRequired = null, $DateOfBirthRequired = null, $RequiredDocuments = null, $NationalityRequired = null)
    {
      $this->Document = $Document;
      $this->Key = $Key;
      $this->Level = $Level;
      $this->GenderRequired = $GenderRequired;
      $this->DateOfBirthRequired = $DateOfBirthRequired;
      $this->RequiredDocuments = $RequiredDocuments;
      $this->NationalityRequired = $NationalityRequired;
    }

    /**
     * @return Document
     */
    public function getDocument()
    {
      return $this->Document;
    }

    /**
     * @param Document $Document
     * @return \FilippoToso\Travelport\UniversalRecord\APISRequirements
     */
    public function setDocument($Document)
    {
      $this->Document = $Document;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param UNKNOWN $Key
     * @return \FilippoToso\Travelport\UniversalRecord\APISRequirements
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param string $Level
     * @return \FilippoToso\Travelport\UniversalRecord\APISRequirements
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGenderRequired()
    {
      return $this->GenderRequired;
    }

    /**
     * @param boolean $GenderRequired
     * @return \FilippoToso\Travelport\UniversalRecord\APISRequirements
     */
    public function setGenderRequired($GenderRequired)
    {
      $this->GenderRequired = $GenderRequired;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDateOfBirthRequired()
    {
      return $this->DateOfBirthRequired;
    }

    /**
     * @param boolean $DateOfBirthRequired
     * @return \FilippoToso\Travelport\UniversalRecord\APISRequirements
     */
    public function setDateOfBirthRequired($DateOfBirthRequired)
    {
      $this->DateOfBirthRequired = $DateOfBirthRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequiredDocuments()
    {
      return $this->RequiredDocuments;
    }

    /**
     * @param string $RequiredDocuments
     * @return \FilippoToso\Travelport\UniversalRecord\APISRequirements
     */
    public function setRequiredDocuments($RequiredDocuments)
    {
      $this->RequiredDocuments = $RequiredDocuments;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNationalityRequired()
    {
      return $this->NationalityRequired;
    }

    /**
     * @param boolean $NationalityRequired
     * @return \FilippoToso\Travelport\UniversalRecord\APISRequirements
     */
    public function setNationalityRequired($NationalityRequired)
    {
      $this->NationalityRequired = $NationalityRequired;
      return $this;
    }

}
