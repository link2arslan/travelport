<?php

namespace FilippoToso\Travelport\Rail;

class VoidDocumentInfo
{

    /**
     * @var StringLength1to13 $DocumentNumber
     */
    public $DocumentNumber = null;

    /**
     * @var anonymous453 $DocumentType
     */
    public $DocumentType = null;

    /**
     * @param StringLength1to13 $DocumentNumber
     * @param anonymous453 $DocumentType
     */
    public function __construct($DocumentNumber = null, $DocumentType = null)
    {
      $this->DocumentNumber = $DocumentNumber;
      $this->DocumentType = $DocumentType;
    }

    /**
     * @return StringLength1to13
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param StringLength1to13 $DocumentNumber
     * @return \FilippoToso\Travelport\Rail\VoidDocumentInfo
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return anonymous453
     */
    public function getDocumentType()
    {
      return $this->DocumentType;
    }

    /**
     * @param anonymous453 $DocumentType
     * @return \FilippoToso\Travelport\Rail\VoidDocumentInfo
     */
    public function setDocumentType($DocumentType)
    {
      $this->DocumentType = $DocumentType;
      return $this;
    }

}
