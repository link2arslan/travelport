<?php

namespace FilippoToso\Travelport\Air;

class typeDefaultBrandDetail
{

    /**
     * @var typeTextElement $Text
     */
    public $Text = null;

    /**
     * @var ImageLocation $ImageLocation
     */
    public $ImageLocation = null;

    /**
     * @var typeApplicableSegment $ApplicableSegment
     */
    public $ApplicableSegment = null;

    /**
     * @var typeBrandId $BrandID
     */
    public $BrandID = null;

    /**
     * @param typeTextElement $Text
     * @param ImageLocation $ImageLocation
     * @param typeApplicableSegment $ApplicableSegment
     * @param typeBrandId $BrandID
     */
    public function __construct($Text = null, $ImageLocation = null, $ApplicableSegment = null, $BrandID = null)
    {
      $this->Text = $Text;
      $this->ImageLocation = $ImageLocation;
      $this->ApplicableSegment = $ApplicableSegment;
      $this->BrandID = $BrandID;
    }

    /**
     * @return typeTextElement
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param typeTextElement $Text
     * @return \FilippoToso\Travelport\Air\typeDefaultBrandDetail
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return ImageLocation
     */
    public function getImageLocation()
    {
      return $this->ImageLocation;
    }

    /**
     * @param ImageLocation $ImageLocation
     * @return \FilippoToso\Travelport\Air\typeDefaultBrandDetail
     */
    public function setImageLocation($ImageLocation)
    {
      $this->ImageLocation = $ImageLocation;
      return $this;
    }

    /**
     * @return typeApplicableSegment
     */
    public function getApplicableSegment()
    {
      return $this->ApplicableSegment;
    }

    /**
     * @param typeApplicableSegment $ApplicableSegment
     * @return \FilippoToso\Travelport\Air\typeDefaultBrandDetail
     */
    public function setApplicableSegment($ApplicableSegment)
    {
      $this->ApplicableSegment = $ApplicableSegment;
      return $this;
    }

    /**
     * @return typeBrandId
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param typeBrandId $BrandID
     * @return \FilippoToso\Travelport\Air\typeDefaultBrandDetail
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

}
